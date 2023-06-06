<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JalurModel;

class Jalur extends BaseController
{
    public function index()
    {
        $data['title']='Jalur';
        $data['menu']='master';
        $data['submenu']='jalur';
        $jalur = new JalurModel();
        $data['data']=$jalur->findAll();
        
        return view('master/jalur/index',$data);
    }

    public function simpan()
    {
        $data = $this->request->getPost();
        $model = new JalurModel();
        if($data['id']==""){
            $model->save($data);
        }else{
            $model->where('id',$data['id'])->set($data)->update();
        }
        return redirect()->to('/master/jalur');
    }
    
    public function hapus()
    {
        $id=$this->request->getPost();
        $model=new JalurModel();
        $model->where('id',$id)->delete();
        return redirect()->to('/master/jalur');
    }
}
