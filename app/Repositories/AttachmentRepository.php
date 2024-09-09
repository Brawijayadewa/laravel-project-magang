<?php

namespace App\Repositories;
use App\Attachment;
use Illuminate\Support\Facades\Storage;

class AttachmentRepository {

    public static function getData($param = [])
    {
        $data = Attachment::query();

        if(isset($param['get_by_module']) && !is_null($param['get_by_module']) && isset($param['get_by_module_id']) && !is_null($param['get_by_module_id'])) {
            $data->where('attachment.module', $param['get_by_module'])->where('attachment.module_id', $param['get_by_module_id']);
        }

        return $data;
    }

    public static function create($param = [])
    {
        $image = $param['image'];
        $filename = $param['module'] . '_' . $param['name'] . rand(1000,99999) . '.' . $image->extension();

        Storage::disk('public')->put($filename, $image->get());

        Attachment::create([
            'module' => $param['module'],
            'module_id' => $param['module_id'],
            'url' => $filename,
            'created_by' => $param['created_by'],
            'updated_by' => $param['updated_by'],
        ]);
    }

    public static function update($param = [])
    {
        $image = $param['image'];
        $filename = $param['module'] . '_' . $param['name'] . rand(1000,99999) . '.' . $image->extension();

        $attachment = Attachment::where('attachment.module', $param['module'])->where('attachment.module_id', $param['module_id'])->first();

        if($attachment->url)
        {
            Storage::disk('public')->delete($attachment->url);

            Storage::disk('public')->put($filename, $image->get());

            $attachment->update([
                'module' => $param['module'],
                'module_id' => $param['module_id'],
                'url' => $filename,
                'created_by' => $param['created_by'],
                'updated_by' => $param['updated_by'],
            ]);
        }
        else
        {
            Storage::disk('public')->put($filename, $image->get());
            
            Attachment::create([
                'module' => $param['module'],
                'module_id' => $param['module_id'],
                'url' => $filename,
                'created_by' => $param['created_by'],
                'updated_by' => $param['updated_by'],
            ]);
        }
        
    }

    public static function delete($param = [])
    {   
        $attachment = Attachment::where('attachment.module', $param['module'])->where('attachment.module_id', $param['module_id'])->first();
        if($attachment && $attachment->url)
        {
            Storage::disk('public')->delete($attachment->url);
            $attachment->delete();
        }

    }
}

?>