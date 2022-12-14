<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
   public function index() {
    $employees = Employee::select(
        'name',
        'address',
        'department',
        'position',
        'date-of-birth',
        'hired-date'
    )->get();

return response()->json($employees , 200);
   }
}
