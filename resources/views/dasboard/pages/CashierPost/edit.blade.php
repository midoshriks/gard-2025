{{-- @extends('dasboard.layouts.app') --}}
@extends('dasboard.layouts.login')


@section('content')
    {{-- modal-body --}}
    <form action="{{ route('dashboard.cashierpost.update', $cashierpost->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="modal-body">

            <div class="form-row mb-2">
                <div class="col">
                    <label for="date" class="form-label">أسم الموظف</label>

                    <select name="employe_id" class="form-control form-control-lg" id="">
                        <option>{{ display('chooes') }}</option>
                        @foreach ($data['cashiers'] as $cashier)
                            <option value="{{ $cashier->id }}"
                                {{ $cashierpost->employe_id == $cashier->id ? 'selected' : '' }}>
                                {{ display($cashier->name) }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col">
                    <label for="date" class="form-label">أجمالي التسليم</label>
                    <input class="form-control form-control-lg mb-2" name="totalepost" type="number"
                        value="{{ $cashierpost->totalepost }}" placeholder="{{ display('Enter Totale Post') }}">
                </div>
            </div>

            <div class="form-row mb-2">
                <div class="col">
                    <label for="date" class="form-label">العهدة</label>
                    <input class="form-control form-control-lg mb-2" name="mandate" type="number"
                        value="{{ $cashierpost->mandate }}" placeholder="{{ display('Enter Totale Mandate') }}">
                </div>

                <div class="col">
                    <label for="date" class="form-label">المذكرات</label>
                    <input class="form-control form-control-lg mb-2" name="memoirs" type="number"
                        value="{{ $cashierpost->memoirs }}" placeholder="{{ display('Enter Totale Memoirs') }}">
                </div>
            </div>

            <div class="form-row mb-2">
                <div class="col">
                    <label for="date" class="form-label"> التاريخ اليوم</label>
                    <input type="date" name="date" class="form-control form-control-lg mb-2"
                        value="{{ $cashierpost->date }}">
                    @error('date')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col">
                    <label for="date" class="form-label">المصروفات</label>
                    <input class="form-control form-control-lg mb-2" name="purchases" type="number"
                        value="{{ $cashierpost->purchases }}" placeholder="{{ display('Enter Totale Purchases') }}">
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
