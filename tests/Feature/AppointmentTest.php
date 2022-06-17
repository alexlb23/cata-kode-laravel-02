<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testFormOk()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testShowOk()
    {
        $response = $this->get('/23');

        $response->assertStatus(200);
    }

    public function testShowNotFound()
    {
        $response = $this->get('/546445');

        $response->assertStatus(404);
    }

    public function testPostOk()
    {
        $response = $this->post('/', [
            "name" => "Cayla O'Conner",
            "phone" => "0144415899",
            "email" => "earl.wintheiser@example.org",
            "date" => "2016-02-29 19:50:56",
            "message" => "Et et quas laborum ut. Rerum sed doloribus vel ullam sit sint.",
            "timezone" => "Europe/Paris"
        ]);

        $response->assertStatus(200);
    }
}
