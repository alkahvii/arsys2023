<?php

namespace App\Models\Research;

use App\Models\ArSys\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $fillable = [];
    protected $table = 'arsys_research';

    protected $guarded=['id'];
    public function identitas(){
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function kondisi(){
        return $this->belongsTo(Milestone::class, 'research_milestone', 'id');
    }

    public function dosen(){
        return $this->hasMany(Supervisor::class, 'research_id', 'id');
    }

    public function event(){
        return $this->belongsTo(Event::class, 'research_milestone', 'id');
    }
}
