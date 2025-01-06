<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function index()
    {

        $data = [
            'pageTitle' => 'Dashboard'
        ];
        // return "Welcome to Admin Dashboard";
        return view('backend/backend-pages', $data);
    }
    public function blogAdmin() 
    {
        $data = [
            'pageTitle' => 'Blog'
        ];
        // return "Welcome to Admin Dashboard";
        return view('backend/pages/blog', $data);
    }
}
