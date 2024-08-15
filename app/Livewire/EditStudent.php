<?php

namespace App\Livewire;

use App\Models\Department;
use App\Models\Programe;
use App\Models\Student;
use Livewire\Attributes\Layout;
use Livewire\Component;

class EditStudent extends Component
{
    #[Layout('layouts.app')]
    public $name, $email , $programe_id , $department_id ;

    public Student $student;

    public $departments = [];
    public function render()
    {
        return view('livewire.edit-student',[
            'programes'=> Programe::all()
            ]
        );
    }

    public function mount(){
        $this->fill($this->student->only(['name','email','programe_id','department_id']));

        $this->departments = Department::where('id',$this->student->department_id)->get();
    }

    public function updateStudent(){
        $validated = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'programe_id'=> 'required',
            'department_id' => 'required'
        ]);

        $this->student->update($validated);

        return redirect(route('student.index'));

    }

    public function updatedProgrameId($value){
        $dept_id = Programe::find($value)->department_id;

        $this->departments = Department::where('id',$dept_id)->get();
    }
}
