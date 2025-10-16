<?php

namespace App\View\Components;

use Closure;
use App\Models\ProductModel;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class BestSelling extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $products = ProductModel::inRandomOrder()->take(6)->get();
        return view('components.best-selling',compact('products'));
    }
}
