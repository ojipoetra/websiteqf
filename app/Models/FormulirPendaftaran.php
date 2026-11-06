<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormulirPendaftaran extends Model
{
    /** @use HasFactory<\Database\Factories\FormulirPendaftaranFactory> */
    use HasFactory;

    protected $table = 'formulirpendaftaran';

    protected $fillable = [
        'nisn', 'nik', 'nama_lengkap', 'nama_panggilan', 'tempat_lahir',
        'tanggal_lahir', 'gender', 'agama', 'alamat', 'jenjang',
        'nama_ayah', 'nik_ayah', 'pekerjaan_ayah', 'pendidikan_ayah', 'telepon_ayah',
        'nama_ibu', 'nik_ibu', 'pekerjaan_ibu', 'pendidikan_ibu', 'telepon_ibu',
        'penghasilan_keluarga', 'nama_sekolah_asal', 'tahun_kelulusan',
        'alamat_sekolah_asal', 'pas_foto', 'kartu_keluarga', 'ijazah',
        'akta_kelahiran', 'pernyataan',
    ];

    protected function casts(): array
    {
        return ['tanggal_lahir' => 'date', 'pernyataan' => 'boolean'];
    }
}
