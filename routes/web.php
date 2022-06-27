<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\StatusController;


use App\Http\Controllers\AccountsController;
use App\Http\Controllers\BankAccountController;
use App\Http\Controllers\DepositController;



use App\Http\Controllers\LoanController;


use App\Http\Controllers\EMIController;

use App\Http\Controllers\WithdrawController;
use App\Http\Controllers\DewithdrawController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\CostController;

use App\Http\Controllers\ImageController;

use App\Http\Controllers\SearchController;

use App\Http\Controllers\PhotoController;



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






/**Route::get('/', function () {
    return view('welcome');
});

**/








Route::get('/reg',[App\Http\Controllers\Auth\staffRegisterController::class, 'showRegForm'])->name('reg')->middleware('auth:admin');

Route::post('/reg',[App\Http\Controllers\Auth\staffRegisterController::class, 'reg']);

Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->middleware('role:Admin')->name('admin.home');





Route::resource('/Account', AccountsController::class);

Route::post('/Account', [App\Http\Controllers\AccountsController::class, 'store']);

Route::get('/Account/create', [App\Http\Controllers\AccountsController::class, 'create'])->name('Account.create')->middleware('auth:admin,staff');

Route::get('/Account/{Account}', [App\Http\Controllers\AccountsController::class, 'show'])->name('Account.show')->middleware('auth:admin,staff');

Route::get('/Account/{Account}/edit', [App\Http\Controllers\AccountsController::class, 'edit'])->name('Account.edit')->middleware('auth:admin,staff'); 


Route::post('/Account/{Account}', [App\Http\Controllers\AccountsController::class, 'update'])->name('Account.update');


Route::get('/status/{id}', [App\Http\Controllers\StatusController::class, 'status']);










// Loan Application

Route::resource('/Apply', LoanApplicationController::class);

Route::post('/Apply', [App\Http\Controllers\LoanApplicationController::class, 'store']);

Route::get('/Apply/create', [App\Http\Controllers\LoanApplicationController::class, 'create'])->name('Application.create');

Route::get('/Apply/{Apply}/edit', [App\Http\Controllers\LoanApplicationController::class, 'edit'])->name('Application.edit')->middleware('auth:admin');
;

Route::post('/Apply/{Apply}', [App\Http\Controllers\LoanApplicationController::class, 'update'])->name('Apply.update')->middleware('auth:admin');
;


Route::post('/Apply/{Apply}', [App\Http\Controllers\LoanApplicationController::class, 'destroy'])->name('Apply.destroy');



Route::resource('/Loan', LoanController::class)->middleware('auth:admin,staff');
Route::post('/Loan', [App\Http\Controllers\LoanController::class, 'store'])->middleware('auth:admin');
Route::get('/Loan/{loan}', [App\Http\Controllers\LoanController::class, 'show'])->name('Loan.show')->middleware('auth:admin,staff');









Route::resource('/Emi', EMIController::class);

Route::post('/Emi', [App\Http\Controllers\EMIController::class, 'store'])->middleware('auth:admin,staff');

Route::get('/Emi/{Emi}', [App\Http\Controllers\EMIController::class, 'show'])->name('EMI.show')->middleware('auth:admin,staff');











Route::resource('/Withdraw', WithdrawController::class)->middleware('auth:admin');

Route::post('/Withdraw', [App\Http\Controllers\WithdrawController::class, 'store'])->middleware('auth:admin');

Route::get('/Withdraw/{Withdraw}', [App\Http\Controllers\WithdrawController::class, 'show'])->name('Withdraw.show')->middleware('auth:admin');





Route::resource('/Dewithdraw', DewithdrawController::class)->middleware('auth:admin');

Route::post('/Dewithdraw', [App\Http\Controllers\DewithdrawController::class, 'store'])->middleware('auth:admin');


Route::get('/Dewithdraw/{dewithdraw}', [App\Http\Controllers\DewithdrawController::class, 'show'])->name('Dewithdraw.show')->middleware('auth:admin');


Route::resource('/Expenses', ExpensesController::class)->middleware('auth:admin,staff');

Route::post('/Expenses', [App\Http\Controllers\ExpensesController::class, 'store'])->middleware('auth:admin,staff');

Route::get('/Expenses/create', [App\Http\Controllers\ExpensesController::class, 'create'])->name('Expenses.create')->middleware('auth:admin,staff');

Route::get('/Expenses/{expense}', [App\Http\Controllers\ExpensesController::class, 'show'])->name('Expenses.show')->middleware('auth:admin,staff');


Route::resource('/Cost', CostController::class)->middleware('auth:admin');

Route::post('/Cost', [App\Http\Controllers\CostController::class, 'store'])->middleware('auth:admin');

Route::get('/Cost/create', [App\Http\Controllers\CostController::class, 'create'])->name('Cost.create')->middleware('auth:admin');

Route::get('/Cost/{cost}', [App\Http\Controllers\CostController::class, 'show'])->name('Cost.show')->middleware('auth:admin');








;







Route::resource('/Image', ImageController::class)->middleware('auth:admin,staff');

Route::post('/Image', [App\Http\Controllers\ImageController::class, 'store'])->middleware('auth:admin,staff');

Route::post('/Image/{Image}', [App\Http\Controllers\ImageController::class, 'destroy'])->name('Image.destroy')->middleware('auth:admin,staff');


Route::resource('/Photo', PhotoController::class);

Route::post('/Photo', [App\Http\Controllers\PhotoController::class, 'store']);

Route::post('/Photo/{Photo}', [App\Http\Controllers\PhotoController::class, 'destroy'])->name('Photo.destroy');










Route::get('/view',[App\Http\Controllers\ProfitController::class, 'view'])->name('Profit.view')->middleware('auth:admin');

Route::get('/Profit/get',[App\Http\Controllers\ProfitController::class, 'Profit'])->name('Profit.get');



Route::get('/Active', [App\Http\Controllers\ActiveLoanController::class, 'index'])->name('Active')->middleware('auth:admin,staff');

Route::get('/Active/pdf',[App\Http\Controllers\ActiveLoanController::class, 'generateActive'])->name('pdf')->middleware('auth:admin,staff');




Route::resource('/Employee', EmployeeController::class)->middleware('auth:admin');

Route::post('/Employee', [App\Http\Controllers\EmployeeController::class, 'store'])->middleware('auth:admin');

Route::get('/Employee/create', [App\Http\Controllers\EmployeeController::class, 'create'])->name('Employee.create')->middleware('auth:admin');


///Date wise report 

 Route::get('/Report', [App\Http\Controllers\MonthlyReportController::class, 'index'])->name('Report.index')->middleware('auth:admin'); 

 Route::get('/Report/create',[App\Http\Controllers\MonthlyReportController::class, 'create'])->name('Report.create')->middleware('auth:admin');
 
 Route::post('/Report',[App\Http\Controllers\MonthlyReportController::class, 'Report'])->name('Report')->middleware('auth:admin');





Route::get('/search/', [App\Http\Controllers\SearchController::class, 'search'])->name('search')->middleware('auth:admin,staff');







//admin prefix











