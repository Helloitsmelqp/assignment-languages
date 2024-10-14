<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use IlluminateHttpRequest;

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
            
            
            if (auth()->check()) {
                $user = auth()->user();
                $user->preferred_language = $request->language; 
                $user->save();
            }
        } else {
           
            session()->forget(['language', 'rememberMe']);
        }

        return redirect()->back(); 
}
}