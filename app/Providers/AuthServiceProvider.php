<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

use App\User;
use App\Policies\UserPolicy;
use App\Article;
use App\Policies\ArticlePolicy;
use Illuminate\Foundation\Auth\User as AuthUser;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use Symfony\Component\CssSelector\Node\FunctionNode;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        User::class => UserPolicy::class,
        Article::class => ArticlePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin', function (User $user) {
            return in_array($user->id, [
                221,
            ]);
        });
    }
}


//adminユーザー　
//ログイン後/userにリダイレクトさせる

//user/{id}にアクセスしたばあい同一のユーザーであれば処理を実行する
//同一のuseridのみuser/{id}にアクセスさせる 
//一致しないidはhomeへリダイレクト
