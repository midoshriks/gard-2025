@extends('dasboard.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ display('DataTable Rols') }}</h3>
                </div>

                <div class="card-header">
                    <a href="" class="btn btn-info waves-effect waves-light m-b-5" data-toggle="modal"
                        data-target="#modal-default">
                        <span>{{ display('Add Rol') }}</span>
                        <i class="fa fa-edit"></i>
                    </a>

                    <a href="#" onclick="window.print();return false"
                        class="btn btn-info waves-effect waves-light m-b-5">
                        <span>{{ display('print') }}</span>
                        <i class="fa fa-edit"></i>
                    </a>
                    @include('dasboard.pages.Rols.create')
                </div>

                <!-- /.card-header -->
                {{-- <div class="card-body"> --}}
                <div class="table-responsive-sm">
                    <table id="example1" class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ display('name') }}</th>
                                <th>{{ display('satuts') }} </th>
                                <th>{{ display('Action') }} </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rols as $key => $rol)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $rol->name }}</td>
                                    <td>
                                        {{-- {{ $rol->status }} --}}
                                        <button type="button"
                                            class="btn btn-block bg-gradient-{{ $rol->status == '1' ? 'success' : 'danger' }} success btn-sm">{{ $rol->status == '1' ? display('Activity') : display('Non-Activity') }}</button>
                                    </td>

                                    <td>
                                        <a href="{{ route('dashboard.rols.edit', $rol->id) }}"
                                            class="btn btn-icon waves-effect waves-light btn-warning m-b-5">
                                            <i class="fa fa-wrench"></i>
                                        </a>
                                        {{-- ----------------------------   ---  --------------------------- --}}
                                        <a href="{{ route('dashboard.rols.destroy', $rol->id) }}" class="btn btn-danger"
                                            data-confirm-delete="true"><ion-icon name="trash-outline"></ion-icon></a>

                                        {{-- ----------------------------   ---  --------------------------- --}}
                                        {{-- <form action="{{ route('dashboard.rols.destroy', $rol->id) }}"
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
                                <th>{{ display('status') }} </th>
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
