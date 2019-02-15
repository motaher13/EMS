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
Route::get('/posts/{id}',['as'=>'post.selected','uses'=>'Dashboard\MainDashboardController@selected']);
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
    Route::get('course/edit/{id}',['as'=>'course.edit','uses'=>'CourseController@edit']);
    Route::get('course/delete/{id}',['as'=>'course.delete','uses'=>'CourseController@delete']);
    Route::post('course/update/{id}',['as'=>'course.update','uses'=>'CourseController@update']);

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

    Route::get('exam/held',['as'=>'exam.held','uses'=>'ExamTakeController@examHeld']);
    Route::get('exam/sheet/list/{id}',['as'=>'exam.sheetList','uses'=>'ExamTakeController@showSheetList']);
    Route::get('exam/sheet/{id}',['as'=>'exam.sheet','uses'=>'ExamTakeController@showSheet']);
    Route::post('exam/sheet/{id}',['as'=>'exam.examine','uses'=>'ExamTakeController@examine']);
    Route::post('exam/sheet-update/{id}',['as'=>'exam.examine-update','uses'=>'ExamTakeController@examineUpdate']);

    Route::get('exam/publish/{id}',['as'=>'exam.publish','uses'=>'ExamTakeController@publish']);


    Route::get('result/examined',['as'=>'result.examined','uses'=>'ExamTakeController@resultExamined']);
    Route::get('result/batch/{id}',['as'=>'result.batch','uses'=>'ExamTakeController@resultBatch']);





    Route::get('post/create',['as'=>'post.create','uses'=>'PostController@create']);
    Route::post('post/create',['as'=>'post.create','uses'=>'PostController@store']);
    Route::get('post/created',['as'=>'post.created','uses'=>'PostController@showCreated']);
    Route::get('post/show/{id}',['as'=>'post.show','uses'=>'PostController@show']);
    Route::get('post/edit/{id}',['as'=>'post.edit','uses'=>'PostController@edit']);
    Route::post('post/update/{id}',['as'=>'post.update','uses'=>'PostController@update']);
    Route::get('post/delete/{id}',['as'=>'post.delete','uses'=>'PostController@delete']);

    
});


Route::group(['middleware' => ['role:student|teacher']],function (){

    Route::get('result/examined',['as'=>'result.examined','uses'=>'ExamTakeController@resultExamined']);
    Route::get('result/batch/{id}',['as'=>'result.batch','uses'=>'ExamTakeController@resultBatch']);


});



Route::group(['middleware' => ['role:student']],function (){

    Route::get('course',['as'=>'course.list','uses'=>'QuestionController@courseList']);
    Route::get('course/questions/{course_code}',['as'=>'course.questions','uses'=>'QuestionController@list']);
    Route::get('question/{id}',['as'=>'question.show','uses'=>'QuestionController@show']);

//    Route::get('exam/{id}',['as'=>'exam.list','uses'=>'ExamTakeController@list']);
    Route::get('exam/list/{id}',['as'=>'exam.list-list','uses'=>'ExamTakeController@list']);
    Route::post('exam/participate/{id}',['as'=>'exam.take','uses'=>'ExamTakeController@take']);
    Route::get('exam/password/{id}',['as'=>'exam.password','uses'=>'ExamTakeController@password']);
    Route::post('exam/answer/{id}',['as'=>'exam.answer','uses'=>'ExamTakeController@storeAnswer']);

    Route::get('exam/course',['as'=>'exam.course','uses'=>'ExamTakeController@course']);
//    Route::get('exam/course',function (){
//        return 'abul';
//    })->name('exam.course');

    Route::get('result/personal',['as'=>'result.personal','uses'=>'ExamTakeController@resultPersonal']);
    Route::get('exam/sheet/marks/{id}',['as'=>'exam.sheetMarks','uses'=>'ExamTakeController@showSheetMarks']);

});

Route::group(['middleware'=>['role:admin|tutor']],function (){
    Route::delete('course/delete/{id}',['as'=>'course.delete','uses'=>'CourseController@delete']);
});


Route::get('/test',function(){
    return view('test');
});




