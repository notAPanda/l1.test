<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class Test implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            // create a user
            $user = User::create([
                'name' => 'John Doe',
                'email' => 'test@sk.pl',
                'password' => bcrypt('password'),
            ]);

            // Log the creation of the user
            Log::info('User created successfully', ['user_id' => $user->id]);
        } catch (\Exception $e) {
            // Log the error
            Log::error('Failed to create user', ['error' => $e->getMessage()]);
        }
    }
}
