<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Support\Arr;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Portfolio extends Component
{
    /**
     * Create a new component instance.
     */
    public array $items = [] ;
    public array $tabs = [] ;
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel','Taiwindcss','CSS','Vue3'],
                'title' => 'Application full stack avec laravel',
                'image' => url('/img/image1.jpg'),
                'github' => 'https://github.com/abdellahkabagithub/'
            ],
            [
                'category' => ['Laravel','Livewire','Bootstrap'],
                'title' => 'E-commerce Bonfi-Saoudi',
                'image' => url('/img/ecommerce.png'),
                'github' => 'https://github.com/abdellahkabagithub/'
            ],
            [
                'category' => ['Javascript','HTML','CSS'],
                'title' => 'Portfolio',
                'image' => url('/img/portfolio.png'),
                'github' => 'https://github.com/abdellahkabagithub/'
            ],
            [
                'category' => ['Laravel','Livewire','Jetstream'],
                'title' => 'Sclarité',
                'image' => url('/img/scolarite.png'),
                'github' => 'https://github.com/abdellahkabagithub/Scolarite/'
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.portfolio');
    }
}
