<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;



class AppointmentController extends Controller
{


    public function store(Request $request)
{
    $messages = [
        'name.required' => 'حقل الاسم مطلوب',
        'l_name.required' => 'حقل الاسم الأخير مطلوب',
        'dob.required' => 'حقل تاريخ الميلاد مطلوب',
        'dob.date' => 'حقل تاريخ الميلاد يجب أن يكون من نوع التاريخ',
        'phone.required' => 'حقل رقم الهاتف مطلوب',
        'appointment.required' => 'حقل تاريخ الموعد مطلوب',
        'appointment.date' => 'حقل تاريخ الموعد يجب أن يكون من نوع التاريخ'
    ];

    if (auth()->check()) {
        $request->validate([
            'appointment' => 'required|date'
        ], $messages);

        $appointment = Appointment::create([
            'name' => auth()->user()->name,
            'l_name' => auth()->user()->l_name,
            'phone' => auth()->user()->phone,
            'dob' => auth()->user()->dob,
            'user_id' =>auth()->user()->id,
            'appointment' => $request->input('appointment')
        ]);
    } else {
        $request->validate([
            'name' => 'required',
            'l_name' => 'required',
            'dob' => 'required|date',
            'phone' =>'required',
            'appointment' => 'required|date'
        ], $messages);

        $appointment = Appointment::create([
            'name' => $request->input('name'),
            'l_name' => $request->input('l_name'),
            'phone' => $request->input('phone'),
            'dob' => $request->input('dob'),
            'appointment' => $request->input('appointment')
        ]);
    }

    return redirect('/')->with('success', 'تم انشاء الموعد بنجاح');
}



}
