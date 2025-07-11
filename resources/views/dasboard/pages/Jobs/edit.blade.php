@extends('dasboard.layouts.app')

@section('content')
    <form action="{{ route('dashboard.jobs.update', $job->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="modal-body">

            <input class="form-control form-control-lg mb-2" name="name" type="text" placeholder="Enter job Name"
                value="{{ $job->name }}">


            {{-- <input class="form-control form-control-lg" name="" type="text" placeholder=".input-lg"> --}}
        </div>

        {{-- modal-footer --}}
        <div class="modal-footer justify-content-between">
            <a href="{{ route('dashboard.jobs.index') }}"><button type="button" class="btn btn-default"
                    data-dismiss="modal">{{ display('Close') }}</button></a>
            <button type="submit" class="btn btn-primary">{{ display('Save') }}</button>
        </div>
    </form>
@endsection
