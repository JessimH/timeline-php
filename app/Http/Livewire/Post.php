<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Post extends Component
{
    public $post;

    public $name = "Clem";

    public function mount($post)
    {
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.post');
    }
}
