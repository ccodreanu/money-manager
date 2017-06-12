<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HTTPTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * User should get redirected to the login page. I am not doing authentication here.
     *
     * @return void
     */
    public function testRedirectToLogin()
    {
        $response = $this->get('/');

        $response->assertRedirect('/login');
    }

    /**
     * User should get a 200 if able to log in.
     *
     * @return void
     */
    public function testAuthentication() {
        $user = factory(\App\User::class)->create();

        $response = $this->actingAs($user)->get('/home');
        $response->assertStatus(200);
    }
}
