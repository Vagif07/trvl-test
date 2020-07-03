<?php

namespace Tests\Browser;

use Laravel\Dusk\Chrome;
use Tests\DuskTestCase;
use Faker\Factory;
use App\User;
use App\Company;

class CompanyCRUDTest extends DuskTestCase
{
    /**
     * Error while creating Company test
     *
     * @return void
     */
    public function testCreateCompanyWithoutRequiredFields()
    {

        $this->browse(function ($browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/companies/create')
                    ->press('Create Company')
                    ->assertDontSee('New Company created successfully.');
        });
    }

    /**
     * Create Company test
     *
     * @return void
     */
    public function testCreateCompany()
    {
        $faker = Factory::create();

        $this->browse(function ($browser) use ($faker) {
            $browser->loginAs(User::find(1))
                    ->visit('/companies/create')
                    ->type('name', $faker->name)
                    ->type('email', $faker->email)
                    ->type('website', $faker->url)
                    ->press('Create Company')
                    ->assertSee('New Company created successfully.');
        });
    }

    /**
     * Edit Company Test.
     *
     * @return void
     */
    public function testEditCompany()
    {
        $company_id = Company::all()->first()->id;
        $faker = Factory::create();

        $this->browse(function ($browser) use ($faker, $company_id) {
            $browser->loginAs(User::find(1))
                    ->visit('/companies/' . $company_id . '/edit')
                    ->type('name', $faker->name)
                    ->type('email', $faker->email)
                    ->type('website', $faker->url)
                    ->press('Update Company Information')
                    ->assertSee('Company information has been updated successfully.');
        });
    }

    /**
     * Read Company Test
     *
     * @return void
     */
    public function testReadCompany()
    {
        $company_id = Company::all()->first()->id;

        $this->browse(function ($browser) use ($company_id) {
            $browser->loginAs(User::find(1))
                    ->visit('/companies/' . $company_id)
                    ->assertPathIs('/companies/' . $company_id);
        });
    }

    /**
     * Delete Company Test
     *
     * @return void
     */
    public function testDeleteCompany()
    {
        $company_id = Company::all()->first()->id;

        $this->browse(function ($browser) use ($company_id) {
            $browser->loginAs(User::find(1))
                    ->visit('/companies/' . $company_id)
                    ->press('Delete Company')
                    ->assertSee('Companies');
        });
    }
}
