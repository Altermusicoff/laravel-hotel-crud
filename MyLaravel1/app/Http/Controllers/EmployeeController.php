<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('pages.employees', compact("employees"));
        
    }

    public function show($id)
    {
        // dd($id);
        $employee = Employee::find($id);
        return view('pages.employee', compact("employee"));
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('pages.employees-edit', compact("employee"));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'nullable|max:100',
            'lastname' => 'nullable|max:100',
            'date_of_birth' => 'nullable|date',
            'document_type' => 'nullable|max:20',
            'document_number' => 'nullable|numeric',
        ]);
        $employee = Employee::create($validate);
        return redirect()->route('show-employee', $employee->id);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'firstname' => 'required|max:100',
            'lastname' => 'required|max:100',
            'role' => 'required|max:20',
            'ral' => 'nullable|numeric',
        ]);
        $employee = Employee::find($id);
        $employee -> update($validate);

        return redirect() -> route('employees');
    }
}