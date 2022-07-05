from django import template

register = template.Library()

from super_admin.models import *

@register.filter(name='get_notifications')
def get_notifications(value):
    return odoo_notification.objects.filter(read_status=0,auth_user_id=value).order_by('-id')


@register.filter(name='get_notifications_count')
def get_notifications_count(value):
    return odoo_notification.objects.filter(read_status=0,auth_user_id=value).count()

@register.filter(name='get_branch_department')
def get_branch_department(value):

    branch = ""
    
    try:
        data_user = User_Management.objects.get(auth_user=value)
        branch = data_user.employee_branch + "/" + data_user.employee_department
        pass
    except:
        pass
    return branch
