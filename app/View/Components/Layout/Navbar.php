<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public array $navigationItems = [] ;
    public function __construct()
    {
        $this->navigationItems = [
        ['label' => 'A propos','href' => '#about'],
        ['label' => 'Projets','href' => '#portfolio'],
        // ['label' => 'Coding Tutorials','href' => '#tutorials'],
        ['label' => 'Contact','href' => '#contact'],
        ];
    }

   
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layout.navbar');
    }
}
