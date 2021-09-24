<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

class FileManagerController extends CrudController
{
    public function index(){
        return view('filemanager');
    }
}
