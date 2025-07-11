@extends('dasboard.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ display('Table sweet productions') }}</h3>
                    {{-- @mido_shriks show errors --}}
                    @include('dasboard.partials._errors')

                    <a href="" class="btn btn-info waves-effect waves-light m-b-5" data-toggle="modal"
                        data-target="#modal-default">
                        <span>{{ display('Add' . ' ' . 'Gard') }}</span>
                        <i class="fa fa-edit"></i>
                    </a>

                    <a href="{{ route('dashboard.sweetProduction.excel') }}" class="btn btn-info waves-effect waves-light m-b-5"
                        target="_blank">
                        <span>{{ display('print excel') }}</span>
                        <i class="fa fa-file-excel"></i>
                    </a>

                    <a href="#" onclick="window.print();return false"
                        class="btn btn-info waves-effect waves-light m-b-5">
                        <span>{{ display('print') }}</span>
                        <i class="fa fa-edit"></i>
                    </a>
                    @include('dasboard.pages.SweetProduction.create')

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <form action="{{ route('dashboard.delets.sweetProduction') }}" method="post">
                            @csrf
                            @method('DELETE')
                            <table id="example1" class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ display('checked') }}</th>
                                        <th>{{ display('Date') }}</th>
                                        <th>{{ display('Pure milk') }}</th>
                                        <th>{{ display('Production of boxes') }}</th>
                                        {{-- <th>{{ display('Convert from') }}</th>
                                        <th>{{ display('Convert to') }}</th>
                                        <th>{{ display('harmony') }}</th> --}}
                                        <th>{{ display('a cook') }}</th>
                                        <th>{{ display('action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sweet_productions as $key => $sweet_product)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>
                                                <input class="form-check-input ids" name="ids[{{ $sweet_product->id }}]"
                                                    type="checkbox" value="{{ $sweet_product->id }}">
                                            </td>
                                            <td>{{ $sweet_product->date_A }}</td>
                                            <td>{{ $sweet_product->pure_milka_B }}</td>
                                            <td>{{ $sweet_product->boxes_C }}</td>
                                            {{-- <td>{{ $sweet_product->convert_from_D }}</td> --}}
                                            {{-- <td>{{ $sweet_product->convert_to_E }}</td> --}}
                                            {{-- <td>{{ $sweet_product->harmony_F }}</td> --}}
                                            <td>{{ $sweet_product->a_cook_G }}</td>
                                            <td>
                                                <a href="{{ route('dashboard.sweetProduction.edit', $sweet_product->id) }}"
                                                    class="btn btn-icon waves-effect waves-light btn-warning m-b-5">
                                                    <i class="fa fa-wrench"></i>
                                                </a>
                                                {{-- ----------------------------   ---  --------------------------- --}}
                                                <a href="{{ route('dashboard.sweetProduction.destroy', $sweet_product->id) }}"
                                                    class="btn btn-danger" data-confirm-delete="true"><ion-icon
                                                        name="trash-outline"></ion-icon></a>
                                                {{-- ----------------------------   ---  --------------------------- --}}

                                                {{-- <form action="{{ route('dashboard.sweetProduction.destroy', $sweet_product->id) }}"
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
                                        <th>{{ display('Date') }}</th>
                                        @if (!$count_milka)
                                            <th>{{ display('Pure milk') }}</th>
                                        @else
                                            <th style="color: blue">{{ display('Total') . $count_milka }}</th>
                                        @endif

                                        @if (!$count_boxes)
                                            <th>{{ display('Production of boxes') }}</th>
                                        @else
                                            <th style="color: blue"> {{ display('Total') . $count_boxes }}</th>
                                        @endif
                                        {{-- <th>{{ display('Convert from') }}</th>
                                        <th>{{ display('Convert to') }}</th>
                                        <th>{{ display('harmony') }}</th> --}}
                                        <th>{{ display('a cook') }}</th>
                                        <th>{{ display('action') }}</th>
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
