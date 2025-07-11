<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            {{-- modal-header --}}
            <div class="modal-header">
                <h4 class="modal-title">{{ display('Create Job') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {{-- modal-body --}}
            <form action="{{ route('dashboard.jobs.store') }}" method="post">
                @csrf
                @method('POST')

                <div class="modal-body">

                    <input class="form-control form-control-lg mb-2" name="name" type="text"
                        placeholder="Enter Job Name">

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
