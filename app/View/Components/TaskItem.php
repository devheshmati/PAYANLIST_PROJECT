<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TaskItem extends Component
{
    public $workspace;
    public $item;
    /**
     * Create a new component instance.
     */
    public function __construct($workspace, $item)
    {
        $this->workspace = $workspace;
        $this->item = $item;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.task-item');
    }
}
