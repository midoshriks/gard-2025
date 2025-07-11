@extends('dasboard.layouts.login')

@section('content')
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

                {{-- modal-body --}}
                <form action="{{ route('store.advance') }}" method="post">
                    @csrf
                    @method('POST')

                    <div class="modal-body">

                        <label for="exampleInputEmail1">{{ display('Please write your name') }}</label>
                        <input class="form-control form-control-lg mb-2" name="name_employee" type="text"
                            placeholder="{{ display('Please write your name') }}">

                        <label for="exampleInputEmail1">{{ display('Please write the advance amount') }}</label>

                        <input class="form-control form-control-lg mb-2" name="amount" type="number"
                            placeholder="{{ display('Please write the advance amount') }}">

                        <label for="exampleInputEmail1">{{ display('Please select the job type') }}</label>

                        <select name="job_id" class="form-control form-control-lg mb-2" id="">
                            <option>{{ display('chooes') }}</option>
                            @foreach ($jobs as $job)
                                <option value="{{ $job->id }}">{{ display($job->name) }}</option>
                            @endforeach
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
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endsection
