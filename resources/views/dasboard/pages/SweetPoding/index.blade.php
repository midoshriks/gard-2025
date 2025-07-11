@extends('dasboard.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ display('Table' . ' ' . 'Sweet Poding') }} </h3>
                </div>
                <div class="card-header">
                    {{-- @mido_shriks show errors --}}
                    @include('dasboard.partials._errors')

                    <a href="" class="btn btn-info waves-effect waves-light m-b-5" data-toggle="modal"
                        data-target="#modal-default">
                        <span>{{ display('Add' . ' ' . 'Gard') }} </span>
                        <i class="fa fa-edit"></i>
                    </a>

                    <a href="#" onclick="window.print();return false"
                        class="btn btn-info waves-effect waves-light m-b-5">
                        <span>{{ display('print') }}</span>
                        <i class="fa fa-edit"></i>
                    </a>
                    @include('dasboard.pages.SweetPoding.create')

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <form action="{{ route('dashboard.delets.sweetpoding') }}" method="post">
                            @csrf
                            @method('DELETE')
                            <table id="example1" class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ display('checked') }}</th>
                                        <th>{{ display('Date') }}</th>
                                        <th style="color: rgb(0, 140, 255)">{{ display('First term') }}</th>
                                        <th style="color: rgb(114, 190, 26)">{{ display('Come in') }}</th>
                                        <th>{{ display('Convert From') }}</th>
                                        <th>{{ display('Convert to') }}</th>
                                        <th>{{ display('Harmony') }}</th>
                                        <th>{{ display('Sales') }}</th>
                                        <th>{{ display('Residual') }}</th>
                                        <th>{{ display('last term') }}</th>
                                        <th style="color: red;">{{ display('Disability') }}</th>
                                        <th>{{ display('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sweets as $key => $sweet)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>
                                                <input class="form-check-input ids" name="ids[{{ $sweet->id }}]"
                                                    type="checkbox" value="{{ $sweet->id }}">
                                            </td>
                                            <td>{{ Carbon\Carbon::parse($sweet->date_A)->format('d-M') }}</td>
                                            {{-- <td>{{ $sweet->date_A }}</td> --}}
                                            <td style="color: rgb(0, 140, 255)"><b>{{ $sweet->first_term_B }}</b></td>
                                            <td style="color: rgb(114, 190, 26)"><b>{{ $sweet->come_in_C }}</b></td>
                                            <td>{{ $sweet->convert_from_D }}</td>
                                            <td>{{ $sweet->convert_to_E }}</td>
                                            <td>{{ $sweet->harmony_F }}</td>
                                            <td>{{ $sweet->sales_G }}</td>
                                            <td><b>{{ $sweet->residual_H }}</b></td>
                                            <td>{{ $sweet->last_term_I }}</td>
                                            <td
                                                style="color: {{ $sweet->disability_J >= 0 ? 'rgb(114, 190, 26)' : 'red' }} ">
                                                <b>{{ $sweet->disability_J }}</b>
                                            </td>
                                            {{-- @if ($sweet->disability_J == 0)
                                        <td style="color: rgb(114, 190, 26);"><b>{{ $sweet->disability_J }}</b></td>
                                    @else
                                        <td style="color: red;"><b>{{ $sweet->disability_J }}</b></td>
                                    @endif --}}
                                            <td>
                                                <a href="{{ route('dashboard.sweetpoding.edit', $sweet->id) }}"
                                                    class="btn btn-icon waves-effect waves-light btn-warning m-b-5">
                                                    <i class="fa fa-wrench"></i>
                                                </a>
                                                {{-- ----------------------------   ---  --------------------------- --}}
                                                <a href="{{ route('dashboard.sweetpoding.destroy', $sweet->id) }}"
                                                    class="btn btn-danger" data-confirm-delete="true"><ion-icon
                                                        name="trash-outline"></ion-icon></a>
                                                {{-- ----------------------------   ---  --------------------------- --}}

                                                {{-- <form action="{{ route('dashboard.sweetpoding.destroy', $sweet->id) }}"
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
                                        <th style="color: rgb(0, 140, 255)">{{ display('First term') }}</th>
                                        <th style="color: rgb(114, 190, 26)">{{ display('Come in') }}</th>
                                        <th>{{ display('Convert From') }}</th>
                                        <th>{{ display('Convert to') }}</th>
                                        <th>{{ display('Harmony') }}</th>
                                        <th>{{ display('Sales') }}</th>
                                        <th>{{ display('Residual') }}</th>
                                        <th>{{ display('last term') }}</th>
                                        <!--  <th>Disability</th>  -->
                                        <th style="color: {{ $count_disability >= 0 ? 'rgb(114, 190, 26)' : 'red' }}">
                                            {{ display('count') }} : {{ $count_disability }} </th>

                                        {{-- @if ($count_disability)
                                    <th style="color: red">{{ display('count:' . $count_disability) }}</th>
                                @else
                                    <th style="color: red">{{ display('Disability') }}</th>
                                @endif --}}
                                        <th>{{ display('Action') }}</th>
                                    </tr>
                                </tfoot>
                            </table>

                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-danger">{{ display('delete all') }}</button>
                                <input class="btn btn-secondary" type="button" onclick="selects()" value="Select All" />
                                <input class="btn btn-success" type="button" onclick="deSelect()" value="Deselect All" />
                            </div>

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
