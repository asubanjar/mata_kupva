# Title         : es_connection.py
# Requirement   : Python 3.7 +
# Author        : Aman Subanjar
# email         : aman.subanjar@ppatk.go.id
# Date          : 30/05/22 08.18
# Description   : 
# 
# =======================================================================

import json
import logging
import os
from typing import Dict, List, AnyStr, SupportsInt
from config.elastic import es_dsn,es_username,es_password
from elasticsearch import Elasticsearch
from elasticsearch import helpers

# logging.basicConfig(filename="es.log", level=logging.ERROR)

class EsManagement:
    def __init__(self):
        self.es_client = Elasticsearch([es_dsn],http_auth=(es_username, es_password), timeout=30, max_retries=10, retry_on_timeout=True)
        logging.info(self.es_client.ping())

    def create_index(self, index_name: AnyStr = None, mapping: Dict = None) -> None:
        """
        Create an ES index.

        :param index_name: Name of the index.
        :param mapping: Mapping of the index
        """
        index_exists = self.es_client.indices.exists(index=index_name)
        self.index_name = index_name
        if index_exists:
            logging.info("Index {self.index_name} is existing")
        elif not index_exists:
            logging.info("Creating index {self.index_name} with the following schema: {json.dumps(mapping, indent=2)}")
            self.es_client.indices.create(index=self.index_name, ignore=400, body=mapping)


    def insert_one(self, data: Dict = None) -> None:
        logging.info("Insert to ES")
        """
        Insert a data.

        :param index_name: Name of the index.
        :param mapping: Mapping of the index
        """
        try:
            self.es_client.index(index=self.index_name, document=data)
            self.es_client.indices.refresh(index=self.index_name)
            # countjson= self.es_client.cat.count(self.index_name, params={"format": "json"})
            # count_data = countjson[0].get("count")
            count_data = self.count_alldoc()
            messages = "Msg : Success : 1 doc inserted. Docs count: " + str (count_data)
            resultcode = 1
        except:
            resultcode = 0
            messages = "Msg : Fail inserted 1 doc"
        res_list = [resultcode, messages]
        return(res_list)


    def update(self, id : AnyStr = None, data: Dict = None) -> None:
        logging.info("Update ES data")
        """
        Updating a data.

        :param id: id of the index.
        :param data: data to be inserted
        """
        try:
            self.es_client.update(index=self.index_name,id = id,body={ "doc": data })
            self.es_client.indices.refresh(index=self.index_name)
            count_data = self.count_alldoc()
            messages = "Msg : Success : 1 doc updated. Docs count: " + str(count_data)
            resultcode = 1
        except:
            resultcode = 1
            messages = "Msg : Ok inserted 1 doc"
        res_list = [resultcode, messages]
        return (res_list)


    def insert_bulk(self, data: List =  None) -> None:
        """
        Insert a bulk of data.
        :param index_name: Name of the index.
        :param data: List of data
        """
        resultcode = ""
        messages = ""
        try:
            length_list_data = len(data)
            actions = [
                {
                    "_index": self.index_name,
                    "_source": data[dt_n]
                }
                for dt_n in range(0, length_list_data)
            ]
            helpers.bulk(self.es_client, actions)
            self.es_client.indices.refresh(index=self.index_name)
            # countjson = self.es_client.cat.count(self.index_name, params={"format": "json"})
            # count_data = countjson[0].get("count")
            count_query = {
                "query": {
                    "match_all": {}
                }
            }
            # count_data = self.count_alldoc()
            count_data = self.count_doc(strquery = count_query)
            messages = "Msg : Success. " + str(length_list_data) + " doc inserted. Docs count: " + str(count_data)
            resultcode = 1
        except Exception as er:
            print("Error Insert data to ES : " + str(er))
            resultcode = 0
            messages = "Msg : Fail inserted bulk docs"
        res_list = [resultcode, messages]
        return (res_list)

    def insert_bulk_withIdObj(self, data: List =  None, IdObj: List =  None ) -> None:
        """
        Insert a bulk of data.
        :param index_name: Name of the index.
        :param data: List of data
        """
        # try:
        length_list_data = len(data)
        actions = [
            {
                "_index": self.index_name,
                "_id":IdObj[dt_n],
                "_source": data[dt_n]
            }
            for dt_n in range(0, length_list_data)
        ]
        helpers.bulk(self.es_client, actions)
        self.es_client.indices.refresh(index=self.index_name)
        # countjson = self.es_client.cat.count(self.index_name, params={"format": "json"})
        # count_data = countjson[0].get("count")
        count_data = self.count_alldoc()
        messages = "Msg : Success. " + str(length_list_data) + " doc inserted. Docs count: " + str(count_data)
        resultcode = 1
        # except Exception as er:
        #     logging.error("Error Insert data to ES : " + str(er))
        #     resultcode = 0
        #     messages = "Msg : Fail inserted bulk docs"
        res_list = [resultcode, messages]
        return (res_list)

    def fullsearch_query(self, strquery: Dict = None) -> None:
        # https://cheatography.com/danth/cheat-sheets/elasticsearch-query-dsl/
        self.es_client.indices.refresh(index=self.index_name)
        resp = self.es_client.search(
            index=self.index_name,
            body=strquery
        )
        resp_formated = json.dumps(resp["hits"], indent=2)
        return resp_formated

    def search_aggs_query(self, strquery: Dict = None) -> None:
        # https://cheatography.com/danth/cheat-sheets/elasticsearch-query-dsl/
        self.es_client.indices.refresh(index=self.index_name)
        resp = self.es_client.search(
            index=self.index_name,
            body=strquery
        )
        resp_formated = json.dumps(resp["aggregations"], indent=2)
        return resp_formated


    def count_alldoc(self) -> None:
        print("self.index_name : ", self.index_name)
        countjson = self.es_client.cat.count(self.index_name)
        count_data = countjson[0].get("count")
        return count_data

    def count_doc(self,strquery: Dict = None) -> None:
        self.es_client.indices.refresh(index=self.index_name)
        countjson = (self.es_client.count(
            index=self.index_name,
            body=strquery)
        )
        count_data = countjson.get("count")
        return count_data

    def set_max_result_window(self, resultmax:int = None) -> None:
        body = '{ "index": { "max_result_window": ' + str(resultmax) + '}}'
        try :
            self.es_client.indices.put_settings(index=self.index_name,body=body)
            result = True
        except:
            result = False
        return result

