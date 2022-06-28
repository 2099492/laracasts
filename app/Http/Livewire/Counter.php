<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        return <<<'html'
            <div class="counter">
                <span>{{ $count }}</span>
                <button wire:click="increment">+</button>
            </div>
        html;
    }
}
