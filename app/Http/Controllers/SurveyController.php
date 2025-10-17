<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;

class SurveyController extends Controller
{
    public function index()
    {
        return view('survey');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'rating' => 'required',
            'saran' => 'required',
        ]);

        Survey::create($request->all());

        return redirect()->back()->with('success', 'Terima kasih atas penilaian Anda!');
    }
}
