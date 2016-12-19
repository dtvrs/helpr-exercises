<?php

namespace App\Listeners;

use Mail;

use App\Events\UserRegistered;

use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Queue\InteractsWithQueue;

class UserRegisteredEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        //Email credentials
        $user = $event->user;
        $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
        $beautymail->send(
            'emails.user-registration',
            [
                'company'       => $user->company->name,
                'username'      => $user->email,
                'realPassword'  => $event->realPassword,
            ],
            function ($message) use ($user) {
                $message->from(config('mail.from.address'), config('mail.from.name'));
                $message->to($user->email, $user->name);
            }
        );
    }
}
