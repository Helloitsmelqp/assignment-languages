<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LanguageController extends Controller
{
    public function showForm(Request $request)
    {
        $savedLanguage = session('language', 'en'); 
        $rememberMe = session('rememberMe', false); 

        return view('language_form', compact('savedLanguage', 'rememberMe'));
    }
    
    public function savePreferences(Request $request)
    {
        $request->validate([
            'language' => 'required|string',
            'rememberMe' => 'boolean',
        ]);

        if ($request->rememberMe) {
            session(['language' => $request->language, 'rememberMe' => true]);
        } else {
            session()->forget(['language', 'rememberMe']);
        }

        return redirect()->back(); 
    }
}


