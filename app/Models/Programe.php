<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'department_id',
        'code'
    ];

    public function department (){
        return $this->belongsTo(Department::class,'department_id');
    }

    public function students (){
        return $this->hasMany(Student::class);
    }


}
