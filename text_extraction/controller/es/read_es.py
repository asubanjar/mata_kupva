# File: read_mongo.py
# File Created: Tuesday, 26th April 2022 3:44:40 pm
# Author: axs004 , PPATK-NB-250
#
# Copyright  - 2022 @ ppatk.go.id
# Desc :
#
# ################################################

from controller.es.es_connection import EsManagement
import json

from controller.es.es_indexmappings import text_extraction_indexname
from controller.es.es_indexmappings import text_extraction_mapping

def get_all_es_data():
    all_data = ""
    strquery = {
        "from": 0, "size": 9000,
        "query": {
            "match_all": {}
        },
        "_source": ["filename", "fulltext"]
    }
    try:
        indexname_es = text_extraction_indexname
        mapping_es = text_extraction_mapping
        es_client = EsManagement()
        es_client.create_index(index_name=indexname_es, mapping=mapping_es)
        resp_formated = es_client.fullsearch_query(strquery=strquery)
        res = json.loads(resp_formated)
        # print(res)
        list_results = res["hits"]
    except Exception as e:
        print(e)
        list_results = []
    return list_results

