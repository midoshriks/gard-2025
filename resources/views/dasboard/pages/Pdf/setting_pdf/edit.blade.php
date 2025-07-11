@extends('dasboard.layouts.app')

@section('content')
    <form action="{{ route('dashboard.setting_pdf.update', $settingpdf->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="modal-body">
            <input class="form-control form-control-lg mb-2" name="month" type="text"
                placeholder="{{ display('write month') }}" value="{{$settingpdf->month}}">

            <input class="form-control form-control-lg mb-2" name="branch_manager" type="text"
                placeholder="{{ display('write Branch manager') }}" value="{{$settingpdf->branch_manager}}">

            {{-- <input class="form-control form-control-lg" name="" type="text" placeholder=".input-lg"> --}}
        </div>

        {{-- modal-footer --}}
        <div class="modal-footer justify-content-between">
            <a href="{{ route('dashboard.setting_pdf.index') }}"><button type="button" class="btn btn-default"
                    data-dismiss="modal">{{ display('Close') }}</button></a>
            <button type="submit" class="btn btn-primary">{{ display('Save') }}</button>
        </div>
    </form>
@endsection
