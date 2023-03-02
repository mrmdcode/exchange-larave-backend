<?php


use App\authentication_2;
use App\Http\Controllers\homepage;
use App\Http\Controllers\saves;
use App\Http\Middleware\customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', "homepage@index");



Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pan-2', function (){
    return view('panel.panel-customer.index');
});

Route::get('/pan-3', function (){
    return view('panel.panel-customer.index');
});
Route::get('/start',"homepage@all");
Route::get('/sms' , "customer@sms");

Route::prefix("/panel")->middleware("auth")->group(function (){
    Route::prefix("admin")->middleware("admin")->group(function (){
        Route::get('/dashboard' , "admin@dashboard");
        Route::get('/confirm_auth',"admin@confirmation");
        Route::get('/view_confirm/{id_users}',"admin@view_confirm");
        Route::get('/confirm/{id_users}',"admin@confirm");
        Route::get('/view_users',"admin@view_users");
        Route::get('/sell',"admin@sell");
        Route::get('/buy',"admin@buy");
        Route::get('/ransaction',"admin@ransaction");
        Route::get('/success/{num_1}',"success@ss");
        Route::get('/confirm-buy/{dep_num}/$/{id}',"admin@confirm_buy");
        Route::get('/confirm-buy/{id}',"admin@confirm_sell");


    });
    Route::prefix("customer")->middleware("customer")->group(function (){
        Route::get('/dashboard', "customer@dashboard");
        Route::prefix("Business")->group(function (){
            Route::get('/buy',"customer@buy");
            Route::get('/sell',"customer@sell");
        });
        Route::prefix("authentication")->group(function (){
            Route::get('/personal_identity@1',"customer@auth_1");
            Route::get('/personal_identity@2',"customer@auth_2");
            Route::get('/personal_identity@3',"customer@auth_3");

        });
        Route::prefix('history')->group(function (){
            Route::get('/his_buy@@',"customer@his_buy");
            Route::get('/his_sell@@',"customer@his_sell");
            Route::get('/his_sub@@',"customer@his_sub");
        });
        Route::prefix('subdivision')->group(function (){
            Route::get('/subdivision',"customer@subdivision");
            Route::get('/subdivision_history',"customer@subdivision_history");
        });
        Route::get('/Calendar',"customer@calendar");

    });

});
Route::prefix('save')->middleware("auth")->group(function (){
    Route::prefix('authentication')->group(function (){
        Route::post('/_save_1',"saves@auth_save_1");
        Route::post('/_save_2',"saves@auth_save_2");
        Route::post('/_save_3',"saves@auth_save_3");


    });
    Route::prefix('selandbuy')->group(function (){
        Route::post('/_save_4',"saves@buy_saves_1");
        Route::post('/_save_3',"saves@sell_saves_1");
    });
    Route::prefix('success')->group(function (){
        Route::get('/{num_1}',"success@ss");

    });
});

Route::get('/exam',"admin_site@exam");
