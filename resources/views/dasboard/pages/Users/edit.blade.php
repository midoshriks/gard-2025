@extends('dasboard.layouts.app')

@section('content')
    <form action="{{ route('dashboard.users.update', $user->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="modal-body">

            <input class="form-control form-control-lg mb-2" name="name" type="text" placeholder="Enter User Name"
                value="{{ $user->name }}">

            <select name="rol_id" class="form-control form-control-lg mb-2" id="">
                <option>{{ display('chooes') }}</option>
                @foreach ($rols as $rol)
                    <option {{ $user->rol_id == $rol->id ? 'selected' : '' }} value="{{ $rol->id }}">
                        {{ display($rol->name) }}
                    </option>
                @endforeach
                {{-- <option value="0">{{ display('Usrs') }}</option>
                <option value="1">{{ display('Admin') }}</option> --}}
            </select>

            <div class="form-row mb-2">
                <div class="col">
                    <input class="form-control form-control-lg" name="email" type="email" placeholder="Enter Email"
                        value="{{ $user->email }}">
                </div>
                <div class="col">
                    <input class="form-control form-control-lg" name="password" type="password" placeholder="Enter password"
                        value="{{ $user->password }}">
                </div>
            </div>

            <div class="form-row mb-2">
                <div class="col">
                    <input class="form-control form-control-lg" name="phone" type="number" placeholder="Enter Phone"
                        value="{{ $user->phone }}">
                </div>
                <div class="col">
                    <input class="form-control form-control-lg" name="whatsapp" type="number" placeholder="Enter Whatsapp"
                        value="{{ $user->whatsapp }}">
                </div>
            </div>


            <div class="form-row mb-2">
                <div class="col">
                    <input class="form-control form-control-lg" name="code" type="number" placeholder="Enter Code"
                        value="{{ $user->code }}">
                </div>
                <div class="col">
                    <select name="status" class="form-control form-control-lg" id="">
                        <option>{{ display('chooes') }}</option>
                        <option {{ $user->status == $user->status ? 'selected' : '' }} value="{{ $user->status }}">
                            {{ $user->status == 0 ? display('none-active') : display('active') }}
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
            <a href="{{ route('dashboard.users.index') }}"><button type="button" class="btn btn-default"
                    data-dismiss="modal">{{ display('Close') }}</button></a>
            <button type="submit" class="btn btn-primary">{{ display('Save') }}</button>
        </div>
    </form>
@endsection
