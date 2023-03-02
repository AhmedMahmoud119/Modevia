<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'nullable|email:rfc,dns',
            'phone' => 'required|digits:11|starts_with:010,011,012,015|numeric',
        ]);

        \App\Models\Appointment::create(request()->all());

        return redirect()->route('success');

    }
}
