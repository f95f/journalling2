<?php

namespace App\Livewire\Notes;

use App\Models\Note;
use Livewire\Component;

class ListNotes extends Component
{
    public $notes;
    public $noteTitle;
    public $noteContent;
    public $isEditing = false;

    public function createNote() {
        $this->isEditing = true;

        if($this->noteTitle == '' && $this->noteContent == '') {
            $this->dispatch('hide-form');
            return;
        }

        $validated = $this->validate([
            'noteTitle' => 'nullable|string|max:256',
            'noteContent' => 'nullable|string',
        ]);

        Note::create($validated);

        session()->flash("message","Nota adicionada com sucesso.");
        $this->closeForm();
    }

    
    public function edit(int $id) {
        $this->isEditing = true;

        $note = Note::findOrFail($id);

        $this->noteTitle = $note->noteTitle;
        $this->noteContent = $note->noteContent;
        
        $this->dispatch('show-form');
    }


    private function closeForm() {
        $this->reset(['noteTitle', 'noteContent']);
        $this->dispatch('hide-form');
    }

    public function render()
    {
        $this->notes = Note::all();
        return view('livewire.notes.list-notes')->layout('layouts.app');
    }
}
