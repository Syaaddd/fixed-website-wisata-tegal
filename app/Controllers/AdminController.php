<?php

namespace App\Controllers;
use App\Models\Category;

class AdminController extends BaseController
{
    protected $categoryModel;

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
        return view('backend/pages/blog', $data);
    }


    public function __construct()
    {
        $this->categoryModel = new Category(); // Initialize the Category model
    }

    public function addBlog()
    {
        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('ordering'),
        ];

        $this->categoryModel->save($data); // Now this will work
        return redirect()->to(route_to('admin.blog'));
    }
}
