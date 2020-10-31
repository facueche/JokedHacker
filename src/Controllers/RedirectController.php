<?php

namespace DebianMoor\JokedHacker\Controllers;

use DebianMoor\JokedHacker\Repositories\JokeLinksRepository;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;

class RedirectController extends Controller
{
    public function __invoke(JokeLinksRepository $jokeLinksRepository)
    {
        return Redirect::to($jokeLinksRepository->getRandomLink());
    }
}
