<?php


        //View site//
Route::get('/',[
    'uses' =>'frontEndController@index',
    'as' =>'/'
]);
Route::get('/about',[
    'uses' =>'frontEndController@about',
    'as' =>'about'
]);

Route::get('/shop',[
    'uses' =>'frontEndController@shop',
    'as' =>'shop'
]);

Route::get('/service',[
    'uses' =>'frontEndController@service',
    'as' =>'service'
]);
Route::get('/contact_us',[
    'uses' =>'frontEndController@contact_us',
    'as' =>'contact_us'
]);

Route::get('/bike_detais/{id}',[
    'uses' =>'frontEndController@bike_detais',
    'as' =>'bike_detais'
]);

Route::post('/contact_us',[
    'uses' =>'frontEndController@contact',
    'as' =>'contact_us'
]);



    //Admin site//

    Auth::routes();

                //Web Admin//

    Route::get('/home', [
        'uses' => 'adminController@index',
        'as' =>'home'
    ]);
    Route::get('/Add-Bike', [
        'uses' => 'adminController@addBike',
        'as' =>'Add-Bike'
    ]);
    Route::get('/Manage-Bike', [
        'uses' => 'adminController@manageBike',
        'as' =>'Manage-Bike'
    ]);
    Route::post('/new-bike', [
        'uses' => 'adminController@newBike',
        'as' =>'new-bike'
    ]);

    Route::get('/unpublished_bike/{id}', [
        'uses' => 'adminController@unpublishedBike',
        'as' =>'unpublished_bike'
    ]);
    Route::get('/published_bike/{id}', [
        'uses' => 'adminController@publishedBike',
        'as' =>'published_bike'
    ]);
    Route::get('/delete_bike/{id}', [
        'uses' => 'adminController@deleteBike',
        'as' =>'delete_bike'
    ]);
    Route::get('/delete_comment/{id}', [
        'uses' => 'adminController@delete_comment',
        'as' =>'delete_comment'
    ]);
    Route::get('/edit_baik/{id}', [
        'uses' => 'adminController@editeBike',
        'as' =>'edit_baik'
    ]);
    Route::post('/update-bike', [
        'uses' => 'adminController@updateBike',
        'as' =>'update-bike'
    ]);

    Route::get('/user_comments', [
        'uses' => 'adminController@userComments',
        'as' =>'user_comments'
    ]);

                //Document Admin//

    Route::get('/document_entry', [
        'uses' => 'adminController@document_entry_index',
        'as' =>'document_entry'
    ]);
    Route::get('/buy_bike', [
        'uses' => 'adminController@buy_bike',
        'as' =>'buy_bike'
    ]);
    Route::get('/total_buyer_bike', [
        'uses' => 'adminController@total_buyer_bike1',
        'as' =>'total_buyer_bike'
    ]);
    Route::post('/new_buy_bike', [
        'uses' => 'buy_bikeController@new_buy_bike',
        'as' =>'new_buy_bike'
    ]);
    Route::get('/show_all_bike', [
        'uses' => 'adminController@show_all_bike',
        'as' =>'show_all_bike'
    ]);
    Route::get('/show_all_sales', [
        'uses' => 'adminController@show_all_sales',
        'as' =>'show_all_sales'
    ]);
    Route::get('/delete_buy_bike/{id}', [
        'uses' => 'buy_bikeController@delete_buy_bike',
        'as' =>'delete_buy_bike'
    ]);
    Route::get('/details_buy_bike/{id}', [
        'uses' => 'buy_bikeController@details_buy_bike',
        'as' =>'details_buy_bike'
    ]);

    Route::get('/details_sale_bike/{id}', [
        'uses' => 'buy_bikeController@details_sale_bike',
        'as' =>'details_sale_bike'
    ]);

    Route::get('/edit_buy_baik/{id}', [
        'uses' => 'buy_bikeController@edit_buy_baik',
        'as' =>'edit_buy_baik'
    ]);
    Route::get('/sale_buy_bike/{id}', [
        'uses' => 'buy_bikeController@sale_buy_bike',
        'as' =>'sale_buy_bike'
    ]);
    Route::get('/delete_sale_bike/{id}', [
        'uses' => 'buy_bikeController@delete_sale_bike',
        'as' =>'delete_sale_bike'
    ]);
    Route::get('/edit_sale_baik/{id}', [
        'uses' => 'buy_bikeController@edit_sale_baik',
        'as' =>'edit_sale_baik'
    ]);
    Route::post('/update_buy_bike', [
        'uses' => 'buy_bikeController@update_buy_bike',
        'as' =>'update_buy_bike'
    ]);

    Route::post('/new_sale_bike', [
        'uses' => 'buy_bikeController@new_sale_bike',
        'as' =>'new_sale_bike'
    ]);
    Route::post('/update_sale_bike', [
        'uses' => 'buy_bikeController@update_sale_bike',
        'as' =>'update_sale_bike'
    ]);


                //Stock Management//
    Route::get('/stock_management', [
        'uses' => 'adminController@stock_management_index',
        'as' =>'stock_management'
    ]);
    Route::get('/total_stock', [
        'uses' => 'adminController@total_stock',
        'as' =>'total_stock'
    ]);
    Route::get('/total_sales', [
        'uses' => 'adminController@total_sales',
        'as' =>'total_sales'
    ]);
    Route::get('/profit', [
        'uses' => 'adminController@profit',
        'as' =>'profit'
    ]);

    Route::post('/profit_search', [
        'uses' => 'adminController@profit_search',
        'as' =>'profit_search'
    ]);


    Route::get('/voucher_sale_bike/{id}', [
        'uses' => 'buy_bikeController@voucher_sale_bike',
        'as' =>'voucher_sale_bike'
    ]);

    Route::get('/voucher_buy_bike/{id}', [
        'uses' => 'buy_bikeController@voucher_buy_bike',
        'as' =>'voucher_buy_bike'
    ]);



    Route::get('/imageUpload', [
        'uses' => 'adminController@imageUpload',
        'as' =>'imageUpload'
    ]);
    Route::get('/imageUploadView', [
        'uses' => 'adminController@imageUploadView',
        'as' =>'imageUploadView'
    ]);
    Route::post('/new_imageUpload', [
        'uses' => 'adminController@new_imageUpload',
        'as' =>'new_imageUpload'
    ]);
