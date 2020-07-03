<?php

namespace Tests\Browser;

use Laravel\Dusk\Chrome;
use Tests\DuskTestCase;
use Faker\Factory;
use App\User;
use App\Employee;
use App\Company;

class EmployeeCRUDTest extends DuskTestCase
{
    /**
     * Error while creating Employee test
     *
     * @return void
     */
    public function testCreateEmployeeWithoutRequiredFields()
    {

        $this->browse(function ($browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/employees/create')
                    ->press('Create Employee')
                    ->assertDontSee('New Employee created successfully.');
        });
    }

    /**
     * Create Employee test
     * First create a company then employee
     *
     * @return void
     */
    public function testCreateEmployee()
    {
        $faker = Factory::create();

        $this->browse(function ($browser) use ($faker) {
            $browser->loginAs(User::find(1))
                    ->visit('/companies/create')
                    ->type('name', $faker->name)
                    ->type('email', $faker->email)
                    ->type('website', $faker->url)
                    ->press('Create Company');
                    
            $company_id = Company::all()->first()->id;

            $browser->loginAs(User::find(1))
                    ->visit('/employees/create')
                    ->type('f_name', $faker->firstName)
                    ->type('l_name', $faker->firstName)
                    ->select('company_id', $company_id)
                    ->type('email', $faker->email)
                    ->press('Create Employee')
                    ->assertSee('New Employee created successfully.');
        });
    }

    /**
     * Edit Employee Test.
     *
     * @return void
     */
    public function testEditEmployee()
    {
        $employee_id = Employee::all()->first()->id;
        $company_id = Company::all()->first()->id;
        $faker = Factory::create();

        $this->browse(function ($browser) use ($faker, $employee_id, $company_id) {
            $browser->loginAs(User::find(1))
                    ->visit('/employees/' . $employee_id . '/edit')
                    ->type('f_name', $faker->firstName)
                    ->type('l_name', $faker->firstName)
                    ->select('company_id', $company_id)
                    ->type('email', $faker->email)
                    ->press('Update Employee Information')
                    ->assertSee('Employee information has been updated successfully.');
        });
    }

    /**
     * Read Employee Test
     *
     * @return void
     */
    public function testReadEmployee()
    {
        $employee_id = Employee::all()->first()->id;

        $this->browse(function ($browser) use ($employee_id) {
            $browser->loginAs(User::find(1))
                    ->visit('/employees/' . $employee_id)
                    ->assertPathIs('/employees/' . $employee_id);
        });
    }

    /**
     * Delete Employee Test
     *
     * @return void
     */
    public function testDeleteEmployee()
    {
        $employee_id = Employee::all()->first()->id;

        $this->browse(function ($browser) use ($employee_id) {
            $browser->loginAs(User::find(1))
                    ->visit('/employees/' . $employee_id)
                    ->press('Delete Employee')
                    ->assertSee('Employees');
        });
    }
}
