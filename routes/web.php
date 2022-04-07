<?php
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\App;

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
// Route::get('/',function(){ 
//     return view('frontend.main.index');
//     })->name('main.index');
Route::get('/',function(){ 
    return view('welcome');
    })->name('main.index');
Route::prefix('backend')
    ->name('backend.')
    ->middleware(['auth', 'role:admin,admod,writer'])
    ->namespace('Backend')
    ->group(function(){
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::post('/storage/delete', 'StorageController@destroy')->name('storage.destroy');
    Route::get('/storage/download/{download}', 'StorageController@download')->name('storage.download');
    Route::get('/storage', 'StorageController@index')->name('storage');
    Route::get('/users/recycle', 'UserController@index2')->name('users.index2');  
    Route::get('/users/recycle/{user}','UserController@restore')->name('users.restore');
    Route::get('/categories/recycle', 'CategoryController@index2')->name('categories.index2');  
    Route::get('/categories/recycle/{user}','CategoryController@restore')->name('categories.restore');
    Route::resources([
        'roles' => RoleController::class,
        // 'posts' => PostController::class,
        'users' => UserController::class,
        'menus' => MenuController::class,
        'categories' => CategoryController::class,
    ]); 
    Route::get('posts/{post}/edit', 'PostController@edit')
    // ->middleware('can:update.post')
    ->name('posts.edit');
    Route::resource('posts', PostController::class)
    ->except([
         'edit'
    ]);
});
Route::prefix('/')
        ->namespace('Auth')
        ->name('auth.')->group(function(){
            Route::get('/register', 'RegisteredUserController@create')
            ->middleware('guest')
            ->name('register');
            Route::post('/register','RegisteredUserController@store')
            ->middleware('guest');
            Route::get('/login', 'LoginController@create')
            ->middleware('guest')
            ->name('login');
            Route::post('/login', 'LoginController@authenticate')
            ->middleware('guest')
            ->name('login');
            Route::post('/logout', 'LoginController@logout')
            ->name('logout');
        });
    
