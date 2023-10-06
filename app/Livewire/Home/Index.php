<?php

namespace App\Livewire\Home;

use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;

class Index extends Component
{
    use WithPagination;

    public function render()
    {   
        return view('livewire.home.index', [
            'posts' => Blog::paginate(12),
            'banner' => Blog::limit(6)->latest()->get(),
        ]);
    }
}
