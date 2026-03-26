<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function home(): View
    {
        // Récupère les 3 derniers témoignages par ordre de création
        $testimonials = Testimonial::orderBy('created_at', 'desc')
                                ->take(3)
                                ->get();

        return view('home', compact('testimonials'));
    }

    public function projects(): View
    {
        return view('projects');
    }

    public function missions(): View
    {
        return view('missions');
    }

    public function services(): View
    {
        return view('services');
    }

    public function contacts(): View
    {
        return view('contacts');
    }

    public function testimonials(Request $request)
    {
        // Validation (recommandé)
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'testimonials' => 'required|string',
        ]);

        // Création du témoignage
        Testimonial::create($data);

        // Redirection vers la route 'home' avec un message flash optionnel
        return redirect()->route('home')->with('success', 'Témoignage ajouté avec succès !');
    }
}
