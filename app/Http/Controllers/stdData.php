<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\std_model;

class stdData extends Controller
{
    public function w(){
        return view("welcome");
    }
    public function form(){
        return view("form");
    }
    public function create(Request $req){
        
        $image = time(). "." . $req->image->extension();
        $req->image->move(public_path('student_images'), $image);

        $ins = new std_model();
        $ins->name = $req->name;
        $ins->email = $req->email;
        $ins->image = $image;
        $ins->save();
        return back();
    }
    public function read(){
        $records = std_model::all();
        $data = compact('records');
        return view('read')->with($data);
    }
    public function del($id){
        $id_found = std_model::find($id);
        $id_found->delete();
        return back();
    }
    public function edit($id){
        $id_found = std_model::find($id);
        return view('update', ['id' => $id_found]);
    }

    public function update($update_id , Request $req){
        
        $image = time(). "." . $req->image->extension();
        $req->image->move(public_path('student_images'), $image);

        $upd = std_model::find($update_id);
        $upd->name = $req->name;
        $upd->email = $req->email;
        $upd->image = $image;
        $upd->save();
        return redirect('read');
    }
    
}
