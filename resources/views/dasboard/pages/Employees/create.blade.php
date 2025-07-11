@extends('dasboard.layouts.app')

@section('content')
    {{-- modal-body --}}
    <form action="{{ route('dashboard.employees.store') }}" method="post">
        @csrf
        @method('POST')

        <div class="modal-body">

            <div class="form-row mb-2">
                <div class="col">
                    <input class="form-control form-control-lg mb-2" name="name" type="text"
                        placeholder="{{ display('Enter name employee') }}">

                    <input class="form-control form-control-lg mb-2" name="code" type="number"
                        placeholder="{{ display('Enter Code') }}">
                </div>

                <div class="col">
                    <select name="job_id" class="form-control form-control-lg" id="">
                        <option>{{ display('chooes') }}</option>
                        @foreach ($data['jobs'] as $job)
                            <option value="{{ $job->id }}">{{ display($job->name) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            {{-- <input class="form-control form-control-lg" name="" type="text" placeholder=".input-lg"> --}}
        </div>

        {{-- modal-footer --}}
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">{{ display('Close') }}</button>
            <button type="submit" class="btn btn-primary">{{ display('Save') }}</button>
        </div>
    </form>
@endsection
