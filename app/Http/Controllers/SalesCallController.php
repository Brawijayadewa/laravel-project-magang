<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SalesCallReport;
use Illuminate\Support\Facades\Storage;

class SalesCallController extends Controller
{
    public function store(Request $request)
    { 
      $request->validate([
        'name' => 'required|max:256',
        'school_name' => 'required|max:256',
        'regency' => 'required|max:256',
        'teacher_name' => 'required|max:256',
        'phone' => 'required|max:15',
        'audience' => 'required|numeric',
        'requirement' => 'required|max:256',
        'image' => 'required|image|max:2046',
      ]);

    $input = $request->all();

    if($request->hasFile('image')){
        $image = $request->image;
        $filename = 'sales_call'.'_' . $request->name . rand(1000,99999). '.' . $image->extension();

        Storage::disk('public')->put($filename, $image->get());

        $input['foto'] = $filename;
    } 
    SalesCallReport::create($input);

    return redirect('/'); 
    }
    
        
}
