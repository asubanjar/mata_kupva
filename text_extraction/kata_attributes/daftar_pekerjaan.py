# Membaca daftar_pekeraaan yang ada sesuai denggan file activities.csv

import csv
from Sastrawi.Stemmer.StemmerFactory import StemmerFactory

def set_list_daftarpekerjaan():
    csv_file_path = r'kata_attributes/daftar_pekerjaan.csv'
    factory = StemmerFactory()
    stemmer = factory.create_stemmer()
    with open(csv_file_path, newline='') as csv_file: # read file
        csv_reader = csv.reader(csv_file)
        list_daftarpekerjaan = []
        for row in csv_reader:
            activity_lw = str(row[0]).lower()
            kt_dasar_pekerjaan = stemmer.stem(activity_lw)
            list_daftarpekerjaan.append(kt_dasar_pekerjaan)
    return list_daftarpekerjaan

# def main():
#     xxx = set_list_daftarpekerjaan()
#     print(xxx)

#
# if __name__ == "__main__":
#     main()