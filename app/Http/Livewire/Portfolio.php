<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Portfolio extends Component
{

    use withPagination;
    public function render()
    {
//        $portfolios = \App\Models\admin\Portfolio::Selection()->OrderBy('id', 'desc')->paginate(PAGINATION_COUNT);
        return view('livewire.portfolio');
    }
}
