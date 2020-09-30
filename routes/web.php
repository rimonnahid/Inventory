<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('/');

Route::get('contact', 'AdminController@index');

//Employee
Route::get('/all_employee','EmployeeController@index')->name('all.employee');
Route::get('/add_employee','EmployeeController@create')->name('add.employee');
Route::post('/add_employee','EmployeeController@store');
Route::get('/employee_profile/{id}','EmployeeController@showProfile');
Route::get('/edit_employee/{employee}','EmployeeController@edit')->name('edit.employee');
Route::post('update_employee/{employee}','EmployeeController@update');
Route::get('/delete_employee/{employee}','EmployeeController@destroy');

//Customer
Route::get('/all_customer','CustomerController@index')->name('all.customer');
Route::get('/add_customer','CustomerController@create')->name('add.customer');
Route::post('/add_customer','CustomerController@store');
Route::get('/edit_customer/{customer}','CustomerController@edit')->name('edit.customer');
Route::post('update_customer/{customer}','CustomerController@update');
Route::get('/delete_customer/{customer}','CustomerController@destroy');

//Supplier
Route::get('/all_supplier','SupplierController@index')->name('all.supplier');
Route::get('/add_supplier','SupplierController@create')->name('add.supplier');
Route::post('/add_supplier','SupplierController@store');
Route::get('/edit_supplier/{supplier}','SupplierController@edit')->name('edit.supplier');
Route::post('update_supplier/{supplier}','SupplierController@update');
Route::get('/delete_supplier/{supplier}','SupplierController@destroy');

//Salary
Route::get('/all_advance_salary','SalaryController@index')->name('all.advance.salary');
Route::get('/add_advance_salary','SalaryController@create')->name('add.advance.salary');
Route::post('/add_advance_salary','SalaryController@store');
Route::get('/pay_salary','SalaryController@paySalary')->name('pay.salary');
Route::get('/pay_employee_salary/{id}','SalaryController@pay_Employee');
Route::post('pay_current_salary/{id}','SalaryController@current_month');


//Category
Route::get('/all_category','CategoryController@index')->name('all.category');
Route::get('/add_category','CategoryController@create')->name('add.category');
Route::post('/add_category','CategoryController@store');
Route::get('/edit_category/{category}','CategoryController@edit')->name('edit.category');
Route::post('update_category/{category}','CategoryController@update');
Route::get('/delete_category/{category}','CategoryController@destroy');

//Product
Route::get('/all_product','ProductController@index')->name('all.product');
Route::get('/add_product','ProductController@create')->name('add.product');
Route::post('/add_product','ProductController@store');
Route::get('/edit_product/{product}','ProductController@edit')->name('edit.product');
Route::post('update_product/{product}','ProductController@update');
Route::get('/delete_product/{product}','ProductController@destroy');

//Expense
Route::get('/today_expense','ExpenseController@today')->name('today.expense');
Route::get('/monthly_expense','ExpenseController@monthly')->name('monthly.expense');
Route::get('/yearly_expense','ExpenseController@yearly')->name('yearly.expense');
Route::get('/add_expense','ExpenseController@create')->name('add.expense');
Route::post('/add_expense','ExpenseController@store');
Route::get('/edit_expense/{expense}','ExpenseController@edit')->name('edit.expense');
Route::post('/update_expense/{expense}','ExpenseController@update');
Route::get('/delete_expense/{expense}','ExpenseController@destroy');


//Attendence
Route::get('/all_attendence','AttendenceController@index')->name('all.attendence');
Route::get('/add_attendence','AttendenceController@create')->name('add.attendence');
Route::post('/add_attendence','AttendenceController@store');
Route::get('/edit_attendence/{date}','AttendenceController@edit');
Route::get('/view_attendence/{date}','AttendenceController@view');
Route::post('/update_attendence','AttendenceController@update');


//Setting
Route::get('/show_setting/{setting}','SettingController@show');
Route::get('/add_setting','SettingController@create')->name('add.setting');
Route::post('/add_setting','SettingController@store');
Route::get('/edit_setting/{setting}','SettingController@edit')->name('edit.setting');
Route::post('update_setting/{setting}','SettingController@update');
Route::get('/delete_setting/{setting}','SettingController@destroy');


//POS
Route::get('pos','PosController@index')->name('pos');

//Cart
Route::post('/add-cart','CartController@addcart');
Route::get('view_cart','CartController@view');
Route::post('/cartupdate/{id}','CartController@updateCart');
Route::get('/cartdelete/{id}','CartController@deleteCart')->name('cart.delete');

//Order 

Route::post('/create_invoice/','CartController@createInvoice');
Route::post('/finalinvoice','OrderController@finalInvoice');

Route::get('/pending_order','OrderController@pendingOrder')->name('pending.order');
Route::get('/order_details/{id}','OrderController@orderDetail');
Route::get('/pos_done/{id}','OrderController@posDone');
Route::get('/shipped_order','OrderController@shippedOrder')->name('shipped.order');

