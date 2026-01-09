@extends('dasboard.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ display('Table') . display('Tip') }}</h3>
                    {{-- @mido_shriks show errors --}}
                    @include('dasboard.partials._errors')

                    <a href="" class="btn btn-info waves-effect waves-light m-b-5" data-toggle="modal"
                        data-target="#modal-default">
                        <span>{{ display('Add' . ' ' . 'Tip') }}</span>
                        <i class="fa fa-edit"></i>
                    </a>

                    <a href="{{ route('dashboard.sweetProduction.excel') }}"
                        class="btn btn-info waves-effect waves-light m-b-5" target="_blank">
                        <span>{{ display('print excel') }}</span>
                        <i class="fa fa-file-excel"></i>
                    </a>

                    <a href="#" onclick="window.print();return false"
                        class="btn btn-info waves-effect waves-light m-b-5">
                        <span>{{ display('print') }}</span>
                        <i class="fa fa-edit"></i>
                    </a>
                    @include('dasboard.pages.Tips.create')

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>التاريخ</th>
                                    @foreach ($employees as $employee)
                                        <th>{{ $employee->name }}</th>
                                    @endforeach
                                    <th>{{ display('Action') }}</th>
                                    <th>إجمالي اليوم</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $totalsum = 0; @endphp
                                @foreach ($dates as $date)
                                    <tr>
                                        <td>{{ \Carbon\Carbon::parse($date)->format('d-M') }}</td>
                                        @php $totalPerDay = 0; @endphp

                                        @foreach ($employees as $employee)
                                            @php
                                                $amount = data_get($tips, "$date.$employee->id.0.amount", 0);
                                                // dd($amount);
                                                $totalPerDay += $amount;
                                            @endphp
                                            <td>{{ $amount ?: '-' }}</td>
                                        @endforeach

                                        <td>
                                            <a href="{{ route('dashboard.tips.edit', $date) }}"
                                                class="btn btn-sm btn-warning">
                                                تعديل
                                            </a>
                                            <form action="{{ route('dashboard.tips.destroy', $date) }}" method="POST"
                                                style="display:inline-block"
                                                onsubmit="return confirm('هل أنت متأكد من حذف بيانات هذا اليوم؟');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    حذف
                                                </button>
                                            </form>
                                        </td>
                                        <td><strong>{{ $totalPerDay }}</strong></td>
                                        @php
                                            $totalsum += $totalPerDay;
                                            // dd($totalsum);
                                        @endphp
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>إجمالي الموظف</th>
                                    @foreach ($employees as $employee)
                                        @php
                                            $totalPerEmployee = collect($dates)->sum(function ($date) use (
                                                $tips,
                                                $employee,
                                            ) {
                                                return data_get($tips, "$date.$employee->id.0.amount", 0);
                                            });
                                        @endphp
                                        <th><strong>{{ $totalPerEmployee }}</strong></th>
                                    @endforeach

                                    <th>{{ display('Action') }}</th>
                                    <th>{{ $totalsum }}</th>
                                    <th></th>
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

@include('dasboard.layouts.script_deletes')
