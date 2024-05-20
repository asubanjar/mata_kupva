# Author : axs004 
# File : date.py
# Original Loc : PTI013
# Time : 22/09/2022 8:57
# Desc :
#
import datetime
from dateutil.parser import parse

def convertdate(str_tanggal):
    try:
        newDate = parse(str_tanggal)
    except :
        newDate = None # datetime.datetime(1900, 12, 31)
    return newDate


def convertdatetoyyyymmdd(str_tanggal):
    if (len(str_tanggal) > 10) and ("T" in str_tanggal):
        splitdatetime = (str_tanggal).split("T")
        strdate10 = splitdatetime [0]
    elif len(str_tanggal) == 10 :
        strdate10 = str_tanggal
    else:
        strdate10 = ""
    if len(str_tanggal) == 8 : # fix dd-mm-yy
        if "-" in str_tanggal:
            splitdate8 = str_tanggal.split("-")
        elif "/" in str_tanggal:
            splitdate8 = str_tanggal.split("/")
        if int(splitdate8[2]) < 50 :  # tahun 2000-2050
            year = 2000 + int(splitdate8[2])
            month = int(splitdate8[1])
            day = int(splitdate8[0])
        if int(splitdate8[2]) >= 50 :  # tahun 1950- 1999
            year = 1900 + int(splitdate8[2])
            month = int(splitdate8[1])
            day = int(splitdate8[0])
    if len(strdate10) == 10 :
        if "-" in strdate10:
            splitdate = strdate10.split("-")
        elif "/" in strdate10:
            splitdate = strdate10.split("/")
        if int(splitdate[0]) > 1000: # baris pertama adalah tahun
            year = int(splitdate[0])
            month = int(splitdate[1])
            day = int(splitdate[2])
        elif int(splitdate[0]) < 32: # baris pertama adalah tanggal
            year = int(splitdate[2])
            month = int(splitdate[1])
            day = int(splitdate[0])
    try:
        str_date = str(year) +"-" + str(month)+"-" + str(day)
    except :
        str_date = "" # datetime.datetime(1900, 12, 31)
    return str_date


def convertdatetime(date, time):
    str_tanggal = str(date)
    if (len(str_tanggal) > 10) and ("T" in str_tanggal):
        splitdatetime = (str_tanggal).split("T")
        strdate10 = splitdatetime [0]
    elif len(str_tanggal) == 10 :
        strdate10 = str_tanggal
    else:
        strdate10 = ""
    if len(str_tanggal) == 8 : # fix dd-mm-yy
        if "-" in str_tanggal:
            splitdate8 = str_tanggal.split("-")
        elif "/" in str_tanggal:
            splitdate8 = str_tanggal.split("/")
        if int(splitdate8[2]) < 50 :  # tahun 2000-2050
            year = 2000 + int(splitdate8[2])
            month = int(splitdate8[1])
            day = int(splitdate8[0])
        if int(splitdate8[2]) >= 50 :  # tahun 1950- 1999
            year = 1900 + int(splitdate8[2])
            month = int(splitdate8[1])
            day = int(splitdate8[0])
    if len(strdate10) == 10 :
        if "-" in strdate10:
            splitdate = strdate10.split("-")
        elif "/" in strdate10:
            splitdate = strdate10.split("/")
        if int(splitdate[0]) > 1000: # baris pertama adalah tahun
            year = int(splitdate[0])
            month = int(splitdate[1])
            day = int(splitdate[2])
        elif int(splitdate[0]) < 32: # baris pertama adalah tanggal
            year = int(splitdate[2])
            month = int(splitdate[1])
            day = int(splitdate[0])
    # 3: 44:37 PM
    upper_time = str(time).upper()
    upper_time = upper_time.replace(" ","")
    if ("PM" in upper_time) or ("AM" in upper_time):
        formatting = "%I:%M:%S %p"
        splittime = upper_time.split(":")
        timeformat = datetime.datetime.strptime((splittime[0] + ":"+splittime[1]+":" +\
                                                splittime[2][0:2]+" " + splittime[2][-2:]), formatting)

    elif not ("M" in upper_time):
        formatting = '%d-%m-%y %H:%M:%S'
        splittime = upper_time.split(":")
        timeformat = datetime.datetime.strptime((splittime[0] + ":" + splittime[1] + ":" + \
                                                splittime[2][0:2]), formatting)

    try:
        xx_strdatetime = str(year) +"-" + str(month)+"-" + str(day) +" " + \
                    str(timeformat.hour) +":" + str(timeformat.minute) +":"+ \
                     str(timeformat.second)
    except :
        xx_strdatetime = "" # datetime.datetime(1900, 12, 31)
    return xx_strdatetime

