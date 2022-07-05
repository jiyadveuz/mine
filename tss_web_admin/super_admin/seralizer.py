from rest_framework import serializers

from .models import User_details

class User_detailsSerializer(serializers.ModelSerializer):
    print("hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh")
    

    class Meta:
        model  = User_details

        print("kkkkkkkkkkkkkkkkkkkk")
        fields  = [
            'employee_id',
            'name',
            'department',
            'branch',
            'username',
            'password',
            'status',
        ]