<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;

class LeadApiController extends Controller
{
    // 🔹 CREATE
    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|string|max:255',
            'business_name' => 'nullable|string|max:255',
            'email'         => 'required|email',
            'phone'         => 'required|digits_between:10,15',
            'attachment'    => 'nullable|file|mimes:jpg,png,pdf|max:2048',
            'message'       => 'nullable|string'
        ]);

        $fileName = null;
        if ($request->hasFile('attachment')) {
            $fileName = time().'_'.$request->attachment->getClientOriginalName();
            $request->attachment->move(public_path('uploads'), $fileName);
        }

        $lead = Lead::create([
            'name'          => $request->name,
            'business_name' => $request->business_name,
            'email'         => $request->email,
            'phone'         => $request->phone,
            'attachment'    => $fileName,
            'message'       => $request->message,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Lead created successfully',
            'data' => $lead
        ], 201);
    }

    // 🔹 READ ALL
    public function index()
    {
        return response()->json([
            'status' => true,
            'data' => Lead::latest()->get()
        ]);
    }

    // 🔹 READ SINGLE
    public function show($id)
    {
        $lead = Lead::find($id);

        if (!$lead) {
            return response()->json([
                'status' => false,
                'message' => 'Lead not found'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'data' => $lead
        ]);
    }

    // 🔹 UPDATE
    public function update(Request $request, $id)
    {
        $lead = Lead::find($id);
        if (!$lead) {
            return response()->json(['status'=>false,'message'=>'Lead not found'],404);
        }

        $request->validate([
            'name'          => 'required|string|max:255',
            'business_name' => 'nullable|string|max:255',
            'email'         => 'required|email',
            'phone'         => 'required|digits_between:10,15',
            'attachment'    => 'nullable|file|mimes:jpg,png,pdf|max:2048',
            'message'       => 'nullable|string'
        ]);

        if ($request->hasFile('attachment')) {
            if ($lead->attachment && file_exists(public_path('uploads/'.$lead->attachment))) {
                unlink(public_path('uploads/'.$lead->attachment));
            }

            $fileName = time().'_'.$request->attachment->getClientOriginalName();
            $request->attachment->move(public_path('uploads'), $fileName);
            $lead->attachment = $fileName;
        }

        $lead->update($request->except('attachment'));

        return response()->json([
            'status' => true,
            'message' => 'Lead updated successfully',
            'data' => $lead
        ]);
    }

    // 🔹 DELETE
    public function destroy($id)
    {
        $lead = Lead::find($id);

        if (!$lead) {
            return response()->json(['status'=>false,'message'=>'Lead not found'],404);
        }

        if ($lead->attachment && file_exists(public_path('uploads/'.$lead->attachment))) {
            unlink(public_path('uploads/'.$lead->attachment));
        }

        $lead->delete();

        return response()->json([
            'status' => true,
            'message' => 'Lead deleted successfully'
        ]);
    }
}
