<?php

namespace App\Repositories;
use App\Attachment;
use Illuminate\Support\Facades\Storage;

class AttachmentRepository {

    public function create($param = [])
    {
        $image = $param['image'];
        $filename = $param['module'] . '_' . $param['name'] . rand(1000,99999) . '.' . $image->extension();

        Storage::disk('public')->put($filename, $image->get());

        $param['url'] = $filename;

        Attachment::create([
            'module' => $param['module'],
            'module_id' => $param['module_id'],
            'url' => $param['url'],
            'created_by' => $param['created_by'],
            'updated_by' => $param['updated_by'],
        ]);
    }
}

?>