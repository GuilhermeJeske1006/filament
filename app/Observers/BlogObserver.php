<?php

namespace App\Observers;

use App\Models\Blog;
use App\Models\Newsletter;
use App\Models\User;
use App\Notifications\NewslatterNotify;
use Illuminate\Support\Facades\Notification;

class BlogObserver
{
    /**
     * Handle the Blog "created" event.
     */
    public function created(Blog $blog): void
    {
        $users = Newsletter::all();

        foreach ($users as $recipient) {
            $recipient->notify(new NewslatterNotify($blog));
        }
        

    }

}
