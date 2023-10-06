<?php

namespace App\Livewire\Components;

use App\Models\Newsletter;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Footer extends Component
{
    #[Rule('required')] 
    public $email = '';

    public function save()
    {
        $this->validate(); 
 
        Newsletter::create(
            $this->only(['email'])
        );
 
        return $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.components.footer');
    }
}
