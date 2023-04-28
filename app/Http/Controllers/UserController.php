<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class UserController extends Controller
{




        // Validate the form data
        public function store(Request $request)
        {
            // Set custom error messages
            $messages = [
                'name.required' => 'يرجى إدخال الاسم الأول',
                'l_name.required' => 'يرجى إدخال اسم العائلة',
                'g_name.required' => 'يرجى إدخال اسم الجد',
                'f_name.required' => 'يرجى إدخال اسم الأب',
                'phone.required' => 'يرجى إدخال رقم الهاتف',
                'phone.min' => 'يجب أن يكون رقم الهاتف على الأقل 10 أحرف',
                'dob.required' => 'يرجى إدخال تاريخ الميلاد',
                'dob.date' => 'يجب أن يكون تاريخ الميلاد بتنسيق صحيح',
                'dob.before' => 'يجب أن يكون تاريخ الميلاد قبل اليوم الحالي',
                'email.required' => 'يرجى إدخال البريد الإلكتروني',
                'email.email' => 'البريد الإلكتروني غير صالح',
                'email.unique' => 'البريد الإلكتروني مسجل بالفعل',
                'id_number.required' => 'يرجى إدخال رقم الهوية',
                'id_number.unique' => 'رقم الهوية مسجل بالفعل',
                'id_number.min' => 'يجب أن يكون رقم الهوية على الأقل 9 أحرف',
                'password.required' => 'يرجى إدخال كلمة المرور',
                'password.min' => 'يجب أن تتكون كلمة المرور من 8 أحرف على الأقل',
                'con_password.required' => 'يرجى تأكيد كلمة المرور',
                'con_password.same' => 'كلمة المرور غير متطابقة',
            ];


            // Validate the form data
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'l_name' => 'required',
                'g_name' => 'required',
                'f_name' => 'required',
                'phone' => 'required|min:10',
                'dob' => [
                    'required',
                    function ($attribute, $value, $fail) {
                        // Convert input date to Carbon instance
                        $dob = Carbon::parse($value);

                        // Check if input date is equal to today's date or any future date
                        if ($dob->isToday() || $dob->isFuture()) {
                            $fail('التاريخ غير صالح ');
                        }
                    },
                ],
                'email' => 'required|email|unique:users',
                'id_number' => 'required|unique:users|min:9',
                'password' => 'required|min:8',
                'con_password' => 'required|same:password',
            ], $messages);

            // Check if the validation fails
            if ($validator->fails()) {
                return redirect('/register')
                    ->withErrors($validator)
                    ->withInput();
            }

            // Create the user
            $user = User::create([
                'name' => $request->input('name'),
                'l_name' => $request->input('l_name'),
                'g_name' => $request->input('g_name'),
                'f_name' => $request->input('f_name'),
                'phone' => $request->input('phone'),
                'dob' => $request->input('dob'),
                'email' => $request->input('email'),
                'id_number' => $request->input('id_number'),
                'password' => Hash::make($request->input('password')),
            ]);

        // Redirect the user to a success page
        return redirect('/login')->with('success', 'تم انشاء الحساب بنجاح');
    }


       public function login(Request $request)
       {
           $credentials = $request->validate([
               'id_number' => 'required',
               'password' => 'required',
           ], [
               'id_number.required' => 'حقل البريد رقم الهوية مطلوب',
               'password.required' => 'حقل كلمة المرور مطلوب',
           ]);

           if (Auth::attempt($credentials)) {
               $request->session()->regenerate();

               return redirect()->intended('/');
           }

           return back()->withErrors([
               'email' => 'لا يتوافق  رقم الهوية أو كلمة المرور المدخلة مع سجلاتنا.',
           ]);
       }


        public function logout(Request $request)
        {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/');
        }

}
