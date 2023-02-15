<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Meta extends Component
{
    public $homeMetaDescription;
    public $homeOgImage_url;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->homeMetaDescription = config('php-portugal.home_meta_description');
        $this->homeOgImage_url = config('php-portugal.home_og_title');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="msapplication-TileColor" content="#ffffff" />
        <meta name="theme-color" content="#fff" />
        <meta name="description" content="{{ $homeMetaDescription }}" />
        <meta property="og:image" content="{{ $homeOgImage_url }}"} />
        blade;
    }
}
