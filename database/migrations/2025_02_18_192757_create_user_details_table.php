<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('emirates_id');
            $table->string('employment_type');
            $table->string('nationality');
            $table->string('gender');
            $table->string('mobile');
            $table->string('email');
            $table->string('product_type');
            $table->string('employer_name');
            $table->decimal('monthly_salary', 10, 2); // Precision adjust kar sakte ho

            
            $table->decimal('monthly_allowance', 10, 2); // Adjust precision as needed
            $table->decimal('annual_income', 10, 2); // Adjust precision as needed
            $table->string('account_no');
            $table->date('from')->nullable();
            $table->date('to');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_details');
    }
}
