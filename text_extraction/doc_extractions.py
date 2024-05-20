# Author: axs004@NB250
# File : doc_extractions.py
# Time : 07-11-23 10:47 AM
# Original Loc : PPATK-NB-250
# Desc :
# 1. membaca semua data yang ada di directory data_ltkm
# 2. konversi semua file
import shutil

import pytesseract
import re
import time
from pdf2image import convert_from_path
# import pandas as pd
# windows
import sys
import aspose.words as aw
from os import listdir
from os.path import isfile, join
from pathlib import Path

from kata_attributes import jenis_dokumen_ha, jenis_dokumen_transaksi, jenis_dokumen_putusan
from kata_attributes.daftar_activities import set_list_activities
from kata_attributes.daftar_pekerjaan import set_list_daftarpekerjaan
from kata_attributes.daftar_pihak_pelapor import set_list_daftarbank, set_list_daftarbank_goaml, \
    set_list_daftarkelind_goaml
from kata_attributes.daftar_pihak_pelapor_uu import set_list_daftarpelapor

from transformers import pipeline
from transformers import AutoTokenizer, AutoModelForTokenClassification, AutoModel, AutoModelForSeq2SeqLM

import torch


# from controller.f_datainsert.datatext import bulk_insert_data_text

if 'win' in sys.platform:
    pytesseract.pytesseract.tesseract_cmd = r"C:\Program Files\Tesseract-OCR\tesseract.exe"

# pd.set_option('mode.chained_assignment', None)
config = ('-l eng --oem 1 --psm 3 --psm 13')
import os
from os import walk
from datetime import datetime
from time import mktime
from spire.doc import *
from spire.doc.common import *
from controller.f_datainsert.datatext import bulk_insert_data_text
# import StemmerFactory class
from Sastrawi.Stemmer.StemmerFactory import StemmerFactory
from Sastrawi.StopWordRemover.StopWordRemoverFactory import StopWordRemoverFactory
from nltk.tokenize import sent_tokenize, word_tokenize
from nltk.corpus import stopwords
from Sastrawi.StopWordRemover.StopWordRemoverFactory import StopWordRemoverFactory, StopWordRemover, ArrayDictionary
from nltk.tokenize import word_tokenize

# variable
# folder path
# path_dir_doc_ha = r'D:\2.CODE\PYTHON\AI\project_putusan\text_extraction\data_input\DOC Files'
path_dir_doc_ha = r'D:\2.CODE\PYTHON\BI_HACKATHON_2024\mata_kupva\text_extraction\dataset\putusan_ma'
path_dir_doc_ha = r'D:\2.CODE\PYTHON\BI_HACKATHON_2024\mata_kupva\text_extraction\dataset\putusan_ma'
# path_dir_doc_ha = r'D:\2.CODE\PYTHON\AI\project_putusan\data_ltkm\2019'
# path_dir_doc_ha = r'D:\2.CODE\PYTHON\AI\project_putusan\text_extraction\data_input\data_sample_ha'
jumlah_batch_insert_es = 3

def main():
    res = []
    j_file = 0
    dir_path = path_dir_doc_ha
    list_kt_ha = jenis_dokumen_ha.set_list_kt()
    list_kt_transaksi = jenis_dokumen_transaksi.set_list_kt()
    list_kt_putusan = jenis_dokumen_putusan.set_list_kt()
    jenis_dok = 0  # unknown
    # Mencari kata yang sesuai dengan keywords
    keyword_all = set_list_activities()
    keyword_2 = set_list_daftarpekerjaan()
    keyword_3 = set_list_daftarbank()
    # keyword_4 = set_list_daftarbank_goaml()
    # print("keyword_4 : " ,keyword_4)
    keyword_5 = set_list_daftarkelind_goaml()
    keyword_6 = set_list_daftarpelapor()
    [keyword_all.extend(l) for l in (keyword_2, keyword_3, keyword_5, keyword_6)]

    print("======================================================")
    print("==============  DOC to Text Extraction ===============")
    print("======================================================")
    print("====================================================== \n")
    print("dir_path : ", str(dir_path))
    model = AutoModelForTokenClassification.from_pretrained("cahya/xlm-roberta-large-indonesian-NER")
    tokenizer = AutoTokenizer.from_pretrained("cahya/xlm-roberta-large-indonesian-NER")
    ner_pipeline = pipeline("ner", model=model, tokenizer=tokenizer)
    # # Summarize Model
    # model_summary_name = "cahya/bert2gpt-indonesian-summarization"
    # model_summary = AutoModelForSeq2SeqLM.from_pretrained(model_summary_name)
    # tokenizer_summary = AutoTokenizer.from_pretrained(model_summary_name)

    # if torch.cuda.is_available():
    #     print("GPU is available")
    #     device = torch.device("cuda")
    # else:
    #     print("GPU not available, using CPU")
    #     device = torch.device("cpu")
    # # Move model to GPU
    # model_summary.to(device)
    # summarizer = pipeline("summarization", model=model_summary,
    #                       tokenizer=tokenizer_summary)  # device=0 for the first GPU



    for (dir_path, dir_names, file_names) in walk(dir_path):
        res.extend(file_names)
        ## create stemmer
        factory = StemmerFactory()
        stemmer = factory.create_stemmer()
        for i in range(len(file_names)):
            j_file += 1
            raw_text = ""
            fullpath_file = os.path.join(dir_path, file_names[i])
            ti_m = os.path.getmtime(fullpath_file) # Converting the time in seconds to a timestamp
            m_ti = time.ctime(ti_m)  # modified time
            if file_names[i].lower().endswith('.doc') or file_names[i].lower().endswith('.docx'):
                if is_doc_unprotected(fullpath_file):
                    raw_text = doc_processing(fullpath_file)
                else :
                    raw_text= "Document is protected by password."
            if file_names[i].lower().endswith('.pdf'):
                raw_text = pdf_to_text_processing(fullpath_file,5,278,2482,3000)
            clean_text= remove_multispace(raw_text)
            # print(clean_text)
            jenis_dok = 0  # unknown
            has_checked = False
            clean_text_sastrawi = stemmer.stem(clean_text)
            for k in range(len(list_kt_ha)):
                if list_kt_ha[k] in clean_text_sastrawi:
                    jenis_dok = 2  # Hasil Analisis
                    has_checked = True
            if not has_checked:
                for k in range(len(list_kt_transaksi)):
                    if list_kt_transaksi[k] in clean_text_sastrawi:
                        jenis_dok = 1  # Laporan Transaksi
                        has_checked = True
            if not has_checked:
                for k in range(len(list_kt_putusan)):
                    if list_kt_putusan[k] in clean_text_sastrawi:
                        jenis_dok = 3  # Putusan
            # print("jenis_dok ==> ",jenis_dok)
            text_lower = clean_text.lower()
            split_text_lower = text_lower.split()

            # list_sim = [i for i, x in enumerate(keyword_all) if x in text_lower]
            list_sim = [word for word in keyword_all if word in split_text_lower]
            text_keywords = ""
            for keyword in list_sim:
                text_keywords = text_keywords + " " + keyword
                # print(keyword_all[x])
            print(text_keywords)

            ner_results = ner_pipeline(clean_text)
            merged_results = merge_ner_results(ner_results)
            # Extracting 5W1H information
            who = []
            when = []
            where = []
            what = []
            how_much = []
            for entity in merged_results:
                if (entity['entity_group'] == 'PER') | (
                        entity['entity_group'] == 'ORG'):  # Assuming 'B-PER' is the label for persons
                    who.append(entity['word'])
                elif (entity['entity_group'] == 'LOC') | (entity['entity_group'] == 'GPE') | (
                        entity['entity_group'] == 'FAC') | (
                        entity['entity_group'] == 'REG'):  # Assuming 'B-LOC' is the label for locations
                    where.append(entity['word'])
                elif (entity['entity_group'] == 'TIM') | (
                        entity['entity_group'] == 'DAT'):  # Assuming 'B-TIME' is the label for time expressions
                    when.append(entity['word'])
                elif (entity['entity_group'] == 'EVT') | (entity['entity_group'] == 'PRC'):
                    what.append(entity['word'])
                elif (entity['entity_group'] == 'MON') | (entity['entity_group'] == 'QTY'):
                    how_much.append(entity['word'])

            str_who =  " ".join(who)
            str_when =  " ".join(when)
            str_where =  " ".join(where)
            str_what =  " ".join(what)
            str_howmuch =  " ".join(how_much)

            # # Chunk the text
            # max_tokens = 500  # Adjust as needed to be below the model's token limit
            # # Tokenize the text and get token ids
            # tokens = tokenizer_summary.encode(clean_text, add_special_tokens=False)
            # # Chunk token ids
            # token_chunks = [tokens[i:i + max_tokens] for i in range(0, len(tokens), max_tokens)]
            # # Convert token chunks back to text
            # text_chunks = [tokenizer_summary.decode(chunk, skip_special_tokens=True, clean_up_tokenization_spaces=True)
            #                for chunk in token_chunks]
            # # Summarize each chunk and combine
            # summaries = [summarizer(chunk)[0]['summary_text'] for chunk in text_chunks]
            # combined_summary = ' '.join(summaries)

            combined_summary = " "

            ## insert to Elastic search
            # clean_text_sastrawi = stemmer.stem(clean_text)
            # # print("clean_text_sastrawi : ", clean_text_sastrawi)
            # ## tokenisasi kalimat
            # t_kalimat = sent_tokenize(clean_text_sastrawi)
            # # print(t_kalimat)
            # ## tokenisasi kata
            # t_kata = word_tokenize(clean_text_sastrawi)
            # # print(t_kata)
            # stop_words = set(stopwords.words('indonesian'))
            # more_stopword = ['evaluation svaramng the goekatere aas cek te spire doeaforapyiion']  # menambahkan stopword
            # stop_words = set(stopwords.words('indonesian') + more_stopword)
            # word_tokens_no_stopwords = [w for w in t_kata if not w in stop_words]
            # # print(word_tokens_no_stopwords)
            # text_keywords = word_tokens_no_stopwords
            ket_lain = "Doc HA Extraction Project 2023"
            ##
            bulk_insert_data_text(fullpath_file,m_ti,clean_text,jenis_dok, str_who, str_when, str_where, str_what, str_howmuch,
            combined_summary, text_keywords,ket_lain)
            ##
            ## memindahkan file
            pathfilename = Path(fullpath_file)
            file_name = os.path.basename(pathfilename)
            dir_basename = os.path.basename(os.path.dirname(fullpath_file))
            dir_archived_files = pathfilename.parent.parent
            dir_extraxted = dir_basename + "_Extracted"
            archived_fullpath = (os.path.join(dir_archived_files, dir_extraxted, file_name))
            shutil.move(fullpath_file, archived_fullpath)  # moving files
            print("Moving file to : ", archived_fullpath)
            print("======================================================")

    print("Jumlah file : ", str(j_file))


def is_doc_unprotected (filepath):
    is_unpassworded = True
    try:
        info = aw.FileFormatUtil.detect_file_format(filepath)
        if info.is_encrypted:
            is_unpassworded = False
            print("The file is protected :" + str(filepath))
    except Exception as e:
        print("Exception in encryptf file",e)
        is_unpassworded = False
    return is_unpassworded

def doc_processing(path_file):
    # inputFile = r"D:\2.CODE\PYTHON\AI\NLP_OKT2023\project_putusan\data_ltkm\DOC Files\1Analisa_LTKM_Penggelapan__Ubaydillah_Sarip_PPATK.doc"
    inputFile = path_file
    print("doc_processing :", inputFile)
    # Create a Document object
    document = Document()
    # Load a Word DOCX file
    try :
        # document.LoadFromFile(inputFile)
        document.LoadFromFile(inputFile)
        # Create a ToPdfParameterList object
        parameters = ToPdfParameterList()
        # Embed all used fonts in Word into PDF
        parameters.IsEmbeddedAllFonts = True
        # Set the conformance level for PDF
        parameters.PdfConformanceLevel = PdfConformanceLevel.Pdf_A1A
        # Save the file to a PDF file
        document.SaveToFile("WordToPdf_temp.pdf", parameters)
        dir_path = os.path.dirname(os.path.realpath(__file__))
        fullpath_file = os.path.join(dir_path, "WordToPdf_temp.pdf")
        full_string = pdf_to_text_processing(fullpath_file,5,500,2482,3200)
    except Exception as e:
        full_string = ""
        print("Error load doc : ", str(e))
    document.Close()
    if os.path.exists("WordToPdf_temp.pdf"):
        os.remove("WordToPdf_temp.pdf")
    return full_string

def pdf_to_text_processing(path_file, c_left, c_top, c_right, c_bottom):
    # pdf to image (list) , multi pages
    list_img = convert_from_path(path_file, dpi=300, grayscale=True)
    # Extract Text from Image
    # Size of the image in pixels (size of original image)
    # width, height = img.size
    # print(width,"--", height)
    # Setting the points for cropped image
    left = c_left
    top = c_top
    right = c_right
    bottom = c_bottom
    # Cropped image of above dimension (It will not change original image)
    text = ""
    i = 0
    while i < len(list_img):
        img = list_img[i]
        img_1 = img.crop((left, top, right, bottom))
        text = text + pytesseract.image_to_string(img_1, lang='ind')
        i += 1
    return (text)


def remove_multispace(text):
    try :
        text1 = re.sub('[\n]+', '\n', str(text)) # Replacing one or more consecutive newlines with single \n
        text2 = re.sub(r"(\n)\1{2,}", "", text1).strip()
        text3 = text2.replace('"', '').replace('“','')
        text3a = re.sub('[^a-zA-Z\d\s:][\n]','',text3)
        text3b = re.sub('[^a-zA-Z\d\s:][^a-zA-Z\d\s:]','',text3a)
        text4 = re.sub(r"Ev[a-zA-Z0-9- $&+,:;=?@#|'<>.^*()%!-]*on\.", '',text3b) # remove Evaluation text
        text4a = re.sub(r"Evaluation[a-zA-Z0-9- $&+,:;=?@#|'<>.^*()%!-]*", '',text4)
        text5 = re.sub('[\n]+', '\n', str(text4a))
        text_clean = text5
    except :
        text_clean = text
    return text_clean

# def remove_multispace(text):
#     try :
#         text1 = re.sub('[\n]+', '\n', str(text)) # Replacing one or more consecutive newlines with single \n
#         text2 = re.sub(r"(\n)\1{2,}", "", text1).strip()
#         text3 = text2.replace('"', '')
#         text4 = text3.replace('Evaluation SVarAmng ? The GoEKATere aAs Cek te Spire DoeaforaPyiion.','')
#         text5 = text4.replace('PUSAT PELAPORAN DAN ANALISIS TRANSAKSI KEUANGAN','')
#     except :
#         text5 = ""
#     return text5

def merge_ner_results(ner_results):
    merged_results = []
    current_entity = None

    for result in ner_results:
        word = result['word'].replace('▁', ' ')
        if current_entity and result['entity'].startswith('I-') and current_entity['entity_group'] == result['entity'][2:]:
            current_entity['word'] += word
            current_entity['end'] = result['end']
            current_entity['score'] = (current_entity['score'] + result['score']) / 2
        else:
            if current_entity:
                merged_results.append(current_entity)
            current_entity = {
                'entity_group': result['entity'][2:],
                'score': result['score'],
                'word': word,
                'start': result['start'],
                'end': result['end']
            }

    if current_entity:
        merged_results.append(current_entity)

    return merged_results


if __name__ == "__main__":
    main()