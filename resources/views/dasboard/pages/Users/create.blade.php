<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            {{-- modal-header --}}
            <div class="modal-header">
                <h4 class="modal-title">{{ display('Create Users') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {{-- modal-body --}}
            <form action="{{ route('dashboard.users.store') }}" method="post">
                @csrf
                @method('POST')

                <div class="modal-body">

                    <input class="form-control form-control-lg mb-2" name="name" type="text"
                        placeholder="Enter User Name">

                    <select name="rol_id" class="form-control form-control-lg mb-2" id="">
                        <option>{{ display('chooes') }}</option>
                        @foreach ($rols as $rol)
                            <option value="{{ $rol->id }}">{{ display($rol->name) }}</option>
                        @endforeach
                        {{-- <option value="0">{{ display('Usrs') }}</option>
                        <option value="1">{{ display('Admin') }}</option> --}}
                    </select>

                    <div class="form-row mb-2">
                        <div class="col">
                            <input class="form-control form-control-lg" name="email" type="email"
                                placeholder="Enter Email">
                        </div>
                        <div class="col">
                            <input class="form-control form-control-lg" name="password" type="password"
                                placeholder="Enter password">
                        </div>
                    </div>

                    <div class="form-row mb-2">
                        <div class="col">
                            <input class="form-control form-control-lg" name="phone" type="number"
                                placeholder="Enter Phone">
                        </div>
                        <div class="col">
                            <input class="form-control form-control-lg" name="whatsapp" type="number"
                                placeholder="Enter Whatsapp">
                        </div>
                    </div>


                    <div class="form-row mb-2">
                        <div class="col">
                            <input class="form-control form-control-lg" name="code" type="number"
                                placeholder="Enter Code">
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
