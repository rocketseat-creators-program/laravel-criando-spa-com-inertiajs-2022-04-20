<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Welcome extends Component
{
    public $recursos = [];

    public function mount()
    {
        $this->recursos = [
            'Laravel 8' => 'https://laravel.com/docs/8.x',
            'Tailwind CSS 3 + JIT' => 'https://tailwindcss.com/docs/installation',
            'Livewire 2.x' => 'https://laravel-livewire.com/docs/2.x',
            'Alpine.js' => 'https://alpinejs.org/',
        ];
    }

    public function render()
    {
        return view('livewire.welcome');
    }
}
