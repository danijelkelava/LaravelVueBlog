<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Faker\Factory as Faker;

class ExampleTest extends TestCase
{
	protected $faker;
    /**
     * Set up the test
     */
    public function setUp()
    {
        parent::setUp();
        $this->faker = Faker::create();
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function store_post()
    {
    	$data = [
    		'title' => $this->faker->sentence,
    		'body' => $this->faker->paragraph
    	];

	    $this->post(route('post.store'), $data)
	         ->assertStatus(201);
	}
}
