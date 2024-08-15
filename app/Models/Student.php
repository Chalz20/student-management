<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
      'programe_id',
      'department_id',
      'name',
      'email'
    ];

    public function programe(){
      return $this->belongsTo(Programe::class);
    }

    public function department(){
        return $this->belongsTo(Department::class );
    }
}
