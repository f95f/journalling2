<?php

namespace App\Livewire\Tasks;

use Livewire\Component;

class ListTasks extends Component
{
    public function render()
    {
        return view('livewire.tasks.list-tasks')->layout('layouts.app');
    }

    public function addTask() {
        dd("Shit should work idk");
    }
}
