<?php

namespace App\Livewire;

use App\Models\Department;
use App\Models\Programe;
use App\Models\Student;
use Livewire\Attributes\Layout;
use Livewire\Component;

class CreateStudent extends Component
{
    #[Layout('layouts.app')]
    public $name, $email , $programe_id , $department_id ;

    public $departments = [];

    public function render()
    {
        return view('livewire.create-student',[
            'programes'=> Programe::all(),
            'departments' => Department::all()
        ]);
    }

    public function addStudent(){
        $validated = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'programe_id'=> 'required',
            'department_id' => 'required'
        ]);

        Student::create($validated);

        return $this->redirect(route('student.index'));

    }

    public function updatedProgrameId($value){
        $dept_id = Programe::find($value)->department_id;

        $this->departments = Department::where('id',$dept_id)->get();
    }
}
