# Title         : mappings.py
# Requirement   : Python 3.7 +
# Author        : Aman Subanjar
# email         : aman.subanjar@ppatk.go.id
# Date          : 29/05/22 19.34
# Description   :
#
# =======================================================================

text_extraction_indexname = "text_extraction.index"
text_extraction_mapping = {
    "settings": {
        "number_of_shards": 1,
        "number_of_replicas": 0
    },
    "mappings": {
        "dynamic": False,
        "properties": {
            "filename": {"type": "text"},
            "fulltext": {"type": "text"},
            "type_dokumen": {"type": "byte"},
            "ext_who": {"type": "text", "fields" :{"raw":{"type":"keyword"}} },
            "ext_when": {"type": "text", "fields" :{"raw":{"type":"keyword"}} },
            "ext_where": {"type": "text", "fields" :{"raw":{"type":"keyword"}} },
            "extr_what": {"type": "text", "fields" :{"raw":{"type":"keyword"}} },
            "extr_howmuch": {"type": "text", "fields" :{"raw":{"type":"keyword"}} },
            "extr_summary": {"type": "text"},
            "keywordtext": {"type": "text", "fields" :{"raw":{"type":"keyword"}} },
            "datecreatedfile": {"type": "date"},
            "ket_lain": {"type": "text"}
        }
    }
}
