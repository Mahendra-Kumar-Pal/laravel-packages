<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{InertiajsController, UserController, OpenAiController, BotManController, SMSController, AddressController};
use App\Http\Controllers\{YajraDatatableController};
use App\Http\Controllers\{ChatController};
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//intervention/image
use Image as Image;
Route::view('image-upload', 'intervention');
Route::post('image-upload', function(Request $request){
    if($request->hasFile('image')) {
        $image = Image::make($request->file('image'));
        // Main Image Upload on Folder Code
        $imageName = time().'-'.$request->file('image')->getClientOriginalName();
        $destinationPath = public_path('intervention/');
        $image->save($destinationPath.$imageName);
        // Generate Thumbnail Image Upload on Folder Code
        $destinationPathThumbnail = public_path('intervention/thumbnail/');
        $image->resize(100,100);
        $image->save($destinationPathThumbnail.$imageName);
        $upload = new \App\Models\Intervention();
        $upload->img = $imageName;
        $upload->save();
        return back()->with('success','Image Upload successful')->with('imageName',$imageName);
    }
});
//yajra/laravel-datatables-oracle
Route::controller(YajraDatatableController::class)->prefix('yajrabox-users')->as('yajrabox-users.')->group(function() {
    Route::get('/', 'requestAjax')->name('requestAjax');
    Route::get('/filtered-data', 'filteredData')->name('filteredData');
});
//maatwebsite/excel
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportUser;
use App\Exports\ExportUser;
Route::view('import-export', 'import-export');
Route::post('import', function(Request $request){
    Excel::import(new ImportUser, $request->file('file')->store('files'));
    return redirect()->back()->withSuccess('Uploaded successfully');
});
Route::get('export', function(Request $request){
    return Excel::download(new ExportUser, 'users.xlsx');
});
//dawson/youtube
use Youtube as Youtube;
Route::view('youtube', 'youtube');
Route::post('youtube', function(Request $request){
    // $fullPathToVideo = $request->file('video')->store('videos', ['disk' => 'my_files']);
    // $video = Youtube::upload($fullPathToVideo or $request->file('video')->getPathName(), [
    $video = Youtube::upload($request->file('video')->getPathName(), [ //or
        'title' => $request->title, 
        'description' => 'description', 
        'tags'=>['some', 'tags', 'here'],
    ]);
    return "Video uploaded successfully. Video ID is ". $video->getVideoId();
});
//laravel/socialite
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Exception;
Route::get('login/google', function(){ 
    return Socialite::driver('google')->redirect();
});
Route::get('login/google/callback', function(){
    try {
        $googleUser = Socialite::driver('google')->user();
        $user = User::updateOrCreate([
            'google_id' => $googleUser->id,
        ], [
            'name' => $googleUser->name,
            'email' => $googleUser->email,
            'google_id'=> $googleUser->id,
            'password' => encrypt('password')
        ]);
        Auth::login($user);
        return redirect('/dashboard');
    } catch (\Exception $e) {
        dd($e->getMessage());
    }
});
//spatie/laravel-permission
Route::get('spatie-users', function(){
    $users=User::all();
    return view('spatie', compact('users'));
});
//astrotomic/laravel-translatable
Route::get('astrotomic-post', function(){
    $data = [
        'author' => 'Gummibeer',
        'hi' => ['title' => 'My first post', 'content' => 'My first post'],
        'en' => ['title' => 'Mon premier post', 'content' => 'Mon premier post']
    ];
    $post = \App\Models\Post::create($data);
    return $post;
});
//khill/lavacharts
Route::get('/piechart', function () {
    $datatable = \Lava::DataTable();
    $datatable->addStringColumn('Name');
    $datatable->addNumberColumn('Donuts Eaten');
    $datatable->addRows([
        ['Michael',   5],
        ['Elisa',     7],
        ['Robert',    3],
        ['John',      2],
        ['Jessica',   6],
        ['Aaron',     1],
        ['Margareth', 8]
    ]);
    \Lava::PieChart('Donuts', $datatable, [
        'width' => 400,
        'pieSliceText' => 'value'
    ]);
    return view('chart');
});
//swagger in api.php
//simplesoftwareio/simple-qrcode
Route::view('/qrcode', 'qrcode');
//biscolab/laravel-recaptcha (not working)
Route::get('admin-login', function(){
    return 'Login successfully.';
});
//inertiajs/inertia-laravel (not working)
Route::controller(InertiajsController::class)->prefix('inertia')->as('inertia.')->group(function() {
    Route::get('/', 'index');
    Route::get('test', 'test');
});
//barryvdh/laravel-dompdf
Route::controller(UserController::class)->prefix('dompdf')->as('dompdf.')->group(function() {
    Route::get('/', 'index');
});
//barryvdh/laravel-snappy
Route::controller(UserController::class)->prefix('snappy')->as('snappy.')->group(function() {
    Route::get('/', 'snappy');
});
//laravel/scout (not working)
Route::controller(UserController::class)->prefix('scout')->as('scout.')->group(function() {
    Route::get('/', 'scout')->name('scout');
});
//nwidart/laravel-modules (not working)
//kreait/laravel-firebase
Route::controller(UserController::class)->prefix('scout')->as('scout.')->group(function() {
    Route::get('/', 'scout')->name('scout');
});
//openai-php/client (not working)
Route::controller(OpenAiController::class)->prefix('openai-client')->as('openai-client.')->group(function() {
    Route::get('/botman', 'index');
    Route::post('/botman', 'store');
});
//openai-php/latavel (properly working)
Route::controller(BotManController::class)->prefix('openai-laravel')->as('openai-laravel.')->group(function() {
    Route::get('/chat', 'index');
    Route::post('/chat', 'store');
});
//laravel-notification-channels/aws-sns (not working)
Route::controller(SMSController::class)->prefix('aws-sms')->as('aws-sms.')->group(function() {
    Route::get('/sendSMS/{phone_number}', 'sendSMS');
});
//stichoza/google-translate-php
Route::controller(AddressController::class)->prefix('google-translate')->as('google-translate.')->group(function() {
    Route::get('/{locale}/address', 'index');
});
//pusher/pusher-php-server (app.js, bootstrap.js, chat.js, PrivateChatEvent, adminar, VerifyCsrfToken, Kernel, channels, chat.blade, )
Route::group(['prefix' => 'chat', 'as' => 'chat.'], function() {
    Route::controller(ChatController::class)->group(function() {
        Route::get('/', 'index');
        Route::post('/', 'store');
        Route::post('/send', 'send');
        Route::get('/private-chat/{user1}/{user2}', 'privateChat')->name('privateChat');
    });
});
//laravel/jetstream
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
//firebase/php-jwt
//dh {aporat/store-receipt-validator, bavix/laravel-wallet, fruitcake/laravel-cors, google/apiclient, ramsey/uuid, srmklive/paypal, stripe/stripe-php}
//cognisap {cviebrock/eloquent-sluggable, doctrine/dbal, league/flysystem-aws-s3-v3, psr/simple-cache, realrashid/sweet-alert}
//martialartszen {josiasmontag/laravel-recaptchav3, league/flysystem-aws-s3-v3, s-ichikawa/laravel-sendgrid-driver, sendgrid/sendgrid}
//k-cluster {rubix/ml, rubix/tensor}
//storyboards {laravelcollective/html, geoip/geoip, dompdf/dompdf, elibyy/tcpdf-laravel, geoip2/geoip2, ixudra/curl}
//animatic {amzn/amazon-pay-api-sdk-php, amzn/amazon-pay-sdk-php, psr/simple-cache, rappasoft/laravel-livewire-tables, sunaoka/amazon-pay-api-sdk-php-laravel}
