<?php

use Illuminate\Support\Facades\Route;

//controller groups
use App\Http\Controllers\admin\
{   /** Admin */
    AgentController,
    AirportPickupController,
    DashboardController,
    CoordinatorController,
    AuthController,
    DriverController,
    AgencyController,
    AdminProfileController
};
use App\Http\Controllers\admin\student\
{   /** Admin->Student */
    AdminStudentController,
    AdminStudentApplicationController,
    AdminStudentCrudController
};
use App\Http\Controllers\student\
{   /** Web & Student */
    StudentDashboardController,
    StudentApplicationController
};

use App\Http\Controllers\admin\host\
{   /** Admin->Host */
    AdminHostController,
    AdminHostApplicationController,
    AdminHostCrudController
};
use App\Http\Controllers\host\
{   /** Web & Host */
    HostDashboardController,
    HostApplicationController
};

use App\Http\Controllers\coordinator\
{   /** Coordinator */
    CoordinatorDashboardController
};

use App\Http\Controllers\driver\
{   /** Driver */
    DriverDashboardController
};

//Web
use App\Http\Controllers\web\
{   /** Web */
    WebController,
    WebMenuController,
    WebAuthController,
    WebPaymentController
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

    /** Dashboard Routes */
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin_dashboard');

    /** Student Routes */
    /** Student Crud Routes Start */
    Route::get('student/details', [AdminStudentCrudController::class, 'details'])->name('admin_student_details');
    Route::get('student/details/manage-student/{id?}', [AdminStudentCrudController::class, 'manage_student'])->name('admin_manage_student_details');
    Route::post('student/details/manage-student-process/{id?}', [AdminStudentCrudController::class, 'manage_student_process'])->name('admin_manage_student_process');
    /** Student Crud Routes End */
    Route::get('student/applications', [AdminStudentController::class, 'student_applications'])->name('admin_student_applications');
    Route::get('student/view-applications/{user_id}', [AdminStudentApplicationController::class, 'view_student_application'])->name('admin_view_student_application');
    /** Student Application Update Start */
    Route::post('student/applications/application-form-submit1/{user_id}', [AdminStudentApplicationController::class, 'saf_submit_1'])->name('admin_saf_submit_1');
    Route::post('student/applications/application-form-submit2-1/{user_id}', [AdminStudentApplicationController::class, 'saf_submit_2_1'])->name('admin_saf_submit_2_1');
    Route::post('student/applications/application-form-submit2-2/{user_id}', [AdminStudentApplicationController::class, 'saf_submit_2_2'])->name('admin_saf_submit_2_2');
    Route::post('student/applications/application-form-submit3/{user_id}', [AdminStudentApplicationController::class, 'saf_submit_3'])->name('admin_saf_submit_3');
    Route::post('student/applications/application-form-submit4/{user_id}', [AdminStudentApplicationController::class, 'saf_submit_4'])->name('admin_saf_submit_4');
    Route::post('student/applications/application-form-submit5/{user_id}', [AdminStudentApplicationController::class, 'saf_submit_5'])->name('admin_saf_submit_5');
    Route::post('student/applications/application-form-submit6/{user_id}', [AdminStudentApplicationController::class, 'saf_submit_6'])->name('admin_saf_submit_6');
    Route::post('student/applications/application-form-submit7/{user_id}', [AdminStudentApplicationController::class, 'saf_submit_7'])->name('admin_saf_submit_7');
    /** Student Application Update End */
    Route::post('student/applications/{user_id}', [AdminStudentApplicationController::class, 'student_application_status'])->name('admin_student_application_status');
    Route::get('student/payments', [AdminStudentController::class, 'payments'])->name('admin_student_payments');

    /** Admin School Start */
    Route::get('student/schools', [AdminStudentController::class, 'schools'])->name('admin_student_schools');
    Route::get('student/schools/manage-schools/{id?}', [AdminStudentController::class, 'manage_school'])->name('admin_manage_school');
    Route::post('student/schools/manage-schools-process/{id?}', [AdminStudentController::class, 'manage_school_process'])->name('admin_manage_school_process');
    Route::get('student/schools/delete/{id?}', [AdminStudentController::class, 'delete_school'])->name('admin_delete_school');
    /** Admin School End */

    /** Admin Region Start */
    Route::get('student/regions', [AdminStudentController::class, 'regions'])->name('admin_student_regions');
    Route::get('student/regions/manage-regions/{id?}', [AdminStudentController::class, 'manage_region'])->name('admin_manage_region');
    Route::post('student/regions/manage-regions-process/{id?}', [AdminStudentController::class, 'manage_region_process'])->name('admin_manage_region_process');
    Route::get('student/regions/delete/{id?}', [AdminStudentController::class, 'delete_region'])->name('admin_delete_region');
    /** Admin Region End */

    /** Host Crud Routes Start */
    Route::get('host/details', [AdminHostCrudController::class, 'details'])->name('admin_host_details');
    Route::get('host/details/manage-host/{id?}', [AdminHostCrudController::class, 'manage_host'])->name('admin_manage_host_details');
    Route::post('host/details/manage-host-process/{id?}', [AdminHostCrudController::class, 'manage_host_process'])->name('admin_manage_host_process');
    /** Host Crud Routes End */


    Route::get('host/host-applications', [AdminHostApplicationController::class, 'host_applications'])->name('admin_host_applications');
    Route::get('host/host-applications/host-application-detail/{user_id?}', [AdminHostApplicationController::class, 'host_application_detail'])->name('admin_host_application_detail');
    Route::post('host/host-applications/host-application-detail/host-application-status/{id?}', [AdminHostApplicationController::class, 'host_application_detail_status'])->name('admin_host_application_status');
    Route::post('host-information-application/{id?}', [AdminHostApplicationController::class, 'host_information_application'])->name('admin_update_host_application');
    Route::post('host-partner-application/{id?}', [AdminHostApplicationController::class, 'host_partner_application'])->name('admin_update_partner_application');
    Route::post('host-adult-application/{id?}', [AdminHostApplicationController::class, 'host_adult_application'])->name('admin_update_adult_application');
    Route::post('host-child-application/{id?}', [AdminHostApplicationController::class, 'host_childs_application'])->name('admin_update_child_application');
    Route::post('host-pets-application/{id?}', [AdminHostApplicationController::class, 'host_pets_application'])->name('admin_update_pets_application');
    Route::post('host-house-school-student-application/{id?}', [AdminHostApplicationController::class, 'host_house_school_student_application'])->name('admin_update_house_school_student_application');
    Route::post('host-personal-details-application/{id?}', [AdminHostApplicationController::class, 'host_personal_details_application'])->name('admin_update_personal_details_application');
    Route::post('host-emergency-details-application/{id?}', [AdminHostApplicationController::class, 'host_emergency_details_application'])->name('admin_update_emergency_details_application');

    /**  Delete User not in flow */
    /** Route::get('host/details/delete/{id?}', [AdminHostController::class, 'delete_host'])->name('admin_delete_host'); */

    Route::get('host/visits', [AdminHostController::class, 'visits'])->name('admin_host_visits');
    /** Host Routes End */

    /** Airport Routes*/
    Route::get('airport-pickup/', [AirportPickupController::class, 'airport_pickup'])->name('admin_airport_pickup');
    Route::get('airport-pickup/drivers', [AirportPickupController::class, 'drivers'])->name('admin_drivers');

    /** Admin Airlines */
    Route::get('airport-pickup/airlines', [AirportPickupController::class, 'airlines'])->name('admin_airport_pickup_airlines');
    Route::get('airport-pickup/airlines/manage-airlines/{id?}', [AirportPickupController::class, 'manage_airline'])->name('admin_manage_airlines');
    Route::post('airport-pickup/airlines/manage-airlines-process/{id?}', [AirportPickupController::class, 'manage_airline_process'])->name('admin_manage_airlines_process');
    Route::get('airport-pickup/airlines/delete/{id?}', [AirportPickupController::class, 'delete_airline'])->name('admin_delete_airline');


    /** Admin Driver */
    Route::get('drivers/details', [DriverController::class, 'drivers'])->name('admin_driver_details');
    Route::get('drivers/details/manage-driver/{id?}', [DriverController::class, 'manage_driver'])->name('admin_manage_driver_details');
    Route::post('drivers/details/manage-driver-process/{id?}', [DriverController::class, 'manage_driver_process'])->name('admin_driver_details_process');
    Route::get('drivers/details/delete/{id?}', [DriverController::class, 'delete_driver'])->name('admin_delete_driver');

    /** Agent Routes*/
    Route::get('agents/details', [AgentController::class, 'agents'])->name('admin_agents_details');
    Route::get('agents/details/manage-agent/{id?}', [AgentController::class, 'manage_agent'])->name('admin_manage_agent_details');
    Route::post('agents/details/manage-agent-process/{id?}', [AgentController::class, 'manage_agent_process'])->name('admin_agent_details_process');
    Route::get('agents/details/delete/{id?}', [AgentController::class, 'delete_agent'])->name('admin_delete_agent');

    /** agencies Routes*/
    Route::get('agencies/details', [AgencyController::class, 'agencies'])->name('admin_agencies_details');
    Route::get('agencies/details/manage-agency/{id?}', [AgencyController::class, 'manage_agency'])->name('admin_manage_agency_details');
    Route::post('agencies/details/manage-agency-process/{id?}', [AgencyController::class, 'manage_agency_process'])->name('admin_agency_details_process');
    Route::get('agencies/details/delete/{id?}', [AgencyController::class, 'delete_agency'])->name('admin_delete_agency');

    /** Coordinators Routes*/
    Route::get('coordinators/details', [CoordinatorController::class, 'coordinators'])->name('admin_coordinators_details');
    Route::get('coordinators/details/manage-coordinator/{id?}', [CoordinatorController::class, 'manage_coordinator'])->name('admin_manage_coordinator_details');
    Route::post('coordinators/details/manage-coordinator-process/{id?}', [CoordinatorController::class, 'manage_coordinator_process'])->name('admin_coordinator_details_process');
    Route::get('coordinators/details/delete/{id?}', [CoordinatorController::class, 'delete_coordinator'])->name('admin_delete_coordinator');


    /** Admin Profile Routes*/
    Route::get('admin/admin-profile/admin-manage-password', [AdminProfileController::class, 'manage_password'])->name('admin_manage_password');
    Route::post('admin/admin-profile/admin-password-process', [AdminProfileController::class, 'password_process'])->name('admin_password_process');
    Route::get('admin/admin-profile/admin-manage-profile', [AdminProfileController::class, 'manage_profile'])->name('admin_manage_profile');
    Route::post('admin/admin-profile/admin-profile-process', [AdminProfileController::class, 'profile_process'])->name('admin_profile_process');

    /** Reports Routes*/
    Route::get('reports/placements', [CoordinatorController::class, 'placements'])->name('admin_reports_placements');
});

/*
|--------------------------------------------------------------------------
| student routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'student', 'middleware' => 'StudentAuthMiddleware'], function () {


    Route::group(['middleware' => 'StudentApplicationApproved'], function () {
        /*Dashboard Routes*/
        Route::get('dashboard', [StudentDashboardController::class, 'dashboard'])->name('student_dashboard');
    });


    /** Application Form*/
    Route::get('application-form', [StudentDashboardController::class, 'application_form'])->name('student_application_form')->middleware('preventSubmitApplication');
    Route::post('application-form-submit', [StudentDashboardController::class, 'application_form_submit'])->name('student_application_form_submit')->middleware('preventSubmitApplication');


    /** Student Application Web Routes Start*/
    /**View*/
    Route::get('application-form', [StudentApplicationController::class, 'application_form'])->name('web_saf');
    /**Submit*/
    Route::post('application-form-submit1', [StudentApplicationController::class, 'saf_submit_1'])->name('web_saf_submit_1');
    Route::post('application-form-submit2-1', [StudentApplicationController::class, 'saf_submit_2_1'])->name('web_saf_submit_2_1');
    Route::post('application-form-submit2-2', [StudentApplicationController::class, 'saf_submit_2_2'])->name('web_saf_submit_2_2');
    Route::post('application-form-submit3', [StudentApplicationController::class, 'saf_submit_3'])->name('web_saf_submit_3');
    Route::post('application-form-submit4', [StudentApplicationController::class, 'saf_submit_4'])->name('web_saf_submit_4');
    Route::post('application-form-submit5', [StudentApplicationController::class, 'saf_submit_5'])->name('web_saf_submit_5');
    Route::post('application-form-submit6', [StudentApplicationController::class, 'saf_submit_6'])->name('web_saf_submit_6');
    Route::post('application-form-submit7', [StudentApplicationController::class, 'saf_submit_7'])->name('web_saf_submit_7');
    Route::post('application-form-submit8-1-1', [StudentApplicationController::class, 'saf_submit_8_1_1'])->name('web_saf_submit_8_1_1');
    Route::post('application-form-submit8-1-2', [StudentApplicationController::class, 'saf_submit_8_1_2'])->name('web_saf_submit_8_1_2');
    Route::post('application-form-submit8-2', [StudentApplicationController::class, 'saf_submit_8_2'])->name('web_saf_submit_8_2');
    /** Student Application Web Routes End*/
});
/*
|--------------------------------------------------------------------------
| host routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'host', 'middleware' => 'HostAuthMiddleware'], function () {

    Route::group(['middleware' => 'HostApplicationApproved'], function () {
        /**Dashboard Routes*/
        Route::get('dashboard', [HostDashboardController::class, 'dashboard'])->name('host_dashboard');
    });
    /** host application route start */
    Route::get('new-host-application-form', [HostApplicationController::class, 'host_application_form'])->name('web_haf');
    Route::post('host-information-application', [HostApplicationController::class, 'host_information_application'])->name('web_host_information_application');
    Route::post('host-partner-application', [HostApplicationController::class, 'host_partner_application'])->name('web_host_partner_application');
    Route::post('host-adult-application', [HostApplicationController::class, 'host_adult_application'])->name('web_host_adult_application');
    Route::post('host-childs-application', [HostApplicationController::class, 'host_childs_application'])->name('web_host_childs_application');
    Route::post('host-pets-house-student-school-application', [HostApplicationController::class, 'host_pets_house_student_school_application'])->name('web_host_pets_house_student_school_application');
    Route::post('host-personal-detail-application', [HostApplicationController::class, 'host_personal_detail_application'])->name('web_host_personal_detail_application');
    Route::post('host-emergency-contact-application', [HostApplicationController::class, 'host_emergency_contact_application'])->name('web_host_emergency_contact_application');
    /**  host application route end*/

});


/*
|--------------------------------------------------------------------------
| coordinators routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'coordinator', 'middleware' => 'CoAuthMiddleware'], function () {

    /** Dashboard Routes */
    Route::get('dashboard', [CoordinatorDashboardController::class, 'dashboard'])->name('coordinator_dashboard');
});
/*
|--------------------------------------------------------------------------
| driver routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'driver', 'middleware' => 'CoAuthMiddleware'], function () {

    /** Dashboard Routes */
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
Route::get('/under-construction', [WebController::class, 'under_construction'])->name('web_under_construction');

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


/** Forgot Password View */
Route::get('/forgot-password', [WebAuthController::class, 'forgot_password_view'])->name('web_forgot_Password');
/** Forgot Password Email Shoot */
Route::post('/forgot-password-email', [WebAuthController::class, 'forgot_password'])->name('web_forgot_password_email');
/** Reset Password View */
Route::get('/reset-password/{user}', [WebAuthController::class, 'reset_password'])->name('web_reset_password');
/** Reset Password Submit */
Route::post('/reset-password-data/{user}', [WebAuthController::class, 'reset_password_submit'])->name('web_reset_password_submit');


