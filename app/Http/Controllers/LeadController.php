<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead; 

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
{
    $lead = Lead::findOrFail($id);
     
    $request->validate([
        'name'           => 'required|string|max:255',
        'business_name'  => 'nullable|string|max:255',
        'email'          => 'required|email',
        'phone'          => 'required|digits_between:10,15',
        'attachment'     => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        'message'        => 'nullable|string|max:1000',
    ]);
    if ($request->hasFile('attachment')) {
        if ($lead->attachment && file_exists(public_path('uploads/'.$lead->attachment))) {
            unlink(public_path('uploads/'.$lead->attachment));
        }
        $fileName = time().'.'.$request->attachment->extension();
        $request->attachment->move(public_path('uploads'), $fileName);
        $lead->attachment = $fileName;
    }
    $lead->update([
        'name'          => $request->name,
        'business_name' => $request->business_name,
        'email'         => $request->email,
        'phone'         => $request->phone,
        'message'       => $request->message,
    ]);
    return redirect()->back()->with('success', 'Lead updated successfully!');
}


public function destroy(string $id)
{
    $lead = Lead::findOrFail($id);
    if ($lead->attachment && file_exists(public_path('uploads/'.$lead->attachment))) {
        unlink(public_path('uploads/'.$lead->attachment));
    }
    $lead->delete();
    return redirect()->back()->with('success', 'Lead deleted successfully!');
}



}
