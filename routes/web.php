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

Route::get('/',['as'=>'home','uses'=>'Dashboard\MainDashboardController@home']);
// Password Reset Routes...
Route::post('password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
Route::get('password/reset', ['as' => 'password.request', 'uses' => 'Auth\ResetPasswordController@showLinkRequestForm']);
Route::post('password/reset', ['as' => '', 'uses' => 'Auth\ResetPasswordController@reset']);
Route::get('password/reset/{token}', ['as' => 'password.reset', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
// Guest Routes
Route::group(['namespace' => 'Auth','middleware' => ['guest']],function (){
    //login
    Route::get('login',['as'=>'login','uses'=>'AuthController@login']);
    Route::post('login',['as'=>'web.do.login','uses'=>'AuthController@doLogin']);
    Route::get('register',['as'=>'web.register','uses'=>'AuthController@register']);
    Route::post('register',['as'=>'web.do.register','uses'=>'AuthController@doRegister']);


});
// Auth Routes
Route::group(['middleware' => ['auth']],function (){
    Route::get('user/{id}/edit',['as' => 'user.edit', 'uses' => 'User\UserController@edit']);
    Route::put('user/{id}',['as' => 'user.update', 'uses' => 'User\UserController@update']);
    Route::get('user/{id}/show',['as'=>'user.show','uses'=>'User\UserController@show']);
    Route::post('user/store',['as'=>'user.store','uses'=>'User\UserController@store']);
    Route::get('user/{id}/edit',['as'=>'user.edit','uses'=>'User\UserController@edit']);
    Route::delete('user/{id}',['as'=>'user.delete','uses'=>'User\UserController@delete']);
    Route::get('user/create',['as'=>'user.create','uses'=>'User\UserController@create']);
    Route::get('users',['as'=>'user.index','uses'=>'User\UserController@index']);
    Route::get('logout',['as' => 'logout','uses' => 'Auth\AuthController@logout']);
    Route::get('dashboard',['as'=>'dashboard.main','uses'=>'Dashboard\MainDashboardController@dashboard']);
    Route::get('password-reset',['as' => 'profile.password.reset','uses' => 'Auth\AuthController@reset']);
    Route::post('password-reset',['as' => 'password.doReset','uses' => 'Auth\AuthController@doReset']);
    Route::get('profile',['as' => 'profile','uses' => 'User\UserController@profile']);
    Route::post('profile',['as' => 'profile.update','uses' => 'User\UserController@profileUpdate']);
    Route::get('profile-pic-change',['as' => 'profile.pic.change','uses' => 'User\UserController@profilePicChange']);
    Route::post('profile-pic-change',['as' => 'profile.pic.update','uses' => 'User\UserController@doProfilePicChange']);

    // laravel logs viewer
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    Route::get('filemanager',['as'=>'filemanager','uses'=>'FileController@index']);



});

Route::group(['middleware' => ['role:teacher']],function (){
    Route::get('course/create',['as'=>'course.create','uses'=>'CourseController@create']);
    Route::post('course/create',['as'=>'course.create','uses'=>'CourseController@store']);
    Route::get('course/created',['as'=>'course.created','uses'=>'CourseController@showCreated']);

    Route::get('exam/create',['as'=>'exam.create','uses'=>'ExamController@create']);
    Route::post('exam/create',['as'=>'exam.create','uses'=>'ExamController@store']);
    Route::get('exam/created',['as'=>'exam.created','uses'=>'ExamController@showCreated']);
    Route::get('exam/show/{id}',['as'=>'exam.show','uses'=>'ExamController@show']);

    Route::get('exam/add-mcqq/{id}',['as'=>'exam.add-mcqq','uses'=>'ExamController@addMcqQ']);
    Route::post('exam/add-mcqq/{id}',['as'=>'exam.add-mcqq','uses'=>'ExamController@storeMcqQ']);
    Route::get('exam/add-writtenq/{id}',['as'=>'exam.add-writtenq','uses'=>'ExamController@addWrittenQ']);
    Route::post('exam/add-writtenq/{id}',['as'=>'exam.add-writtenq','uses'=>'ExamController@storeWrittenQ']);



    Route::get('exam/edit/{id}',['as'=>'exam.edit','uses'=>'ExamController@edit']);
    Route::post('exam/edit/{id}',['as'=>'exam.edit','uses'=>'ExamController@update']);

    Route::get('exam/edit-mcqq/{id}',['as'=>'exam.edit-mcqq','uses'=>'ExamController@editMcqQ']);
    Route::post('exam/edit-mcqq/{id}',['as'=>'exam.edit-mcqq','uses'=>'ExamController@updateMcqQ']);

    Route::get('exam/edit-writtenq/{id}',['as'=>'exam.edit-writtenq','uses'=>'ExamController@editWrittenQ']);
    Route::post('exam/edit-writtenq/{id}',['as'=>'exam.edit-writtenq','uses'=>'ExamController@updateWrittenQ']);

    Route::get('exam/delete-mcqq/{id}',['as'=>'exam.delete-mcqq','uses'=>'ExamController@deleteMcqQ']);
    Route::get('exam/delete-writtenq/{id}',['as'=>'exam.delete-writtenq','uses'=>'ExamController@deleteWrittenQ']);

});

Route::group(['middleware' => ['role:student']],function (){

    Route::get('course',['as'=>'course.list','uses'=>'QuestionController@courseList']);
    Route::get('course/questions',['as'=>'course.questions','uses'=>'QuestionController@list']);

    Route::get('question/{id}',['as'=>'questions.show','uses'=>'QuestionController@show']);
    


});

Route::group(['middleware'=>['role:admin|tutor']],function (){
    Route::delete('course/delete/{id}',['as'=>'course.delete','uses'=>'CourseController@delete']);
});


Route::get('/test','ExamController@test');




