<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Counter extends Component
{
    /**
     * User clicks
     *
     * @var int
     */
    public int $count = 0;

    /**
     * Counter increment functionality
     *
     * @return void
     */
    public function increment(): void
    {
        $this->count++;
    }

    /**
     * Counter decrement functionality
     *
     * @return void
     */
    public function decrement(): void
    {
        $this->count--;
    }

    /**
     * Render the component
     *
     * @return View
     */
    public function render(): View
    {
        return view('livewire.counter');
    }
}
