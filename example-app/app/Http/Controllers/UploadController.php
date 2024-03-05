<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    
    public function index(Request $request){
        return view('upload');
    }

    
    public function upload(Request $request) {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = 'nguyenducquyen.' . $file->getClientOriginalExtension();
            $file->storeAs('public', $fileName,);
            $fileType = $file->getClientOriginalExtension();
            echo "Tên file: $fileName <br> Loại file: $fileType";
        } else {
            echo "Vui lòng chọn file";
        }
    }   
}
