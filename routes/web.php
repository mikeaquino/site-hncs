<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomePageController@displaycarousel');
Route::get('/news/blog/{id}', 'HomePageController@showblog');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/content-management/cover-photos', 'ContentManagementController@display')->name('cover-photos');
Route::get('/content-management/cover-photos/edit/{id}', 'ContentManagementController@edit');
Route::put('/content-management/cover-photos/{id}', 'ContentManagementController@update');
Route::get('/content-management/change-featured-video', 'ContentManagementController@displayvid')->name('f-vid');
Route::put('/content-management/change-featured-video/{id}', 'ContentManagementController@updatevid');

Route::get('/content-management/blog', 'BlogController@index');
Route::get('/content-management/blog/create', 'BlogController@create');
Route::post('/content-management/blog', 'BlogController@store');
Route::get('/blog/preview/{id}', 'BlogController@preview');
Route::get('/content-management/edit/{id}', 'BlogController@edit');
Route::get('/blogstatus/{id}/{status}', 'BlogController@status');
Route::put('/content-management/blog/{id}', 'BlogController@update');
Route::get('/delete/{imageName}', 'BlogController@delete');

#Anouncements
Route::get('/content-management/announcements/', 'AnnouncementsControllers@DisplaysAnnouncementsList');
Route::get('/content-management/createAnnouncement/', 'AnnouncementsControllers@CreateAnnouncement');
Route::post('/content-management/insertAnnouncement/', 'AnnouncementsControllers@Insert')->name('insertAnnouncement');
Route::get('/content-management/editAnnouncement/{id}', 'AnnouncementsControllers@EditAnnouncement');
Route::get('/content-management/announcementStatus/{id}/{status}', 'AnnouncementsControllers@announcementStatus');
Route::post('/content-management/updateAnnouncement/', 'AnnouncementsControllers@UpdateAnnouncement')->name('updateAnnouncement');
Route::get('/content-management/deleteAnnouncement/{id}/{filename}', 'AnnouncementsControllers@deleteAnnouncement');

/*Admission*/
Route::get('/admission', 'AdmissionController@displayAdmissionPage');

/*About*/
Route::get('/about', 'AboutController@displayAboutPage');

/*Contact*/
Route::get('/contact', 'ContactController@displayContactPage');

/*Enrollment Form*/
Route::get('/enrollmentForm', 'EnrollmentFormController@DisplayEnrollmentForm');
Route::post('/saveEnrollmentForm', 'EnrollmentFormController@StoreEnrollmentForm');
Route::get('/content-management/EfList', 'EnrollmentFormController@DisplayEfList');
Route::get('/content-management/previewEF/{id}', 'EnrollmentFormController@PreviewEF');
Route::get('/content-management/editEF/{id}', 'EnrollmentFormController@EditEF');
Route::post('/content-management/updateEF/{id}', 'EnrollmentFormController@UpdateEF');
Route::get('/content-management/efStatus/{id}/{status}', 'EnrollmentFormController@EfStatus');
Route::get('/content-management/exportEf', 'EnrollmentFormController@EfExport');

/*Programs*/
Route::get('/programs', 'ProgramsController@displayProgramPage');

/*News Events*/
Route::get('/news', 'NewsEventPageController@display');
Route::get('/blogsPerMonth/{yearMonth}', 'NewsEventPageController@displayYearMonthPosts');