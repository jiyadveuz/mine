from django.http import HttpResponse
from django.shortcuts import redirect

from .models import *


from datetime import date




def test_w1(status):
   
    def view_permission_company(func):
       
    
    
        def _wrapped_view(request):
            if request.user.is_staff:
                return func(request)
            elif User_Management.objects.get(auth_user=request.user.id) :
 
                uid = User_Management.objects.get(auth_user=request.user.id)
                today = date.today()
                data = user_role_mapping.objects.filter(user_id=uid.id,end_dt__gte=today,start_dt__lte=today) | user_role_mapping.objects.filter(user_id=uid.id,end_dt=None,start_dt__lte=today)
                data_role_id = list(data.values_list("role_id",flat=True))
                print("data:------:::",str(data_role_id))
                if (Role_permission_details.objects.filter(role_id__in=data_role_id,permission_name=status, read="on")).exists():
                    return func(request)
                else:
                    return HttpResponse("Sorry,You are not allowed to view this page")
            else:
                return HttpResponse("Invalid")
        return _wrapped_view

    return view_permission_company

