<?php

namespace App\Livewire;

use App\Models\Department;
use Livewire\Attributes\Layout;
use Livewire\Component;

class DepartmentEdit extends Component
{
    #[Layout('layouts.app')]
    public $name, $code;

    public Department $department;

    public function render()
    {
        return view('livewire.department-edit');
    }

    public function mount(){
        $this->fill($this->department->only(['name','code']));
    }

    public function updateDepartment(){
        $validated = $this->validate([
            'name' => 'required',
            'code' => 'required',
        ]);

        $this->student->update($validated);

        return redirect(route('department.index'));

    }
}
