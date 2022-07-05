from os import name, stat
from tkinter.messagebox import RETRY
from django import template
import json
register = template.Library()

from super_admin.models import User_Management



@register.filter(name='employee_branch')
def employee_branch(value,args):
    
    list = []
    if value == False:
        list.append({
            'id':1,
            "name":"False"
        })
        
    else:
        list.append({
            'id':value[0],
            "name":value[1]
        })
        
    

    
    
    return list



@register.filter(name='get_user_exists_status')

def get_user_exists_status(value,args):

    print("user_id:::::::",str(value))

    status = False
    try:
        data_exists = User_Management.objects.get(odoo_id=value)
        status = True
    except :
        pass
    return status
   