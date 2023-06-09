<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;
use App\Models\AMedical;
use App\Models\Comment;
class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('profile');
    }


    public function contact(Request $request)
    {
        $messages = [
            'name.required' => 'حقل الاسم مطلوب',
            'phone.required' => 'حقل رقم الهاتف مطلوب',
            'message.required' => 'حقل الرسالة مطلوب',
        ];

        // $validatedData = $request->validate([
        //     'name' => 'required',
        //     'phone' => 'required',
        //     'message' => 'required',
        // ], $messages);



        if (auth()->check()) {
            $request->validate([
                'message' => 'required'
            ], $messages);

            $appointment = Contact::create([
                'name' => auth()->user()->name . auth()->user()->l_name,
                'phone' => auth()->user()->phone,
                'user_id' => auth()->user()->id,
                'message' => $request->input('message')
            ]);
        } else {
            $request->validate([
                'name' => 'required',
                'phone' =>'required',
                'message' => 'required'
            ], $messages);

            $appointment = Contact::create([
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'message' => $request->input('message   ')
            ]);
        }
        // Store the form data in the database or take other actions

        return redirect()->route('profile')->with('success', 'تم ارسال الرسالة بنجاح');    }



        public function show ($id){

            $advise = AMedical::where('id',$id)->first();
            return view('news-details',compact(['advise']));

        }




        public function comment(Request $request)
        {
            // Retrieve form data
            $messages = [
                'comment.required' => 'حقل التعليق مطلوب',
            ];

            // Validate form data


            $comment = $request->input('comment');


            if (auth()->check()) {
                $this->validate($request, [
                    'comment' => 'required',
                ], $messages);


                $appointment = Comment::create([
                    'comment' => $request->input('comment'),
                    'user_id' => auth()->user()->id,
                    'news_id' => $request->input('news_id')
                ]);
            } else {
                $this->validate($request, [
                    'comment' => 'required',
                ], $messages);

                $appointment = Comment::create([
                    'comment' => $request->input('comment'),
                    'news_id' => $request->input('news_id')
                ]);
            }
            return redirect()->back();
        }


    public function update(Request $request)
    {
        // validate form data


        $messages = [
            'name.required' => 'حقل الاسم مطلوب',
            'name.string' => 'يجب أن يكون حقل الاسم نصياً',
            'name.max' => 'يجب ألا يتجاوز حقل الاسم 50 حرفاً',
            'phone.required' => 'حقل رقم الهاتف مطلوب',
            'phone.string' => 'يجب أن يكون حقل رقم الهاتف نصياً',
            'phone.max' => 'يجب ألا يتجاوز حقل رقم الهاتف 12 حرفاً',
            'phone.min' => 'يجب أن يتكون حقل رقم الهاتف من 10 أو 12 حرفًا',
            'id_number.required' => 'حقل رقم الهوية مطلوب',
            'id_number.string' => 'يجب أن يكون حقل رقم الهوية نصياً',
            'id_number.min' => 'يجب ألا يقل حقل رقم الهوية عن 9 أرقام',
            'dob.required' => 'حقل تاريخ الميلاد مطلوب',
            'dob.date' => 'يجب أن يكون حقل تاريخ الميلاد تاريخ صالح',
        ];


       // dd($request->name,$request->dob,$request->id_number,$request->phone);
        $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'phone' => ['required', 'string', 'max:12','min:10'],
            'id_number' => ['required', 'string','min:9'],
            'dob' => ['required', 'date'],
                ],$messages);

        // update user profile
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->id_number = $request->input('id_number');
        $user->dob = $request->input('dob');
        $user->save();

        // redirect back to profile page with success message
        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }


    public function editcontact($id)
    {
        $contact = Contact::find($id);
        return view('edit-contact', compact('contact'));
    }



    public function destroycontact(Contact $contact)
    {
        $contact->delete();

        return redirect()->back()->with('success', 'تم الحذف بنجاح');
    }


    public function updatecontact(Request $request, $id)
{
    // $request->validate([
    //     'name' => 'required',
    //     'phone' => 'required|numeric',
    //     'message' => 'required',
    // ]);



    $messages = [
        'name.required' => 'حقل الاسم مطلوب',
        'phone.required' => 'حقل رقم الهاتف مطلوب',
        'message.required' => 'حقل الرسالة مطلوب',
    ];



    if (auth()->check()) {
        $request->validate([
            'message' => 'required'
        ], $messages);

        $contact = Contact::find($id);
        $contact->name =auth()->user()->name . auth()->user()->l_name;
        $contact->phone = auth()->user()->phone;
        $contact->message = $request->input('message');
        $contact->user_id =  auth()->user()->id;
        ;

        $contact->save();
    } else {
        $request->validate([
            'name' => 'required',
            'phone' =>'required',
            'message' => 'required'
        ], $messages);

        $contact = Contact::find($id);
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->message = $request->input('message');
        $contact->save();
    }
    // Store the form data in the database or take other actions

    return redirect()->route('profile')->with('success', 'تم ارسال الرسالة بنجاح');




    $contact = Contact::find($id);
    $contact->name = $request->input('name');
    $contact->phone = $request->input('phone');
    $contact->message = $request->input('message');
    $contact->save();

    return redirect()->route('contacts.index')->with('success', 'تم التعديل بنجاح');
}



public function destroyComment($id)
{
    $comment = Comment::find($id);
    if (!$comment) {
        return redirect()->back()->with('error', 'Comment not found!');
    }
    if ($comment->user_id != Auth::id()) {
        return redirect()->back()->with('error', 'You are not authorized to delete this comment!');
    }
    $comment->delete();
    return redirect()->back()->with('success', 'Comment deleted successfully!');
}




}
