# Membaca aktivitas yang ada sesuai denggan file activities.csv

import csv
from Sastrawi.Stemmer.StemmerFactory import StemmerFactory
import os

def set_list_activities():
    # print("This file full path (following symlinks)")
    # print("This file directory only")
    # print (os.getcwd())
    csv_file_path = (r'kata_attributes/activities.csv')
    factory = StemmerFactory()
    stemmer = factory.create_stemmer()
    with open(csv_file_path, newline='') as csv_file: # read file
        csv_reader = csv.reader(csv_file)
        list_activities = []
        for row in csv_reader:
            activity_lw = str(row[0]).lower()
            kt_dasar_activity = stemmer.stem(activity_lw)
            list_activities.append(kt_dasar_activity)
    # print(list_activities)
    return list_activities

# def main():
#     print(set_list_activities())
#
#
#
# if __name__ == "__main__":
#     main()

#%%
