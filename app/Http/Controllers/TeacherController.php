<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = teacher::all();

        return view('Teacher.all',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Teacher.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $teacher = teacher::create([
            'name' => $request->name,
            'tp' => $request->tp,
        ]);
        return $teacher;

    }

    /**
     * Display the specified resource.
     */
    public function show(teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(teacher $teacher)//page
    {
        return view('Teacher.update', compact('teacher'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, teacher $teacher)
    {
         $teacher->update([
            'name' => $request->name,
            'tp' => $request->tp,
        ]);

        return redirect()->back()->with('msg','Updated');
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(teacher $teacher)
    {
        $teacher = $teacher->delete();
        return $teacher;
    }
}
