<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class Movies extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = \App\Movie::count();
        $string = trans_choice('Movies', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-tv',
            'title'  => "{$count} {$string}",
            'text'   => __('You have'.'  '.$count. '   '.'movies in your database. Click on button below to view all movies.', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => 'View all movies',
                'link' => route('voyager.movies.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/03.jpg'),
        ]));
    }
}
