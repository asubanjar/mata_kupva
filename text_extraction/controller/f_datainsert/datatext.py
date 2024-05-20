#!/usr/bin/env python
# _*_ coding: utf-8 _*_
# @Time     : 08-11-23 12:36 PM
# @Author   : axs004@PPATK-NB-250
# @File     : datatext.py
# @Desc     : 
#


import os
import sys
import controller
from config.elastic import BATCH_SIZE
import datetime

from controller.es import write_es
# from controller.f_convert.date import convertdate


# Setting variables
# setting path
sys.path.append('../indexing')
from pathlib import Path

jumlahinserteddata = 0
barisdata = 0
list_dt_perbatch = []
######################### FUNGSI - FUNGSI #####################################

def add_barisdata ():
    global barisdata
    barisdata = barisdata + 1

def add_inserteddata (val):
    global jumlahinserteddata
    jumlahinserteddata = jumlahinserteddata + int(val)

def add_dt_perbatch(dictrec):
    global list_dt_perbatch
    list_dt_perbatch.append(dictrec)

def reset_dt_perbatch():
    global list_dt_perbatch
    list_dt_perbatch = []


def reset_barisdata ():
    global barisdata,jumlahinserteddata
    barisdata = 0
    jumlahinserteddata = 0


def set_file_name(str):
    global file_name
    file_name = str

def set_import_date(str):
    global import_date_str
    import_date_str = str

def bulk_insert_data_text(file_name, datecreatedfile, textstr, jenis_dok,
                          ext_who,ext_when,ext_where, extr_what, extr_howmuch,
                          extr_summary, keywordtextstr, ket_lain_s):
    add_barisdata()
    filename = file_name
    fulltext = textstr
    type_dokumen = jenis_dok
    doc_ext_who = ext_who
    doc_ext_when = ext_when
    doc_ext_where = ext_where
    doc_extr_what = extr_what
    doc_extr_howmuch = extr_howmuch
    doc_extr_summary = extr_summary
    keywordtext = keywordtextstr
    ket_lain = ket_lain_s
    a_dict = {}
    list_dt_perbatch =[]
    try:
        format_str = '%a %b %d %H:%M:%S %Y'  # The format
        datecreatedfile = datetime.datetime.strptime(datecreatedfile, format_str)
    except Exception as e:
        datecreatedfile = datetime.datetime.now()
        print("  \t Error convert date from filename : " + file_name)
    for variable in \
            ["filename", "fulltext", "type_dokumen", "doc_ext_who", "doc_ext_when", "doc_ext_where",
             "doc_extr_what", "doc_extr_howmuch", "keywordtext", "doc_extr_summary", "datecreatedfile","ket_lain"]:
        a_dict[variable] = eval(variable)
    # add_dt_perbatch(a_dict)
    list_temp = [a_dict]
    # print(list_temp)
    writingbatch = write_es.bulk_write_data_text(list_temp)
    print(writingbatch)
    # if len(list_dt_perbatch) == BATCH_SIZE:
    #     # Start of writing databatch
    #     writingbatch = write_es.bulk_write_data_nasabah_csv(list_dt_perbatch)


    # if not eof:
    #     add_barisdata()
    #     if barisdata ==1 :
    #         global lengthheadernasabah
    #         lengthheadernasabah = len(data.split(SEPARATOR))
    #     if barisdata > 1:
    #         listdata = data.split(SEPARATOR)
    #         lendata = len(listdata)
    #         if barisdata % BATCH_SIZE == 0: # per batch
    #             dt_string = (datetime.datetime.now()).strftime("%d/%m/%Y %H:%M:%S")
    #             printandlogs("  \t" + dt_string + " : ["+file_name + "] Data ke-" + str(barisdata) + " processed. ")
    #         ############ CREATE FILE UNPROCESSED ###################################
    #         if abs(lendata - lengthheadernasabah) > 2:
    #             add_jumlahbarissalah()
    #             f_unprocessed = open(uprocessed_fullpath, "a+")
    #             f_unprocessed.write(data + "\r\n")
    #             f_unprocessed.close()
    #             dt_string = (datetime.datetime.now()).strftime("%d/%m/%Y %H:%M:%S")
    #             printandlogs("  \t" + dt_string + " : ["+file_name + "] Data ke-" +
    #                          str(barisdata) + ". Error : inconsistance fields.")
    #         elif lendata == lengthheadernasabah:  # length data yang benar
    #             cekfield = check_fields_nasabah.validate_datanasabah_csv(listdata, barisdata)
    #             # print(cekfield)
    #             if cekfield[0]:
    #                 a_dict = {}
    #                 listdata = cekfield[2]
    #                 # listdata [0~3] : "NOMOR_CIF" | "TANGGAL_PEMBUKAAN_CIF" | "STATUS_CIF" | "NAMA_NASABAH" |
    #                 # listdata [4~5] : "JENIS_NASABAH" | "TEMPAT_LAHIR_TEMPAT_KEDUDUKAN"
    #                 # listdata[6~10] : "TANGGAL_LAHIR_TANGGAL_PENDIRIAN" | "PEKERJAAN" | "TEMPAT_BEKERJA" | "BIDANG_USAHA" | "PENGHASILAN" |
    #                 # listdata[11~15] : "ALAMAT" | "KEWARGANEGARAAN" | "JENIS_IDENTITAS" | "NOMOR_DOKUMEN_IDENTITAS" | "NAMA_IBU_KANDUNG" |
    #                 # listdata[16~17] : "KODE_CABANG_PEMBUKAAN_CIF" | "NAMA_CABANG_PEMBUKAAN_CIF"
    #                 import_date = datetime.datetime.now()
    #                 source = 2  # hasil audit DPK / nasabah
    #                 try:
    #                     format_str = '%d%m%Y'  # The format
    #                     datetime_obj = datetime.datetime.strptime(import_date_str, format_str)
    #                 except Exception as e:
    #                     datetime_obj = datetime.datetime.now()
    #                     printandlogs("  \t Error convert date from filename : " + file_name)
    #                 last_edited_date = datetime_obj
    #                 last_edited_by = "admin" # checkfilename[2]
    #                 filename = file_name
    #                 id_pjk = idpjk
    #                 idkelindustri = id_kel_industri
    #                 kode_nasabah = convert_kdnasabah(listdata[3])
    #                 nama = listdata[3]
    #                 tempat_lahir = listdata[5]
    #                 dob = convertdate(listdata[6])
    #                 alamat = listdata[11]
    #                 no_ktp = ""
    #                 no_id = ""
    #                 npwp = ""
    #                 if (listdata[13].lower() in ["ktp", "kartu tanda penduduk", "nik"]) or (
    #                         "ktp" in listdata[13].lower()) or ("kartu tanda penduduk" in listdata[13].lower()):
    #                     no_ktp = listdata[14]
    #                 elif (listdata[13].lower() in ["npwp", "nomor pokok wajib pajak"]) or (
    #                         "npwp" in listdata[13].lower()) or ("pajak" in listdata[13].lower()):
    #                     npwp = listdata[14]
    #                 else:
    #                     no_id = listdata[13] + "  " + listdata[14]
    #                 no_cif = listdata[0]
    #                 tgl_buka_cif = convertdate(listdata[1])
    #                 status_cif = listdata[2]
    #                 pekerjaan = listdata[7]
    #                 tmpt_bekerja = listdata[8]
    #                 bid_usaha = listdata[9]
    #                 penghasilan = listdata[10]
    #                 kewarganegaraan = listdata[12]
    #                 nm_ibu_kandung = listdata[15]
    #                 kd_cbg_pembukaan_cif = listdata[16]
    #                 nm_cbg_pembukaan_cif = listdata[17]
    #                 ket_lain = ""
    #                 for variable in ["import_date", "source", "last_edited_date", "last_edited_by", "filename",
    #                                  "id_pjk", "idkelindustri", "kode_nasabah", "nama", "tempat_lahir", "dob",
    #                                  "alamat","no_ktp", "no_id", "no_cif", "npwp", "tgl_buka_cif", "status_cif", "pekerjaan",
    #                                  "tmpt_bekerja", "bid_usaha", "penghasilan", "kewarganegaraan", "nm_ibu_kandung", "kd_cbg_pembukaan_cif",
    #                                  "nm_cbg_pembukaan_cif", "ket_lain"]:
    #                     a_dict[variable] = eval(variable)
    #                 add_dt_perbatch(a_dict)
    #                 if len(list_dt_perbatch) == BATCH_SIZE:
    #                     dt_string = (datetime.datetime.now()).strftime("%d/%m/%Y %H:%M:%S")
    #                     printandlogs("  \t" + dt_string + " : Start writing bulk data nasabah " + str(len(list_dt_perbatch)) + " doc/recs to ES.")
    #                     # Start of writing databatch
    #                     writingbatch = write_es.bulk_write_data_nasabah_csv(list_dt_perbatch)
    #
    #                     if writingbatch[0] == 1 :
    #                         add_inserteddata(BATCH_SIZE)
    #                         dt_string = (datetime.datetime.now()).strftime("%d/%m/%Y %H:%M:%S")
    #                         printandlogs("  \t" + dt_string + " : ["+file_name + "] Inserting " +str(BATCH_SIZE) + " rows. Total inserted rows : "+ str(jumlahinserteddata))
    #                     else :
    #                         dt_string = (datetime.datetime.now()).strftime("%d/%m/%Y %H:%M:%S")
    #                         printandlogs("  \t" + dt_string + " : Error Inserting " + str(BATCH_SIZE) + " rows. Total inserted rows : " + str(jumlahinserteddata))
    #                     reset_dt_perbatch()
    #                 add_jumlahbarisbenar()
    #             ############ CREATE FILE UNPROCESSED ###################################
    #             elif not cekfield[0]: # gagal proses
    #                 add_jumlahbarissalah()
    #                 errormsg = cekfield[1]
    #                 f_unprocessed = open(uprocessed_fullpath, "a+")
    #                 f_unprocessed.write(data + "\r\n")
    #                 f_unprocessed.close()
    #                 dt_string = (datetime.datetime.now()).strftime("%d/%m/%Y %H:%M:%S")
    #                 printandlogs("  \t" + dt_string + " : ["+file_name + "] Error data line@ : " + str(barisdata) + ". Error : " + errormsg)
    # else: # End Of File
    #     if len(list_dt_perbatch) > 0:
    #         dt_string = (datetime.datetime.now()).strftime("%d/%m/%Y %H:%M:%S")
    #         printandlogs("  \t" + dt_string + " : Start writing bulk data nasabah " + str(len(list_dt_perbatch)) + " doc/recs to ES.")
    #         # Start of writing databatch
    #         writingbatch = write_es.bulk_write_data_nasabah_csv(list_dt_perbatch)
    #         if writingbatch[0] == 1:
    #             printandlogs("  \t" + dt_string + " : Finished writing. " + writingbatch[1])
    #             add_inserteddata(len(list_dt_perbatch))
    #         elif writingbatch[0] == 0:
    #             printandlogs("  \t" + dt_string + " Error writing to ES. " + writingbatch[1])
    #             # End of writing databach
    #
