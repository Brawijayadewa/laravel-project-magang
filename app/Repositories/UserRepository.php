<?php

namespace App\Repositories;
use App\User;

class UserRepository {

    public static function getData($param = [])
    {
        $data = User::query();

        if (isset($param['get_by_role']) && !is_null($param['get_by_role'])) {
            $data->where('user.role', $param['get_by_role']);
        }

        return $data;
    }
}
?>