<div class="table-responsive">
    {{-- <div class="table-responsive-sm"> --}}
    <table id="example1" class="table table-bordered table-striped text-center">
        <thead>
            <tr>
                <th>#</th>
                <th>{{ display('name') }}</th>
                <th>{{ display('job') }}</th>
                <th>{{ display('code') }}</th>
                <th>{{ display('marital_status') }}</th>
                <th>{{ display('appointment_date') }}</th>
                <th>{{ display('slide') }}</th>
                <th>{{ display('basic_salary') }}</th>
                <th>{{ display('uniform_last_received') }}</th>
                <th>{{ display('uniform_due_date') }}</th>
                <th>{{ display('tooles_one_last_received') }}</th>
                <th>{{ display('tooles_one_due_date') }}</th>
                <th>{{ display('tooles_two_last_received') }}</th>
                <th>{{ display('tooles_two_due_date') }}</th>
                <th>{{ display('medical_cardinary') }}</th>
                <th>{{ display('health_certificate') }}</th>
                <th>{{ display('insurance') }}</th>
                <th>{{ display('phone') }}</th>
                <th>{{ display('salary_type') }}</th>
                <th>{{ display('instead_allowance') }}</th>
                <th>{{ display('instead_communications') }}</th>
                <th>{{ display('status') }} </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $key => $employee)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->job }}</td>
                    <td>{{ $employee->code }}</td>
                    <td>{{ $employee->marital_status }}</td>
                    <td>{{ $employee->appointment_date }}</td>
                    <td>{{ $employee->slide }}</td>
                    <td>{{ $employee->basic_salary }}</td>
                    <td>{{ $employee->uniform_last_received }}</td>
                    <td>{{ $employee->uniform_due_date }}</td>
                    <td>{{ $employee->tooles_one_last_received }}</td>
                    <td>{{ $employee->tooles_one_due_date }}</td>
                    <td>{{ $employee->tooles_two_last_received }}</td>
                    <td>{{ $employee->tooles_two_due_date }}</td>
                    <td>{{ $employee->medical_cardinary }}</td>
                    <td>{{ $employee->health_certificate }}</td>
                    <td>{{ $employee->insurance }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td>{{ $employee->salary_type }}</td>
                    <td>{{ $employee->instead_allowance }}</td>
                    <td>{{ $employee->instead_communications }}</td>
                    <td>
                        {{ $employee->status }}
                        {{-- <button type="button"
                            class="btn btn-block bg-gradient-{{ $employee->status == '1' ? 'success' : 'danger' }} success btn-sm">{{ $employee->status == '1' ? display('Activity') : display('Non-Activity') }}</button> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
