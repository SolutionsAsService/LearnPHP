<?php

namespace Tests\Feature;

use App\Models\ContactMessage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SiteTest extends TestCase
{
    use RefreshDatabase;

    public function test_every_page_returns_200(): void
    {
        foreach (['/', '/features', '/syntax', '/benefits', '/examples', '/contact'] as $url) {
            $this->get($url)->assertOk()->assertSee('<main id="main"', false);
        }
    }

    public function test_contact_rejects_bad_input(): void
    {
        $this->post('/contact', ['name' => '', 'email' => 'nope', 'message' => 'short'])
            ->assertSessionHasErrors(['name', 'email', 'message']);
        $this->assertDatabaseCount('contact_messages', 0);
    }

    public function test_contact_errors_are_shown(): void
    {
        $this->from('/contact')->followingRedirects()
            ->post('/contact', ['name' => '', 'email' => 'nope', 'message' => ''])
            ->assertSee('There is a problem with your message');
    }

    public function test_contact_accepts_good_input(): void
    {
        $this->followingRedirects()->post('/contact', [
            'name' => 'Ada', 'email' => 'ada@example.com', 'message' => 'Hello from the tests.',
        ])->assertSee('Thank you, Ada');
        $this->assertDatabaseHas('contact_messages', ['email' => 'ada@example.com']);
        $this->assertSame(1, ContactMessage::count());
    }

    public function test_post_without_csrf_token_is_refused_outside_tests(): void
    {
        $this->get('/contact')->assertSee('name="_token"', false);
    }

    public function test_unknown_url_returns_404(): void
    {
        $this->get('/no-such-page')->assertNotFound()->assertSee('Page not found');
    }
}
