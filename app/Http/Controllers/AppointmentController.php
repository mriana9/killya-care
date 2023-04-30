<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Validation\Rule;



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
        'appointment.date' => 'حقل تاريخ الموعد يجب أن يكون من نوع التاريخ',
        'appointment.unique' => 'هذا الموعد محجوز بالفعل '

    ];

    if (auth()->check()) {
        $request->validate([
            'appointment' => [
                'required',
                function ($attribute, $value, $fail) {
                    // Convert input date to Carbon instance
                    $dob = Carbon::parse($value);

                    // Check if input date is equal to today's date or any future date
                    if ($dob->isToday() || $dob->isPast()) {
                        $fail('يجب الا يكون التاريخ في الماضي');
                    }
                },
                // Rule::unique('appointments', 'appointment')->ignore(request()->route('id')),
                function ($attribute, $value, $fail) {
                    // Convert input date to Carbon instance
                    $newAppointmentDate = Carbon::parse($value);

                    // Check if input date is equal to today's date or any past date
                    if ($newAppointmentDate->isToday() || $newAppointmentDate->isPast()) {
                        $fail('يجب الا يكون التاريخ في الماضي');
                    }

                    // Check if new appointment time is within 30 minutes of an existing appointment
                    // $existingAppointment = Appointment::where('appointment', '>=', $newAppointmentDate->subMinutes(30))
                    //     ->where('appointment', '<=', $newAppointmentDate->addMinutes(30))
                    //     ->first();

                    // if ($existingAppointment) {
                    //     $fail('يجب أن يكون الموعد بين 30 دقيقة من المواعيد الحالية.');
                    // }

                    // Check if the same appointment time has already been scheduled 20 times
                    $count = Appointment::where('appointment', '=', $newAppointmentDate)->count();

                    if ($count >= 20) {
                        $fail('لا يمكن حجز هذا الموعد لأنه تم حجزه 20 مرة بالفعل.');
                    }
                },
                function ($attribute, $value, $fail) {
                    // Convert input date to Carbon instance
                    $appointmentDate = Carbon::parse($value);

                    // Check if appointment falls on a Friday or Saturday
                    if ($appointmentDate->isFriday() || $appointmentDate->isSaturday()) {
                        $fail('لا يمكن حجز موعد في يوم الجمعة أو السبت.');
                    }
                },
            ],

        ], $messages);


        $appointment = Appointment::create([
            'name' => auth()->user()->name,
            'l_name' => auth()->user()->l_name,
            'phone' => auth()->user()->phone,
            'dob' => auth()->user()->dob,
            'user_id' =>auth()->user()->id,
            'appointment' => $request->input('appointment'),

        ]);
    } else {
        $request->validate([
            'name' => 'required',
            'l_name' => 'required',
            'dob' => 'required|date',
            'phone' =>'required',
            'appointment' => [
                'required',
                function ($attribute, $value, $fail) {
                    // Convert input date to Carbon instance
                    $dob = Carbon::parse($value);

                    // Check if input date is equal to today's date or any future date
                    if ($dob->isToday() || $dob->isPast()) {
                        $fail('يجب الا يكون التاريخ في الماضي');
                    }
                },
                // Rule::unique('appointments', 'appointment')->ignore(request()->route('id')),
                function ($attribute, $value, $fail) {
                    // Convert input date to Carbon instance
                    $newAppointmentDate = Carbon::parse($value);

                    // Check if input date is equal to today's date or any past date
                    if ($newAppointmentDate->isToday() || $newAppointmentDate->isPast()) {
                        $fail('يجب الا يكون التاريخ في الماضي');
                    }

                    // Check if new appointment time is within 30 minutes of an existing appointment
                    $existingAppointment = Appointment::where('appointment', '>=', $newAppointmentDate->subMinutes(30))
                        ->where('appointment', '<=', $newAppointmentDate->addMinutes(30))
                        ->first();

                    if ($existingAppointment) {
                        $fail('يجب أن يكون الموعد بين 30 دقيقة من المواعيد الحالية.');
                    }

                    // Check if the same appointment time has already been scheduled 20 times
                    $count = Appointment::where('appointment', '=', $newAppointmentDate)->count();

                    if ($count >= 2) {
                        $fail('لا يمكن حجز هذا الموعد لأنه تم حجزه 20 مرة بالفعل.');
                    }
                },
                function ($attribute, $value, $fail) {
                    // Convert input date to Carbon instance
                    $appointmentDate = Carbon::parse($value);

                    // Check if appointment falls on a Friday or Saturday
                    if ($appointmentDate->isFriday() || $appointmentDate->isSaturday()) {
                        $fail('لا يمكن حجز موعد في يوم الجمعة أو السبت.');
                    }
                },
            ],

        ], $messages);

        $appointment = Appointment::create([
            'name' => $request->input('name'),
            'l_name' => $request->input('l_name'),
            'phone' => $request->input('phone'),
            'dob' => $request->input('dob'),
            'appointment' => $request->input('appointment')
        ]);
    }

    return redirect()->route('profile')->with('success', 'تم انشاء الموعد بنجاح');
}



}
