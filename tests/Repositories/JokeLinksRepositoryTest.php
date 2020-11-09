<?php

namespace DebianMoor\JokedHacker\Repositories;

use DebianMoor\JokedHacker\TestCase;

class JokeLinksRepositoryTest extends TestCase
{
    /**
     * @covers
     */
    public function testThatARandomLinkIsReturned(): void
    {
        $repository = new JokeLinksRepository();

        $link = $repository->getRandomLink();

        $this->assertContains($link, JokeLinksRepository::LINKS);
    }
}
