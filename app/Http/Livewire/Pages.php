<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Pages extends Component
{
    public $modelFormVisible = false;
    public $slug;
    public $title;
    public $content;

    public function creatShowModel()
    {
        $this->modelFormVisible = true;
    }
    public function render()
    {
        return view('livewire.pages');
    }
}
