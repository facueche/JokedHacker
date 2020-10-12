<?php

namespace DebianMoor\JokedHacker\Controllers;

use App\Http\Controllers\Controller;
use DebianMoor\JokedHacker\Repositories\JokeLinksRepository;
use Illuminate\Support\Facades\Redirect;

class RedirectController extends Controller
{
    public function handle()
    {
        return Redirect::to(JokeLinksRepository::LINKS[array_rand(JokeLinksRepository::LINKS)]);
    }
}
