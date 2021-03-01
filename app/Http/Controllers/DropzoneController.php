<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DropzoneController extends Controller
{
    public function create(){
        return view('file.dropzone');
    }

    public function dropzone(Request $request){
        $file = $request->file('file');
        File::create([
            'title' => $file->getClientOriginalName(),
            'description' => 'Upload with Dropzone',
            'path' => $file->store('public/storage')
        ]);
    }

    public function store(Request $request){
        $files = $request->file('file');
        foreach ($files as $file){
            File::create([
                'title' => $file->getClientOriginalName(),
                'description' => 'Upload with Dropzone',
                'path' => $file->store('public/storage')
            ]);
        }

        return redirect('/file')->with('success', 'file uploaded');
    }
    //
}
