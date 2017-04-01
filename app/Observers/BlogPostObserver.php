<?php
namespace App\Observers;

use App\BlogPost;

class BlogPostObserver
{

    /**
     * Listen to the BlogPost creating event.
     *
     * @param  BlogPost  $BlogPost
     * @return void
     */
    public function creating(BlogPost $BlogPost)
    {
        //code...
    }

     /**
     * Listen to the BlogPost created event.
     *
     * @param  BlogPost  $BlogPost
     * @return void
     */
    public function created(BlogPost $BlogPost)
    {
        //code...
    }

    /**
     * Listen to the BlogPost updating event.
     *
     * @param  BlogPost  $BlogPost
     * @return void
     */
    public function updating(BlogPost $BlogPost)
    {
        //code...
    }

    /**
     * Listen to the BlogPost updated event.
     *
     * @param  BlogPost  $BlogPost
     * @return void
     */
    public function updated(BlogPost $BlogPost)
    {
        //code...
    }

    /**
     * Listen to the BlogPost saving event.
     *
     * @param  BlogPost  $BlogPost
     * @return void
     */
    public function saving(BlogPost $BlogPost)
    {
        //code...
    }

    /**
     * Listen to the BlogPost saved event.
     *
     * @param  BlogPost  $BlogPost
     * @return void
     */
    public function saved(BlogPost $BlogPost)
    {
        //code...
    }

    /**
     * Listen to the BlogPost deleting event.
     *
     * @param  BlogPost  $BlogPost
     * @return void
     */
    public function deleting(BlogPost $BlogPost)
    {
        //code...
    }

    /**
     * Listen to the BlogPost deleted event.
     *
     * @param  BlogPost  $BlogPost
     * @return void
     */
    public function deleted(BlogPost $BlogPost)
    {
        //code...
    }

    /**
     * Listen to the BlogPost restoring event.
     *
     * @param  BlogPost  $BlogPost
     * @return void
     */
    public function restoring(BlogPost $BlogPost)
    {
        //code...
    }

    /**
     * Listen to the BlogPost restored event.
     *
     * @param  BlogPost  $BlogPost
     * @return void
     */
    public function restored(BlogPost $BlogPost)
    {
        //code...
    }
}
