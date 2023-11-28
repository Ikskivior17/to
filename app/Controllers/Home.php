<?php

namespace App\Controllers;
use App\Models\M_model;
use CodeIgniter\Controller;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Home extends BaseController
{
public function index() 
{
 if (!session()->get('id_user') > 0) {
 return redirect()->to('/Home/login');
 }
 $model =new M_model;
echo view ('template/header');
echo view ('navbar');
echo view ('dashboard');
}




public function hal()
{

    $model = new M_model;
    echo view ('template/header');
    echo view ('navbar');
    echo view ('hal/index');
    echo view ('template/footer');
    }
    public function laporan()
    {
        $model = new M_model;
        echo view ('template/header');
        echo view ('navbar');
        echo view ('hal/laporan');
        echo view ('template/footer');
    }
public function barang()
{

$model = new M_model;
echo view ('template/header');
echo view ('navbar');
echo view ('barang/barang');
echo view ('template/footer');
}
public function hapus_barang($id)
  {
        $model=new M_model();
        $where=array('id'=>$id);
        $model->hapus('barang',$where);
        return redirect()->to('Home/barang'); 
  }
public function login()
    { 

        if (session()->get('id_user') > 0) {
             return redirect()->to('/Home');
         }
       echo view('template/header');
       echo view('login');
       //print_r(session()->get());
    //    echo view('template/footer');        

    }
    public function aksi_login()
    {
        $u=$this->request->getPost('u');
        $p=$this->request->getPost('p');
        $where=array(
            'username'=>$u,
            'password'=>md5($p)
        );
        $model = new M_model();
        $kui=$model->getarray('user',$where);

        if ($kui>0) {
            session()->set('id_user',$kui['id_user']);
            session()->set('username',$kui['username']);
           
            return redirect()->to('/home');
        }else{
            return redirect()->to('Home/login');
        }
    }
        public function user()
    {
       
            $model=new m_model();
        $kui['ayu']=$model->tampil('user');
        echo view('header');
        echo view('navbar');
        echo view('user',$kui);
        //echo view('footer');
        

    }  
    public function aksi_user()
    {
        $level=session()->get('level');
        if ($level == 1 || $level == 2) {
            $model=new m_model();
        //$jurusan=$this->request->getPost('jurusan');
        $username=$this->request->getPost('username');
        $password=$this->request->getPost('password');
        $level=$this->request->getPost('level');
        $data=array(
            //'jurusan'=>$jurusan,
            'username'=>$username,
            'password'=>md5($password),
            'level'=>$level,

        );
        $model->simpan('user',$data);
        return redirect()->to('/Home/user');
        }else{
return redirect()->to('Home/login');
        }

    } 
public function tambah_user()
    {
        $level=session()->get('level');
        if ($level == 1 || $level == 2) {
            $model=new m_model();
        $kui['ayu']=$model->tampil('user');
        echo view('header');
        echo view('navbar');
        echo view('tambah_user',$kui);
        echo view('footer');  
        }else{
return redirect()->to('Home/login');
        }
    }
        public function hapus_user($id)
    {
        $level=session()->get('level');
        if ($level == 1 || $level == 2) {
            $model=new M_model();
        $where=array('id_user'=>$id);
        $model->hapus('user',$where);
        return redirect()->to('Home/user');   
        }else{
return redirect()->to('Home/login');
        }
    
    }
    public function kontak()
    {
        echo view('header');
        echo view('navbar');
        echo view('kontak');

    }
    

public function logout()
    {
        session()->destroy();
        return redirect()->to('Home/login');
    }  
    public function setting()
    {
    
    $model = new M_model;
    echo view ('template/header');
    echo view ('navbar');
    echo view ('setting/pengaturan');
    echo view ('template/footer');
    }
    public function edit()
    {
        $model = new M_model;
        echo view ('template/header');
        echo view ('navbar');
        echo view ('edit');
        //  echo view ('template/footer');
    }
}