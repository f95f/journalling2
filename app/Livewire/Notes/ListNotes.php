<?php

namespace App\Livewire\Notes;

use App\Models\Note;
use Livewire\Component;

class ListNotes extends Component
{
    public $noteTitle;
    public $noteContent;

        

    public function createNote() {

        if($this->noteTitle == '' && $this->noteContent == '') {
            return $this->closeForm();
        }

        $validated = $this->validate([
            'noteTitle' => 'nullable|string|max:256',
            'noteContent' => 'nullable|string',
        ]);

        Note::create($validated);

        $this->reset(['noteTitle', 'noteContent']);
        return $this->closeForm();
    }




    private function closeForm() {
        $this->dispatch('hide-form');
        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.notes.list-notes')->layout('layouts.app');
    }
}
