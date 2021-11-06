<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserApiController extends Controller
{
    function getData()
    {
        return [
            ["name" => "anil", "age" => "21", "email" => "mms@gmail.com"],
            ["name" => "anil", "age" => "21", "email" => "mms@gmail.com"],
            ["name" => "anil", "age" => "21", "email" => "mms@gmail.com"]
        ];
    }
}
