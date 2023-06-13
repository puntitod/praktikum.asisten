<?php

namespace App\Models;

use CodeIgniter\Model;

class AsistenModel extends Model
{
    protected $table = 'asisten';
    protected $allowedFields = ['NIM', 'NAMA', 'PRAKTIKUM', 'IPK'];
    protected $primaryKey = 'NIM';
    protected $useAutoIncrement = false;


    public function getAsisten($NAMA = false)
    {
        if ($NAMA == false) {
            return $this->findAll();
        }

        return $this->where(['NAMA' => $NAMA])->first();
    }

    public function simpan($record)
    {
        $this->save([
            'NIM' => $record['NIM'],
            'NAMA' => $record['NAMA'],
            'PRAKTIKUM' => $record['PRAKTIKUM'],
            'IPK' => $record['IPK'],
            ]);
    }

    public function hapus($NIM)
    {
        $this->where(['NIM' => $NIM])->delete();
    }

    public function ubah($data) 
    {
        $this->save([
            'NIM' => $data['NIM'],
            'NAMA' => $data['NAMA'],
            'PRAKTIKUM' => $data['PRAKTIKUM'],
            'IPK' => $data['IPK'],
        ]);
    }

    public function ambil($NIM)
    {
        return $this->where(['NIM' => $NIM])->first();
    }

}
