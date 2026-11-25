<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Ricafort Showroom');
        $response->assertSee('Find the drive that feels right.');
    }

    public function test_the_contact_page_returns_a_successful_response(): void
    {
        $response = $this->get('/contact');

        $response->assertOk();
        $response->assertSee('Contact Us');
    }

    public function test_the_contact_form_validates_input(): void
    {
        $this->post('/contact', [])
            ->assertSessionHasErrors(['name', 'email', 'message']);
    }
}
