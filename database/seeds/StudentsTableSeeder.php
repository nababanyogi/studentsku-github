<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'nama' => 'Panji',
            'nik' => '20001000',
            'email' => 'panji@gmail.com',
            'jurusan' => 'TI'
        ]);
        Student::create([
            'nama' => 'Dipo',
            'nik' => '20001001',
            'email' => 'dipo@gmail.com',
            'jurusan' => 'TE'
        ]);
        Student::create([
            'nama' => 'Andrew',
            'nik' => '20001003',
            'email' => 'andrew@gmail.com',
            'jurusan' => 'SI'
        ]);        
    }
}
