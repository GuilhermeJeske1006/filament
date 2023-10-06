<?php

namespace App\Livewire\Home\Core;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class Banner extends Component
{
    #[Reactive] 
    public $banner;
 
    public function mount($banner = null)
    {
        $this->banner = $banner;
    }

    public function render()
    {
        return view('livewire.home.core.banner');
    }
}
