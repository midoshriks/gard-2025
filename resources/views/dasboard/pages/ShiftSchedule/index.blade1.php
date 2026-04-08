    @extends('dasboard.layouts.app')

    @section('content')
    <div class="row">
    <div class="col-12">
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">🕐 جدول مواعيد الشفتات</h3>
        </div>

        <div class="card-body">
            @include('dasboard.partials._errors')

            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            {{-- فلتر التاريخ + الوظيفة --}}
            <form method="GET" action="{{ route('dashboard.shift_schedule.index') }}" class="mb-4">
            <div class="row">
                <div class="col-md-4 mb-2">
                <label>التاريخ</label>
                <input type="date" name="date" class="form-control" value="{{ $date }}">
                </div>
                <div class="col-md-4 mb-2">
                <label>الوظيفة</label>
                <select name="job_id" class="form-control" onchange="this.form.submit()">
                    <option value="">-- اختر وظيفة --</option>
                    @foreach($jobs as $job)
                    <option value="{{ $job->id }}" {{ $selectedJobId == $job->id ? 'selected' : '' }}>
                        {{ display($job->name) }}
                    </option>
                    @endforeach
                </select>
                </div>
                <div class="col-md-4 mb-2 d-flex align-items-end">
                <button type="submit" class="btn btn-info w-100">عرض</button>
                </div>
            </div>
            </form>

            {{-- الجدول --}}
            @if($selectedJobId && $employees->count() > 0)

            {{-- الجزء اللي هيتحول لصورة --}}
            <div id="schedule-table" style="background:#fff; padding:15px; border-radius:8px;">
                <h5 style="text-align:center; margin-bottom:10px;">
                📅 جدول الشفتات — {{ $date }} —
                {{ display($jobs->firstWhere('id', $selectedJobId)?->name ?? '') }}
                </h5>
                <table class="table table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                    <th>#</th>
                    <th>الموظف</th>
                    <th>بداية الشفت</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $i => $employee)
                    <tr>
                    <td>{{ $i + 1 }}</td>
                    <td><strong>{{ $employee->name }}</strong></td>
                    <td>
                        {{ isset($schedules[$employee->id]) ? \Carbon\Carbon::parse($schedules[$employee->id]->shift_start)->format('h:i A') : '—' }}
                    </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>

            {{-- فورم تعديل المواعيد --}}
            <form action="{{ route('dashboard.shift_schedule.store') }}" method="POST" class="mt-3">
                @csrf
                <input type="hidden" name="date"   value="{{ $date }}">
                <input type="hidden" name="job_id" value="{{ $selectedJobId }}">

                <table class="table table-bordered text-center">
                <thead class="thead-light">
                    <tr>
                    <th>#</th>
                    <th>الموظف</th>
                    <th>بداية الشفت</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $i => $employee)
                    <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>
                        <input
                        type="time"
                        name="shifts[{{ $employee->id }}]"
                        class="form-control text-center"
                        value="{{ isset($schedules[$employee->id]) ? \Carbon\Carbon::parse($schedules[$employee->id]->shift_start)->format('H:i') : '' }}"
                        >
                    </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>

                <div class="d-flex gap-2 mt-3" style="gap:10px;">
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i> حفظ الجدول
                </button>
                <button type="button" onclick="shareImage()" class="btn btn-success" style="background:#25D366; border-color:#25D366;">
                    <i class="fab fa-whatsapp"></i> إرسال على واتساب
                </button>
                <button type="button" onclick="downloadImage()" class="btn btn-info">
                    <i class="fas fa-download"></i> تحميل صورة
                </button>
                </div>
            </form>

            @elseif($selectedJobId && $employees->count() == 0)
            <div class="alert alert-warning">لا يوجد موظفين لهذه الوظيفة.</div>
            @else
            <div class="alert alert-info">اختر وظيفة عشان تظهر الموظفين.</div>
            @endif

        </div>
        </div>
    </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script>
    function getCanvas(callback) {
        const el = document.getElementById('schedule-table');
        if (!el) return;
        html2canvas(el, {
            scale: 2,
            backgroundColor: '#ffffff',
            useCORS: true
        }).then(callback);
    }

    function downloadImage() {
        getCanvas(function(canvas) {
            const link = document.createElement('a');
            link.download = 'schedule-{{ $date }}.png';
            link.href = canvas.toDataURL('image/png');
            link.click();
        });
    }

    function shareImage() {
        getCanvas(function(canvas) {
            canvas.toBlob(function(blob) {
                const file = new File([blob], 'schedule-{{ $date }}.png', { type: 'image/png' });

                // موبايل — Web Share API
                if (navigator.canShare && navigator.canShare({ files: [file] })) {
                    navigator.share({
                        title: 'جدول الشفتات',
                        files: [file]
                    }).catch(err => console.log(err));
                } else {
                    // كمبيوتر — حمّل الصورة وافتح واتساب ويب
                    const link = document.createElement('a');
                    link.download = 'schedule-{{ $date }}.png';
                    link.href = canvas.toDataURL('image/png');
                    link.click();
                    setTimeout(() => window.open('https://web.whatsapp.com', '_blank'), 800);
                    alert('✅ تم تحميل الصورة\nافتحها وابعتها من واتساب ويب اللي اتفتح');
                }
            }, 'image/png');
        });
    }
    </script>
    @endsection
