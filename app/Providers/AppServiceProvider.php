<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Menu;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // $menu = ['Phone','Laptop'];
        // View::share('menu',$menu);
        Paginator::useBootstrap();
        $categories = Category::all();
        View::share('categories',$categories);
        $posts = Post::paginate(6);
        View::share('posts',$posts);
        // $menus = Cache::remember('menus',60*60*60,function(){
        //     return Menu::get();
        // });
        $menus = Menu::get();
        View::share('menus',$menus);
        Paginator::useBootstrap();
    }
}
