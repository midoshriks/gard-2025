@extends('dasboard.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ display('DataTable Employees') }}</h3>
                </div>

                <div class="card-header">
                    <a href="{{ route('dashboard.employees.create') }}" class="btn btn-info waves-effect waves-light m-b-5">
                        <span>{{ display('Add Employees') }}</span>
                        <i class="fa fa-edit"></i>
                    </a>

                    <a href="{{ route('dashboard.employees.excel') }}" class="btn btn-info waves-effect waves-light m-b-5">
                        <span>{{ display('excel') }}</span>
                        <i class="fa fa-edit"></i>
                    </a>

                    <button type="button" class="btn btn-success waves-effect waves-light m-b-5" data-toggle="modal"
                        data-target="#modal-sm">
                        {{ display('imoprt') . display('excel') }}
                    </button>

                    @include('dasboard.partials._errors')
                    @include('dasboard.pages.Employees.import')


                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive">
                        {{-- <div class="table-responsive-sm"> --}}
                        <form action="{{ route('dashboard.delets.employees') }}" method="post">
                            @csrf
                            @method('DELETE')
                            <table id="example1" class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ display('name') }}</th>
                                        <th>{{ display('job') }}</th>
                                        <th>{{ display('code') }}</th>
                                        {{-- <th>{{ display('marital_status') }}</th> --}}
                                        {{-- <th>{{ display('appointment_date') }}</th> --}}
                                        <th>{{ display('slide') }}</th>
                                        {{-- <th>{{ display('basic_salary') }}</th> --}}
                                        {{-- <th>{{ display('uniform_last_received') }}</th> --}}
                                        {{-- <th>{{ display('uniform_due_date') }}</th> --}}
                                        {{-- <th>{{ display('tooles_one_last_received') }}</th> --}}
                                        {{-- <th>{{ display('tooles_one_due_date') }}</th> --}}
                                        {{-- <th>{{ display('tooles_two_last_received') }}</th> --}}
                                        {{-- <th>{{ display('tooles_two_due_date') }}</th> --}}
                                        {{-- <th>{{ display('medical_cardinary') }}</th> --}}
                                        {{-- <th>{{ display('health_certificate') }}</th> --}}
                                        {{-- <th>{{ display('insurance') }}</th> --}}
                                        {{-- <th>{{ display('phone') }}</th> --}}
                                        {{-- <th>{{ display('salary_type') }}</th> --}}
                                        {{-- <th>{{ display('instead_allowance') }}</th> --}}
                                        {{-- <th>{{ display('instead_communications') }}</th> --}}
                                        <th>{{ display('checked') }}</th>
                                        <th>{{ display('status') }} </th>
                                        <th>{{ display('Action') }} </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $key => $employee)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $employee->name }}</td>
                                            <td>{{ display($employee->job->name) }}</td>
                                            <td>{{ $employee->code }}</td>
                                            {{-- <td>{{ $employee->marital_status }}</td> --}}
                                            {{-- <td>{{ $employee->appointment_date }}</td> --}}
                                            <td>{{ $employee->slide->name }}</td>
                                            {{-- <td>{{ $employee->basic_salary }}</td> --}}
                                            {{-- <td>{{ $employee->uniform_last_received }}</td> --}}
                                            {{-- <td>{{ $employee->uniform_due_date }}</td> --}}
                                            {{-- <td>{{ $employee->tooles_one_last_received }}</td> --}}
                                            {{-- <td>{{ $employee->tooles_one_due_date }}</td> --}}
                                            {{-- <td>{{ $employee->tooles_two_last_received }}</td> --}}
                                            {{-- <td>{{ $employee->tooles_two_due_date }}</td> --}}
                                            {{-- <td>{{ $employee->medical_cardinary }}</td> --}}
                                            {{-- <td>{{ $employee->health_certificate }}</td> --}}
                                            {{-- <td>{{ $employee->insurance }}</td> --}}
                                            {{-- <td>{{ $employee->phone }}</td> --}}
                                            {{-- <td>{{ $employee->salary_type }}</td> --}}
                                            {{-- <td>{{ $employee->instead_allowance }}</td> --}}
                                            {{-- <td>{{ $employee->instead_communications }}</td> --}}
                                            <td>
                                                <input class="form-check-input ids" name="ids[{{ $employee->id }}]"
                                                    type="checkbox" value="{{ $employee->id }}">
                                            </td>
                                            <td>
                                                {{-- {{ $employee->status }} --}}
                                                <button type="button"
                                                    class="btn btn-block bg-gradient-{{ $employee->status == '1' ? 'success' : 'danger' }} success btn-sm">{{ $employee->status == '1' ? display('Activity') : display('Non-Activity') }}</button>
                                            </td>

                                            <td>
                                                <a href="{{ route('dashboard.employees.edit', $employee->id) }}"
                                                    class="btn btn-icon waves-effect waves-light btn-warning m-b-5">
                                                    <i class="fa fa-wrench"></i>
                                                </a>
                                                {{-- ----------------------------   ---  --------------------------- --}}
                                                <a href="{{ route('dashboard.employees.destroy', $employee->id) }}"
                                                    class="btn btn-danger" data-confirm-delete="true"><ion-icon
                                                        name="trash-outline"></ion-icon></a>

                                                {{-- ----------------------------   ---  --------------------------- --}}
                                                {{-- <form action="{{ route('dashboard.employees.destroy', $employee->id) }}"
                                            method="POST" style="display: inline-block;">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}

                                            <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5"><ion-icon
                                                    name="trash-outline"></ion-icon> </button>
                                        </form> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ display('name') }}</th>
                                        <th>{{ display('job') }}</th>
                                        <th>{{ display('code') }}</th>
                                        {{-- <th>{{ display('marital_status') }}</th> --}}
                                        {{-- <th>{{ display('appointment_date') }}</th> --}}
                                        <th>{{ display('slide') }}</th>
                                        {{-- <th>{{ display('basic_salary') }}</th> --}}
                                        {{-- <th>{{ display('uniform_last_received') }}</th> --}}
                                        {{-- <th>{{ display('uniform_due_date') }}</th> --}}
                                        {{-- <th>{{ display('tooles_one_last_received') }}</th> --}}
                                        {{-- <th>{{ display('tooles_one_due_date') }}</th> --}}
                                        {{-- <th>{{ display('tooles_two_last_received') }}</th> --}}
                                        {{-- <th>{{ display('tooles_two_due_date') }}</th> --}}
                                        {{-- <th>{{ display('medical_cardinary') }}</th> --}}
                                        {{-- <th>{{ display('health_certificate') }}</th> --}}
                                        {{-- <th>{{ display('insurance') }}</th> --}}
                                        {{-- <th>{{ display('phone') }}</th> --}}
                                        {{-- <th>{{ display('salary_type') }}</th> --}}
                                        {{-- <th>{{ display('instead_allowance') }}</th> --}}
                                        {{-- <th>{{ display('instead_communications') }}</th> --}}
                                        <th>{{ display('checked') }}</th>
                                        <th>{{ display('status') }} </th>
                                        <th>{{ display('Action') }} </th>
                                    </tr>
                                </tfoot>
                            </table>

                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-red">{{ display('delete all') }}</button>
                                <input class="btn btn-ghost-danger" type="button" onclick="selects()" value="Select All" />
                                <input class="btn btn-ghost-green" type="button" onclick="deSelect()"
                                    value="Deselect All" />
                            </div>

                        </form>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection

<script type="text/javascript">
    function selects() {
        var ele = document.getElementsByClassName("ids");
        for (var i = 0; i < ele.length; i++) {
            if (ele[i].type == "checkbox") ele[i].checked = true;
        }
    }

    function deSelect() {
        var ele = document.getElementsByClassName("ids");
        for (var i = 0; i < ele.length; i++) {
            if (ele[i].type == "checkbox") ele[i].checked = false;
        }
    }
</script>
