<?php

namespace App\Policies;

use App\Article;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class ArticlePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function edit(User $user, Article $article)
    {
        return $user->id === $article->user_id;
    }
}
