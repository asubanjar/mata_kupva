# Membaca daftar_pekeraaan yang ada sesuai denggan file activities.csv

import csv
from Sastrawi.Stemmer.StemmerFactory import StemmerFactory
import pandas as pd
import string

def set_list_daftarpelapor():
    csv_file_path = r'kata_attributes/daftar_pelapor_uu.csv'
    with open(csv_file_path, newline='') as csv_file: # read file
        csv_reader = csv.reader(csv_file)
        list_daftarbank = []
        for row in csv_reader:
            activity_lw = str(row[0]).lower()
            list_daftarbank.append(activity_lw)
    return list_daftarbank

# def main():
#     print(set_list_daftarpelapor())
#
#
#
# if __name__ == "__main__":
#     main()