<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Customer extends Controller
{
    public function view()
    {
        return view('customers', [
            'list' => \App\Models\Customer::query()->orderByDesc('created_at')->paginate(20)
        ]);
    }
}
