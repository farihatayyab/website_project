<?php

namespace App\Http\Controllers;

use App\Models\UserDetail;  // Import the UserDetail model
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index()
    {
        return view('information.information');
    }

    // Store a newly created user detail in storage.
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'emirates_id' => 'required|string|max:255',
            'employment_type' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'mobile' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'product_type' => 'required|string|max:255',
            'employer_name' => 'required|string|max:255',
            'monthly_salary' => 'required|numeric',
            'monthly_allowance' => 'required|numeric',
            'annual_income' => 'required|numeric',
            'account_no' => 'required|string|max:255',
            'from' => 'required|date',
            'to' => 'required|date',
        ]);

        // Create a new user detail record
        UserDetail::create($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('information')->with('success', 'Form Submit successfully.');
    }
}
