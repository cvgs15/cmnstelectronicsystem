<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
$route['mssql2mysql'] = 'mssql2mysql';

$route['admin'] = 'admin';
$route['admin/login'] = 'admin/login';
$route['admin/clock'] = 'admin/clock';
$route['admin/clock/list'] = 'admin/list_clock';
$route['admin/clock/query/auto'] = 'admin/query_auto_clock';
$route['admin/clock/query/manual'] = 'admin/query_manual_clock';
$route['admin/clock/add'] = 'admin/add_clock';
$route['admin/clock/del/(:num)'] = 'admin/del_clock/$1';
$route['admin/main'] = 'admin/main';
$route['admin/list'] = 'admin/list_account';
$route['admin/list/query'] = 'admin/list_account_query';
$route['admin/form'] = 'admin/edit_account';
$route['admin/edit/(:any)'] = 'admin/edit_account/$1';
$route['admin/add'] = 'admin/add_account';
$route['admin/update'] = 'admin/update_account';

$route['user'] = 'user/form';
$route['user/login'] = 'user/login';
$route['user/forget'] = 'user/forget_passwd';
$route['user/form'] = 'user/form_account';
$route['user/edit'] = 'user/edit_account';
$route['user/list'] = 'user/list_account';
$route['user/list/query'] = 'user/list_account_query';
$route['user/edit/(:any)'] = 'user/edit_account/$1';
$route['user/add'] = 'user/add_account';
$route['user/update'] = 'user/update_account';
$route['user/clock/list'] = 'user/list_clock';
$route['user/clock/list/(:num)'] = 'user/list_clock/$1';
$route['user/clock/query'] = 'user/query_clock';
$route['user/clock/add'] = 'user/add_clock';

$route['org/list'] = 'user/list_org';
$route['org/query'] = 'user/query_org';
$route['org/edit/(:num)'] = 'user/edit_org/$1';
$route['org/add'] = 'user/add_org';
$route['org/update'] = 'user/update_org';
$route['org/del/(:num)'] = 'user/del_org/$1';

//facility booking
$route['facility/admin/facility/list'] = 'facility/list_facility';
$route['facility/admin/facility/query'] = 'facility/query_facility';
$route['facility/admin/facility/form'] = 'facility/edit_facility_config/';
$route['facility/admin/facility/edit/batch'] = 'facility/edit_batch_facility';
$route['facility/admin/facility/edit/(:any)'] = 'facility/edit_facility_config/$1';
$route['facility/admin/facility/add'] = 'facility/add_facility';
$route['facility/admin/facility/update/batch'] = 'facility/update_batch_facility';
$route['facility/admin/facility/update'] = 'facility/update_facility_config';

$route['facility/admin/door/query'] = 'facility/query_door';
$route['facility/admin/door/form'] = 'facility/edit_door/';
$route['facility/admin/door/edit/(:any)'] = 'facility/edit_door/$1';
$route['facility/admin/door/add'] = 'facility/add_door';
$route['facility/admin/door/update'] = 'facility/update_door';

$route['facility/admin/privilege/list'] = 'facility/list_user_privilege';
$route['facility/admin/privilege/form'] = 'facility/edit_user_privilege';
$route['facility/admin/privilege/query'] = 'facility/query_user_privilege';
$route['facility/admin/privilege/edit/(:any)'] = 'facility/edit_user_privilege/$1';
$route['facility/admin/privilege/add'] = 'facility/update_user_privilege';
$route['facility/admin/privilege/update/(:any)'] = 'facility/update_user_privilege/$1';
$route['facility/admin/privilege/batch/form/(:num)'] = 'facility/edit_batch_user_privilege/$1';

$route['facility/booking/query'] = 'facility/query_booking';
$route['facility/admin/booking/list'] = 'facility/list_booking';
$route['facility/admin/booking/form/(:any)/(:num)'] = 'facility/form_special_booking/$1/$2';
$route['facility/admin/booking/form/(:any)'] = 'facility/form_booking/$1';
$route['facility/admin/booking/edit/(:num)'] = 'facility/edit_booking/$1';
$route['facility/admin/available/list'] = 'facility/list_available';
$route['facility/user/available/list'] = 'facility/list_available';
$route['facility/user/available/query'] = 'facility/query_available';
$route['facility/user/booking/list'] = 'facility/list_booking';
$route['facility/user/booking/form/(:any)'] = 'facility/form_booking/$1';
$route['facility/user/booking/edit/(:num)'] = 'facility/edit_booking/$1';
$route['facility/user/booking/add'] = 'facility/add_booking';
$route['facility/user/booking/update/(:num)'] = 'facility/update_booking/$1';
$route['facility/user/booking/del/(:num)'] = 'facility/del_booking/$1';
$route['facility/time/query'] = 'facility/query_time';

$route['facility/admin/maintenance/list'] = 'facility/list_maintenance';
$route['facility/admin/maintenance/query'] = 'facility/query_maintenance';
$route['facility/admin/maintenance/form/(:any)'] = 'facility/form_maintenance/$1';
$route['facility/admin/maintenance/edit/(:num)'] = 'facility/edit_maintenance/$1';
$route['facility/admin/maintenance/add'] = 'facility/add_maintenance';
$route['facility/admin/maintenance/update'] = 'facility/update_maintenance';
$route['facility/admin/maintenance/del'] = 'facility/del_maintenance';

$route['facility/admin/card/list'] = 'facility/list_card_application';
$route['facility/admin/card/query'] = 'facility/query_card_application';
$route['facility/user/card/form'] = 'facility/edit_card_application';
$route['facility/admin/card/form'] = 'facility/edit_card_application';
$route['facility/admin/card/edit/(:num)'] = 'facility/edit_card_application/$1';
$route['facility/user/card/add'] = 'facility/add_card_application';
$route['facility/admin/card/add'] = 'facility/add_card_application';
$route['facility/admin/card/update/(:num)'] = 'facility/update_card_application/$1';
$route['facility/admin/card/del/(:num)'] = 'facility/del_card_application/$1';





$route['facility/admin/access/link/list'] = 'facility/list_access_link';
$route['facility/admin/access/link/query'] = 'facility/query_access_link';
$route['facility/admin/access/link/form'] = 'facility/edit_access_link';
$route['facility/admin/access/link/edit/(:num)'] = 'facility/edit_access_link/$1';
$route['facility/admin/access/link/add'] = 'facility/add_access_link';
$route['facility/admin/access/link/update'] = 'facility/update_access_link';
$route['facility/admin/access/link/del/(:num)'] = 'facility/del_access_link/$1';
$route['facility/admin/access/ctrl/list'] = 'facility/list_access_ctrl';
$route['facility/admin/access/ctrl/query'] = 'facility/query_access_ctrl';
$route['facility/admin/access/ctrl/synchronize'] = 'facility/sync_access_ctrl';
$route['facility/admin/access/ctrl/form'] = 'facility/edit_access_ctrl';
$route['facility/admin/access/ctrl/edit/(:num)'] = 'facility/edit_access_ctrl/$1';
$route['facility/admin/access/ctrl/add'] = 'facility/update_access_ctrl';
$route['facility/admin/access/ctrl/update/(:num)'] = 'facility/update_access_ctrl/$1';
$route['facility/admin/access/ctrl/del/(:num)'] = 'facility/del_access_ctrl/$1';
$route['facility/admin/access/card/list'] = 'facility/list_access_card';
$route['facility/admin/access/card/query'] = 'facility/query_access_card';

$route['facility/user/nocharge/form/(:num)'] = 'facility/form_nocharge/$1';
$route['facility/admin/nocharge/form/(:num)'] = 'facility/form_nocharge/$1';
$route['facility/admin/nocharge/edit/(:num)'] = 'facility/edit_nocharge/$1';
$route['facility/user/nocharge/view/(:num)'] = 'facility/view_nocharge/$1';
$route['facility/admin/nocharge/view/(:num)'] = 'facility/view_nocharge/$1';
$route['facility/admin/nocharge/list'] = 'facility/list_nocharge';
$route['facility/admin/nocharge/query'] = 'facility/query_nocharge';
$route['facility/user/nocharge/add'] = 'facility/add_nocharge';
$route['facility/admin/nocharge/add'] = 'facility/add_nocharge';
$route['facility/admin/nocharge/update'] = 'facility/update_nocharge';
$route['facility/admin/nocharge/del'] = 'facility/del_nocharge';

$route['facility/admin/tracker/list'] = 'admin/list_clock';

//curriculum
$route['curriculum/config/form'] = 'curriculum/edit_config';
$route['curriculum/config/update'] = 'curriculum/update_config';

$route['curriculum/bulletin/update'] = 'curriculum/update_bulletin';

$route['curriculum/course/list'] = 'curriculum/list_course';
$route['curriculum/course/query'] = 'curriculum/query_course';
$route['curriculum/course/form'] = 'curriculum/form_course';
$route['curriculum/course/edit/(:num)'] = 'curriculum/edit_course/$1';
$route['curriculum/course/add'] = 'curriculum/add_course';
$route['curriculum/course/update'] = 'curriculum/update_course';
$route['curriculum/course/del/(:num)'] = 'curriculum/del_course/$1';

$route['curriculum/class/list'] = 'curriculum/list_class';
$route['curriculum/class/query'] = 'curriculum/query_class';
$route['curriculum/class/form'] = 'curriculum/form_class';
$route['curriculum/class/form/batch'] = 'curriculum/form_batch_class';
$route['curriculum/class/edit/(:num)'] = 'curriculum/edit_class/$1';
$route['curriculum/class/add'] = 'curriculum/add_class';
$route['curriculum/class/add/batch'] = 'curriculum/add_batch_class';
$route['curriculum/class/update'] = 'curriculum/update_class';
$route['curriculum/class/del/(:num)'] = 'curriculum/del_class/$1';

$route['curriculum/lesson/list/(:num)'] = 'curriculum/list_lesson/$1';
$route['curriculum/lesson/query'] = 'curriculum/query_lesson';
$route['curriculum/lesson/form/(:num)'] = 'curriculum/form_lesson/$1';
$route['curriculum/lesson/edit/(:num)'] = 'curriculum/edit_lesson/$1';
$route['curriculum/lesson/add'] = 'curriculum/add_lesson';
$route['curriculum/lesson/update'] = 'curriculum/update_lesson';
$route['curriculum/lesson/del/(:num)'] = 'curriculum/del_lesson/$1';

$route['curriculum/signature/list'] = 'curriculum/list_signature';
$route['curriculum/signature/query'] = 'curriculum/query_signature';
$route['curriculum/signature/add/(:num)'] = 'curriculum/add_signature/$1';
$route['curriculum/signature/add/email/(:num)/(:any)/(:any)'] = 'curriculum/add_signature_by_email/$1/$2/$3';
$route['curriculum/signature/del/email/(:any)/(:any)'] = 'curriculum/del_signature_by_email/$1/$2';
$route['curriculum/signature/update'] = 'curriculum/update_signature';
$route['curriculum/signature/del/(:num)'] = 'curriculum/del_signature/$1';

$route['curriculum/booking/query'] = 'curriculum/query_booking';
$route['curriculum/booking/form/(:num)'] = 'curriculum/form_booking/$1';
$route['curriculum/booking/edit/(:num)'] = 'curriculum/edit_booking/$1';
$route['curriculum/booking/add'] = 'curriculum/add_booking';
$route['curriculum/booking/update'] = 'curriculum/update_booking';
$route['curriculum/booking/del/(:num)'] = 'curriculum/del_booking/$1';

$route['curriculum/time/query'] = 'curriculum/query_time';

$route['curriculum/reg/list'] = 'curriculum/list_reg';
$route['curriculum/reg/query'] = 'curriculum/query_reg';
$route['curriculum/reg/form/(:num)'] = 'curriculum/form_reg/$1';
$route['curriculum/reg/add'] = 'curriculum/add_reg';
$route['curriculum/reg/add/(:num)'] = 'curriculum/add_reg/$1';
$route['curriculum/reg/update'] = 'curriculum/update_reg';
$route['curriculum/reg/del/(:num)'] = 'curriculum/del_reg/$1';



//nanomark
//$route['nanomark/add_application'] = 'nanomark/add_application';
//$route['nanomark/form_application'] = 'nanomark/form_application';
//$route['nanomark/edit_application/(:num)'] = 'nanomark/edit_application/$1';
//$route['nanomark/update_application'] = 'nanomark/update_application';
//$route['nanomark/view_application/(:num)'] = 'nanomark/view_application/$1';
//$route['nanomark/list_application'] = 'nanomark/list_application';
//$route['nanomark/query_application'] = 'nanomark/query_application';
//$route['nanomark/delete_application/(:num)'] = 'nanomark/delete_application/$1';
//$route['nanomark/print_application'] = 'nanomark/print_application';
//
//$route['nanomark/update_specimen'] = 'nanomark/update_specimen';
//
//$route['nanomark/preview_report'] = 'nanomark/preview_report';
//
//$route['nanomark/add_quotation'] = 'nanomark/add_quotation';
//$route['nanomark/form_quotation'] = 'nanomark/form_quotation';
//$route['nanomark/edit_quotation'] = 'nanomark/edit_quotation';
//$route['nanomark/edit_quotation/(:num)'] = 'nanomark/edit_quotation/$1';
//$route['nanomark/view_quotation/(:num)'] = 'nanomark/view_quotation/$1';
//$route['nanomark/update_quotation'] = 'nanomark/update_quotation';
//$route['nanomark/list_quotation'] = 'nanomark/list_quotation';
//$route['nanomark/list_quotation_query'] = 'nanomark/list_quotation_query';
//$route['nanomark/email_quotation/(:num)'] = 'nanomark/email_quotation/$1';
//
//$route['nanomark/add_outsourcing'] = 'nanomark/add_outsourcing';
//$route['nanomark/form_outsourcing/(:num)'] = 'nanomark/form_outsourcing/$1';
//$route['nanomark/edit_outsourcing/(:num)'] = 'nanomark/edit_outsourcing/$1';
//$route['nanomark/view_outsourcing/(:num)'] = 'nanomark/view_outsourcing/$1';
//$route['nanomark/update_outsourcing/(:num)'] = 'nanomark/update_outsourcing/$1';
//$route['nanomark/delete_outsourcing/(:num)'] = 'nanomark/delete_outsourcing/$1';
//$route['nanomark/list_outsourcing'] = 'nanomark/list_outsourcing';
//$route['nanomark/list_outsourcing_query'] = 'nanomark/list_outsourcing_query';
//
//$route['nanomark/add_customer_survey'] = 'nanomark/add_customer_survey';
//$route['nanomark/form_customer_survey/(:any)'] = 'nanomark/form_customer_survey/$1';
//$route['nanomark/edit_report_revision/(:num)'] = 'nanomark/edit_report_revision/$1';
//$route['nanomark/view_customer_survey/(:num)'] = 'nanomark/view_customer_survey/$1';
//$route['nanomark/list_customer_survey'] = 'nanomark/list_customer_survey';
//$route['nanomark/list_customer_survey_query'] = 'nanomark/list_customer_survey_query';
//
//$route['nanomark/form_report_revision/(:any)'] = 'nanomark/form_report_revision/$1';
//$route['nanomark/view_report_revision/(:num)'] = 'nanomark/view_report_revision/$1';
//$route['nanomark/add_report_revision'] = 'nanomark/add_report_revision';
//$route['nanomark/update_report_revision'] = 'nanomark/update_report_revision';
//$route['nanomark/list_report_revision'] = 'nanomark/list_report_revision';
//$route['nanomark/list_report_revision_query'] = 'nanomark/list_report_revision_query';
//
//$route['nanomark/edit_test_item'] = 'nanomark/edit_test_item';
//$route['nanomark/add_test_item'] = 'nanomark/add_test_item';
//$route['nanomark/update_test_item'] = 'nanomark/update_test_item';
//
//$route['nanomark/list_verification_norm'] = 'nanomark/list_verification_norm';
//$route['nanomark/add_verification_norm'] = 'nanomark/add_verification_norm';
//$route['nanomark/del_verification_norm'] = 'nanomark/del_verification_norm';
//
//$route['nanomark/list_progress'] = 'nanomark/list_progress';
//
//$route['nanomark/edit_config'] = 'nanomark/edit_config';
//$route['nanomark/update_config'] = 'nanomark/update_config';

$route['reward'] = 'reward/form';
$route['reward/add'] = 'reward/add';
$route['reward/update'] = 'reward/update';
$route['reward/edit/(:num)'] = 'reward/edit/$1';
$route['reward/delete/(:num)'] = 'reward/delete/$1';
$route['reward/list'] = 'reward/list_application';
$route['reward/query'] = 'reward/query_application';

//Cron
$route['cron'] = 'cron';

$route['default_controller'] = "pages";
$route['logout'] = "user/logout";
$route['404_override'] = 'error/show_404_page';


/* End of file routes.php */
/* Location: ./application/config/routes.php */