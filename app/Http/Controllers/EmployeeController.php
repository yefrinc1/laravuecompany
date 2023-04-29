<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::select('employees.id', 'employees.name', 'email', 'phone',
        'department_id', 'departments.name as department')
        ->join('departments', 'employees.department_id', '=', 'departments.id')
        ->paginate(10);
        
        $departments = Department::all();
        return Inertia::render('Employees/Index', ['employees' => $employees,
        'departments' => $departments]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:150',
            'email' => 'required|max:80',
            'phone' => 'required|max:15',
            'department_id' => 'required|numeric',
        ]);
        $employee = new Employee($request->input());
        $employee->save();
        return redirect()->route('employees.index');
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required|max:150',
            'email' => 'required|max:80',
            'phone' => 'required|max:15',
            'department_id' => 'required|numeric',
        ]);
        $employee->update($request->input());
        return redirect()->route('employees.index');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index');
    }

    public function EmployeeByDepartment(){
        $data = Employee::select(DB::raw('count(employees.id) as count, departments.name'))
        ->join('departments', 'employees.department_id', '=', 'departments.id')
        ->groupBy('departments.name')->get();
        return Inertia::render('Employees/Graphic', ['data' => $data]);
    }

    public function reports(){
        $employees = Employee::select('employees.id', 'employees.name', 'email', 'phone',
        'department_id', 'departments.name as department')
        ->join('departments', 'employees.department_id', '=', 'departments.id')
        ->get();
        
        $departments = Department::all();
        return Inertia::render('Employees/Reports', ['employees' => $employees,
        'departments' => $departments]);
    }
}
