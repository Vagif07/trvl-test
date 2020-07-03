<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Chrome;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * Wrong Password is not logged in.
     *
     * @return void
     */
    public function testWrongPassword()
    {
        $this->browse(function ($browser) {
            $browser->visit('/login')
                    ->type('email', 'admin@trvl.com')
                    ->type('password', 'wrongpassword')
                    ->press('Login')
                    ->assertPathIs('/login');
        });
    }

    /**
     * Admin can Login test Case.
     *
     * @return void
     */
    public function testAdminCanLogin()
    {
        $this->browse(function ($browser) {
            $browser->visit('/login')
                    ->type('email', 'admin@trvl.com')
                    ->type('password', 'password')
                    ->press('Login')
                    ->assertPathIs('/home');
        });
    }
}
