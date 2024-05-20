# Author: axs004
# File : escapechar.py
# Time : 03-04-23 11:42 PM
# Original Loc : PPATK-NB-250
# Desc :
#

import re

def set_double_quote(str):
    new_string = str.replace("'", "''")
    return new_string

def filter_utf8(str):
    new_str = re.sub(r'[^\w\s]', '', str)
    print(str + " ==> "+ new_str)
    return  new_str