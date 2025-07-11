@extends('dasboard.layouts.app')

@section('content')
    <form action="{{ route('dashboard.tips.update', $date) }}" method="post">
        @csrf
        @method('PUT')

        <div class="modal-body">
            <div class="container">
                <h2>تعديل التيبس ليوم {{ \Carbon\Carbon::parse($date)->format('d-M-Y') }}</h2>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                {{-- <form action="{{ route('dashboard.tip.update', $date) }}" method="POST"> --}}
                    {{-- @csrf --}}

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>الموظف</th>
                                <th>المبلغ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employe)
                                <tr>
                                    <td>{{ $employe->name }}</td>
                                    <td>
                                        <input type="number" step="0.01" name="amounts[{{ $employe->id }}]"
                                            class="form-control" value="{{ $tips[$employe->id]->amount ?? '' }}">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <button type="submit" class="btn btn-success">تحديث البيانات</button>
                {{-- </form> --}}
            </div>
        </div>

        {{-- modal-footer --}}
        <div class="modal-footer justify-content-between">
            <a href="{{ route('dashboard.sweetProduction.index') }}"><button type="button" class="btn btn-default"
                    data-dismiss="modal">Close</button></a>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    {{-- </form> --}}
@endsection
