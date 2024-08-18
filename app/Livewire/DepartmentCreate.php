<?php

namespace App\Livewire;

use App\Models\Department;
use Livewire\Attributes\Layout;
use Livewire\Component;

class DepartmentCreate extends Component
{
    #[Layout('layouts.app')]
    public $name, $code ;

    public function render()
    {
        return view('livewire.department-create');
    }

    public function addDepartment(){
        $validated = $this->validate([
            'name' => 'required',
            'code' => 'required',
        ]);

        Department::create($validated);

        return $this->redirect(route('department.index'));

    }
}
