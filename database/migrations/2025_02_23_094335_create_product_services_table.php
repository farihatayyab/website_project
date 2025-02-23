<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_services', function (Blueprint $table) {
            $table->id();
            $table->string('residenceStatus')->nullable();
            $table->string('applicantType')->nullable();
            $table->string('employmentStatus')->nullable();
            $table->decimal('monthlyIncome', 10, 2)->nullable(); // For monetary value
            $table->integer('age')->nullable();
            $table->string('purchaseType')->nullable();
            $table->decimal('propertyValue', 15, 2)->nullable();
            $table->string('lender')->nullable();
            $table->decimal('outstandingLoan', 15, 2)->nullable();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('phone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_services');
    }
}
