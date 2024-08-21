<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SalesCall;
use App\Repositories\AttachmentRepository;
use Illuminate\Support\Facades\Storage;

class SalesCallController extends Controller
{
    protected $attachmentRepository;

    public function __construct(AttachmentRepository $attachmentRepository)
    {
        $this->attachmentRepository = $attachmentRepository;
    }

    public function index() 
    {
        return view("layouts.sales-call.index");
    }

    public function store(Request $request)
    {
        $request->validate(SalesCall::$rules, [
            'image' => 'required|image|max:2046',
        ]);

        $input = $request->except('image');
        $input['created_by'] = auth()->user()->id;
        $input['updated_by'] = auth()->user()->id;
          
        $sales_call = SalesCall::create($input);

        $this->attachmentRepository->create([
            'module' => SalesCall::$table_name,
            'name' => $request->name,
            'module_id' => $sales_call->id,
            'image' => $request->image,
            'created_by' => $input['created_by'],
            'updated_by' => $input['updated_by'],
        ]);

        return redirect('/'); 
    }
    
        
}
