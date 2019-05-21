<?php
/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', 'FrontendController@index')->name('index');

Route::get('/new-user', 'UserController@index')->name('index');

Route::post("/saveUser",'UserController@saveUser')->name('saveUser');

Route::get('macros', 'FrontendController@macros')->name('macros');
Route::post('/get/states', 'FrontendController@getStates')->name('get.states');
Route::post('/get/cities', 'FrontendController@getCities')->name('get.cities');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 */
Route::post('loginUser', 'UserController@loginUser')->name('loginUser');

Route::get("/startup",'UserController@startup')->name('startup'); 
Route::get('/startupfilter/{market}/{technology}/{business_goal}/{sort_by}', 'UserController@startupfilter')->name('startupfilter');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/investor', 'UserController@investor_view')->name('investor_view');
    Route::get('/experience', 'UserController@experience')->name('experience');
    Route::get('/details', 'UserController@details')->name('details');
    Route::post("/saveAccreditation",'UserController@saveAccreditation')->name('saveAccreditation');

    Route::post("/saveDetails",'UserController@saveDetails')->name('saveDetails');
    Route::post("/saveExperience",'UserController@saveExperience')->name('saveExperience');

    Route::get('/startupcompany', 'UserController@startup_view')->name('startup_view');
    Route::get('/startupactivity', 'UserController@startup_activity')->name('startupactivity');
    Route::get('/startupfundraising', 'UserController@startup_fundraising')->name('startupfundraising');
    Route::get('/startup_profile', 'UserController@startup_profile')->name('startup_profile');

    Route::get('/fundraising', 'UserController@fundraising_view')->name('fundraising_view');
    Route::post("/saveCompanyInfo",'UserController@saveCompanyInfo')->name('saveCompanyInfo');
   	Route::post("/saveProfileData",'UserController@saveProfileData')->name('saveProfileData');   
    Route::post("/saveProfileImage",'UserController@saveProfileImage')->name('saveProfileImage');
    Route::get("/onboard",'UserController@onboard')->name('onboard'); 
    Route::get("/feedActivity",'UserController@feedActivity')->name('feedActivity');
    Route::get("/myInterest",'UserController@myInterest')->name('myInterest');  
    Route::post("/saveMyInterestOptions",'UserController@saveMyInterestOptions')->name('saveMyInterestOptions');
    Route::get("/account_setting",'UserController@account_setting')->name('account_setting');  
    Route::post("/changePassword",'UserController@changePassword')->name('changePassword');
    Route::post("/saveSpecifyRound",'CompanyController@save_fundingRound')->name('save_fundingRound');
    Route::post("/saveRoundInvestor",'UserController@saveRoundInvestor')->name("saveRoundInvestor");



    Route::get("/profile_setting",'UserController@profile_setting')->name('profile_setting');  
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        /*
         * User Dashboard Specific
         */
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

        /*
         * User Account Specific
         */
        Route::get('account', 'AccountController@index')->name('account');

        /*
         * User Profile Specific
         */
        Route::patch('profile/update', 'ProfileController@update')->name('profile.update');

        /*
         * User Profile Picture
         */
        Route::patch('profile-picture/update', 'ProfileController@updateProfilePicture')->name('profile-picture.update');
    });
});

/*
* Show pages
*/
Route::get('pages/{slug}', 'FrontendController@showPage')->name('pages.show');