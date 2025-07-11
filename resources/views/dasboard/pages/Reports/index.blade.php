@extends('dasboard.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ display('DataTable') }} {{ display('Repot') }}</h3>
                </div>

                <div class="card-header">
                    <a href="{{ route('dashboard.reports.create') }}" class="btn btn-info waves-effect waves-light m-b-5">
                        {{-- <a href="" class="btn btn-info waves-effect waves-light m-b-5" data-toggle="modal" data-target="#modal-default"> --}}
                        <span>{{ display('Add') }} {{ display('Repot') }}</span>
                        <i class="fa fa-edit"></i>
                    </a>

                    <a href="#" onclick="window.print();return false"
                        class="btn btn-info waves-effect waves-light m-b-5">
                        <span>{{ display('print') }}</span>
                        <i class="fa fa-edit"></i>
                    </a>
                    {{-- @include('dasboard.pages.Reports.create') --}}
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table id="example1" class="table table-bordered table-striped text-center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ display('name') }}</th>
                                    <th>{{ display('title') }} </th>
                                    <th>{{ display('branch') }} </th>
                                    <th>{{ display('body') }} </th>
                                    <th>{{ display('date') }} </th>
                                    <th>{{ display('section') }} </th>
                                    <th>{{ display('Action') }} </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reports as $key => $report)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $report->name }}</td>
                                        <td>{{ $report->title }}</td>
                                        <td>{{ $report->branch }}</td>
                                        <td>{!! $report->body !!}</td>
                                        <td>{{ $report->date }}</td>
                                        <td>{{ $report->section->name }}</td>

                                        <td>
                                            <a href="{{ route('dashboard.reports.show', $report->id) }}"
                                                class="btn btn-info waves-effect waves-light m-b-5">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            {{-- ----------------------------   ---  --------------------------- --}}
                                            <a href="{{ route('dashboard.reports.edit', $report->id) }}"
                                                class="btn btn-icon waves-effect waves-light btn-warning m-b-5">
                                                <i class="fa fa-wrench"></i>
                                            </a>
                                            {{-- ----------------------------   ---  --------------------------- --}}
                                            <a href="{{ route('dashboard.reports.destroy', $report->id) }}"
                                                class="btn btn-danger" data-confirm-delete="true"><ion-icon
                                                    name="trash-outline"></ion-icon></a>

                                            {{-- ----------------------------   ---  --------------------------- --}}
                                            {{-- <form action="{{ route('dashboard.reports.destroy', $reporet->id) }}"
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
                                    <th>{{ display('title') }} </th>
                                    <th>{{ display('branch') }} </th>
                                    <th>{{ display('body') }} </th>
                                    <th>{{ display('date') }} </th>
                                    <th>{{ display('section') }} </th>
                                    <th>{{ display('Action') }} </th>
                                </tr>
                            </tfoot>
                        </table>
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
