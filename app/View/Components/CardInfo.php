<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardInfo extends Component
{
    public $title;
    public $entity;
    public $time;
    public $btnShowMore;

    /**
     * Create a new component instance.
     */
    public function __construct($title = 'Default', $entity = 'Default', $time = 'Default', $btnShowMore = false)
    {
        $this->title = $title;
        $this->entity = $entity;
        $this->time = $time;
        $this->btnShowMore = $btnShowMore;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-info');
    }
}
