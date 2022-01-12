<?php

namespace Tests\Unit;
use App\Models\User;
use App\Providers\RouteServiceProvider;
//use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Fortify\Features;
use Laravel\Jetstream\Jetstream;
use Tests\TestCase;


class UserTest extends TestCase
{

    public function test_login_screen_can_be_rendered()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

}