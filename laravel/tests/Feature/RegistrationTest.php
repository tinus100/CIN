<?php

namespace Tests\Feature;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase; // Gebruikt om de database te vernieuwen voor elke test
use Tests\TestCase;
use App\Models\User; // Importeer het User model

class RegistrationTest extends TestCase
{
    use RefreshDatabase; // Zorgt ervoor dat de database in een bekende staat begint voor elke test

    /**
     * Test of de registratiepagina correct wordt weergegeven.
     */
    public function test_registration_screen_can_be_rendered()
    {
        $response = $this->get('/register'); // Verzend een GET-verzoek naar de registratieroute

        $response->assertStatus(200); // Controleert of de respons een 200 OK status heeft
    }

    /**
     * Test of nieuwe gebruikers zich kunnen registreren.
     */
    public function test_new_users_can_register()
    {
        $response = $this->post('/register', [ // Verzend een POST-verzoek naar de registratieroute met formuliergegevens
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        // Ophalen van de nieuw geregistreerde gebruiker
        $user = User::latest('id')->first();

        // Simuleren dat de gebruiker zijn e-mail heeft geverifieerd
        $user->markEmailAsVerified();

        // Controleert of de gebruiker is geauthenticeerd na registratie
        $this->assertAuthenticated();

        // Controleert of de respons een omleiding is naar de homepagina
        $response->assertRedirect(RouteServiceProvider::HOME);
    }
}




