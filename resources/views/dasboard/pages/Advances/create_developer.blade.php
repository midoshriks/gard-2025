@extends('dasboard.layouts.login')

@section('content')
    <div class="container">
        <div>
            <div class="modal-dialog">
                <div class="modal-content">
                    {{-- modal-header --}}
                    <div class="modal-header">
                        <h4 class="modal-title">{{ display('Create Advance') }} </h4>
                        {{-- <img src="{{ asset('public/assets/logo/tahrir2.png') }}" alt="Mido Logo"class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
                        <img src="{{ asset('assets/logo/tahrir2.png') }}" alt="Mido Logo"
                            class="brand-image img-circle elevation-3" style="opacity: .8">
                    </div>

                    <h2 class="mr-4 mt-4">اختيار الوظيفة والموظفين</h2>

                    <form action="{{ route('jobs.employees') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="modal-body">
                            <!-- اختيار الوظيفة -->
                            <label for="job-select">اختر الوظيفة:</label>
                            <select id="job-select" name="job" class="form-control form-control-lg mb-2"
                                onchange="this.form.submit()">
                                <option value="">-- اختر وظيفة --</option>
                                @foreach ($jobs as $job)
                                    {{-- @dd($job->employees) --}}
                                    <option value="{{ $job->id }}"
                                        {{ isset($jobId) && $jobId == $job->id ? 'selected' : '' }}>
                                        {{ display($job->name) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </form>

                    <form action="{{ route('store.advance') }}" method="post">
                        @csrf
                        @method('POST')

                        <div class="modal-body">
                            <!-- اختيار الموظفين -->
                            @if (isset($employees) && count($employees) > 0)
                                <div style="margin-top: 20px;">
                                    <label for="employee-select">اختر موظف:</label>
                                    <input type="text" name="job_id" value="{{ $jobId }}" hidden>
                                    <select id="employee-select" class="form-control form-control-lg mb-2"
                                        name="name_employee">
                                        <option value="">-- اختر موظف --</option>
                                        @foreach ($employees as $employee)
                                            <option value="{{ $employee->name }}">{{ $employee->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            @elseif (isset($jobId))
                                <div style="margin-top: 20px;">
                                    <p>لا يوجد موظفين متاحين لهذه الوظيفة.</p>
                                </div>
                            @endif

                            {{-- <label for="employee-select">أكتب المبلغ :</label> --}}
                            {{-- <input class="form-control form-control-lg mb-2" name="amount" type="number" placeholder="Enter Amount"> --}}
                            <select class="form-control form-control-lg mb-2" name="amount">
                                <option value="">-- أكتب المبلغ --</option>
                                @for ($i = 100; $i <= 6000; $i += 100)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>

                            {{-- <input class="form-control form-control-lg" name="" type="text" placeholder=".input-lg"> --}}
                        </div>

                        {{-- modal-footer --}}
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>

                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </div>
    @endsection
