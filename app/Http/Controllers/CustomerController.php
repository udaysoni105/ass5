<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    // public function index()
    // {
    //     $projects = customer::latest()->paginate(5);
    //     $customerEmail = customer_email();
    //     return view('project.index', compact('projects','customerEmail'))->with('i',(request()->input('page',1)-1)*5);
    // }
    public function index(Request $request)
    {
        $date = $request->input('date');
        $formattedDate = formatDate($date, 'F j, Y');
        
        return view('index', compact('formattedDate'));
    }
}