<?php

namespace App\Livewire\Blog;

use App\Models\Blog;
use Livewire\Component;

class Details extends Component
{
    public $post;

    public function mount($id){

        $this->post = Blog::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.blog.details', [
            'post' => $this->post
        ]);
    }
}
