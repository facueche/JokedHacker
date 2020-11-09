<?php

namespace DebianMoor\JokedHacker\Repositories;

use DebianMoor\JokedHacker\TestCase;

class RedirectControllerSpec extends TestCase
{
    /**
     * @covers
     * @test
     */
    public function itShouldRedirectToJokeLink(): void
    {
        $response = $this->get('.env');

        $response->assertRedirect();
    }
}
