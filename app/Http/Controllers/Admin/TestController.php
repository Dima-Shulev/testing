<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return view('admin.test.index');
    }

    public function store(Request $request){

    }

    public function show($id){

    }

    public function edit($id, Request $request){

    }

    public function delete($id){

    }
}
