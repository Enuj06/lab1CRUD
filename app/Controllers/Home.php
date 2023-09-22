<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ProductModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function home()
    {
        $user = new ProductModel();
        $data = [
            'users' => $user->findAll(),
        ];
       return view('home.php', $data);
    }

    public function delete($id)
    {
        $user = new ProductModel();
        $user->delete(['id' => $id]);
        return redirect()->to('/home');
    }

    public function insert()
    {
        return view('insert');
    }

    public function update($id)
    {
        $user = new ProductModel();
        $data['user'] = $user->where('id', $id)->first();
        return view('insert', $data);
    }

    public function actioninsert()
    {
        $user = new ProductModel();
        $productname = $this->request->getVar('ProductName');
        $productdescription = $this->request->getVar('gender');
        $productcategory = $this->request->getVar('age');
        $data = [
            'last_Name' => $lastName,
            'gender' => $gender,
            'age' => $age
        ];
        $user->save($data);
        return redirect()->to('/home');
    }
}
