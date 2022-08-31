<?php

use Illuminate\Support\Facades\Route;

//controller groups
use App\Http\Controllers\admin\
{
    AgentController,
    AirportPickupController,
    DashboardController,
    HostController,
    StudentController,
    CoordinatorController,
    AuthController,
    DriverController
};
use App\Http\Controllers\student\
{
    StudentDashboardController
};

use App\Http\Controllers\host\
{
    HostDashboardController
};

use App\Http\Controllers\coordinator\
{
    CoordinatorDashboardController
};

use App\Http\Controllers\driver\
{
    DriverDashboardController
};

//Web
use App\Http\Controllers\web\
{
    WebController,
    WebMenuController,
    WebAuthController,
    WebPaymentController,
};


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

//Route::get('/', function () {
//    return view('welcome');
//});


/*Admin-Dashboard Routes*/
Route::get('/isp-login', [AuthController::class, 'login'])->name('isp_login')->middleware('userloggedin');
Route::post('isp-login-post', [AuthController::class, 'login_data'])->name('login_post')->middleware('userloggedin');
/*
|--------------------------------------------------------------------------
| admin routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin', 'middleware' => 'AdminAuthMiddleware'], function () {

//    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    /*Dashboard Routes*/
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin_dashboard');

    /*Student Routes*/
    Route::get('student/details', [StudentController::class, 'details'])->name('admin_student_details');
    Route::get('student/applications', [StudentController::class, 'student_applications'])->name('admin_student_applications');
    Route::get('student/view-applications/{application}', [StudentController::class, 'view_student_applications'])->name('admin_view_student_application');
    Route::post('student/applications/{app_id}', [StudentController::class, 'student_application_status'])->name('admin_student_application_status');
    Route::get('student/payments', [StudentController::class, 'payments'])->name('admin_student_payments');
    
    /* Admin School Start */
    Route::get('student/schools', [StudentController::class, 'schools'])->name('admin_student_schools');
    Route::get('student/schools/manage-schools/{id?}', [StudentController::class, 'manage_school'])->name('admin_manage_school');
    Route::post('student/schools/manage-schools-process/{id?}', [StudentController::class, 'manage_school_process'])->name('admin_manage_school_process');
    Route::get('student/schools/delete/{id?}', [StudentController::class, 'delete_school'])->name('admin_delete_school');
    /* Admin School End */
    
    /* Admin Region Start */
    Route::get('student/regions', [StudentController::class, 'regions'])->name('admin_student_regions');
    Route::get('student/regions/manage-regions/{id?}', [StudentController::class, 'manage_region'])->name('admin_manage_region');
    Route::post('student/regions/manage-regions-process/{id?}', [StudentController::class, 'manage_region_process'])->name('admin_manage_region_process');
    Route::get('student/regions/delete/{id?}', [StudentController::class, 'delete_region'])->name('admin_delete_region');
    /* Admin Region End */
    
    /*Host Routes*/
    Route::get('host/details', [HostController::class, 'details'])->name('admin_host_details');
    Route::get('host/visits', [HostController::class, 'visits'])->name('admin_host_visits');

    /*Airport Routes*/
    Route::get('airport-pickup/', [AirportPickupController::class, 'airport_pickup'])->name('admin_airport_pickup');
    Route::get('airport-pickup/drivers', [AirportPickupController::class, 'drivers'])->name('admin_drivers');
    
    /**Admin Airlines */
    Route::get('airport-pickup/airlines', [AirportPickupController::class, 'airlines'])->name('admin_airport_pickup_airlines');
    Route::get('airport-pickup/airlines/manage-airlines/{id?}', [AirportPickupController::class, 'manage_airline'])->name('admin_manage_airlines');
    Route::post('airport-pickup/airlines/manage-airlines-process/{id?}', [AirportPickupController::class, 'manage_airline_process'])->name('admin_manage_airlines_process');
    Route::get('airport-pickup/airlines/delete/{id?}', [AirportPickupController::class, 'delete_airline'])->name('admin_delete_airline');
    
    
    /**Admin Driver */
    Route::get('drivers/details', [DriverController::class, 'drivers'])->name('admin_driver_details');
    Route::get('drivers/details/manage-driver/{id?}', [DriverController::class, 'manage_driver'])->name('admin_manage_driver_details');
    Route::post('drivers/details/manage-driver-process/{id?}', [DriverController::class, 'manage_driver_process'])->name('admin_driver_details_process');
    Route::get('drivers/details/delete/{id?}', [DriverController::class, 'delete_driver'])->name('admin_delete_driver');

    /*Agent Routes*/
    Route::get('agent/', [AgentController::class, 'agent'])->name('admin_agent');

    /*Coordinators Routes*/
    Route::get('coordinators/', [CoordinatorController::class, 'coordinators'])->name('admin_coordinators');

    /*Reports Routes*/
    Route::get('reports/placements', [CoordinatorController::class, 'placements'])->name('admin_reports_placements');
});
/*
|--------------------------------------------------------------------------
| student routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'student', 'middleware' => 'UserAuthMiddleware'], function () {

    /*Application Form*/
    Route::get('application-form', [StudentDashboardController::class, 'application_form'])->name('student_application_form')->middleware('preventSubmitApplication');
    Route::post('application-form-submit', [StudentDashboardController::class, 'application_form_submit'])->name('student_application_form_submit')->middleware('preventSubmitApplication');
//    Route::get('get-country-state', [StudentDashboardController::class, 'get_country_state'])->name('get_country_state');
//    Route::group(['middleware' => 'StudentApplicationApproved'], function () {
    /*Dashboard Routes*/
    Route::get('dashboard', [StudentDashboardController::class, 'dashboard'])->name('student_dashboard');
//    });


});
/*
|--------------------------------------------------------------------------
| host routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'host', 'middleware' => 'HostAuthMiddleware'], function () {
    /*Dashboard Routes*/
    Route::get('dashboard', [HostDashboardController::class, 'dashboard'])->name('host_dashboard');

});
/*
|--------------------------------------------------------------------------
| coordinators routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'coordinator', 'middleware' => 'CoAuthMiddleware'], function () {

    /*Dashboard Routes*/
    Route::get('dashboard', [CoordinatorDashboardController::class, 'dashboard'])->name('coordinator_dashboard');
});
/*
|--------------------------------------------------------------------------
| driver routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'driver', 'middleware' => 'CoAuthMiddleware'], function () {

    /*Dashboard Routes*/
    Route::get('dashboard', [DriverDashboardController::class, 'dashboard'])->name('driver_dashboard');
});
/*
|--------------------------------------------------------------------------
| Web routes
|--------------------------------------------------------------------------
*/
//Route::group(['prefix' => 'isp', 'middleware' => 'WebAuthMiddleware'], function () {

/** Web Routes*/
Route::get('/', [WebController::class, 'home'])->name('web_home');
Route::get('/about-us', [WebController::class, 'about_us'])->name('web_about_us');
Route::get('/agents', [WebController::class, 'agent'])->name('web_agent');
Route::get('/blog', [WebController::class, 'blog'])->name('web_blog');
Route::get('/careers', [WebController::class, 'career'])->name('web_career');
Route::get('/contact-us', [WebController::class, 'contact_us'])->name('web_contact_us');

/** Web Menu Routes starts*/
Route::get('/covid-19', [WebMenuController::class, 'covid_19'])->name('web_menu_covid_19');
Route::get('/faq', [WebMenuController::class, 'faq'])->name('web_menu_faq');
Route::get('/group-program', [WebMenuController::class, 'group_program'])->name('web_menu_group_program');
Route::get('/health-and-safety', [WebMenuController::class, 'health_and_safety'])->name('web_menu_health_and_safety');
Route::get('/high-school-program', [WebMenuController::class, 'high_school_program'])->name('web_menu_high_school_program');
Route::get('/hosting-with-isp', [WebMenuController::class, 'hosting_with_isp'])->name('web_menu_hosting_with_isp');
Route::get('/intern-and-corporate-housing', [WebMenuController::class, 'intern_and_corporate_housing'])->name('web_menu_intern_and_corporate_housing');
Route::get('/school-and-company-housing', [WebMenuController::class, 'school_and_company_housing'])->name('web_menu_school_and_company_housing');
Route::get('/isp-portal', [WebMenuController::class, 'isp_portal'])->name('web_menu_isp_portal');

/** Web Menu Routes ends*/


//});
/** Web Auth Routes starts*/
Route::get('/register', [WebAuthController::class, 'register_portal'])->name('web_register_portal');
Route::get('/register-form/{id?}', [WebAuthController::class, 'register_form'])->name('web_register_form');
Route::get('/register-code', [WebAuthController::class, 'register_code'])->name('web_register_code');
Route::post('/registration', [WebAuthController::class, 'register'])->name('web_registration');
Route::get('/user-verified/{id?}', [WebAuthController::class, 'user_verified'])->name('user_verified');
Route::get('/login', [WebAuthController::class, 'login'])->name('login');
Route::post('/logged-in', [WebAuthController::class, 'logged_in'])->name('web_logged_in');
Route::get('/logout', [WebAuthController::class, 'logout'])->name('logout');

/** For stripe */
Route::get('stripe-form/{userId}', [WebPaymentController::class, 'stripe_form'])->name('web_stripe_form');
Route::post('/payment/{userId}', [WebPaymentController::class, 'event_stripe'])->name('web_stripe_post');


    Route::get('new-application-form',function(){
//        $agencies = AgentModel::where('status', 1)->get();
        return view('student.application-form.new-application-form');
    });
//    Route::get('new-application-form', [StudentDashboardController::class, 'new_application_form']);
//    Route::post('new-application-form-submit', [StudentDashboardController::class, 'new_application_form_submit'])->name('new_student_application_form_submit');



/** Forgot Password View */
Route::get('/forgot-password', [WebAuthController::class, 'forgot_password_view'])->name('web_forgot_Password');
/** Forgot Password Email Shoot */
Route::post('/forgot-password-email', [WebAuthController::class, 'forgot_password'])->name('web_forgot_password_email');
/** Reset Password View */
Route::get('/reset-password/{user}', [WebAuthController::class, 'reset_password'])->name('web_reset_password');
/** Reset Password Submit */
Route::post('/reset-password-data/{user}', [WebAuthController::class, 'reset_password_submit'])->name('web_reset_password_submit');
