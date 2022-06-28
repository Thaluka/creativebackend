<?php

namespace Tests\Feature\Http\Controllers\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SubscribeControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function can_create_a_subscribe()
    {
        //$this->assertTrue(true);
       $response= $this->json('POST','/api/addSubscribe',[
        
        ]);
        $response->assertStatus(201);

    }
}
