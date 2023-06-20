<?php

namespace App\Models\ArSys;

use App\Models\Research\Data;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['program_id', 'user_id', 'student_number', 'code',  'specialization_id', 'first_name', 'last_name', 'phone', 'email'];
    protected $table = 'arsys_student';

    public function program() {
        return $this->belongsTo(StudyProgram::class, 'program_id', 'id');
    }
    public function specialization() {
        return $this->belongsTo(StudySpecialization::class, 'specialization_id', 'id' );
    }

    public function supervisor() {
        return $this->belongsTo(Staff::class, 'supervisor_id', 'id' );
    }

    public function research() {
        return $this->hasMany(Data::class, 'student_id', 'id');
    }

}
