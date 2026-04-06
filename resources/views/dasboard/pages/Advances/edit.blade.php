@extends('dasboard.layouts.app')

@section('content')
    <form action="{{ route('dashboard.advance.update', $advance->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="modal-body">

            <input class="form-control form-control-lg mb-2" name="name_employee" type="text"
                placeholder="Enter employee Name" value="{{ $advance->name_employee }}">

            <input class="form-control form-control-lg mb-2" name="amount" type="number" placeholder="Enter amount Name"
                value="{{ $advance->amount }}">

            <select name="job_id" class="form-control form-control-lg mb-2" id="">
                <option>{{ display('chooes') }}</option>
                @foreach ($jobs as $job)
                    <option {{ $job->id == $advance->job_id ? 'selected' : '' }} value="{{ $job->id }}">
                        {{ display($job->name) }}
                    </option>
                @endforeach
            </select>


            {{-- <input class="form-control form-control-lg" name="" type="text" placeholder=".input-lg"> --}}
        </div>

        {{-- modal-footer --}}
        <div class="modal-footer justify-content-between">
            <a href="{{ route('dashboard.advance.index') }}"><button type="button" class="btn btn-default"
                    data-dismiss="modal">{{ display('Close') }}</button></a>
            <button type="submit" class="btn btn-primary">{{ display('Save') }}</button>
        </div>
    </form>
@endsection
