<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller

{   
    public function show($id)
{
    $department = Department::findOrFail($id); // Retrieve the department by ID
    return view('departments.show', compact('department')); // Return the view with the department data
}

    public function create()
    {
        return view('departments.create');
    }

    public function store(Request $request)
    {
        Department::create([
            'name' => $request->get('name'),
            'image' => $request->get('image'),
            'description' => $request->get('description'),
        ]);

        return redirect()->route('departmentdash');
    }

    public function edit($id)
    {
        $department = Department::findOrFail($id);
        return view('departments.update', compact('department'));
    }

    public function update(Request $request, $id)
    {
        $department = Department::findOrFail($id);
        $department->name = $request->input('name');
        $department->image = $request->input('image');
        $department->description = $request->input('description');
        $department->save();

        return redirect()->route('departmentdash');
    }

    public function destroy($id)
    {
        $department = Department::findOrFail($id);
        $department->delete();

        return redirect()->route('departmentdash');
    }
}
