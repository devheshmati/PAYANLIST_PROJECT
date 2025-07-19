<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Accordion extends Component
{
    public string $message;
    public array $accList;
    /**
     * Create a new component instance.
     */
    public function __construct(string $message, array $accList)
    {
        $this->message = $message;
        $this->accList = $accList;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.accordion');
    }
}
