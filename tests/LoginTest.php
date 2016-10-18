<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testLoginPageShowsLoginForm()
    {
        $this->visit('/login')
            ->see('Usuari')
            ->see('Password')
//            ->seeElement('')
        ;
    }

    protected function createTestUser(){
        return factory(App\User::class,1)->create(['password' => Hash::make('123546')]);
    }

    public function testLoginPostWithUserOk()
    {
        $user = $this->createTestUser();
        $this->visit('/login')
            ->type($user->name,'email')
            ->type('123456', 'password')
            ->press('login')
            ->seePageIs('/home');

    }

    public function testLoginPostWithUserNoOk()
    {

        $this->visit('/login')
            ->type('no estara','email')
            ->type('123456', 'password')
            ->press('login')
            ->see('Username not exist')
            ->seePageIs('/login');

    }
}
