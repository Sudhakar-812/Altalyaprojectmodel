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
        Schema::create('caregivers', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');

            $table->date('dob');
            $table->integer('sal_expectation')->nullable();
            $table->string('education')->nullable();
            $table->string('degree')->nullable();
            $table->string('health_issues')->nullable();

            $table->unsignedBigInteger('featured');
            $table->foreign('featured')->references('id')->on('subscriptions')->onDelete('cascade');

            $table->string('about_self')->nullable();
            $table->string('other_expectation')->nullable();

            $table->unsignedBigInteger('address_id');
            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade');

            $table->boolean('is_cmp_verified')->default(false);
            $table->bigInteger('alt_phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caregivers');
    }
};
