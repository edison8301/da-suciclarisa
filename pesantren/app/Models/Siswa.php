<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    public static function tes() {
        return "Hello World";
    }

    public function helloWorld()
    {
        return "Hello World";
    }

    public static function helloWorldStatic()
    {
        return "Hello World static";
    }
}