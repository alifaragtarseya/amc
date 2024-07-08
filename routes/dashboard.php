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

$prefix = 'admin.';

// Before Login Dashboard Routes
Route::group(['middleware' => 'guest:admin'], function () use ($prefix) {
    $controller = 'AuthController@';
    // Route Login
    Route::get('login', $controller . 'view')->name($prefix . 'view_login');
    Route::post('login', $controller . 'login')->name($prefix . 'login');

});


// After Login Dashboard Routes
Route::group(['middleware' => 'auth:admin'], function () use ($prefix) {

    // Route Logout
    Route::post('logout', 'AuthController@logout');

    // lang Route
    Route::get('lang', 'LangController@changeLang')->name($prefix.'lang');

    // Route Home
    Route::get('/', 'HomeController@index')->name($prefix.'home');
    Route::get('home', 'HomeController@index')->name($prefix.'home');
    Route::get('profile', 'HomeController@profile')->name($prefix.'profile');
    Route::post('profile', 'HomeController@updateProfile')->name($prefix.'updateProfile');


    // route of slider
    Route::group(['prefix' => '/sliders'], function () use ($prefix) {
        Route::controller('SliderController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'slider');
            Route::get('/create', 'create')->name($prefix.'slider.create');
            Route::post('/store', 'store')->name($prefix.'slider.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'slider.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'slider.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'slider.delete');
            Route::post('/change-status', 'changeStatus')->name($prefix.'slider.change-status');
        });
    });

    // route of parteners
    Route::group(['prefix' => '/parteners'], function () use ($prefix) {
        Route::controller('PartenerController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'partener');
            Route::get('/create', 'create')->name($prefix.'partener.create');
            Route::post('/store', 'store')->name($prefix.'partener.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'partener.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'partener.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'partener.delete');
        });
    });
    // route of tools
    Route::group(['prefix' => '/tools'], function () use ($prefix) {
        Route::controller('TechnologyController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'tool');
            Route::get('/create', 'create')->name($prefix.'tool.create');
            Route::post('/store', 'store')->name($prefix.'tool.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'tool.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'tool.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'tool.delete');
        });
    });
 // route of teams
 Route::group(['prefix' => '/teams'], function () use ($prefix) {
    Route::controller('TeamController')->group(function () use ($prefix)  {
        Route::get('/', 'index')->name($prefix.'team');
        Route::get('/create', 'create')->name($prefix.'team.create');
        Route::post('/store', 'store')->name($prefix.'team.store');
        Route::get('/edit/{id}', 'edit')->name($prefix.'team.edit');
        Route::post('/update/{id}', 'update')->name($prefix.'team.update');
        Route::delete('/delete/{id}', 'destroy')->name($prefix.'team.delete');

    });
});
    // route of service-catgories
    Route::group(['prefix' => '/service-categories'], function () use ($prefix) {
        Route::controller('ServiceCategoryController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'servicecat');
            Route::get('/create', 'create')->name($prefix.'servicecat.create');
            Route::post('/store', 'store')->name($prefix.'servicecat.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'servicecat.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'servicecat.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'servicecat.delete');
        });
    });

    // route of service
    Route::group(['prefix' => '/services'], function () use ($prefix) {
        Route::controller('ServiceController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'service');
            Route::get('/create', 'create')->name($prefix.'service.create');
            Route::post('/store', 'store')->name($prefix.'service.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'service.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'service.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'service.delete');
            Route::delete('{id}/delete-image/{it}', 'deleteImage')->name($prefix.'service.images.delete');
        });
    });
    // route of blog
    Route::group(['prefix' => '/blogs'], function () use ($prefix) {
        Route::controller('BlogController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'blog');
            Route::get('/create', 'create')->name($prefix.'blog.create');
            Route::post('/store', 'store')->name($prefix.'blog.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'blog.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'blog.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'blog.delete');
        });
    });

    // route of projects
    Route::group(['prefix' => '/projects'], function () use ($prefix) {
        Route::controller('ProjectController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'project');
            Route::get('/create', 'create')->name($prefix.'project.create');
            Route::post('/store', 'store')->name($prefix.'project.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'project.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'project.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'project.delete');
        });
    });

    // route of brands
    Route::group(['prefix' => '/brands'], function () use ($prefix) {
        Route::controller('BrandController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'brand');
            Route::get('/create', 'create')->name($prefix.'brand.create');
            Route::post('/store', 'store')->name($prefix.'brand.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'brand.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'brand.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'brand.delete');
        });
    });

    // route of faqs
    Route::group(['prefix' => '/faqs'], function () use ($prefix) {
        Route::controller('FaqController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'faq');
            Route::get('/create', 'create')->name($prefix.'faq.create');
            Route::post('/store', 'store')->name($prefix.'faq.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'faq.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'faq.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'faq.delete');
        });
    });
    // route of package-categories
    Route::group(['prefix' => '/package-categories'], function () use ($prefix) {
        Route::controller('PackageCategoryController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'package.cat');
            Route::get('/create', 'create')->name($prefix.'package.cat.create');
            Route::post('/store', 'store')->name($prefix.'package.cat.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'package.cat.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'package.cat.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'package.cat.delete');
        });
    });
    // route of packages
    Route::group(['prefix' => '/packages'], function () use ($prefix) {
        Route::controller('PackageController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'package');
            Route::get('/create', 'create')->name($prefix.'package.create');
            Route::post('/store', 'store')->name($prefix.'package.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'package.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'package.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'package.delete');
        });
    });
    // route of categories
    Route::group(['prefix' => '/categories'], function () use ($prefix) {
        Route::controller('ProductCategoryController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'cat');
            Route::get('/create', 'create')->name($prefix.'cat.create');
            Route::post('/store', 'store')->name($prefix.'cat.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'cat.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'cat.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'cat.delete');
        });
    });

    // route of products
    Route::group(['prefix' => '/products'], function () use ($prefix) {
        Route::controller('ProductController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'product');
            Route::get('/create', 'create')->name($prefix.'product.create');
            Route::post('/store', 'store')->name($prefix.'product.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'product.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'product.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'product.delete');
            Route::delete('{id}/delete-image/{it}', 'deleteImage')->name($prefix.'product.images.delete');

        });
    });

    // route of counters
    Route::group(['prefix' => '/counters'], function () use ($prefix) {
        Route::controller('CounterController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'counter');
            Route::get('/create', 'create')->name($prefix.'counter.create');
            Route::post('/store', 'store')->name($prefix.'counter.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'counter.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'counter.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'counter.delete');

        });
    });

    // route of work-steps
    Route::group(['prefix' => '/work-steps'], function () use ($prefix) {
        Route::controller('WorkStepController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'step');
            Route::get('/create', 'create')->name($prefix.'step.create');
            Route::post('/store', 'store')->name($prefix.'step.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'step.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'step.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'step.delete');

        });
    });

    // route of features
    Route::group(['prefix' => '/features'], function () use ($prefix) {
        Route::controller('FeatureController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'feature');
            Route::get('/create', 'create')->name($prefix.'feature.create');
            Route::post('/store', 'store')->name($prefix.'feature.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'feature.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'feature.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'feature.delete');

        });
    });


    // route of setting
    Route::group(['prefix' => '/settings'], function () use ($prefix) {
        Route::controller('SettingController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'setting');
            Route::post('/update', 'update')->name($prefix.'setting.update');
        });
    });

    // route of about us
    Route::group(['prefix' => '/about-us'], function () use ($prefix) {
        Route::controller('AboutController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'about');
            Route::get('/Sec', 'indexSec')->name($prefix.'aboutsec');
            Route::post('/save-data', 'saveData')->name($prefix.'about.saveData');
            Route::post('/save-data-sec', 'saveDataSec')->name($prefix.'about.saveDatasec');
        });
    });


    // route of metatags
    Route::group(['prefix' => '/metatags'], function () use ($prefix) {
        Route::controller('MetaTagController')->group(function () use ($prefix)  {
            Route::get('{page}', 'index')->name($prefix.'meta');
            Route::post('/saveMetatag/{page}', 'saveMetatag')->name($prefix.'meta.saveMetatag');
        });
    });
});
