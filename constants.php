<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
define('GSI_ADMIN', 								'admin');
define('GSI_OPERATOR', 								'operator');
define('GSI_CLIENT', 								'client');
define('GSI_ORDER_ID', 								'order_id');
define('GSI_USER_ID', 								'CNIC#');
define('GSI_PROJECT_NAME', 							'project_name');
define('GSI_NUMBER_SHIPMENTS', 						'no_shipments');
define('GSI_ORDER_STATUS', 							'status');
define('GSI_PROJECT_ACTIVATED', 					'activated');
define('GSI_PROJECT_TOT_QUANTITY', 					'total_qty');
define('GSI_QUANTITY_SHIPPED', 						'qty_shipped');
define('GSI_QUANTITY_REMAINING', 					'qty_rem');
define('GSI_PROJECT_LOG_MANAGER', 					'logistics_manager');
define('GSI_PROJECT_PAYMENTS_MANAGER', 				'payments_manager');
define('GSI_PROJECT_BILLS_CLEARED', 				'bills_cleared');
define('GSI_PROJECT_ITEM_NAME', 					'item_name');
define('GSI_PROJECT_PO_DATE',					 	'po_date');
define('GSI_PROJECT_IO_DATE', 						'io_date');
define('GSI_PROJECT_DAYS_FROM_IO_SHIPT', 			'days_from_io_shipt');
define('GSI_PROJECT_SHOOT_TYPE', 					'shoot_type');
define('GSI_PROJECT_PROD_PER_DAY', 					'prod_per_day');
define('GSI_PROJECT_COMPLETED',						'completed');
define('GSI_PROJECT_NO_SHIPMENTS',						'no_shipments');

define('GSI_USER_USERNAME', 						'username');
define('GSI_USER_PASSWORD', 						'password');
define('GSI_USER_CONFIRM_PASSWORD', 				'confirm_password');
define('GSI_USER_EMAIL', 							'email');
define('GSI_USER_TYPE', 							'type');
define('GSI_USER_COMPANY', 						    'company');
define('GSI_USER_CNIC', 						    'CNIC#');


define('GSI_STATUS_COMPLETED',							'green');
define('GSI_STATUS_CURRENT',							'yellow');
define('GSI_STATUS_PENDING',							'red');

define('GSI_USER_TYPE_ADMIN',							'admin');
define('GSI_USER_TYPE_OPERATOR',						'operator');
define('GSI_USER_TYPE_CLIENT',							'client');

define('GSI_SHIPMENTS_GATEPASSNO', 					'gate_pass_no');
define('GSI_SHIPMENTS_DESTINATION', 				'dest_city');
define('GSI_SHIPMENTS_SHIP_QTY', 					'ship_qty');
define('GSI_SHIPMENTS_SHIPPED_DATE', 				'shipped_date');
define('GSI_SHIPMENTS_DELIVERY_TYPE', 				'del_type');
define('GSI_SHIPMENTS_REC_DATE', 					'rec_date');
define('GSI_SHIPMENTS_REC_BY', 						'rec_by');
define('GSI_SHIPMENTS_DRIVER_CELL', 				'driver_cell');
define('GSI_SHIPMENTS_EXIT_DATE', 					'exit_date');
define('GSI_SHIPMENTS_COMPANY_MAN', 				'comp_man');
define('GSI_SHIPMENTS_TRUCK_NO', 					'truck_no');
define('GSI_SHIPMENTS_INCHARGE_VERIFIED', 			'incharge_verified');
define('GSI_SHIPMENTS_SHIPPERS_QUOTE_NO', 			'shippers_quote_no');
define('GSI_SHIPMENTS_MONEY_COMMITTED', 			'money_committed');
define('GSI_SHIPMENTS_LOGISTICS_VERIFIED', 			'logistics_verified');
define('GSI_SHIPMENTS_DRIVER_NAME', 				'driver_name');
define('GSI_SHIPMENTS_EXIT_TIME', 					'exit_time');
define('GSI_SHIPMENTS_CURRENT_LOCATION',			'current_loc');
define('GSI_SHIPMENTS_STATUS',							'status');



define('GSI_PERMISSIONS_ROLE_NAME', 'role_name');
define('GSI_PERMISSIONS_CREATE_USER', 'create_user');
define('GSI_PERMISSIONS_EDIT_USER', 'edit_user');
define('GSI_PERMISSIONS_EDIT_PERMISSION', 'edit_permission');
define('GSI_PERMISSIONS_CREATE_ORDER', 'create_order');
define('GSI_PERMISSIONS_EDIT_ORDER', 'edit_order');
define('GSI_PERMISSIONS_CREATE_SHIPMENT', 'create_shipment');
define('GSI_PERMISSIONS_EDIT_SHIPMENT', 'edit_shipment');


define('GSI_ROLES_ADMIN', 'Admin');
define('GSI_ROLES_OPERATOR', 'Operator');
/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/* End of file constants.php */
/* Location: ./application/config/constants.php */