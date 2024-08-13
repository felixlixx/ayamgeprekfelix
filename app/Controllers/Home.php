<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_lelang;

class Home extends BaseController
{
	public function index()
	{
            echo view('header');
            echo view('menu');
            echo view('index');
            echo view('footer');
        
	}
	public function login()
    {
        echo view('header');
        echo view('login');
    }
	public function aksilogin()
        {
        
        $u=$this->request->getPost('username');
        $p=$this->request->getPost('password');

        $model = new M_lelang();
        $where=array(
          'username'=> $u,
          'password'=> $p
        );
        $model = new M_lelang();
        $cek = $model->getWhere('admin1',$where);
        if ($cek>0){
            session()->set('id',$cek->id_admin);
            session()->set('username',$cek->username);
            session()->set('level',$cek->id_level);
            // session()->set('namalevel',$cek->level);
            return redirect()->to('Home/index');
 
        } else {
         return redirect()->to('Home/login');
     }







//petugas

    }
    public function petugas()
    {
     if (session()->get('level') > 0){
        $model = new M_lelang();
        $data['manda'] = $model->tampil('petugas1');
    

        echo view('header');
        echo view('menu');
        echo view('petugas',$data);
        echo view('footer');
        }else{
        return redirect()->to('Home/login');
    }
    }
    public function t_petugas()
    {
        if (session()->get('level')>0){

        $model = new M_lelang();

        echo view('header');
        echo view('menu');
        echo view('t_petugas');
        echo view('footer');
        }else{
        return redirect()->to('Home/login');
    }
    }
    public function aksi_t_petugas()
    {
        $model = new M_lelang();
        
        $a = $this->request->getPost('nama');
        $b = $this->request->getPost('password');
        $c = $this->request->getPost('id_level');
    

        $isi = array(
        
        'nama' => $a,
        'password' => $b,
        'id_level' => $c,
        

        );
        $model->tambah('petugas', $isi);
        return redirect()->to('Home/petugas');

    }
    public function e_petugas(){
        
    if (session()->get('level')>0){
        $model = new M_lelang();

        echo view('Header');
        echo view('Menu');
        echo view('e_petugas');
        echo view('footer');
        }else{
        return redirect()->to('Home/login');
    }
}
    public function aksi_e_petugas()
    {
        $model = new M_lelang();
        $a = $this->request->getPost('id_petugas');
        $b = $this->request->getPost('nama');
        $d = $this->request->getPost('password');
        $e = $this->request->getPost('id_level');



        $isi = array(
        'id_petugas' => $a,
        'nama' => $b,
        'password' => $c,
        'id_level' => $d,

        );

        $model->edit('t_petugas', $isi,$where);
        return redirect()->to('home/petugas');      
        
    }
}

















	