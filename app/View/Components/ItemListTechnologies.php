<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ItemListTechnologies extends Component
{
    public $rgbColor;
    public $nameTech;

    /**
     * Create a new component instance.
     */
    public function __construct($rgbColor = '255,255,255', $nameTech = 'Default')
    {
        $this->rgbColor = $rgbColor;
        $this->nameTech = $nameTech;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.item-list-technologies');
    }
}
