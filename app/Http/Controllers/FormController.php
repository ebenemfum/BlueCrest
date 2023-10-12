<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
{
    return view('form');
}

public function store(Request $request)
{
    $form = new Form;
    $form->name = $request->input('name');
    $form->subsidiary = $request->input('subsidiary');
    $form->cluster = $request->input('cluster');
    $form->supervisor_name = $request->input('supervisor_name');
    $form->attention_pledge = $request->input('attention_pledge');

    // Handle file uploads for passport_photo and signature
    if ($request->hasFile('passport_photo')) {
        $form->passport_photo = $request->file('passport_photo')->store('passport-photos');
    }
    if ($request->hasFile('signature')) {
        $form->signature = $request->file('signature')->store('signature-photos');
    }

    $form->save();

    return redirect('form')->with('status', 'Added');
}

}
