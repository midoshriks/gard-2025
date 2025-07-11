<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            {{-- modal-header --}}
            <div class="modal-header">
                <h4 class="modal-title">{{ display('Create Rol') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {{-- modal-body --}}
            <form action="{{ route('dashboard.rols.store') }}" method="post">
                @csrf
                @method('POST')

                <div class="modal-body">

                    <div class="form-row mb-2">
                        <div class="col">
                            <input class="form-control form-control-lg mb-2" name="name" type="text"
                                placeholder="{{ display('Enter name Rol') }}">
                        </div>

                        <div class="col">
                            <select name="status" class="form-control form-control-lg" id="">
                                <option>{{ display('chooes') }}</option>
                                <option value="1">{{ display('active') }}</option>
                                <option value="0">{{ display('non-active') }}</option>
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
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
