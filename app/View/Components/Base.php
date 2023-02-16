<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Base extends Component
{
    public string $brand = 'My Web';
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $brand = $this->brand;
        return view('dashboard.base',['brand'=> $brand]);
    }
}
