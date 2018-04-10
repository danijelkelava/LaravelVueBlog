<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


class ExampleTest extends TestCase
{


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
