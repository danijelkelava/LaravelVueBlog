<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class RouteTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHomePage()
    {
        $response = $this->get('/')
                         ->assertStatus(200)
                         ->assertSuccessful()
                         ->assertViewIs('index')
                         ->assertSee('My Home Page')                         
                         ->assertViewHas('last_three_posts');
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBlogPage()
    {
        $response = $this->get('/blog')
                         ->assertStatus(200)
                         ->assertSuccessful()
                         ->assertViewIs('blog')
                         ->assertSee('Welcome to my Blog')
                         ->assertViewHas('posts');
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAdminPage()
    {
        $user = factory(User::class)->create();
        
        $response = $this->actingAs($user)->get('/admin')
                         ->assertStatus(200)
                         ->assertSuccessful()
                         ->assertViewIs('admin')
                         ->assertSee('Laravel');
    }

    public function testGuestCantVisitAdminPage(){
        $this->get('/admin')
             ->assertRedirect('/login');
    }

}
