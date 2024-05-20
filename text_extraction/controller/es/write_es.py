# File: write_mongo.py
# File Created: Thursday, 21st April 2022 9:51:11 pm
# Author: axs004 , PPATK-NB-250
#
# Copyright  - 2022 @ ppatk.go.id
# Desc :
#
# ################################################
import random

import datetime

# Function :
# Desc : Creating database : sipesat_v3
#        Creating index on ES Inserting data
# Insert function of Collection Name data
# Data dictionary : refer to mapping


from controller.es.es_connection import EsManagement

from controller.es.es_indexmappings import text_extraction_indexname
from controller.es.es_indexmappings import text_extraction_mapping



datetime_now = datetime.datetime.now()

def bulk_write_data_text(documents):
    indexname_es = text_extraction_indexname
    mapping_es = text_extraction_mapping
    es_connection = EsManagement()
    es_connection.create_index(index_name=indexname_es, mapping=mapping_es)
    msginserted = es_connection.insert_bulk(data=documents)
    return (msginserted)
