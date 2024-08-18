<?php

namespace App\Livewire;

use App\Models\Department;
use Livewire\Attributes\Layout;
use Livewire\Component;

class DepartmentList extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.department-list', [
           'departments' => Department::all() ]);
    }

    public function deleteDepartment($departmentId){
        Department::find($departmentId)->delete();
    }
}
