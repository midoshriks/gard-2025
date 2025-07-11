@extends('dasboard.layouts.app')

@section('content')
    <form action="{{ route('dashboard.sections_repots.update', $section_repot->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="modal-body">
            <div class="form-row mb-2">
                <div class="col">
                    <input class="form-control form-control-lg mb-2" name="name" type="text"
                        placeholder="{{ display('Enter name Section') }}" value="{{ $section_repot->name }}">
                </div>
                <div class="col">
                    <select name="status" class="form-control form-control-lg" id="">
                        <option>{{ display('chooes') }}</option>
                        <option {{ $section_repot->status == $section_repot->status ? 'selected' : '' }} value="{{ $section_repot->status }}">
                            {{ $section_repot->status == 0 ? display('none-active') : display('active') }}
                        </option>
                        <option value="1">{{ display('active') }}</option>
                        <option value="0">{{ display('non-active') }}</option>
                    </select>
                </div>
            </div>
            {{-- <input class="form-control form-control-lg" name="" type="text" placeholder=".input-lg"> --}}
        </div>

        {{-- modal-footer --}}
        <div class="modal-footer justify-content-between">
            <a href="{{ route('dashboard.sections_repots.index') }}"><button type="button" class="btn btn-default"
                    data-dismiss="modal">{{ display('Close') }}</button></a>
            <button type="submit" class="btn btn-primary">{{ display('Save') }}</button>
        </div>
    </form>
@endsection
