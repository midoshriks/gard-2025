@extends('dasboard.layouts.app')

@section('content')
    <div class="container">
        <h2>ترتيب الموظفين حسب مجموع التيبس</h2>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>الترتيب</th>
                    <th>الموظف</th>
                    <th>إجمالي التيبس</th>
                </tr>
            </thead>
            <tbody>
                @forelse($employees as $index => $employee)
                    <tr>
                        {{-- <td>{{ $index + 1 }}</td> --}}
                        <td>
                            @if ($index == 0)
                                🥇
                            @elseif($index == 1)
                                🥈
                            @elseif($index == 2)
                                🥉
                            @else
                                {{ $index + 1 }}
                            @endif
                        </td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->total_amount }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">لا توجد بيانات حتى الآن</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
