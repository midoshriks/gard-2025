@extends('dasboard.layouts.app')
<style>
    .shift-dropdown {
        max-height: 200px;
        overflow-y: auto;
        font-size: 13px;
    }

    .shift-dropdown button {
        text-align: right;
    }
</style>
@section('content')
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">

            {{-- فلتر --}}
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">جدول مواعيد الشفتات</h3>
                </div>
                <div class="card-body pb-2">
                    @include('dasboard.partials._errors')
                    @if (session('success'))
                        <div class="alert alert-success py-2">{{ session('success') }}</div>
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
                                    @foreach ($jobs as $job)
                                        <option value="{{ $job->id }}"
                                            {{ $selectedJobId == $job->id ? 'selected' : '' }}>
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

                    {{-- <form method="GET" action="{{ route('dashboard.shift_schedule.index') }}">
                        <div class="row">
                            <div class="col-6">
                                <label class="small text-muted mb-1">التاريخ</label>
                                <input type="date" name="date" class="form-control form-control-sm"
                                    value="{{ $date }}">
                            </div>
                            <div class="col-6">
                                <label class="small text-muted mb-1">الوظيفة</label>
                                <select name="job_id" class="form-control form-control-sm" onchange="this.form.submit()">
                                    <option value="">-- اختر --</option>
                                    @foreach ($jobs as $job)
                                        <option value="{{ $job->id }}"
                                            {{ $selectedJobId == $job->id ? 'selected' : '' }}>
                                            {{ display($job->name) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </form> --}}
                </div>
            </div>

            @if ($selectedJobId && $employees->count() > 0)
                {{-- الجزء اللي هيتحول لصورة --}}
                <div id="schedule-snapshot"
                    style="background:#fff;padding:16px;border-radius:8px;margin-bottom:12px;direction:rtl;">
                    <p style="text-align:center;font-weight:700;font-size:15px;margin-bottom:4px;color:#111;">
                        🍽️ {{ display($jobs->firstWhere('id', $selectedJobId)?->name ?? '') }}
                    </p>
                    <p style="text-align:center;font-size:13px;color:#555;margin-bottom:12px;">
                        📅 {{ \Carbon\Carbon::parse($date)->format('d / m / Y') }}
                    </p>
                    <table style="width:100%;border-collapse:collapse;font-size:14px;">
                        <thead>
                            <tr style="background:#f0f0f0;">
                                <th style="padding:8px 10px;border:1px solid #ddd;text-align:right;">#</th>
                                <th style="padding:8px 10px;border:1px solid #ddd;text-align:right;">الموظف</th>
                                <th style="padding:8px 10px;border:1px solid #ddd;text-align:center;">بداية الشفت</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $i => $employee)
                                @php
                                    $val = isset($schedules[$employee->id])
                                        ? $schedules[$employee->id]->shift_start
                                        : null;
                                    // لو القيمة وقت بالصيغة HH:MM:SS أو HH:MM — اعرضها بدون ثواني
                                    $display_val = '—';
                                    if ($val) {
                                        if (preg_match('/^\d{1,2}:\d{2}(:\d{2})?$/', $val)) {
                                            $display_val = \Carbon\Carbon::createFromTimeString($val)->format('g:i A');
                                        } else {
                                            $display_val = $val; // نص حر زي "راحة" أو "إجازة"
                                        }
                                    }
                                @endphp
                                <tr style="{{ $i % 2 == 0 ? '' : 'background:#fafafa;' }}">
                                    <td style="padding:8px 10px;border:1px solid #ddd;color:#888;">{{ $i + 1 }}</td>
                                    <td style="padding:8px 10px;border:1px solid #ddd;font-weight:600;">
                                        {{ $employee->name }}</td>
                                    <td
                                        style="padding:8px 10px;border:1px solid #ddd;text-align:center;
                                            color:{{ $val ? ($display_val == 'راحة' || $display_val == 'إجازة' || $display_val == 'يوم عطلة' ? '#e67e22' : '#27ae60') : '#bbb' }};
                                            font-weight:{{ $val ? '600' : '400' }}">
                                        {{ $display_val }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- فورم الإدخال --}}
                <form action="{{ route('dashboard.shift_schedule.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="date" value="{{ $date }}">
                    <input type="hidden" name="job_id" value="{{ $selectedJobId }}">

                    <div class="row">
                        @foreach ($employees as $employee)
                            <div class="col-6 col-sm-4 mb-3">
                                <div class="card h-100 shadow-none border">
                                    <div class="card-body p-2">
                                        <p class="mb-1 font-weight-bold small text-truncate" title="{{ $employee->name }}">
                                            {{ $employee->name }}
                                        </p>
                                        <div class="position-relative">
                                            <input type="text" name="shifts[{{ $employee->id }}]"
                                                class="form-control form-control-sm smart-input"
                                                placeholder="اختار أو اكتب..."
                                                value="{{ $schedules[$employee->id]->shift_start ?? '' }}"
                                                autocomplete="off">

                                            <div class="dropdown-menu w-100 shadow shift-dropdown"></div>
                                        </div>
                                        {{-- <input
                                            type="text"
                                            name="shifts[{{ $employee->id }}]"
                                            class="form-control form-control-sm"
                                            placeholder="5:00 أو راحة..."
                                            value="{{ isset($schedules[$employee->id]) ? $schedules[$employee->id]->shift_start : '' }}"
                                            autocomplete="off"
                                            list="shift-suggestions"
                                        > --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- الأزرار --}}
                    <div class="row mt-2 mb-4">
                        <div class="col-12 mb-2">
                            <button type="submit" class="btn btn-success btn-block">
                                <i class="fas fa-save ml-1"></i> حفظ الجدول
                            </button>
                        </div>
                        <div class="col-4 px-1">
                            <button type="button" onclick="shareImage()" class="btn btn-block text-white font-weight-bold"
                                style="background:#25D366;border:none;font-size:13px;">
                                <i class="fab fa-whatsapp"></i><br><span style="font-size:11px;">صورة واتساب</span>
                            </button>
                        </div>
                        <div class="col-4 px-1">
                            <button type="button" onclick="shareText()" class="btn btn-block text-white font-weight-bold"
                                style="background:#128C7E;border:none;font-size:13px;">
                                <i class="fas fa-align-left"></i><br><span style="font-size:11px;">نص واتساب</span>
                            </button>
                        </div>
                        <div class="col-4 px-1">
                            <button type="button" onclick="downloadImage()" class="btn btn-info btn-block"
                                style="font-size:13px;">
                                <i class="fas fa-download"></i><br><span style="font-size:11px;">تحميل</span>
                            </button>
                        </div>
                    </div>
                </form>
            @elseif($selectedJobId)
                <div class="alert alert-warning">لا يوجد موظفين لهذه الوظيفة.</div>
            @else
                <div class="alert alert-info mt-2">اختر وظيفة عشان تظهر الموظفين.</div>
            @endif

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script>
        // ---- بيانات الجدول من PHP ----
        var scheduleData = {
            date: "{{ $date }}",
            job: "{{ $selectedJobId ? display($jobs->firstWhere('id', $selectedJobId)?->name ?? '') : '' }}",
            employees: [
                @if ($selectedJobId && $employees->count() > 0)
                    @foreach ($employees as $employee)
                        {
                            name: "{{ $employee->name }}",
                            shift: "{{ isset($schedules[$employee->id]) ? $schedules[$employee->id]->shift_start : '' }}"
                        },
                    @endforeach
                @endif
            ]
        };

        const suggestions = [
            "راحة",
            "غير متوفر",
            "يوم عطلة",
            "6:00 AM",
            "7:00 AM",
            "8:00 AM",
            "9:00 AM",
            "10:00 AM",
            "11:00 AM",
            "12:00 PM",
            "1:00 PM",
            "2:00 PM",
            "3:00 PM",
            "4:00 PM",
            "5:00 PM",
            "6:00 PM",
            "7:00 PM",
            "8:00 PM",
        ];

        // عرض dropdown
        document.querySelectorAll('.smart-input').forEach(input => {

            const dropdown = input.parentElement.querySelector('.shift-dropdown');

            input.addEventListener('focus', () => showDropdown(input, dropdown));
            input.addEventListener('input', () => showDropdown(input, dropdown));

            document.addEventListener('click', function(e) {
                if (!input.parentElement.contains(e.target)) {
                    dropdown.classList.remove('show');
                }
            });
        });

        function showDropdown(input, dropdown) {
            let val = input.value.toLowerCase();

            let filtered = suggestions.filter(item =>
                item.toLowerCase().includes(val)
            );

            dropdown.innerHTML = '';

            filtered.forEach(item => {
                let btn = document.createElement('button');
                btn.type = 'button';
                btn.className = 'dropdown-item';
                btn.textContent = item;

                btn.onclick = () => {
                    input.value = item;
                    dropdown.classList.remove('show');
                };

                dropdown.appendChild(btn);
            });

            dropdown.classList.add('show');
        }

        // تحويل تلقائي للوقت
        document.querySelectorAll('.smart-input').forEach(input => {
            input.addEventListener('blur', function() {
                let val = this.value.trim();

                // لو المستخدم كتب 5:00
                if (/^\d{1,2}:\d{2}$/.test(val)) {
                    let [h, m] = val.split(':');
                    h = parseInt(h);

                    let ampm = h >= 12 ? 'PM' : 'AM';
                    h = h % 12 || 12;

                    this.value = h + ':' + m + ' ' + ampm;
                }
            });
        });

        // ---- html2canvas ----
        function getCanvas(callback) {
            const el = document.getElementById('schedule-snapshot');
            if (!el) return;
            html2canvas(el, {
                scale: 2,
                backgroundColor: '#ffffff',
                useCORS: true
            }).then(callback);
        }

        // ---- تحميل صورة ----
        function downloadImage() {
            getCanvas(function(canvas) {
                const link = document.createElement('a');
                link.download = 'schedule-' + scheduleData.date + '.png';
                link.href = canvas.toDataURL('image/png');
                link.click();
            });
        }

        // ---- مشاركة صورة على واتساب ----
        function shareImage() {
            getCanvas(function(canvas) {
                canvas.toBlob(function(blob) {
                    const file = new File([blob], 'schedule-' + scheduleData.date + '.png', {
                        type: 'image/png'
                    });
                    if (navigator.canShare && navigator.canShare({
                            files: [file]
                        })) {
                        navigator.share({
                                title: 'جدول الشفتات',
                                files: [file]
                            })
                            .catch(err => console.log(err));
                    } else {
                        // كمبيوتر: حمّل وافتح واتساب ويب
                        const link = document.createElement('a');
                        link.download = 'schedule-' + scheduleData.date + '.png';
                        link.href = canvas.toDataURL('image/png');
                        link.click();
                        setTimeout(() => window.open('https://web.whatsapp.com', '_blank'), 800);
                    }
                }, 'image/png');
            });
        }

        // ---- مشاركة نص على واتساب ----
        function shareText() {
            // اقرأ القيم الحالية من الـ inputs (مش المحفوظة بس — اللي في الشاشة دلوقتي)
            var inputs = document.querySelectorAll('input[name^="shifts["]');
            var lines = [];

            inputs.forEach(function(input) {
                var nameAttr = input.getAttribute('name'); // shifts[123]
                var empId = nameAttr.match(/\[(\d+)\]/)[1];
                var val = input.value.trim();
                if (!val) return;

                // جيب اسم الموظف من الكارد
                var card = input.closest('.card-body');
                var empName = card ? card.querySelector('p').textContent.trim() : 'موظف';

                lines.push('• ' + empName + ' — ' + val);
            });

            if (lines.length === 0) {
                alert('مفيش بيانات عشان تبعتها!');
                return;
            }

            var date = scheduleData.date;
            var job = scheduleData.job;

            var msg = '📅 جدول الشفتات\n';
            msg += '🗓️ ' + date + '\n';
            msg += '👔 ' + job + '\n';
            msg += '━━━━━━━━━━━━━\n';
            msg += lines.join('\n');
            msg += '\n━━━━━━━━━━━━━';

            // var url = 'https://wa.me/?text=' + encodeURIComponent(msg);
            // window.open(url, '_blank');
            var url = 'https://wa.me/?text=' + encodeURIComponent(msg);
            window.open(url, '_blank');

            navigator.clipboard.writeText(msg).then(function() {
                alert('✅ تم نسخ الرسالة\nالصقها في واتساب');
            }, function(err) {
                console.error('فشل نسخ النص: ', err);
                alert('❌ فشل نسخ الرسالة\nحاول تاني');
            });
        }
    </script>
@endsection
