<?php

use App\Http\Controllers\BeWriterController;
use App\Http\Controllers\BlogAdController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CkeditorController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DataValidationController;
use App\Http\Controllers\fontend\ExtraController;
use App\Http\Controllers\fontend\FontCategoryController;
use App\Http\Controllers\fontend\FontendTextController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\FronthomeController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UserManagementController;
use Spatie\Permission\Models\Permission;

Auth::routes([
    'register' => true,
    'verify' => true,
    'reset' => true
  ]);
  
//Clear route cache
Route::get('/clear-cache', function () {
    Artisan::call('route:cache');
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');

    return Redirect()->back();
});
Route::get('/permissions', function(){
  Artisan::call('route:cache');
  Artisan::call('config:cache');
  Artisan::call('cache:clear');
  Artisan::call('view:clear');
  $permission = Permission::create(['name' => 'home_content']);
  return "Done";

});
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('/admin/category', CategoryController::class);
    Route::get('/admin/blog/myblog',[ BlogController::class,'myPost'])->name('getmy.post');
    Route::resource('/admin/blog', BlogController::class);
    Route::get('/trashed-item',[BlogController::class,'trashedItem'])->name('getTrashedItem');
    Route::get('/trashed-item-final/{id}',[BlogController::class,'restoreFinal'])->name('finalTrashedItem');
    Route::get('retore-trashed-item/{id}',[BlogController::class,'restoreTrash'])->name('retoreTrashedItem');
    Route::get('permanent-delete/{id}',[BlogController::class,'forceDelete'])->name('permanentDeteleItem');
    Route::resource('/admin/newsletter', NewsletterController::class);
    Route::resource('/admin/advertisement', BlogAdController::class);
    Route::post('/admin/datavalidation',[DataValidationController::class,'index']);
    Route::get('/admin/categoryget',[DataValidationController::class,'getCatgory'])->name('get.categoryData');
    Route::post('/admin/categoryadd',[DataValidationController::class,'Addcatgory'])->name('add.categoryData');
    Route::get('/admin/cache-clear',[DataValidationController::class,'clearcache'])->name('app.clearcache');
    Route::get('/admin/subcategory',[SubCategoryController::class,'index'])->name('subcategory.index');
    Route::post('/admin/subcategorypost',[SubCategoryController::class,'store'])->name('subcat.store');
    Route::resource('/user',UserManagementController::class);
    Route::resource('/contactus',ContactUsController::class);
    Route::resource('/bewriter-backend',BeWriterController::class);
    Route::resource('/role-permissions',RolePermissionController::class);
    Route::resource('/home-content',FontendTextController::class);

});

Route::get('/', [FronthomeController::class, 'main'])->name('frontend.main');
Route::get('/privacy-policy', [FronthomeController::class, 'privacy'])->name('frontend.privacy');
Route::get('/about-us', [FronthomeController::class, 'about'])->name('about.us');
Route::get('/terms-conditions', [FronthomeController::class, 'termscondition'])->name('frontend.termscondition');
Route::get('/advertisement-policy', [FronthomeController::class, 'adPolicy'])->name('frontend.adpolicty');
Route::get('/be-a-writer', [FronthomeController::class, 'beWriter'])->name('frontend.about');
Route::get('/contact-us', [FronthomeController::class, 'contact'])->name('frontend.contact');
Route::get('/category', [FronthomeController::class, 'categoryView'])->name('frontend.category');
Route::resource('/post', FrontController::class);
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap.index');
Route::get('/page-sitemap.xml', [SitemapController::class, 'pageSitemap'])->name('page-sitemap');
Route::get('/category-sitemap.xml', [SitemapController::class, 'categorySiteMap'])->name('category-sitemap');

Route::get('/be-writer-informations',[ExtraController::class,'bewriterInfos'])->name('bewriter.info');
Route::post('/be-writer-informations-store',[ExtraController::class,'storeInfos'])->name('bewriter.store');
Route::get('/category/{slug}',[FontCategoryController::class,'index'])->name('getCategorybySlug');
Route::get('/queries',[DataValidationController::class,'searchBlog'])->name('serachblog');
Route::get('/autocomplete',[DataValidationController::class,'searchAutoComplete'])->name('serachautocomplete');
Route::post('/contactus-store',[ExtraController::class,'storeContactUs'])->name('fontcontactus');
Route::get('/writer-test/{data}',[ExtraController::class,'writerExm']);
Route::post('/exam-store/{id}',[ExtraController::class,'storeexm'])->name('exam.store');
Route::get('/{slug}',[FrontController::class,'singlePost'])->name('getPostbySlug');

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
// fontend Footer Routes

//End all frontend routes


// Route::get('ckeditor', [CkeditorController::class, 'index']);
Route::post('ckeditor/image_upload', [CkeditorController::class, 'upload'])->name('upload');
// Route::get('/admin/category')


