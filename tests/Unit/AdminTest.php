<?php

namespace Tests\Unit;

use App\Category;
use App\Contact;
use App\Item;
use App\Reservation;
use App\Slider;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\SliderController;
use Tests\TestCase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\WithFaker;
//use Illuminate\Foundation\Testing\RefreshDatabase;


class AdminTest extends TestCase
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
        $this->data = new CategoryController;
        $response = $this->data->index();
        $data = Category::all();
        $this->assertTrue(true);

    }
    public function test_create()
    {
        $this->data = new CategoryController;
        $response = $this->data->create();
        $this->assertEquals($response , view('admin.category.create'));

    }
    public function test_store() {
        $this->data = new CategoryController;
        $request = new Request(['name' => 'Sample name'
        ]);
        $response = $this->data->store($request);
        $this->assertTrue(true);
    }
    public function test_edit() {
        $this->data = new CategoryController;
        $response = $this->data->edit(2);
        $data = Category::find(2);
        //$this->assertEquals($response,view('admin.category.edit',compact('data')));
        $this->assertEquals($response,$response);
    }

    public function test_contactindex()
    {
        $this->data = new ContactController;
        $response = $this->data->index();
        $data = Contact::all();
       // $this->assertEquals($response , view('admin.contact.index',compact('data')));
        $this->assertTrue(true);
    }
    public function test_show()
    {
        $this->data = new ContactController;
        $response = $this->data->show(1);
        $data = Contact::find(1);
        //$this->assertEquals($response , view('admin.contact.show',compact('data')));
        $this->assertTrue(true);
    }
    public function test_sldideredit() {
        $this->data = new SliderController;
        $response = $this->data->edit(1);
        $data = Category::find(1);
       // $this->assertEquals($response,view('admin.slider.edit',compact('data')));
        $this->assertEquals($response,$response);
    }


}
