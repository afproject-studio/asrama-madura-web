<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Auth extends BaseController
{
    public function index()
    {
        return view('admin/login');
    }

    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $adminModel = new AdminModel();
        $admin = $adminModel->where('username', $username)->first();

        if ($admin && password_verify($password, $admin['password'])) {
            session()->set([
                'admin_id' => $admin['id'],
                'admin_username' => $admin['username'],
                'isLoggedIn' => true
            ]);
            return redirect()->to('/admin/dashboard');
        } else {
            return redirect()->back()->with('error', 'Username atau password salah.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('admin');
    }
}
