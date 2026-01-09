{{-- @extends('dasboard.layouts.app') --}}
@extends('dasboard.layouts.login')


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ display('DataTable CashierPost') }}</h3>
                </div>

                <div class="card-header">
                    <a href="{{ route('dashboard.cashierpost.create') }}" class="btn btn-info waves-effect waves-light m-b-5">
                        <span>{{ display('Add CashierPost') }}</span>
                        <i class="fa fa-edit"></i>
                    </a>

                    {{-- <a href="{{ route('dashboard.employees.excel') }}" class="btn btn-info waves-effect waves-light m-b-5">
                        <span>{{ display('excel') }}</span>
                        <i class="fa fa-edit"></i>
                    </a> --}}

                    {{-- <button type="button" class="btn btn-success waves-effect waves-light m-b-5" data-toggle="modal"
                        data-target="#modal-sm">
                        {{ display('imoprt') . display('excel') }}
                    </button> --}}

                    @include('dasboard.partials._errors')
                    {{-- @include('dasboard.pages.Employees.import') --}}


                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive">
                        {{-- <div class="table-responsive-sm"> --}}
                        {{-- <form action="{{ route('dashboard.delets.employees') }}" method="post"> --}}
                        @csrf
                        @method('DELETE')
                        <table id="example1" class="table table-bordered table-striped text-center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ display('name') }}</th>
                                    <th>{{ display('mandate') }}</th>
                                    <th>{{ display('purchases') }}</th>
                                    <th>{{ display('memoirs') }}</th>
                                    <th>{{ display('totalepost') }}</th>
                                    <th>{{ display('net income') }}</th>
                                    <th>{{ display('Action') }} </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cashierposts as $key => $cashierpost)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $cashierpost->name }}</td>

                                        <td>{{ $cashierpost->mandate }}</td>
                                        <td>{{ $cashierpost->purchases }}</td>
                                        <td>{{ $cashierpost->memoirs }}</td>
                                        <td>{{ $cashierpost->totalepost }}</td>
                                        <td>{{ $cashierpost->netIncome() }}</td>

                                        <td>
                                            <a href="{{ route('dashboard.cashierpost.edit', $cashierpost->id) }}"
                                                class="btn btn-icon waves-effect waves-light btn-warning m-b-5">
                                                <i class="fa fa-wrench"></i>
                                            </a>
                                            {{-- ----------------------------   ---  --------------------------- --}}
                                            <a href="{{ route('dashboard.cashierpost.destroy', $cashierpost->id) }}"
                                                class="btn btn-danger" data-confirm-delete="true"><ion-icon
                                                    name="trash-outline"></ion-icon></a>

                                            {{-- ----------------------------   ---  --------------------------- --}}
                                            {{-- <form action="{{ route('dashboard.cashierposts.destroy', $cashierpost->id) }}"
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
                                    <th>{{ display('mandate') }}</th>
                                    <th>{{ display('purchases') }}</th>
                                    <th>{{ display('memoirs') }}</th>
                                    <th>{{ display('totalepost') }}</th>
                                    <th>{{ display('net income') }}</th>
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

{{-- <script type="text/javascript">
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
</script> --}}
