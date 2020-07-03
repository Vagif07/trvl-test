<?php

namespace App\Observers;

use App\Company;
use App\Jobs\SendCompanyCreatedJob;
use Illuminate\Support\Facades\Storage;

class CompanyObserver
{
    /**
     * Handle the company "created" event.
     *
     * @param  \App\Company  $company
     * @return void
     */
    public function created(Company $company)
    {
        dispatch(new SendCompanyCreatedJob($company));
    }

    /**
     * Handle the company "updated" event.
     *
     * @param  \App\Company  $company
     * @return void
     */
    public function updated(Company $company)
    {
        //
    }

    /**
     * Handle the company "deleted" event.
     *
     * @param  \App\Company  $company
     * @return void
     */
    public function deleted(Company $company)
    {
        // Delete the logo from the storage, if company had any
        if (isset($company->logo)) {
            Storage::disk('public')->delete($company->logo);
        }
    }

    /**
     * Handle the company "restored" event.
     *
     * @param  \App\Company  $company
     * @return void
     */
    public function restored(Company $company)
    {
        //
    }

    /**
     * Handle the company "force deleted" event.
     *
     * @param  \App\Company  $company
     * @return void
     */
    public function forceDeleted(Company $company)
    {
        //
    }
}
