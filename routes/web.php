<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\UserController;
use App\Models\Content;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('welcome'); });

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('user_profile', ['name' => auth()->user()->name]);
    })->name('dashboard');
    Route::resource('user', UserController::class)->middleware('can:update-users');
    Route::get('/content/create/{id}', [ContentController::class, 'create_W_User'])->middleware('can:update-users')->name('userLink_create');
    Route::resource('content', ContentController::class)->middleware('can:update-users');
    Route::get('{name}', function($name){
        $user = User::where('name', $name)->first();
        $content = Content::where('user_id', auth()->user()->id)->get();
        if($user == null)
        {
            abort(404);
        }
        return view('profile', ['profile' => $user, 'contents' => $content]);
    })->name('user_profile');
});


