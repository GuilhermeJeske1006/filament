<?php

namespace App\Livewire\Blog\Core;

use Livewire\Component;

class Card extends Component
{
    public $post;

    public function mount($post = null){
        $this->post = $post;
    }
    public function render()
    {
        return view('livewire.blog.core.card');
    }
}
