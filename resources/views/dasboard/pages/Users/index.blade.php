@extends('dasboard.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ display('DataTable Users') }}</h3>
                    <a href="" class="btn btn-info waves-effect waves-light m-b-5" data-toggle="modal"
                        data-target="#modal-default">
                        <span>{{ display('Add Users') }}</span>
                        <i class="fa fa-edit"></i>
                    </a>

                    <a href="#" onclick="window.print();return false"
                        class="btn btn-info waves-effect waves-light m-b-5">
                        <span>{{ display('print') }}</span>
                        <i class="fa fa-edit"></i>
                    </a>
                    @include('dasboard.pages.Users.create')

                </div>
                <!-- /.card-header -->
                {{-- <div class="card-body"> --}}
                <div class="table-responsive-sm">
                    <table id="example1" class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ display('name') }}</th>
                                <th>{{ display('email') }}</th>
                                <th>{{ display('phone') }}</th>
                                <th>{{ display('whatsapp') }}</th>
                                <th>{{ display('code') }}</th>
                                <th>{{ display('rol') }}</th>
                                <th>{{ display('status') }}</th>
                                <th>{{ display('Action') }} </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a href="tel:{{ $user->phone }}"> {{ $user->phone }}</a>
                                    </td>
                                    <td>
                                        <a href="{{ 'http://wa.me/+2' . $user->whatsapp }}">{{ $user->whatsapp }}</a>
                                    </td>
                                    <td>{{ $user->code }}</td>
                                    <td>{{ $user->rols->name }}</td>
                                    {{-- <td>{{ $user->rol == 0 ? display('User') : display('Admin') }}</td> --}}
                                    <td>{{ $user->status == 0 ? display('none-active') : display('active') }}</td>
                                    <td>
                                        <a href="{{ route('dashboard.users.edit', $user->id) }}"
                                            class="btn btn-icon waves-effect waves-light btn-warning m-b-5">
                                            <i class="fa fa-wrench"></i>
                                        </a>
                                        {{-- ----------------------------   ---  --------------------------- --}}
                                        <a href="{{ route('dashboard.users.destroy', $user->id) }}" class="btn btn-danger"
                                            data-confirm-delete="true"><ion-icon name="trash-outline"></ion-icon></a>

                                        {{-- ----------------------------   ---  --------------------------- --}}
                                        {{-- <form action="{{ route('dashboard.user.destroy', $user->id) }}"
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
                                <th>{{ display('email') }}</th>
                                <th>{{ display('phone') }}</th>
                                <th>{{ display('whatsapp') }}</th>
                                <th>{{ display('code') }}</th>
                                <th>{{ display('rol') }}</th>
                                <th>{{ display('status') }}</th>
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
