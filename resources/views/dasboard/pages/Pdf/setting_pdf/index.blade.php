@extends('dasboard.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ display('DataTable setting pdf') }}</h3>
                    <a href="" class="btn btn-info waves-effect waves-light m-b-5" data-toggle="modal"
                        data-target="#modal-default">
                        <span>{{ display('Add setting pdf') }}</span>
                        <i class="fa fa-edit"></i>
                    </a>

                    <a href="#" onclick="window.print();return false"
                        class="btn btn-info waves-effect waves-light m-b-5">
                        <span>{{ display('print') }}</span>
                        <i class="fa fa-edit"></i>
                    </a>
                    @include('dasboard.pages.Advances.setting_pdf.create')

                </div>
                <!-- /.card-header -->
                {{-- <div class="card-body"> --}}
                <div class="table-responsive-sm">
                    <table id="example1" class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ display('month') }} </th>
                                <th>{{ display('Branch manager') }} </th>
                                <th>{{ display('Action') }} </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($setting_pdf as $key => $setting)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $setting->month }}</td>
                                    <td>{{ $setting->branch_manager }}</td>

                                    <td>
                                        <a href="{{ route('dashboard.setting_pdf.edit', $setting->id) }}"
                                            class="btn btn-icon waves-effect waves-light btn-warning m-b-5">
                                            <i class="fa fa-wrench"></i>
                                        </a>
                                        {{-- ----------------------------   ---  --------------------------- --}}
                                        <a href="{{ route('dashboard.setting_pdf.destroy', $setting->id) }}"
                                            class="btn btn-danger" data-confirm-delete="true"><ion-icon
                                                name="trash-outline"></ion-icon></a>

                                        {{-- ----------------------------   ---  --------------------------- --}}
                                        {{-- <form action="{{ route('dashboard.setting_pdf.destroy', $setting->id) }}"
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
                                <th>{{ display('month') }} </th>
                                <th>{{ display('Branch manager') }} </th>
                                <th>{{ display('Action') }} </th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection
