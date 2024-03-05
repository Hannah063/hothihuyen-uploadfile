<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function post(Request $request){
        return back()->withInput(
            $request->only('username')
        );
    } 

    public function store(Request $request){
        dd($request->query('id'));
    } 

    public function uploadFile(Request $request){
        if ($request->hasFile('photo')) {
            if ($request->file('photo')->isValid()) {
                $name = 'hothihuyen';
                $fileName = $name.'.'.$request->file('photo')->extension();
                $request->file('photo')->storeAs('images', $fileName);
                return '<h1>Tên file: '.$name.'</h1><h1>Loại file: '.$request->file('photo')->extension().'</h1>';
            }
        }
        return 'Vui lòng chọn tệp cần upload';
    }
}
