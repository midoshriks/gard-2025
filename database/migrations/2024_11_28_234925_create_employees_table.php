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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('job_id')->unsigned();
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->string('code')->nullable();
            // $table->string('marital_status'); // الحالة الاجتماعية
            // $table->date('appointment_date'); // تاريخ التعيـــــن
            // // $table->string('appointment_date'); // تاريخ التعيـــــن
            $table->bigInteger('slide_id')->unsigned()->default(3); // الشريحـة
            $table->foreign('slide_id')->references('id')->on('slides')->onDelete('cascade');
            // $table->string('basic_salary'); // الراتب الأساسي
            // $table->string('uniform_last_received')->nullable(); //اليونيفورم أخر استلام
            // $table->string('uniform_due_date')->nullable(); //اليونيفورم موعد الاستحقاق
            // $table->string('tooles_one_last_received')->nullable(); //الصابوه + الكوذلك  أخر استلام
            // $table->string('tooles_one_due_date')->nullable(); //الصابوه + الكوذلك  موعد الاستحقاق
            // $table->string('tooles_two_last_received')->nullable()->default(0); //المعاصم  أخر استلام
            // $table->string('tooles_two_due_date')->nullable()->default(0); //المعاصم  موعد الاستحقاق
            // $table->string('medical_cardinary')->nullable()->default(0); //الكارنية الطبــي
            // $table->string('health_certificate')->nullable()->default(0); // الشهادة الصحية
            // $table->string('insurance')->nullable()->default(0); // التأمين
            // $table->string('phone')->unique()->nullable()->default(01); // رقم الهاتف
            // $table->string('salary_type')->nullable()->default(0); // نوع الراتب
            // $table->string('instead_allowance')->nullable()->default(0); // بدل اغتراب
            // $table->string('instead_communications')->nullable()->default(0); // بدل مواصلات
            $table->string('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
