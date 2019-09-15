<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataMember extends Model
{
    //
    protected $table = 'data_member';
    protected $primaryKey = 'id_data_member';

    protected $fillable = ['nama_lengkap',
                            'tempat_lahir',
                            'gender',
                            'alamat',
                            'no_hp',
                            'kelompok',
                            'desa',
                            'daerah',
                            'ayah',
                            'no_hp_ayah',
                            'ibu',
                            'no_hp_ibu',
                            'makna',
                            'pendidikan_terakhir',
                            'nama_instansi',
                            'jurusan',
                            'nama_pondok',
                            'prosentase_quran',
                            'prosentase_hadis',
                            'alasan',
                            'harapan',
                            'user_id',
                            ];
}
