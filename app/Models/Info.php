<?php

namespace App\Models;

class Info
{

    public static $name = "Laravel Dashboard";

    public static function showToast($icon,$title){
        return [
          'icon' => $icon,
          'title' => $title
        ];
    }

}
