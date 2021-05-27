<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

class MainController extends Controller
{
    public function home() {

        $employees = Employee::all();

        return view('pages.home', compact('employees'));
    }

    public function edit($id) {

        $employee = Employee::findOrFail($id);

        return view('pages.edit', compact('employee'));
    }
    public function update(Request $request, $id) {

        $validData = $request -> validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'role' => 'required|integer',
            'ral' => 'integer'
        ]);

        $employee = Employee::findOrFail($id);

        $employee -> update($validData);

        return redirect() -> route('home');
    }

    public function destroy($id) {

        $employee = Employee::findOrFail($id);

        $employee -> delete();

        return redirect() -> route('home');
    }
}
