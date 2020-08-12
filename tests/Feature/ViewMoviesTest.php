<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ViewMoviesTest extends TestCase
{
    /**
     *
     */
    public function testMainPageShowsCorrectInfo()
    {
        Http::fake([
            'https://api.themoviedb.org/3/movie/popular' => Http::response([
                'results' => 'foo',
            ], 200),
        ]);
        $response = $this->get(route('movies.index'));

        $response->assertSuccessful();

        $response->assertSee('Popular Movies');
    }


}
