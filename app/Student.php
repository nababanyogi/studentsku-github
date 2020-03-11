<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    //protected $table = 'mahasiswa'; //jika tidak default
    use SoftDeletes;
    protected $fillable = ['nama', 'nik', 'email', 'jurusan']; //mass assigment
    // guarded
}
