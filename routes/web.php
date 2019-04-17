<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Auth;
use App\reservation;
use App\rooms;
use DB;
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

// use App\rooms;


Route::get('/', function () {
    return view('welcome');
});


// Route::post('/reservation/search',function(request $request){
//     $rooms = rooms::all();
//     $keyword = input::get('search');
//     $result = rooms::where('se_name','like', "%{$keyword}%")->get();

//     if(count($result)>0){
//         return view('reservation',compact('users','rooms'))->withDetails($results)->withQuery($keyword);
//     }else{
//         return view('reservation',compact('users','rooms'))->withDetails($results)->withQuery($keyword);
//     }

// });

// use //
Route::post('/reservation/rsv',function(request $request){
    $reservation = reservation::all();
    $from_date =$request ->from_date;
    $to_date =$request->to_date;
    $type =$request->type;
    
    $result =DB::table('reservation')->where('from_date','like',"%{$from_date}%")->where('to_date','like',"%{$to_date}%")->where('type','like',"%{$type}%")->get()->first();
    if(isset($result)){
                return view('rooms')->withDetails($result)->withQuery($result);
            }else{
                return view('rooms')->withDetails($result)->withQuery($result);
            }

});

/************ HOME PAGE *************************/

Route::get('/admin',[
    'uses'=>'AdminController@list',
  
]);


Route::post('admin/store',[
    'uses'=>'AdminController@store',
    'as'=>'admin.store'
]);

Route::get('admin/create',[
    'uses'=>'AdminnController@create',
    'as'=>'admin.create'
]);

Route::get('admin/{id}',[
    'uses' => 'AdminController@show',
    'as' => 'admin'
]);

Route::get('/documentation',function(){
    return view('documentation');
});

Route::get('/rooms',[
    'uses' => 'RoomsController@result',
]);


Route::get('/reservation',function(){
    return view('reservation');
});

Route::get('/features',function(){
    return view('features');
});

/******************************************/

Route::get('/forum',[
    'uses'=>'ForumsController@index', //call controller's function
    'as'=>'forum' //The name is forum 
]);

Route::get('/discuss',function(){
    return view('discuss');
});

Route::get('/search',function(){
    return view('search');
});

Route::get('discussion/{id}',[
    'uses' => 'DiscussionController@show',
    'as' => 'discussion'
]);


Route::get('channel/{slug}',[
    'uses' => 'ForumsController@channel',
    'as' => 'channel' //use the name as url's name then pass the value to it
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::Group(['middleware'=>'auth'],function(){
    Route::resource('channels','ChannelsController');

    Route::get('discussions/create',[
        'uses'=>'DiscussionController@create',
        'as'=>'discussions.create'
    ]);

    Route::post('discussion/store',[
        'uses'=>'DiscussionController@store',
        'as'=>'discussions.store'
    ]);

/*******************************************************/

Route::get('/reservation',function(){
    return view('reservation');
});
    Route::post('reservation/store',[
        'uses'=>'ReservationController@store',
        'as'=>'reservation.store'
    ]);

    Route::get('reservation/create',[
        'uses'=>'ReservationController@create',
        'as'=>'reservation.create'
    ]);

    Route::get('reservation/{id}',[
        'uses' => 'ReservationController@show',
        'as' => 'reservation'
    ]);

    Route::post('discussion/reply/{id}',[
        'uses' => 'DiscussionController@reply',
        'as' => 'discussion.reply'
    ]);

    Route::get('/reply/like/{id}', [
        'uses' => 'RepliesController@like',
        'as' => 'reply.like'
    ]);

    Route::get('/reply/unlike/{id}', [
        'uses' => 'RepliesController@unlike',
        'as' => 'reply.unlike'
    ]);


 });

