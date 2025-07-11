@extends('dasboard.layouts.login')

@section('content')
    <div class="text-center p-5">
        <div class="table-responsive-sm">
            <i class="far fa-check-circle fa-10x mb-3" style="color: green"></i>
            <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>{{ display('name employee') }}</th>
                        <th>{{ display('amount') }}</th>
                        <th>{{ display('job') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $advance->name_employee }}</td>
                        <td>{{ $advance->amount }}</td>
                        <td>{{ display($advance->jobs->name) }}</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>{{ display('name employee') }}</th>
                        <th>{{ display('amount') }}</th>
                        <th>{{ display('job') }}</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
