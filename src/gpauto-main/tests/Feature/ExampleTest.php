<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     *
     * @test
     */
    public function basicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
