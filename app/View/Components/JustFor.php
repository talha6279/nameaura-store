<?php

namespace App\View\Components;

use Closure;
use App\Models\ProductModel;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class JustFor extends Component
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
        $pensCount = ProductModel::where('category_id', 1)->count();
        $ringsCount = ProductModel::where('category_id', 2)->count();
        $braceletsCount = ProductModel::where('category_id', 3)->count();
        $keychainsCount = ProductModel::where('category_id', 4)->count();
        $walletsCount = ProductModel::where('category_id', 5)->count();
        $necklacesCount = ProductModel::where('category_id', 6)->count();
        $bottlesCount = ProductModel::where('category_id', 7)->count();
        $mugsCount = ProductModel::where('category_id', 8)->count();
        $giftsCount = ProductModel::where('category_id', 9)->count();
        $pens = ProductModel::where('category_id', '1')->inRandomOrder()->take(6)->get();
        $rings = ProductModel::where('category_id', '2')->inRandomOrder()->take(6)->get();
        $bracelets = ProductModel::where('category_id', '3')->inRandomOrder()->take(6)->get();
        $keychains = ProductModel::where('category_id', '4')->inRandomOrder()->take(6)->get();
        $wallets = ProductModel::where('category_id', '5')->inRandomOrder()->take(6)->get();
        $necklaces = ProductModel::where('category_id', '6')->inRandomOrder()->take(6)->get();
        $bottles = ProductModel::where('category_id', '7')->inRandomOrder()->take(6)->get();
        $mugs = ProductModel::where('category_id', '8')->inRandomOrder()->take(6)->get();
        $gifts = ProductModel::where('category_id', '9')->inRandomOrder()->take(6)->get();
        return view('components.just-for',compact(
            'pens',
            'rings',
            'bracelets',
            'keychains',
            'wallets',
            'necklaces',
            'bottles',
            'mugs',
            'gifts',
            'pensCount',
            'ringsCount',
            'braceletsCount',
            'keychainsCount',
            'walletsCount',
            'necklacesCount',
            'bottlesCount',
            'mugsCount',
            'giftsCount'
        ));
    }
}
