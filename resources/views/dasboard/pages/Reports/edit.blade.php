@extends('dasboard.layouts.app')

@section('content')
    <form action="{{ route('dashboard.reports.update', $report->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="modal-body">
            <div class="form-row mb-2">

                <div class="col">
                    <input type="date" name="date" class="form-control form-control-lg mb-2"
                        style="width: 100%; display: inline;" onchange="invoicedue(event);" required
                        value="{{ $report->date }}">
                </div>

                <div class="col">
                    <input class="form-control form-control-lg mb-2" name="name" type="text"
                        placeholder="{{ display('Enter name Report') }}" value="{{ $report->name }}">
                </div>
            </div>

            <div class="form-row mb-2">
                <div class="col">
                    <input class="form-control form-control-lg mb-2" name="title" type="text"
                        placeholder="{{ display('Enter name title') }}" value="{{ $report->title }}">
                </div>

                <div class="col">
                    <input class="form-control form-control-lg mb-2" name="branch" type="text"
                        placeholder="{{ display('Enter name branch') }}" value="{{ $report->branch }}">
                </div>
            </div>

            <div class="mb-3">
                <textarea class="textarea" name="body" placeholder="Place some text here" rows="30"
                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                    {!! $report->body !!}
                </textarea>
            </div>
        </div>

        {{-- <input class="form-control form-control-lg" name="" type="text" placeholder=".input-lg"> --}}

        {{-- modal-footer --}}
        <div class="modal-footer justify-content-between">
            <a href="{{ route('dashboard.reports.index') }}"><button type="button" class="btn btn-default"
                    data-dismiss="modal">{{ display('Close') }}</button></a>
            <button type="submit" class="btn btn-primary">{{ display('Save') }}</button>
        </div>
    </form>
@endsection


<script script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
    integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
    integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
</script>
