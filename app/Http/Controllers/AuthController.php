<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me() {
        return [
            "NIS" => "3103119153",
            "Name" => "Raif Shidqi M",
            "Phone" => "085713039652",
            "Class" => "XII RPL 5"
        ];
    }
}
