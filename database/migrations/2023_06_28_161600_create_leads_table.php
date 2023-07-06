<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('Phone');
            $table->string('landline')->nullable();
            $table->string('fullAddress');
            $table->string('postcode');
            $table->string('email');
            $table->string('gasSupply');
            $table->string('employedBenefits');
            $table->string('benefit');
            $table->string('belowthreshold')->nullable();
            $table->string('earnings')->nullable();
            $table->string('energyRating');
            $table->string('condensingBoiler')->nullable();
            $table->string('dob');
            $table->string('housingSitu');
            $table->string('typeOfProperty');
            $table->string('updatesSinceEpc')->nullable();
            $table->string('wallType');
            $table->string('wallinsulation');
            $table->string('chosenHeatingOption');
            $table->string('currentHeating');
            $table->string('secondaryHeating');
            $table->string('medicalCondtions')->nullable();
            $table->string('notes')->nullable();
            $table->integer('userID');
            $table->integer('companyID')->nullable();
            $table->string('leadApproval')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
