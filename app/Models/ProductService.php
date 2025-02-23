<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductService extends Model
{
    use HasFactory;

    // Define the fields that are mass assignable
    protected $fillable = [
        'residenceStatus',
        'applicantType',
        'employmentStatus',
        'monthlyIncome',
        'age',
        'purchaseType',
        'propertyValue',
        'lender',
        'outstandingLoan',
        'name',
        'email',
        'phone'
    ];
}
