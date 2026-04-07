@extends('dasboard.layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-umbrella-beach mr-2"></i>
                    {{ display('طلبات الراحة') }}
                </h3>

                <a href="{{ route('dayoff.index') }}"
                   class="btn btn-info waves-effect waves-light m-b-5"
                   target="_blank">
                    <i class="fas fa-external-link-alt ml-1"></i>
                    <span>{{ display('رابط الموظفين') }}</span>
                </a>
            </div>

            <div class="card-body">
                <div class="table-responsive-sm">
                    {{--
                        ✅ الإصلاح: مش بنستخدم id="example1" هنا عشان DataTables
                        مش تتعارض مع الـ select onchange
                    --}}
                    <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ display('اسم الموظف') }}</th>
                                <th>{{ display('الوظيفة') }}</th>
                                <th>{{ display('تاريخ الراحة') }}</th>
                                <th>{{ display('الحالة') }}</th>
                                <th>{{ display('تاريخ الطلب') }}</th>
                                <th>{{ display('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($dayoffs as $key => $dayoff)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td><strong>{{ $dayoff->employee->name }}</strong></td>
                                    <td>{{ display($dayoff->employee->job->name ?? '—') }}</td>
                                    <td>
                                        <span class="badge badge-primary p-2">
                                            {{ \Carbon\Carbon::parse($dayoff->date)->locale('ar')->isoFormat('dddd D MMMM YYYY') }}
                                        </span>
                                    </td>
                                    <td>
                                        @if ($dayoff->status === 'pending')
                                            <span class="badge badge-warning p-2">
                                                <i class="fas fa-clock"></i> في الانتظار
                                            </span>
                                        @elseif ($dayoff->status === 'approved')
                                            <span class="badge badge-success p-2">
                                                <i class="fas fa-check"></i> موافق عليه
                                            </span>
                                        @else
                                            <span class="badge badge-danger p-2">
                                                <i class="fas fa-times"></i> مرفوض
                                            </span>
                                        @endif
                                    </td>
                                    <td>{{ $dayoff->created_at->format('d-m-Y') }}</td>
                                    <td>
                                        {{--
                                            ✅ الإصلاح الرئيسي:
                                            - استخدمنا POST عادي (مش PATCH)
                                            - مضفناش @method('PATCH')
                                            - الراوت بقى POST في web.php
                                        --}}
                                        <form
                                            action="{{ route('dashboard.dayoff.status', $dayoff->id) }}"
                                            method="POST"
                                            style="display:inline-block"
                                        >
                                            @csrf
                                            <select
                                                name="status"
                                                class="form-control form-control-sm d-inline-block"
                                                style="width:110px"
                                                onchange="this.form.submit()"
                                            >
                                                <option value="pending"
                                                    {{ $dayoff->status === 'pending' ? 'selected' : '' }}>
                                                    ⏳ انتظار
                                                </option>
                                                <option value="approved"
                                                    {{ $dayoff->status === 'approved' ? 'selected' : '' }}>
                                                    ✅ موافقة
                                                </option>
                                                <option value="rejected"
                                                    {{ $dayoff->status === 'rejected' ? 'selected' : '' }}>
                                                    ❌ رفض
                                                </option>
                                            </select>
                                        </form>

                                        {{-- حذف --}}
                                        <a href="{{ route('dashboard.dayoff.destroy', $dayoff->id) }}"
                                           class="btn btn-sm btn-danger"
                                           data-confirm-delete="true">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center text-muted py-4">
                                        <i class="fas fa-inbox fa-2x mb-2 d-block"></i>
                                        لا يوجد طلبات راحة حتى الآن
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>{{ display('اسم الموظف') }}</th>
                                <th>{{ display('الوظيفة') }}</th>
                                <th>{{ display('تاريخ الراحة') }}</th>
                                <th>{{ display('الحالة') }}</th>
                                <th>{{ display('تاريخ الطلب') }}</th>
                                <th>{{ display('Action') }}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
