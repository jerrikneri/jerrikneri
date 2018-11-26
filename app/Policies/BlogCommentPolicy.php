<?php

namespace App\Policies;

use App\BlogComment;
use App\BlogPost;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BlogCommentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the blog post.
     *
     * @param \App\User     $user
     * @param \App\BlogPost $blogPost
     *
     * @return mixed
     */
    public function view(User $user, BlogPost $blogPost)
    {
        //
    }

    /**
     * Determine whether the user can create blog posts.
     *
     * @param \App\User $user
     *
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the blog post.
     *
     * @param \App\User     $user
     * @param \App\BlogPost $blogPost
     *
     * @return mixed
     */
    public function update(User $user, BlogComment $comment)
    {
        return $user->id == 1;
    }

    /**
     * Determine whether the user can delete the blog post.
     *
     * @param \App\User     $user
     * @param \App\BlogPost $blogPost
     *
     * @return mixed
     */
    public function delete(User $user, BlogPost $blogPost)
    {
        //
    }

    /**
     * Determine whether the user can restore the blog post.
     *
     * @param \App\User     $user
     * @param \App\BlogPost $blogPost
     *
     * @return mixed
     */
    public function restore(User $user, BlogPost $blogPost)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the blog post.
     *
     * @param \App\User     $user
     * @param \App\BlogPost $blogPost
     *
     * @return mixed
     */
    public function forceDelete(User $user, BlogPost $blogPost)
    {
        //
    }
}
