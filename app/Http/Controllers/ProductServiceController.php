<?php

namespace App\Http\Controllers;

use App\Models\ProductService;  // Import the UserDetail model
use Illuminate\Http\Request;

class ProductServiceController extends Controller
{
    // Display a listing of the products
    public function productservice()
    {
        
        return view('pages.product_service');
    }

    public function store(Request $request)
    {
        // Validation Rules
         $request->validate([
            'residenceStatus' => 'required',
            'applicantType' => 'required',
            'employmentStatus' => 'required',
            'monthlyIncome' => 'required|numeric|min:10000',
            'age' => 'required|numeric|min:21',
        ], [
            'residenceStatus.required' => 'Please select your residence status.',
            'applicantType.required' => 'Please select if you are applying alone or with someone.',
            'employmentStatus.required' => 'Please select your employment status.',
            'monthlyIncome.required' => 'Please enter your monthly income.',
            'monthlyIncome.numeric' => 'Monthly income must be a number.',
            'monthlyIncome.min' => 'Monthly income must be greater than 10000.',
            'age.required' => 'Please enter your age.',
            'age.numeric' => 'Age must be a number.',
            'age.min' => 'You must be at least 21 years old.',
        ]);
         // Store the data in the database
         ProductService::create($request->all());

        return redirect()->route('next.step');
    }

    // display next step page
    public function nextstep()
    {
        return view('pages.next_step'); // Yeh 'next-step.blade.php' view return karega
    }

    public function storevalidation(Request $request)
{
    // Second form validation
    $request->validate([
        'purchaseType' => 'required|in:NEW_PURCHASE,BUY_OUT',
        'propertyValue' => 'required|numeric|min:500,000',
        'lender' => 'required|in:bank1,bank2,bank3,bank4,bank5,bank6,bank7,bank8,bank9,bank10,bank11,bank12,bank13,bank14,bank15,bank16,bank17,bank18,bank19,bank20,bank21,bank22,bank23,bank24,bank25,bank26,bank27,bank28,bank29,bank30,bank31,bank32,bank33,bank34,bank35,bank36,bank37,bank38,bank39,bank40,bank41,bank42,bank43,bank44,bank45,bank46,bank47,bank48,bank49,bank50,bank51,bank52,bank53,bank54,bank55,bank56,bank57,bank58,bank59,bank60,bank61,bank62', // Only allow the specified bank values
        'outstandingLoan' => 'required|numeric|min: 500,000',
    ], [
        'purchaseType.required' => 'Please select purchase type.',
        'propertyValue.required' => 'Please enter the property value.',
        'propertyValue.numeric' => 'Property value must be a number.',
        'propertyValue.min' => 'Property value must be greater than 500,000.',
        'lender.required' => 'Please select a lender.',
        'lender.in' => 'The selected lender is invalid.',
        'outstandingLoan.required' => 'Please enter the outstanding loan amount.',
        'outstandingLoan.numeric' => 'The loan amount must be a number.',
        'outstandingLoan.min' => 'The loan amount must be greater than  500,000.',
    ]);
 // Store the data in the database
 ProductService::create($request->all());

    return redirect()->route('last.step'); // ya koi aur action
}

public function laststep()
{
    return view('pages.last_step'); // Yeh 'next-step.blade.php' view return karega
}

public function submitForm(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email',
        'phone' => 'required|numeric|digits_between:10,15',
    ], [
        'name.required' => 'Please enter your full name.',
        'name.string' => 'Your name should be a valid string.',
        'name.max' => 'Your name can have a maximum of 255 characters.',
        
        'email.required' => 'Please enter your email address.',
        'email.email' => 'Please enter a valid email address.',
        'email.max' => 'Your email can have a maximum of 255 characters.',
        'email.unique' => 'This email address is already taken. Please use a different one.',
        
        'phone.required' => 'Please enter your phone number.',
        'phone.numeric' => 'Please enter a valid phone number with only numbers.',
        'phone.digits_between' => 'Your phone number should be between 10 to 15 digits.',
    ]);

   // Store the data in the database
   ProductService::create($request->all());

   
     return back()->with('success', 'Form submitted successfully!');
}



    


}

