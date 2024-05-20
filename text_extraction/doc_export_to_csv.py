#
# Melakukan export ke dalam bentuk csv
# Kolom : [Nama File][Fulltext]
# Dilakukan export untuk dilakukan extrasi kesimpulan
import csv
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

from controller.es.read_es import get_all_es_data
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



def main():
    print("======================================================")
    print("==============  Export ES to csv =====================")
    print("======================================================")
    print("====================================================== \n")
    # Read data dari ES :
    raw_data_ES = get_all_es_data()
    length_data = len(raw_data_ES)
    # print(raw_data_ES[0]["_source"])
    i = 0
    # while i < length_data:
    #     print(raw_data_ES[i]["_source"]["filename"])
    #
    #     i = i + 1
    with open('large.csv', 'w') as f1:
        writer = csv.writer(f1, delimiter='|', quotechar='"', quoting=csv.QUOTE_ALL )
        writer.writerow(['Filename', 'Text'])
        while i < length_data:
            filename = (raw_data_ES[i]["_source"]["filename"])
            text = (raw_data_ES[i]["_source"]["fulltext"])
            writer.writerow([filename, text])
            i = i + 1
        # for i in range(1000000):
        #     row = [i] + [i + j * 0.2 for j in range(i + 1)]
        #     writer.writerow(row)

    print("======================================================")



if __name__ == "__main__":
    main()