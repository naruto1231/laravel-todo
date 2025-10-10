<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /** @test */
    public function hello_page_is_accessible()
    {
        $response = $this->get('/hello');

        $response->assertStatus(200);
        $response->assertSee('Hello');
    }
}
