<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class dashboardheader extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()

    {
        $user=Auth::user();
        return view('layouts.dashboardheader',compact('user'));
    }
}
