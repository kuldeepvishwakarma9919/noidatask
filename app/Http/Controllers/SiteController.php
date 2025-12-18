<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead; 

class SiteController extends Controller
{
    public function index() {
        return view('home.index'); 
    }

   public function formSubmit(Request $request)
    {
        $request->validate([
            'name'           => 'required|string|max:255',
            'business_name'  => 'nullable|string|max:255',
            'email'          => 'required|email',
            'phone'          => 'required|digits_between:10,15',
            'attachment'     => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'message'        => 'nullable|string|max:1000',
        ]);

        $fileName = null;
        if ($request->hasFile('attachment')) {
            $fileName = time().'.'.$request->attachment->extension();
            $request->attachment->move(public_path('uploads'), $fileName);
        }

        Lead::create([
            'name'          => $request->name,
            'business_name' => $request->business_name,
            'email'         => $request->email,
            'phone'         => $request->phone,
            'attachment'    => $fileName,
            'message'       => $request->message,
        ]);

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }

    public function dashboard() {
        $leads = Lead::all(); 
        return view('admin.dashboard', compact('leads')); 
    }
}
