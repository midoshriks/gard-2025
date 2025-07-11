@extends('dasboard.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ display('DataTable') }} {{ display('Section') }} {{ display('Repot') }}</h3>
                </div>

                <div class="card-header">
                    <a href="" class="btn btn-info waves-effect waves-light m-b-5" data-toggle="modal"
                        data-target="#modal-default">
                        <span>{{ display('Add') }} {{ display('Section') }} {{ display('Repot') }}</span>
                        <i class="fa fa-edit"></i>
                    </a>

                    <a href="#" onclick="window.print();return false"
                        class="btn btn-info waves-effect waves-light m-b-5">
                        <span>{{ display('print') }}</span>
                        <i class="fa fa-edit"></i>
                    </a>
                    @include('dasboard.pages.SectioneReports.create')
                </div>

                <!-- /.card-header -->
                <div class="card-body">
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
                                @foreach ($section_repots as $key => $section_repot)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $section_repot->name }}</td>
                                        <td>
                                            {{-- {{ $section_repot->status }} --}}
                                            <button type="button"
                                                class="btn btn-block bg-gradient-{{ $section_repot->status == '1' ? 'success' : 'danger' }} success btn-sm">{{ $section_repot->status == '1' ? display('Activity') : display('Non-Activity') }}</button>
                                        </td>

                                        <td>
                                            <a href="{{ route('dashboard.sections_repots.edit', $section_repot->id) }}"
                                                class="btn btn-icon waves-effect waves-light btn-warning m-b-5">
                                                <i class="fa fa-wrench"></i>
                                            </a>
                                            {{-- ----------------------------   ---  --------------------------- --}}
                                            <a href="{{ route('dashboard.sections_repots.destroy', $section_repot->id) }}"
                                                class="btn btn-danger" data-confirm-delete="true"><ion-icon
                                                    name="trash-outline"></ion-icon></a>

                                            {{-- ----------------------------   ---  --------------------------- --}}
                                            {{-- <form action="{{ route('dashboard.sections_repots.destroy', $section_repot->id) }}"
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
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection
