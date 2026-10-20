<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProofPrivacyTest extends TestCase
{
    public function test_unconfirmed_menu_proof_cannot_be_served_in_production(): void
    {
        $this->app->detectEnvironment(fn () => 'production');

        $this->get('/menu-proof')->assertNotFound();
    }
}
