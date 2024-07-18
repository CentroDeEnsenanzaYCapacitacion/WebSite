<?php

namespace App\Http\Controllers;

use App\Mail\WebContact;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        $courses = Course::all();
        return view('contact', compact('courses'));
    }

    public function contactPost(Request $request)
    {
        $details = [
            'name' => $request->input('name'),
            'cel' => $request->input('cel'),
            'mail' => $request->input('mail'),
            'plantel' => $request->input('plantel'),
            'curso' => $request->input('curso'),
            'msg' => $request->input('msg')
        ];

        Mail::to('web@capacitacioncec.edu.mx')->send(new WebContact($details));

        return back()->with('success', '¡Correo enviado correctamente!');
    }
}
