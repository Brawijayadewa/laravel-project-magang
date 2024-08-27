<?php

namespace App\Repositories;
use App\User;

class UserRepository {

    public static function getData($param = [])
    {
        $data = User::query();

        if (isset($param['join_attachment']) && !is_null($param['join_attachment'])) {
            $data->leftJoin('attachment', function($join) {
                $join->on('attachment.module_id', '=', 'user.id')
                     ->where('attachment.module', '=', User::$table_name);
            });
        }

        if (isset($param['get_by_id']) && !is_null($param['get_by_id'])) {
            $data->where('user.id', $param['get_by_id']);
        }

        if (isset($param['get_by_role']) && !is_null($param['get_by_role'])) {
            $data->where('user.role', $param['get_by_role']);
        }

        return $data;
    }
}
?>