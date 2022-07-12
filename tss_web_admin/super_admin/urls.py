from django import views
from django.contrib import admin
from django.urls import path,include
from . import views

from django.contrib.auth import views as auth_views
urlpatterns = [

    path('calendar',views.calendar,name='calendar'),
    path('event_depended',views.event_depended,name='event_depended'),
    path('all_events',views.all_events),
    path('all_events1',views.all_events1),


    path('',views.index,name='index'),
    path('login_action',views.login_action,name='login_action'),
    path('admin_dashboard',views.admin_dashboard,name='admin_dashboard'),
    path('admin_add_user',views.admin_add_user,name='admin_add_user'),
    path('menu',views.menu,name='menu'),
    path('admin_add_user_action',views.admin_add_user_action,name='admin_add_user_action'),
    path('admin_view_user',views.admin_view_user,name='admin_view_user'),
    path('admin_delete_user_action',views.admin_delete_user_action,name='admin_delete_user_action'),
    path('admin_edit_user_details_action',views.admin_edit_user_details_action,name='admin_edit_user_details_action'),
    path('admin_inactive_user_action',views.admin_inactive_user_action,name='admin_inactive_user_action'),
    path('admin_active_user_action',views.admin_active_user_action,name='admin_active_user_action'),
    path('logout',auth_views.LogoutView.as_view(),name="logout"),
    path('index',views.index,name='index'),
    path('login_page',views.index,name='login_page'),
    path('user_home',views.user_home,name='user_home'),
    path('user_apply_leave_management',views.user_apply_leave_management,name='user_apply_leave_management'),
    path('user_apply_leave_action',views.user_apply_leave_action,name='user_apply_leave_action'),
    path('user_apply_petty_cash',views.user_apply_petty_cash,name='user_apply_petty_cash'),
    path('user_apply_advance_salary_request_from',views.user_apply_advance_salary_request_from,name='user_apply_advance_salary_request_from'),
    path('user_view_leave_request',views.user_view_leave_request,name='user_view_leave_request'),
    path('user_view_petty_cash',views.user_view_petty_cash,name='user_view_petty_cash'),
    path('user_view_advance_salary',views.user_view_advance_salary,name='user_view_advance_salary'),



    # -----------new url --------------

    path('role_management',views.role_management,name='role_management'),
    path('add_role_action',views.add_role_action,name='add_role_action'),
    path('view_role_more_details',views.view_role_more_details,name='view_role_more_details'),
    path('edit_role_details',views.edit_role_details,name='edit_role_details'),
    path('edit_role_details_action',views.edit_role_details_action,name='edit_role_details_action'),
    path('view_company_details',views.view_company_details,name='view_company_details'),
    path('employee_master',views.employee_master,name='employee_master'),
    path('employee_more_details',views.employee_more_details,name='employee_more_details'),
    path('user_management',views.user_management,name='user_management'),
    path('getemployee_branch_dpt',views.getemployee_branch_dpt,name='getemployee_branch_dpt'),
    path('user_add_action',views.user_add_action,name='user_add_action'),
    path('view_user_more_details',views.view_user_more_details,name='view_user_more_details'),
    path('edit_user_more_details',views.edit_user_more_details,name='edit_user_more_details'),
    path('edit_user_details_action',views.edit_user_details_action,name='edit_user_details_action'),
    path('update_user_role_permission_action',views.update_user_role_permission_action,name='update_user_role_permission_action'),
    path('user_role_delete_action',views.user_role_delete_action,name='user_role_delete_action'),
    path('user_add_new_role_action',views.user_add_new_role_action,name='user_add_new_role_action'),
    path('leave_management',views.leave_management,name='leave_management'),
    path('get_total_available_leave_count',views.get_total_available_leave_count,name='get_total_available_leave_count'),
    path('petty_cash_management',views.petty_cash_management,name='petty_cash_management'),
    path('advance_salary_management',views.advance_salary_management,name='advance_salary_management'),
    path('role_edit_modal_function',views.role_edit_modal_function,name='role_edit_modal_function'),
    path('user_edit_modal_function',views.user_edit_modal_function,name='user_edit_modal_function'),
    path('user_role_log_modal',views.user_role_log_modal,name='user_role_log_modal'),
    path('user_leave_apply_action',views.user_leave_apply_action,name='user_leave_apply_action'),
    path('view_all_notification',views.view_all_notification,name='view_all_notification'),
    path('view_leave_more_details',views.view_leave_more_details,name='view_leave_more_details'),
    path('get_selected_employee_entitlement_balance',views.get_selected_employee_entitlement_balance,name='get_selected_employee_entitlement_balance'),
    path('get_child_based_leave_history',views.get_child_based_leave_history,name='get_child_based_leave_history'),
    path('user_leave_gantt_chart',views.user_leave_gantt_chart,name='user_leave_gantt_chart'),
    path('user_leave_gantt_chart_next_month_action',views.user_leave_gantt_chart_next_month_action,name='user_leave_gantt_chart_next_month_action'),
    path('user_leave_gantt_chart_prev_month_action',views.user_leave_gantt_chart_prev_month_action,name='user_leave_gantt_chart_prev_month_action'),
    

    
    
    
    


    path("test_api",views.test_api,name='test_api'),
    



    path("test_update_auth_user_table",views.test_update_auth_user_table,name='test_update_auth_user_table'),
    path('test_r1',views.test_r1,name='test_r1'),
    path('testr1',views.testr1,name='testr1'),

    path("leave_status_update_api",views.leave_status_update_api,name='leave_status_update_api'),

    path('test_r1',views.test_r1,name='test_r1'),
    path('test_r2',views.test_r2,name='test_r2'),
    path('testchart',views.testchart,name='testchart'),
    
    

    

    




]