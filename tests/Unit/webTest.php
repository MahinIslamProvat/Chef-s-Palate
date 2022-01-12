<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
//use Illuminate\Foundation\Testing\RefreshDatabase;

class webTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    public function test_index()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    public function test_reserve(){
        $response = $this->get('/reservation');
        $response->assertStatus(405);
    }
    public function test_contact(){
        $response = $this->get('/contact');
        $response->assertStatus(405);
    }

    public function test_reservationindex()
    {
        $response = $this->get('reservation');
        $response->assertStatus(405);
    }

    public function test_contactcontrollerindex()
    {
        $response = $this->get('contact');
        $response->assertStatus(405);
    }


}
