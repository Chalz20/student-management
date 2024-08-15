<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class StudentList extends Component
{
    use WithPagination;
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.student-list', [
            'students'=> Student::paginate(5) ]);
    }

    public function deleteStudent($studentId){
        Student::find($studentId)->delete();
    }
}
