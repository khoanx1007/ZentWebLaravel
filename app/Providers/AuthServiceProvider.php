<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Post;
use App\Models\User;
use App\Policies\PostPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Post::class => PostPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function registerPolicies()
    {
      foreach($this->policies() as $key=>$value){
          Gate::policy($key,$value);
      }   
    }
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('update-post',function(User $user, Post $post){
           return $user->id === $post->user_created_id | $user->role == 'admin'; 
        });
        Gate::define('delete-user',function(User $user){
            return $user->role == 'admin'; 
         });

        //
    }
}