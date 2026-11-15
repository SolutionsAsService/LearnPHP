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
            $this->get($url)->assertOk()->assertSee('Skip to main content');
        }
    }

    public function test_unknown_url_returns_404(): void
    {
        $this->get('/no-such-page')->assertNotFound()->assertSee('Page not found');
    }

    public function test_examples_show_cli_output(): void
    {
        $this->get('/examples')->assertSee('Hello, Ada &amp;lt;b&amp;gt;Lovelace&amp;lt;/b&amp;gt;', false);
    }

    public function test_contact_rejects_bad_input(): void
    {
        $this->from('/contact')->post('/contact', ['name' => '', 'email' => 'nope', 'message' => 'short'])
            ->assertRedirect('/contact')
            ->assertSessionHasErrors(['name', 'email', 'message']);
        $this->assertDatabaseCount('contact_messages', 0);
    }

    public function test_contact_accepts_good_input(): void
    {
        $this->post('/contact', ['name' => 'Ada', 'email' => 'ada@example.com', 'message' => 'Hello, I love PHP.'])
            ->assertRedirect('/contact')->assertSessionHas('status');
        $this->assertDatabaseHas('contact_messages', ['email' => 'ada@example.com']);
        $this->followingRedirects()->get('/contact')->assertOk();
    }

    public function test_flash_success_is_shown(): void
    {
        $this->followingRedirects()->post('/contact', ['name' => 'Ada', 'email' => 'ada@example.com', 'message' => 'Hello, I love PHP.'])
            ->assertSee('Thank you, Ada.');
    }
}
