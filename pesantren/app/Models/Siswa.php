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

    public function getTotalPembayaran() {

        $arrayPembayaran = $this->getArrayPembayaran();

        $total = 0;

        foreach($arrayPembayaran as $pembayaran) {
            $total = $total + $pembayaran->jumlah;
        }

        return $total;
    }

    public function getTotalHarusDibayar() {

        return 1200000;
    }

    public function getTotalKekuranganPembayaran() {

        $totalPembayaran = $this->getTotalPembayaran();
        $totalHarusDibayar = $this->getTotalHarusDibayar() - $totalPembayaran ;

        return $totalHarusDibayar;
    }
}