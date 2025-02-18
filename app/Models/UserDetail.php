<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    // The table associated with the model.
    protected $table = 'user_details';

    // The attributes that are mass assignable.
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'emirates_id',
        'employment_type',
        'nationality',
        'gender',
        'mobile',
        'email',
        'product_type',
        'employer_name',
        'monthly_salary',
        'monthly_allowance',
        'annual_income',
        'account_no',
        'from',
        'to',
    ];

    // The attributes that should be cast to native types.
    protected $casts = [
        'from' => 'date',
        'to' => 'date',
        'monthly_income' => 'decimal:2',
        'monthly_allowance' => 'decimal:2',
        'annual_income' => 'decimal:2',
    ];
}
