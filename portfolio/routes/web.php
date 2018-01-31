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

app('debugbar')->disable();

Route::get('/', 'FrontHomeController@index')->name('/');
Route::get('/porfolio', 'FrontHomeController@porfolio');
Route::get('/skill', 'FrontHomeController@skill');
Route::get('/formation', 'FrontHomeController@formation');
Route::get('/projet', 'FrontHomeController@projet');
Route::get('/contact', 'FrontHomeController@contact');
Route::post('/contact', 'FrontHomeController@savemessage');
Route::get('/mentions', 'FrontHomeController@mentions');


//Admin Login
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin_admin', 'HomeController@index')->name('admin_admin');
Route::get('/admin_user_search', 'AdminController@searchUser')->name('admin_user_search');

//Administration
Route::group([ 'middleware' => 'auth'], function()
{
Route::resource('admin','AdminController');
Route::name('admin')->get('admin','AdminController@index');

Route::resource('skills','SkillsController');
Route::name('skills')->get('admin/skills','SkillsController@index');
Route::name('skills_add')->post('admin/skills_add','SkillsController@create');
Route::name('skills_destroy')->get('skills_destroy/{id}', 'SkillsController@destroy');

//generation des routes suivantes :
//GET|HEAD  | skills                         | skills               |SkillsController@index
//POST      | skills                         | skills.store         |SkillsController@store
//GET|HEAD  | skills/create                  | skills.create        |SkillsController@create
//DELETE    | skills/{skill}                 | skills.destroy       |SkillsController@destroy
//GET|HEAD  | skills/{skill}                 | skills.show          |SkillsController@show
//PUT|PATCH | skills/{skill}                 | skills.update        |SkillsController@update
//GET|HEAD  | skills/{skill}/edit            | skills.edit          |SkillsController@edit

Route::resource('formations','FormationsController');
Route::name('formations')->get('admin/formations','FormationsController@index');
Route::name('formations_add')->post('admin/formations_add','FormationsController@create');
Route::name('formations_destroy')->get('formations_destroy/{id}', 'FormationsController@destroy');

//generation des routes suivantes :
//GET|HEAD  | formations                         | formations               |FormationsController@index
//POST      | formations                         | formations.store         |FormationsController@store
//GET|HEAD  | formations/create                  | formations.create        |FormationsController@create
//DELETE    | formations/{formation}                 | formations.destroy       |FormationsController@destroy
//GET|HEAD  | formations/{formation}                 | formations.show          |FormationsController@show
//PUT|PATCH | formations/{formation}                 | formations.update        |FormationsController@update
//GET|HEAD  | formations/{formation}/edit            | formations.edit          |FormationsController@edit

Route::resource('experiences','ExperiencesController');
Route::name('experiences')->get('admin/experiences','ExperiencesController@index');
Route::name('experiences_add')->post('admin/experiences_add','ExperiencesController@create');
Route::name('experiences_destroy')->get('experiences_destroy/{id}', 'ExperiencesController@destroy');

//generation des routes suivantes :
//GET|HEAD  | experiences                         | experiences               |ExperiencesController@index
//POST      | experiences                         | experiences.store         |ExperiencesController@store
//GET|HEAD  | experiences/create                  | experiences.create        |ExperiencesController@create
//DELETE    | experiences/{experience}                 | experiences.destroy       |ExperiencesController@destroy
//GET|HEAD  | experiences/{experience}                 | experiences.show          |ExperiencesController@show
//PUT|PATCH | experiences/{experience}                 | experiences.update        |ExperiencesController@update
//GET|HEAD  | experiences/{experience}/edit            | experiences.edit          |ExperiencesController@edit

Route::resource('projets','ProjetsController');
Route::name('projets')->get('admin/projets','ProjetsController@index');
Route::name('projets_add')->post('admin/projets_add','ProjetsController@create');
Route::name('projets_destroy')->get('projets_destroy/{id}', 'ProjetsController@destroy');

//generation des routes suivantes :
//GET|HEAD  | projets                         | projets               |ProjetsController@index
//POST      | projets                         | projets.store         |ProjetsController@store
//GET|HEAD  | projets/create                  | projets.create        |ProjetsController@create
//DELETE    | projets/{projet}                 | projets.destroy       |ProjetsController@destroy
//GET|HEAD  | projets/{projet}                 | projets.show          |ProjetsController@show
//PUT|PATCH | projets/{projet}                 | projets.update        |ProjetsController@update
//GET|HEAD  | projets/{projet}/edit            | projets.edit          |ProjetsController@edit

Route::resource('admin_inbox','AdminInboxController');
Route::name('admin_inbox')->get('admin_inbox','AdminInboxController@index');
Route::name('destroy_inbox')->get('destroy_inbox/{id}','AdminInboxController@destroy');

//fin de groupe auth
});


