<?php

use Illuminate\Support\Facades\Route;
use App\Mail\FireMailNotification;
use App\Models\Setting;
// use Vatttan\Apdf\Apdf;
// use PDF;
// use Mail;

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
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

$controller_path = 'App\Http\Controllers';

// Main Page Route

// layout
Route::get('/layouts/without-menu', $controller_path . '\layouts\WithoutMenu@index')->name('layouts-without-menu');
Route::get('/layouts/without-navbar', $controller_path . '\layouts\WithoutNavbar@index')->name('layouts-without-navbar');
Route::get('/layouts/fluid', $controller_path . '\layouts\Fluid@index')->name('layouts-fluid');
Route::get('/layouts/container', $controller_path . '\layouts\Container@index')->name('layouts-container');
Route::get('/layouts/blank', $controller_path . '\layouts\Blank@index')->name('layouts-blank');

// pages
Route::get('/pages/account-settings-notifications', $controller_path . '\pages\AccountSettingsNotifications@index')->name('pages-account-settings-notifications');
Route::get('/pages/account-settings-connections', $controller_path . '\pages\AccountSettingsConnections@index')->name('pages-account-settings-connections');
Route::get('/pages/misc-error', $controller_path . '\pages\MiscError@index')->name('pages-misc-error');
Route::get('/pages/misc-under-maintenance', $controller_path . '\pages\MiscUnderMaintenance@index')->name('pages-misc-under-maintenance');

// authentication
Route::get('/auth/login-basic', $controller_path . '\authentications\LoginBasic@index')->name('auth-login-basic');
Route::get('/auth/register-basic', $controller_path . '\authentications\RegisterBasic@index')->name('auth-register-basic');
Route::get('/auth/forgot-password-basic', $controller_path . '\authentications\ForgotPasswordBasic@index')->name('auth-reset-password-basic');

// cards
Route::get('/cards/basic', $controller_path . '\cards\CardBasic@index')->name('cards-basic');

// User Interface
Route::get('/ui/accordion', $controller_path . '\user_interface\Accordion@index')->name('ui-accordion');
Route::get('/ui/alerts', $controller_path . '\user_interface\Alerts@index')->name('ui-alerts');
Route::get('/ui/badges', $controller_path . '\user_interface\Badges@index')->name('ui-badges');
Route::get('/ui/buttons', $controller_path . '\user_interface\Buttons@index')->name('ui-buttons');
Route::get('/ui/carousel', $controller_path . '\user_interface\Carousel@index')->name('ui-carousel');
Route::get('/ui/collapse', $controller_path . '\user_interface\Collapse@index')->name('ui-collapse');
Route::get('/ui/dropdowns', $controller_path . '\user_interface\Dropdowns@index')->name('ui-dropdowns');
Route::get('/ui/footer', $controller_path . '\user_interface\Footer@index')->name('ui-footer');
Route::get('/ui/list-groups', $controller_path . '\user_interface\ListGroups@index')->name('ui-list-groups');
Route::get('/ui/modals', $controller_path . '\user_interface\Modals@index')->name('ui-modals');
Route::get('/ui/navbar', $controller_path . '\user_interface\Navbar@index')->name('ui-navbar');
Route::get('/ui/offcanvas', $controller_path . '\user_interface\Offcanvas@index')->name('ui-offcanvas');
Route::get('/ui/pagination-breadcrumbs', $controller_path . '\user_interface\PaginationBreadcrumbs@index')->name('ui-pagination-breadcrumbs');
Route::get('/ui/progress', $controller_path . '\user_interface\Progress@index')->name('ui-progress');
Route::get('/ui/spinners', $controller_path . '\user_interface\Spinners@index')->name('ui-spinners');
Route::get('/ui/tabs-pills', $controller_path . '\user_interface\TabsPills@index')->name('ui-tabs-pills');
Route::get('/ui/toasts', $controller_path . '\user_interface\Toasts@index')->name('ui-toasts');
Route::get('/ui/tooltips-popovers', $controller_path . '\user_interface\TooltipsPopovers@index')->name('ui-tooltips-popovers');
Route::get('/ui/typography', $controller_path . '\user_interface\Typography@index')->name('ui-typography');

// extended ui
Route::get('/extended/ui-perfect-scrollbar', $controller_path . '\extended_ui\PerfectScrollbar@index')->name('extended-ui-perfect-scrollbar');
Route::get('/extended/ui-text-divider', $controller_path . '\extended_ui\TextDivider@index')->name('extended-ui-text-divider');

// icons
Route::get('/icons/boxicons', $controller_path . '\icons\Boxicons@index')->name('icons-boxicons');

// form elements
Route::get('/forms/basic-inputs', $controller_path . '\form_elements\BasicInput@index')->name('forms-basic-inputs');
Route::get('/forms/input-groups', $controller_path . '\form_elements\InputGroups@index')->name('forms-input-groups');

// form layouts
Route::get('/form/layouts-vertical', $controller_path . '\form_layouts\VerticalForm@index')->name('form-layouts-vertical');
Route::get('/form/layouts-horizontal', $controller_path . '\form_layouts\HorizontalForm@index')->name('form-layouts-horizontal');

// tables
Route::get('/tables/basic', $controller_path . '\tables\Basic@index')->name('tables-basic');

Route::group(['middleware' => 'auth' ] , function(){
    $controller_path = 'App\Http\Controllers';

    Route::get('/dashboard', $controller_path . '\dashboard\Analytics@index')->name('dashboard-analytics');

    
//clients 
Route::get('/clients/add/new', $controller_path . '\dashboard\Crm@clientAddNew');
Route::post('/clients/add/new', $controller_path . '\dashboard\Crm@ClientAddNew')->name('client.add');
Route::get('/clients/all' , $controller_path. '\dashboard\Crm@ClientIndex')->name('client.all');
Route::get('/client/delete/{client_id}', $controller_path . '\dashboard\Crm@ClientDelete')->name('client.delete');
Route::get('/client/edit/{client_id}', $controller_path . '\dashboard\Crm@ClientEdit')->name('client.edit');
Route::post('/client/edit/{client_id}', $controller_path . '\dashboard\Crm@ClientEdit')->name('client.update');

//contacts
Route::get('/contacts/add/new', $controller_path . '\dashboard\Crm@contactAddNew');
Route::post('/contacts/add/new', $controller_path . '\dashboard\Crm@contactAddNew')->name('contact.add');
Route::get('/contacts/all' , $controller_path. '\dashboard\Crm@contactIndex')->name('contacts.all');
Route::get('/contact/delete/{contact_id}', $controller_path . '\dashboard\Crm@ContactDelete')->name('contact.delete');
Route::get('/contact/edit/{contact_id}', $controller_path . '\dashboard\Crm@ContactEdit')->name('contact.edit');
Route::post('/contact/edit/{contact_id}', $controller_path . '\dashboard\Crm@ContactEdit')->name('contact.update');


//Projects
Route::get('/projects/add/new', $controller_path . '\dashboard\Crm@ProjectAddNew')->name('project.create');
Route::post('/projects/add/new', $controller_path . '\dashboard\Crm@ProjectAddNew')->name('project.add');
Route::get('/projects/all' , $controller_path. '\dashboard\Crm@ProjectIndex')->name('projects.all');
Route::get('/project/delete/{project_id}', $controller_path . '\dashboard\Crm@ProjectDelete')->name('project.delete');
Route::get('/project/edit/{project_id}', $controller_path . '\dashboard\Crm@ProjectEdit')->name('project.edit');
Route::post('/project/edit/{project_id}', $controller_path . '\dashboard\Crm@ProjectEdit')->name('project.update');

//Services
Route::get('/services/add/new', $controller_path . '\dashboard\Crm@ServiceAddNew')->name('service.add');
Route::post('/services/add/new', $controller_path . '\dashboard\Crm@ServiceAddNew')->name('service.add');
Route::get('/services/all' , $controller_path. '\dashboard\Crm@ServiceIndex')->name('service.all');
Route::get('/lead/delete/{service_id}', $controller_path . '\dashboard\Crm@ServiceDelete')->name('service.delete');
Route::get('/service/edit/{service_id}', $controller_path . '\dashboard\Crm@ServiceEdit')->name('service.edit');
Route::post('/service/edit/{service_id}', $controller_path . '\dashboard\Crm@ServiceEdit')->name('service.update');


//Settings
Route::post('/dasboard/user/settings', $controller_path . '\dashboard\Crm@settings')->name('dashboard.user.settings');
Route::get('/pages/account-settings-account', $controller_path . '\pages\AccountSettingsAccount@index')->name('pages-account-settings-account');
Route::get('/pages/account-settings-new-user', $controller_path . '\pages\AccountSettingsAccount@NewUser')->name('pages-account-settings-new-user');
Route::post('/pages/account-settings-new-user', $controller_path . '\pages\AccountSettingsAccount@NewUser')->name('pages-account-settings-new-user');
Route::get('/pages/account-settings-new-user-edit/{user_id}', $controller_path . '\pages\AccountSettingsAccount@EditUser')->name('pages-account-settings-new-user-edit');
Route::post('/pages/account-settings-new-user-edit/{user_id}', $controller_path . '\pages\AccountSettingsAccount@EditUser')->name('pages-account-settings-new-user-edit');
Route::get('/pages/account-settings-new-user-delete/{user_id}', $controller_path . '\pages\AccountSettingsAccount@DeleteUser')->name('pages-account-settings-new-user-delete');
Route::get('/pages/users', $controller_path . '\pages\AccountSettingsAccount@Users')->name('pages-users');


//Events
Route::get('/events/add/new', $controller_path . '\dashboard\Crm@EventAddNew')->name('event.add');
Route::post('/events/add/new', $controller_path . '\dashboard\Crm@EventAddNew')->name('event.add');
Route::get('/events/all' , $controller_path. '\dashboard\Crm@EventIndex')->name('event.all');
Route::get('/event/delete/{event_id}', $controller_path . '\dashboard\Crm@EventDelete')->name('event.delete');
Route::get('/event/edit/{event_id}', $controller_path . '\dashboard\Crm@EventEdit')->name('event.edit');
Route::post('/event/edit/{event_id}', $controller_path . '\dashboard\Crm@EventEdit')->name('event.update');

Route::get('/event/registrations/sponsors/exhibitors', $controller_path . '\dashboard\Crm@EventRegistrations2');
Route::get('/event/registration/sponsors/exhibitors/delete/{id}', $controller_path . '\dashboard\Crm@EventRegistrations2Delete');
Route::get('/event/registrations/sponsors/exhibitors/{registraion_id}', $controller_path . '\dashboard\Crm@EventRegistrationsSponExpoView');
Route::get('/event/registrations/sponsors/exhibitors/types/locations', $controller_path . '\dashboard\Crm@EventRegistrarTypes')->name('registrar.types');
Route::get('/event/registrations/sponsors/exhibitors/type/locations/{registrar_type_id}', $controller_path . '\dashboard\Crm@EventRegistrarTypesLocations');
Route::post('/event/registrations/sponsors/exhibitors/type/locations/{registrar_type_id}', $controller_path . '\dashboard\Crm@EventRegistrarTypesLocations')->name('registrar.type.locations');
Route::get('/event/registrations/sponsors/exhibitors/type/create', $controller_path . '\dashboard\Crm@EventRegistrarTypesCreate');
Route::post('/event/registrations/sponsors/exhibitors/type/create', $controller_path . '\dashboard\Crm@EventRegistrarTypesCreate')->name('registrar.type.create');
Route::get('/event/registrations/sponsors/exhibitors/type/update/{registrar_type_id}', $controller_path . '\dashboard\Crm@EventRegistrarTypesUpdate')->name('registrar.type.update');;
Route::post('/event/registrations/sponsors/exhibitors/type/update/{registrar_type_id}', $controller_path . '\dashboard\Crm@EventRegistrarTypesUpdate')->name('registrar.type.update');;

 
 

Route::get('/event/registrations', $controller_path . '\dashboard\Crm@EventRegistrations');
Route::get('/event/registration/delete/{id}', $controller_path . '\dashboard\Crm@EventRegistrationsDelete');


//GET ALL
Route::get('/event/sponsors/{event_id}', $controller_path . '\dashboard\Crm@EventSponsors');
Route::get('/event/exhibitors/{event_id}', $controller_path . '\dashboard\Crm@EventExhibitors');

//DELETE
Route::get('/event/sponsor/delete/{sponsor_id}', $controller_path . '\dashboard\Crm@EventSponsorDelete');
Route::get('/event/exhibitor/delete/{exhibitor_id}', $controller_path . '\dashboard\Crm@EventExhibitorDelete');

//POST
Route::post('/event/sponsor/{event_id}', $controller_path . '\dashboard\Crm@EventSponsors')->name('event.sponsor.create');
Route::post('/event/exhibitor/{event_id}', $controller_path . '\dashboard\Crm@EventExhibitors')->name('event.exhibitor.create');
Route::get('/event/sponsor/{event_id}', $controller_path . '\dashboard\Crm@EventSponsor')->name('event.sponsor.create');
Route::get('/event/exhibitor/{event_id}', $controller_path . '\dashboard\Crm@EventExhibitor')->name('event.exhibitor.create');

//EDIT
Route::post('/event/sponsor/edit/{event_id}/{sponsor_id}', $controller_path . '\dashboard\Crm@EventSponsorEdit')->name('event.sponsor.edit');
Route::post('/event/exhibitor/edit/{event_id}/{exhibitor_id}', $controller_path . '\dashboard\Crm@EventExhibitorEdit')->name('event.exhibitor.edit');
Route::get('/event/sponsor/edit/{event_id}/{sponsor_id}', $controller_path . '\dashboard\Crm@EventSponsorEdit')->name('event.sponsor.edit');
Route::get('/event/exhibitor/edit/{event_id}/{exhibitor_id}', $controller_path . '\dashboard\Crm@EventExhibitorEdit')->name('event.exhibitor.edit');

Route::get('/site/settings', $controller_path . '\dashboard\Crm@SiteSettings')->name('settings');
Route::post('/site/settings', $controller_path . '\dashboard\Crm@SiteSettings')->name('settings');
Route::get('/slider/settings', $controller_path . '\dashboard\Crm@SliderSettings')->name('settings.slider');
Route::get('/slider/edit/{slider_id}', $controller_path . '\dashboard\Crm@SliderSetting')->name('setting.slider');
Route::post('/slider/settings/{slider_id}', $controller_path . '\dashboard\Crm@SliderSettings')->name('settings.slider');

Route::get('/event/settings', $controller_path . '\dashboard\Crm@EventSettings')->name('event.settings');
Route::post('/event/settings', $controller_path . '\dashboard\Crm@EventSettings')->name('event.settings');

Route::get('/about/settings', $controller_path . '\dashboard\Crm@AboutSettings')->name('about.settings');
Route::post('/about/settings', $controller_path . '\dashboard\Crm@AboutSettings')->name('about.settings');

Route::get('/subscriptions/all' , $controller_path. '\dashboard\Crm@SubscriptionsIndex')->name('subscriptions.all');

Route::get('/promoter/registration/{promoter}', $controller_path . '\dashboard\Crm@showPromoter')->name('promoter.register');
Route::get('/promoters/registrations/all', $controller_path . '\dashboard\Crm@showPromoters')->name('promoter.register');
Route::post('/promoters/registrations/filter', $controller_path . '\dashboard\Crm@filterPromoters')->name('promoter.filter');


});


Route::get('/contact', $controller_path . '\ContactController@create');
Route::post('/contact/{source}', $controller_path . '\ContactController@create')->name('contact');
Route::get('/about', $controller_path . '\ClientController@about');
Route::get('/projects', $controller_path . '\ClientController@projects');
Route::get('/services', $controller_path . '\ClientController@services');

Route::get('/site/event/IEC', $controller_path . '\ClientController@SiteEventRegistration')->name('event.registration');
Route::get('/site/event/IEC/event_token:eventostbomentos2023116202206111115/referral_link', $controller_path . '\ClientController@SiteEventRegistrationWithRefferal')->name('event.registration.referral');
Route::get('/site/event/IEC/event_token:TGFmdCByZWZmZXJhbCBsaW5rIGZvciByZWd/referral_link', $controller_path . '\ClientController@SiteEventRegistrationWithRefferal2')->name('event.registration.referral2');
Route::get('/site/event/IEC/event_token:R2hhZGEgcmVmZXJyYWwgbGluawo=/referral_link', $controller_path . '\ClientController@SiteEventRegistrationWithRefferal3')->name('event.registration.referral3');
  
Route::post('/site/event/registration/event_token:eventostbomentos2023116202206111115/register', $controller_path . '\ClientController@SiteEventRegistration')->name('event.registration.guestRegister');
Route::get('/site/event/registration/event_token:eventostbomentos2023116202206111115/register/response/{id}', $controller_path . '\ClientController@SiteEventRegistrationResponse')->name('event.registration.guestRegister.response');
Route::post('/site/event/registration/event_token:eventostbomentos20231162022061111152023', $controller_path . '\ClientController@SiteEventRegistrationSponExhi')->name('event.registration.spon_exhi');

Route::get('/project-details/{page}' ,function($page_number){
    // return $page_number;
   return view("project-details-$page_number")->with('settings' , Setting::first());
});

Route::get('/project/details/{project_id}' , $controller_path . '\ClientController@projectDetails');
Route::get('/qr/code/scan/{data}', $controller_path . '\ClientController@SiteEventRegistrationQrCode')->name('event.registration.qr');
Route::get('/site/event/reg/type/num/event_token:eventostbomentos2023116202206111115/{reg_type}', $controller_path . '\ClientController@RegNumberFromType')->name('event.RegNumberFromType');



Route::get('/locale/{language}' , $controller_path . '\LocalizationController@ChangeLocaleLanguage')->name('event.locale');

Route::get('/subscribe', $controller_path . '\ClientController@subscribe')->name('subscribe');

Route::get('/event/wa', $controller_path . '\ClientController@eventMarketing')->name('event.marketing');

Route::get('/promoters/registration', $controller_path . '\PromoterController@register')->name('promoter.register');
// Route::get('/promoters/registration' ,function(){
  
//    return view('comming_soon');

// });

Route::post('/promoters/registration', $controller_path . '\PromoterController@register')->name('promoter.register');
Route::get('/promoters/registration/country/cities/{country_id}', $controller_path . '\PromoterController@cities_from_country_id')->name('promoter.country_cities');

require_once('./vendor/autoload.php');
use Postmark\PostmarkClient;
Route::get('/test' , function(){
    

    // Import the Postmark Client Class:
   
    
    $client = new PostmarkClient("58d542bb-0b45-4041-9b41-7f051d691c6a");
    $fromEmail = "no-reply@umbrella.sa";
    $toEmail = "omarelgendy79@gmail.com";
    $subject = "Hello from Postmark";
    $htmlBody = "<strong>Hello</strong> dear Postmark user.";
    $textBody = "Hello dear Postmark user.";
    $tag = "example-email-tag";
    $trackOpens = true;
    $trackLinks = "None";
    $messageStream = "outbound";
    
    // Send an email:
    $sendResult = $client->sendEmail(
      $fromEmail,
      $toEmail,
      $subject,
      $htmlBody,
      $textBody,
      $tag,
      $trackOpens,
      NULL, // Reply To
      NULL, // CC
      NULL, // BCC
      NULL, // Header array
      NULL, // Attachment array
      $trackLinks,
      NULL, // Metadata array
      $messageStream
    );
    
    
});

