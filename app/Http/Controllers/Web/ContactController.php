<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Mail\WebContact;
use App\Models\Course;
use App\Models\Crew;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        $excludedCourses = [
            'secundaria informatica',
            'secundaria ingles',
            'bach inf ing',
            'sec inf ing',
            'informatica ingles',
            'gastronomia',
            'gastronimia',
        ];

        $courses = Course::all()
            ->map(function ($course) {
                $normalized = Str::of($course->name)
                    ->lower()
                    ->ascii()
                    
                    ->replaceMatches('/[^a-z0-9]+/', ' ')
                    ->replaceMatches('/\s+/', ' ')
                    ->trim()
                    ->value();

                if (Str::contains($normalized, 'bachillerato')) {
                    $normalized = 'bachillerato';
                    $name = 'Bachillerato';
                } else {
                    $name = $course->name;
                }

                return [
                    'name' => $name,
                    'normalized' => $normalized,
                ];
            })
            ->reject(function ($course) use ($excludedCourses) {
                return in_array($course['normalized'], $excludedCourses, true);
            })
            ->unique('normalized')
            ->values();
        return view('contact', compact('courses'));
    }

    public function contactPost(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'cel' => 'required|string|max:20',
            'mail' => 'required|email|max:255',
            'crew' => 'required|string|exists:crews,name',
            'course' => 'required|string|max:255',
            'msg' => 'required|string|max:1000'
        ]);

        $crew_mail = Crew::where('name', $validated['crew'])->first();

        if (!$crew_mail || !$crew_mail->mail) {
            return back()->with('error', 'No se encontr¢ el plantel seleccionado.');
        }

        $details = [
            'name' => $validated['name'],
            'cel' => $validated['cel'],
            'mail' => $validated['mail'],
            'crew' => $validated['crew'],
            'course' => $validated['course'],
            'msg' => $validated['msg']
        ];

        try {
            Mail::to($crew_mail->mail)->send(new WebContact($details));
            return back()->with('success', '­Correo enviado correctamente!, nos pondremos en contacto con usted en la mayor brevedad posible.');
        } catch (Exception $e) {
            report($e);
            return back()->with('error', 'Hubo un problema al enviar el correo. Por favor, intente nuevamente.');
        }
    }
}
