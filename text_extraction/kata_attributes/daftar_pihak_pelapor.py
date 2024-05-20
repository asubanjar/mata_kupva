# Membaca daftar_pekeraaan yang ada sesuai denggan file activities.csv

import csv
from Sastrawi.Stemmer.StemmerFactory import StemmerFactory
import pandas as pd
import string

def set_list_daftarbank():
    csv_file_path = r'kata_attributes/daftar_bank.csv'
    factory = StemmerFactory()
    stemmer = factory.create_stemmer()
    with open(csv_file_path, newline='') as csv_file: # read file
        csv_reader = csv.reader(csv_file)
        list_daftarbank = []
        for row in csv_reader:
            activity_lw = str(row[0]).lower()
            kt_dasar_pekerjaan = stemmer.stem(activity_lw)
            list_daftarbank.append(kt_dasar_pekerjaan)
    return list_daftarbank

def set_list_daftarbank_goaml():
    csv_file_path = r'kata_attributes/dir_pihak_pelapor_012023.csv'
    df = pd.read_csv(csv_file_path)
    # print(df.head())
    col_list_nmpelapor= list(df["nama"].unique())
    list_pelapor_goaml = []
    i = 0
    while i < len(col_list_nmpelapor):
        nmpelapor_lw_i = str(col_list_nmpelapor[i]).lower()  # dihilangkan kata bank, bpr, bpd, titik dan tanda baca
        nmpelapor_lw_i = nmpelapor_lw_i.translate(str.maketrans('', '', string.punctuation))
        nmpelapor_lw_i = nmpelapor_lw_i.replace("pt ","")
        nmpelapor_lw_i = nmpelapor_lw_i.replace("bank perkreditan rakyat ","")
        nmpelapor_lw_i = nmpelapor_lw_i.replace("bank ","")
        nmpelapor_lw_i = nmpelapor_lw_i.replace("bpr ","")
        nmpelapor_lw_i = nmpelapor_lw_i.replace("bprs ","")
        nmpelapor_lw_i = nmpelapor_lw_i.replace("notaris ","")
        nmpelapor_lw_i = nmpelapor_lw_i.replace("kantor jasa akuntan ","")
        nmpelapor_lw_i = nmpelapor_lw_i.replace("kantor jasa akuntansi ","")
        nmpelapor_lw_i = nmpelapor_lw_i.replace("kantor akuntan publik ","")
        nmpelapor_lw_i = nmpelapor_lw_i.replace("dan ppat ","")
        nmpelapor_lw_i = nmpelapor_lw_i.replace(" ppat ","")
        nmpelapor_lw_i = nmpelapor_lw_i.replace("notarisppat  ","")
        nmpelapor_lw_i = nmpelapor_lw_i.replace("kantor ","")
        nmpelapor_lw_i = nmpelapor_lw_i.replace("koperasi ","")
        nmpelapor_lw_i = nmpelapor_lw_i.replace(" tbk","")
        nmpelapor_lw_i = nmpelapor_lw_i.replace("kap ","")
        nmpelapor_lw_i = nmpelapor_lw_i.replace("kja ","")
        nmpelapor_lw_i = nmpelapor_lw_i.replace("ksp ","")
        nmpelapor_lw_i = nmpelapor_lw_i.replace("kspps ","")
        nmpelapor_lw_i = nmpelapor_lw_i.replace(" simpan pinjam ","")
        nmpelapor_lw_i = nmpelapor_lw_i.replace("simpan pinjam pembiayaan syariah btm ","")
        list_pelapor_goaml.append(nmpelapor_lw_i)
        i = i + 1
    return (list_pelapor_goaml)

def set_list_daftarkelind_goaml():
    csv_file_path = r'kata_attributes/dir_pihak_pelapor_012023.csv'
    df = pd.read_csv(csv_file_path)
    # for col in df.columns:
    #     print(col)
    # print(df.head())
    col_list_nmkelind= list(df["kel_ind"].unique())
    # print(col_list_nmkelind)
    list_kelind_goaml = []
    i = 0
    while i < len(col_list_nmkelind):
        nmkelind_lw_i = str(col_list_nmkelind[i]).lower()
        nmkelind_lw_i = nmkelind_lw_i.translate(str.maketrans('', '', string.punctuation))
        list_kelind_goaml.append(nmkelind_lw_i)
        i = i + 1
    return (list_kelind_goaml)


# def main():
#     print(set_list_daftarbank())
#     print(set_list_daftarbank_goaml())
#     print(set_list_daftarkelind_goaml())
#
#
#
# if __name__ == "__main__":
#     main()