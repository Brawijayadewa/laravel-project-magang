<?php

namespace App\Repositories;
use App\Attachment;
use Illuminate\Support\Facades\Storage;

class AttachmentRepository {

    protected $model;

    public function __construct(Attachment $attachment)
    {
        $this->model = $attachment;
    }

    public function create($param = [])
    {
        $image = $param['image'];
        $filename = $param['module'] . '_' . $param['name'] . rand(1000,99999) . '.' . $image->extension();

        Storage::disk('public')->put($filename, $image->get());

        $param['url'] = $filename;

        $this->model->create([
            'module' => $param['module'],
            'module_id' => $param['module_id'],
            'url' => $param['url'],
            'created_by' => $param['created_by'],
            'updated_by' => $param['updated_by'],
        ]);
    }
}

?>