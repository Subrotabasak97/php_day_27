<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $student;

    public function newStudent()
    {
        $this->student = new Student();
        $this->student->name  = 'Subrota';
        $this->student->email  = 'subrota@gmail.com';
        $this->student->mobile  = '7367865';
        $this->student->save();
    }

    public static function getAllStudenet()
    {
        return[
          0=>[
              'id' => 1,
              'name' => 'Subrota',
              'email'=> 'subrota@gmail.com',
              'mobile'=> '01283383578',
              'image'=> '',
          ],
            1 =>[
                'id' => 2,
                'name' => 'Sribas',
                'email'=> 'sribas@gmail.com',
                'mobile'=> '02378563275',
                'image'=> '',
            ],
        ];
    }
}
