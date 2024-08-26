<?php

namespace App\Http\Controllers;

use App\Mail\WebContact;
use App\Models\Course;
use App\Models\Crew;
use Exception;
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
            'crew' => $request->input('crew'),
            'course' => $request->input('course'),
            'msg' => $request->input('msg')
        ];

        $crew_mail = Crew::where('name', $request->input('crew'))->first();

        try {
            Mail::to($crew_mail->mail)->send(new WebContact($details));
            return back()->with('success', '¡Correo enviado correctamente!, nos pondremos en contacto con usted en la mayor brevedad posible.');
        } catch (Exception $e) {
            return back()->with('error', 'Hubo un problema al enviar el correo: ' . $e->getMessage());
        }
    }
}
