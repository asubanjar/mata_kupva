from kata_attributes import daftar_activities, daftar_pekerjaan, daftar_pihak_pelapor, daftar_pihak_pelapor_uu




def set_keywords():
    keyword_1 = daftar_activities.set_list_activities()
    keyword_2 = daftar_pekerjaan.set_list_daftarpekerjaan()
    keyword_3 = daftar_pihak_pelapor.set_list_daftarbank()
    keyword_4 = daftar_pihak_pelapor.set_list_daftarbank_goaml()
    keyword_5 = daftar_pihak_pelapor.set_list_daftarkelind_goaml()
    keyword_6 = daftar_pihak_pelapor_uu.set_list_daftarpelapor()
    list_keywords = [keyword_1.extend(l) for l in (keyword_2,keyword_3,keyword_4,keyword_5,keyword_6)]
    return list_keywords

