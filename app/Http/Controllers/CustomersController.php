<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list(){
        $customers = [
            'Deepender',
            'Narender',
            'Indu',
            'Datar'
        ];

        return view('internals.customers',[
            'customers' => $customers,
        ]);
    }
}
