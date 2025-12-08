<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Encapsulation Model
class StudentModel extends Model
{
    private string $name;
    private int $age;
    private string $major;

    public function __construct(string $name, int $age, string $major){
        $this->name = $name;
        $this->age = $age;
        $this->major = $major;
    }

    public function setMajor(string $major) :void{
        $this->major = $major;
    }

    public function getName():string{
        return $this->name;
    }

    public function getAge():int{
        return $this->age;
    }
    public function getMajor():string{
        return $this->major;
    }
}
