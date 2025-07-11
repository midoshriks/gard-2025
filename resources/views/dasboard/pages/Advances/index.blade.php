@extends('dasboard.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ display('DataTable Advances') }}</h3>
                    <a href="{{ route('dashboard.advance.create')}}" class="btn btn-info waves-effect waves-light m-b-5">
                        <span>{{ display('Add Advance') }}</span>
                        <i class="fa fa-edit"></i>
                    </a>

                    <a href="{{ route('dashboard.advance.excel') }}" class="btn btn-info waves-effect waves-light m-b-5"
                        target="_blank">
                        <span>{{ display('print excel') }}</span>
                        <i class="fa fa-file-excel"></i>
                    </a>

                    <a href="{{ route('dashboard.advance.pdf') }}" class="btn btn-info waves-effect waves-light m-b-5">
                        <span>{{ display('print pdf') }}</span>
                        <i class="fa fa-file-pdf"></i>
                    </a>
                    @include('dasboard.pages.Advances.create')

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <form action="{{ route('dashboard.delets.advances') }}" method="post">
                            @csrf
                            @method('DELETE')
                            <table id="example1" class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ display('checked') }}</th>
                                        <th>{{ display('name employee') }}</th>
                                        <th>{{ display('amount') }}</th>
                                        <th>{{ display('job') }}</th>
                                        <th>{{ display('Action') }} </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($advances as $key => $advance)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>
                                                <input class="form-check-input ids" name="ids[{{ $advance->id }}]"
                                                    type="checkbox" value="{{ $advance->id }}">
                                            </td>
                                            <td>{{ $advance->name_employee }}</td>
                                            <td>{{ $advance->amount }}</td>
                                            {{-- @dd($advance->jobs) --}}
                                            <td>{{ display($advance->jobs->name) }}</td>
                                            <td>
                                                <a href="{{ route('dashboard.advance.edit', $advance->id) }}"
                                                    class="btn btn-icon waves-effect waves-light btn-warning m-b-5">
                                                    <i class="fa fa-wrench"></i>
                                                </a>
                                                {{-- ----------------------------   ---  --------------------------- --}}
                                                <a href="{{ route('dashboard.advance.destroy', $advance->id) }}"
                                                    class="btn btn-danger" data-confirm-delete="true"><ion-icon
                                                        name="trash-outline"></ion-icon></a>

                                                {{-- ----------------------------   ---  --------------------------- --}}
                                                {{-- <form action="{{ route('dashboard.advance.destroy', $advance->id) }}"
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
                                        <th>{{ display('checked') }}</th>
                                        <th>{{ display('name employee') }}</th>
                                        <th>{{ display('amount') }}</th>
                                        <th>{{ display('job') }}</th>
                                        <th>{{ display('Action') }} </th>
                                    </tr>
                                </tfoot>
                            </table>

                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-danger">{{ display('delete all') }}</button>
                                <input class="btn btn-secondary" type="button" onclick="selects()" value="Select All" />
                                <input class="btn btn-success" type="button" onclick="deSelect()" value="Deselect All" />
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


@include('dasboard.layouts.script_deletes')
