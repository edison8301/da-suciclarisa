<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    public function getArrayPembayaran() {
        $query = Pembayaran::query();
        $query->where('id_siswa', '=', $this->id);

        $arrayPembayaran = $query->get();

        return $arrayPembayaran;
    }
}