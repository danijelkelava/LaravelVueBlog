<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteTest extends TestCase
{
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
}
