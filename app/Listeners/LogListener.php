<?php

namespace App\Listeners;

use App\Models\Log;
use App\Events\UserLog;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LogListener
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
     * @param  object  $event
     * @return void
     */
    public function handle(UserLog $event)
    {
        Log::create([
            'user_id' => auth()->user()->id,
            'log_entry' => $event->log_entry
        ]);
    }
}
