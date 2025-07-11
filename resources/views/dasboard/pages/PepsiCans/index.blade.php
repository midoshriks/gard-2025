@extends('dasboard.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ display('DataTable') }} {{ display('PepsiCans') }}</h3>
                </div>

                <div class="card-header">
                    {{-- @mido_shriks show errors --}}
                    @include('dasboard.partials._errors')
                    <a href="" class="btn btn-info waves-effect waves-light m-b-5" data-toggle="modal"
                        data-target="#modal-default">
                        <span>{{ display('Add') }} {{ display('PepsiCans') }}</span>
                        <i class="fa fa-edit"></i>
                    </a>

                    <a href="#" onclick="window.print();return false"
                        class="btn btn-info waves-effect waves-light m-b-5">
                        <span>print</span>
                        <i class="fa fa-edit"></i>
                    </a>
                    @include('dasboard.pages.PepsiCans.create')

                </div>

                <!-- /.card-header -->
                {{-- <div class="card-body"> --}}
                <div class="table-responsive-sm">
                    <table id="example1" class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <th>#</th>
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
                            @foreach ($pepsicans as $key => $pepsican)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $pepsican->date_A }}</td>
                                    <td style="color: rgb(0, 140, 255)"><b>{{ $pepsican->first_term_B }}</b></td>
                                    <td style="color: rgb(114, 190, 26)"><b>{{ $pepsican->come_in_C }}</b></td>
                                    <td>{{ $pepsican->convert_from_D }}</td>
                                    <td>{{ $pepsican->convert_to_E }}</td>
                                    <td>{{ $pepsican->harmony_F }}</td>
                                    <td>{{ $pepsican->sales_G }}</td>
                                    <td><b>{{ $pepsican->residual_H }}</b></td>
                                    <td>{{ $pepsican->last_term_I }}</td>
                                    <td style="color: {{ $pepsican->disability_J >= 0 ? 'rgb(114, 190, 26)' : 'red' }} ">
                                        <b>{{ $pepsican->disability_J }}</b>
                                    </td>
                                    {{-- @if ($pepsican->disability_J >= 0)
                                        <td style="color: rgb(114, 190, 26)"><b>{{ $pepsican->disability_J }}</b></td>
                                    @else
                                        <td style="color: red;"><b>{{ $pepsican->disability_J }}</b></td>
                                    @endif --}}
                                    <td>
                                        <a href="{{ route('dashboard.pepsi_cans.edit', $pepsican->id) }}"
                                            class="btn btn-icon waves-effect waves-light btn-warning m-b-5">
                                            <i class="fa fa-wrench"></i>
                                        </a>
                                        {{-- ----------------------------   ---  --------------------------- --}}
                                        <a href="{{ route('dashboard.pepsi_cans.destroy', $pepsican->id) }}"
                                            class="btn btn-danger" data-confirm-delete="true"><ion-icon
                                                name="trash-outline"></ion-icon></a>
                                        {{-- ----------------------------   ---  --------------------------- --}}

                                        {{-- <form action="{{ route('dashboard.pepsi_cans.destroy', $pepsican->id) }}"
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
                                    {{ display('count')}}  :  {{$count_disability}} </th>
                                    
                                {{-- @if ($count_disability)
                                    <th style="color: red">{{ display('count:' . $count_disability) }}</th>
                                @else
                                    <th style="color: red">{{ display('Disability') }}</th>
                                @endif --}}
                                <th>{{ display('Action') }}</th>
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
