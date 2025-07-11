<?php

namespace Database\Seeders;

use App\Models\Employees;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $employee =[
        //     "name"      => 'كريم مجدي محمد,"slide" => '1'',
        //     "job_id"       => '1',
        //     "code"      => '1769',
        //     "marital_status"    => 'اعزب', // الحالة الاجتماعية
        //     "appointment_date"      => Carbon::parse('2022-02-08'), // تاريخ التعيـــــن
        //     "slide"     => 'A', // الشريحـة
        //     "basic_salary"      => '8890', // الراتب الأساسي
        //     "uniform_last_received"     => '0', //اليونيفورم أخر استلام
        //     "uniform_due_date"      => '0', //اليونيفورم موعد الاستحقاق
        //     "tooles_one_last_received"      => '0', //الصابوه + الكوذلك  أخر استلام
        //     "tooles_one_due_date"       => '0', //الصابوه + الكوذلك  موعد الاستحقاق
        //     "tooles_two_last_received"      => '0', //الصابوه + الكوذلك  أخر استلام
        //     "tooles_two_due_date"       => '0', //الصابوه + الكوذلك  موعد الاستحقاق
        //     "medical_cardinary"     => '1', //الكارنية الطبــي
        //     "health_certificate"    => '1', // الشهادة الصحية
        //     "insurance"     => '1', // التأمين
        //     "phone"     => '0155 867 7086', // رقم الهاتف
        //     "salary_type"       => '0', // نوع الراتب
        //     "instead_allowance"     => '0', // بدل اغتراب
        //     "instead_communications"    => '0', // بدل مواصلات
        //     "status" => '1',
        // ];

        $employees = [
            ["name" => 'كريم مجدي محمد', "job_id" => '4', "slide_id" => '1'],
            ["name" => 'محمود احمد راضى', "job_id" => '7', "slide_id" => '1'],
            ["name" => 'محمود ماهر السيد', "job_id" => '7', "slide_id" => '1'],
            ["name" => 'اسلام خليفه احمد', "job_id" => '7', "slide_id" => '1'],
            ["name" => 'هانى ثروت على احمد', "job_id" => '7', "slide_id" => '1'],
            ["name" => 'عبدالله محمد لطفى', "job_id" => '8', "slide_id" => '1'],
            ["name" => 'محمد سعيد يونس', "job_id" => '8', "slide_id" => '1'],
            ["name" => 'محمد مسعود موسي', "job_id" => '9', "slide_id" => '1'],
            ["name" => 'اسامة شوقي', "job_id" => '9', "slide_id" => '1'],
            ["name" => 'محمد علي خلف', "job_id" => '9', "slide_id" => '1'],
            ["name" => 'حسن سعد علي', "job_id" => '9', "slide_id" => '1'],
            ["name" => 'محمد عصام محمد', "job_id" => '9', "slide_id" => '1'],
            ["name" => 'ايمن محمد عبدالمنعم', "job_id" => '9', "slide_id" => '1'],
            ["name" => 'عادل زارع تفيان', "job_id" => '9', "slide_id" => '1'],
            ["name" => 'ابراهيم وائل ابراهيم', "job_id" => '9', "slide_id" => '1'],
            ["name" => 'عبدالرحمن ايمن', "job_id" => '9', "slide_id" => '1'],
            ["name" => 'محمد ختام محمد', "job_id" => '9', "slide_id" => '1'],
            ["name" => 'احمد محمد طه', "job_id" => '10', "slide_id" => '1'],
            ["name" => 'حسين عيد حسن', "job_id" => '10', "slide_id" => '1'],
            ["name" => 'عبدالمجيد حمدي', "job_id" => '11', "slide_id" => '1'],
            ["name" => 'احمد محمد يوسف', "job_id" => '11', "slide_id" => '1'],
            ["name" => 'محمود رمضان', "job_id" => '11', "slide_id" => '1'],
            ["name" => 'زياد احمد محمود', "job_id" => '11', "slide_id" => '1'],
            ["name" => 'السيد علي السيد', "job_id" => '11', "slide_id" => '1'],
            ["name" => 'محمود وسيم قناوي', "job_id" => '12', "slide_id" => '1'],
            ["name" => 'احمد بسام شعبان', "job_id" => '13', "slide_id" => '1'],
            ["name" => 'كريم محمود محمد', "job_id" => '13', "slide_id" => '1'],
            ["name" => 'ادم محمود سامي', "job_id" => '17', "slide_id" => '1'],
            ["name" => 'محمود رمضان', "job_id" => '17', "slide_id" => '1'],
            ["name" => 'محمد فوزي عبدالستار', "job_id" => '17', "slide_id" => '1'],
            ["name" => 'السيد مكرم اسماعيل', "job_id" => '17', "slide_id" => '1'],
            ["name" => 'احمد محمد رمضان', "job_id" => '17', "slide_id" => '1'],
            ["name" => 'كريم عادل عبد العزيز', "job_id" => '6', "slide_id" => '1'],
            ["name" => 'محمدفؤاد حفني', "job_id" => '6', "slide_id" => '1'],
            ["name" => 'كمال فرج محمد', "job_id" => '14', "slide_id" => '1'],
            ["name" => 'محمد العربي محمد', "job_id" => '14', "slide_id" => '1'],
            ["name" => 'عمرو احمد محمد', "job_id" => '14', "slide_id" => '1'],
            ["name" => 'حسام الدين حسن', "job_id" => '15', "slide_id" => '1'],
            ["name" => 'محمود محمد عبدة', "job_id" => '15', "slide_id" => '1'],
            ["name" => 'مصطفي عبدالرحيم', "job_id" => '15', "slide_id" => '1'],
            ["name" => 'مجدي يوسف', "job_id" => '15', "slide_id" => '1'],
            ["name" => 'باسم احمد محمد', "job_id" => '15', "slide_id" => '1'],
            ["name" => 'عبد الله محمود عبد الله', "job_id" => '15', "slide_id" => '1'],
            ["name" => 'احمد عبد المنعم', "job_id" => '15', "slide_id" => '1'],
            ["name" => 'اسلام حسن علي', "job_id" => '15', "slide_id" => '1'],
            ["name" => 'مؤمن احمد محمود', "job_id" => '15', "slide_id" => '1'],
            ["name" => 'احمد السيد احمد', "job_id" => '15', "slide_id" => '1'],
        ];

        foreach ($employees as $key => $employee) {
            # code...
            Employees::create($employee);
        }
    }
}
