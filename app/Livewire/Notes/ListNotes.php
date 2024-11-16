<?php

namespace App\Livewire\Notes;

use Livewire\Component;

class ListNotes extends Component
{
    public function render()
    {
        return view('livewire.notes.list-notes')->layout('layouts.app');
    }

    public function showModal() {
        dd("SHow some shit in here");
    }
}
