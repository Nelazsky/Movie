<?php

namespace App\View\Components;

use Illuminate\View\Component;

/**
 * Class MovieCard
 * @package App\View\Components
 */
class MovieCard extends Component
{

    public $movie;
    public $genres;


    /**
     * MovieCard constructor.
     * @param $movie
     * @param $genres
     */
    public function __construct($movie, $genres)
    {
        $this->movie = $movie;
        $this->genres = $genres;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.movie-card');
    }
}
