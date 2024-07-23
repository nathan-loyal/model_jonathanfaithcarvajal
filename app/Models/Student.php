<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubjectGrade;

class Student extends Model
{
    use HasFactory;
    protected $table = "students";
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'address',
        'city',
        'province',
        'zip',
        'birtdate',
    ];

    protected $appends = ['fullname', 'birthday'];

    public function getFullnameAttribute()
    {
        return $this->fname . ' ' . $this->lname;
    }

    public function getBirthdayeAttribute()
    {
        $birthdate = $this->attributes['birthdate'];
        if($birthdate){
            return Carbon::parse($birthdate)->format('F d, y');
        }
    } 
    public function grades()
    {
        return $this->hasMany(SubjectGrade::class, 'student_id');
    }
}
