<?php

namespace App\Jobs;

use App\Notifications\CompanyCreatedNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Auth;

class SendCompanyCreatedJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    // Stores newly created company information
    private $company;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($company)
    {
        $this->company = $company;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $user = Auth::user();

        // Additional check to see whether the currect user is an admin
        $isAdmin = $user->isAdmin();
        
        // Send notification if authenticated user is an admin 
        if ($isAdmin) {
            $user->notify(new CompanyCreatedNotification($this->company));
        }
    }
}
