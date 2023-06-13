<?php
namespace App\Controllers;

class Lulus extends BaseController
{
    public function isian()
    {
        return view('isian');
    }

    public function status(){
        $data['NIM'] = $_GET['NIM'];
        $data['Nama'] = $_GET['Nama'];
        $data['Status'] = $_GET['Status'];
        return view('status',$data);
    }   
}