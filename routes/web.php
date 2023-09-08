<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ChaletController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\LanguageController;

use App\Http\Controllers\RolePermissionController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('cms/')->middleware('guest:admin,author')->group(function(){
    Route::get('{guard}/login' , [UserAuthController::class , 'showLogin'])->name('login.view');
    Route::post('{guard}/login' , [UserAuthController::class , 'login']);
});

Route::prefix('cms/admin')->middleware('auth:admin,author')->group(function(){
    Route::get('logout' , [UserAuthController::class , 'logout'])->name('logout');
    Route::get('change_password' , [UserAuthController::class , 'changePassword'])->name('change_password');
    Route::post('update_password' , [UserAuthController::class , 'updatePassword'])->name('update_password');


    Route::get('edit_profile' , [UserAuthController::class , 'edit_profile'])->name('edit_profile');
    Route::post('update_profile' , [UserAuthController::class , 'updateProfile'])->name('update_profile');



});


Route::prefix('cms/admin')->middleware('auth:admin,author')->group(function(){
    Route::view('/' , 'cms.home')->name('parent');
    Route::view('/temp' , 'cms.temp');

    Route::resource('countries' , CountryController::class);
    Route::post('countries-update/{id}' , [CountryController::class , 'update'])->name('countries-update');

    Route::resource('cities' , CityController::class);
 Route::post('cities-update/{id}' , [CityController::class , 'update'])->name('cities-update');

 Route::resource('admins' , AdminController::class);
 Route::post('admins-update/{id}' , [AdminController::class , 'update'])->name('admins-update');

 Route::resource('authors' , AuthorController::class);
 Route::post('authors-update/{id}' , [AuthorController::class , 'update'])->name('authors-update');

 Route::resource('categories' , CategoryController::class);
 Route::post('categories-update/{id}' , [CategoryController::class , 'update'])->name('categories-update');

 Route::resource('articles' , ArticleController::class);
 Route::post('articles-update/{id}' , [ArticleController::class , 'update'])->name('articles-update');

 Route::get('/index/articles/{id}', [ArticleController::class, 'indexArticle'])->name('indexArticle');
 Route::get('/create/articles/{id}', [ArticleController::class, 'createArticle'])->name('createArticle');

 Route::resource('sliders' , SliderController::class);
 Route::post('sliders-update/{id}' , [SliderController::class , 'update'])->name('sliders-update');

 Route::resource('comments' , CommentController::class);
 Route::resource('contacts' , ContactController::class);

 Route::resource('roles' , RoleController::class);
    Route::post('roles-update/{id}' , [RoleController::class , 'update'])->name('roles-update');

    Route::resource('permissions' , PermissionController::class);
    Route::post('permissions-update/{id}' , [PermissionController::class , 'update'])->name('permissions-update');

    Route::resource('roles.permissions' , RolePermissionController::class);

    Route::resource('companies' , CompanyController::class);
 Route::post('companies-update/{id}' , [CompanyController::class , 'update'])->name('companies-update');

//  Route::resource('products' , ProductController::class);
//  Route::post('products-update/{id}' , [ProductController::class , 'update'])->name('products-update');

 Route::resource('languages' , LanguageController::class);
 Route::post('languages-update/{id}' , [LanguageController::class , 'update'])->name('languages-update');

 Route::resource('chalets' , ChaletController::class);
 Route::post('chalets-update/{id}' , [ChaletController::class , 'update'])->name('chalets-update');



});

Route::prefix('home')->group(function(){
    Route::get('index' , [HomeController::class , 'home'])->name('news.home');
    Route::get('all/{id}' , [HomeController::class , 'all'])->name('news.all');
    Route::get('det/{id}' , [HomeController::class , 'detailes'])->name('news.detailes');
    Route::get('showContact' , [HomeController::class , 'showContact'])->name('news.contact');
    Route::post('contact' , [HomeController::class , 'storeContact'])->name('contact');

});
Route::prefix('home2')->group(function(){
    Route::get('index' , [HomeController::class , 'home2'])->name('chalets.home2');
    Route::get('all_chalets/{id}' , [HomeController::class , 'all_chalets'])->name('chalets.all_chalets');
    Route::get('chalt/{id}' , [HomeController::class , 'chalets'])->name('chalets.chalet');
    Route::get('showContact' , [HomeController::class , 'showContact'])->name('chalets.contact');
    Route::get('supervisor' , [HomeController::class , 'supervisor'])->name('chalets.supervisor');

    Route::post('contact' , [HomeController::class , 'storeContact'])->name('contact');

});


// Route::get('/generate-pdf', function () {
//     $pdf = App::make('dompdf.wrapper');
//     $pdf->loadHTML('<h1>Welcome to Laravel 10</h1>');
//     return $pdf->stream();
//  });
Route::get('export-excel-csv-file', [ExcelCSVController::class,
'exportExcelCSV'])->name('exportExcel');
