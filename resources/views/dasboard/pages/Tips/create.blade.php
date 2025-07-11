<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            {{-- modal-header --}}
            <div class="modal-header">
                <h4 class="modal-title">{{ display('Create' . 'Tip' . 'Day') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {{-- modal-body --}}
            <form action="{{ route('dashboard.tip.store') }}" method="post">
                @csrf
                @method('POST')

                <div class="modal-body">
                    @csrf
                    @method('POST')

                    <div class="form-row mb-2">
                        <div class="col">
                            <label for="date" class="form-label">التاريخ</label>
                            <input type="date" name="date" class="form-control" value="{{ old('date') }}">
                            @error('date')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>الموظف</th>
                                <th>المبلغ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                                <tr>
                                    <td>{{ $employee->name }}</td>
                                    <td>
                                        <input type="number" step="0.01" name="amounts[{{ $employee->id }}]"
                                            class="form-control" placeholder="المبلغ">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{-- <div class="form-row mb-2">
                        <div class="col">
                            <label for="employee_id" class="form-label">الموظف</label>
                            <select name="employee_id" class="form-control form-control-lg" id="employee_id">
                                @foreach ($employees as $employee)
                                    <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                @endforeach
                            </select>
                            @error('employee_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="amount" class="form-label">المبلغ</label>
                            <input type="number" step="0.01" name="amount" class="form-control"
                                value="{{ old('amount') }}">
                            @error('amount')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> --}}

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
