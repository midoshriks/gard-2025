<?php

namespace App\Imports;

use App\Models\Employees;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmployeesImport implements
    ToModel,
    WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Employees([
            'name' => $row['name'],
            'job_id' => $row['job_id'],
            'code' => $row['code'],
            // 'marital_status' => $row['marital_status'],
            // dd($row['appointment_date'], Carbon::parse($row['appointment_date'])),
            // // 'appointment_date' => $row['appointment_date'],
            // // dd($row['appointment_date'],Carbon::parse($row['appointment_date'])),
            'slide' => $row['slide'],
            // 'basic_salary' => $row['basic_salary'],
            // 'uniform_last_received' => $row['uniform_last_received'],
            // 'uniform_due_date' => $row['uniform_due_date'],
            // 'tooles_one_last_received' => $row['tooles_one_last_received'],
            // 'tooles_one_due_date' => $row['tooles_one_due_date'],
            // 'tooles_two_last_received' => $row['tooles_two_last_received'],
            // 'tooles_two_due_date' => $row['tooles_two_due_date'],
            // 'medical_cardinary' => $row['medical_cardinary'],
            // 'health_certificate' => $row['health_certificate'],
            // 'insurance' => $row['insurance'],
            // 'phone' => $row['phone'],
            // 'salary_type' => $row['salary_type'],
            // 'instead_allowance' => $row['instead_allowance'],
            // 'instead_communications' => $row['instead_communications'],
            // 'status' => $row['status'],
        ]);
    }
}
