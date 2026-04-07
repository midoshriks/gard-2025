<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>طلب يوم راحة</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --bg: #0f0f1a;
            --card: #1a1a2e;
            --accent: #e94560;
            --gold: #f5a623;
            --green: #2ecc71;
            --blue: #3498db;
            --text: #e0e0e0;
            --muted: #7a7a9a;
            --border: rgba(255,255,255,0.08);
        }

        body {
            font-family: 'Cairo', sans-serif;
            background: var(--bg);
            color: var(--text);
            min-height: 100vh;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: fixed;
            top: -50%; right: -50%;
            width: 100%; height: 100%;
            background: radial-gradient(ellipse, rgba(233,69,96,0.12) 0%, transparent 60%);
            animation: pulse-bg 8s ease-in-out infinite;
            pointer-events: none;
        }

        @keyframes pulse-bg {
            0%, 100% { transform: scale(1); opacity: 0.7; }
            50% { transform: scale(1.2); opacity: 1; }
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
            position: relative;
            z-index: 1;
        }

        /* ========== هيدر ========== */
        .header {
            text-align: center;
            padding: 40px 20px 30px;
        }

        .logo-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: linear-gradient(135deg, var(--accent), #8e0e25);
            padding: 10px 25px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 20px;
            box-shadow: 0 4px 20px rgba(233,69,96,0.4);
        }

        .header h1 {
            font-size: clamp(26px, 5vw, 44px);
            font-weight: 900;
            background: linear-gradient(135deg, #fff 30%, var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 8px;
        }

        .header p { color: var(--muted); font-size: 15px; }

        /* ========== شريط المعلومات ========== */
        .info-bar {
            display: flex;
            gap: 12px;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }

        .info-chip {
            background: rgba(255,255,255,0.05);
            border: 1px solid var(--border);
            border-radius: 50px;
            padding: 8px 18px;
            font-size: 13px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .info-chip .dot {
            width: 8px; height: 8px;
            border-radius: 50%;
        }

        /* ========== كروت الأيام ========== */
        .days-title {
            font-size: 16px;
            font-weight: 700;
            color: var(--muted);
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .days-title::after {
            content: '';
            flex: 1;
            height: 1px;
            background: var(--border);
        }

        .days-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(155px, 1fr));
            gap: 14px;
            margin-bottom: 35px;
        }

        .day-card {
            background: var(--card);
            border: 2px solid var(--border);
            border-radius: 20px;
            padding: 18px 12px 14px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
            position: relative;
            overflow: hidden;
            user-select: none;
        }

        .day-card:hover:not(.full-booked) {
            border-color: var(--accent);
            transform: translateY(-4px) scale(1.02);
            box-shadow: 0 12px 35px rgba(233,69,96,0.2);
        }

        .day-card.selected {
            border-color: var(--accent);
            background: linear-gradient(135deg, var(--card), rgba(233,69,96,0.18));
            transform: translateY(-5px) scale(1.04);
            box-shadow: 0 18px 45px rgba(233,69,96,0.3);
        }

        /* اليوم مكتمل (كل الوظائف وصلت حدها) */
        .day-card.full-booked {
            opacity: 0.5;
            cursor: not-allowed;
            border-color: rgba(255,255,255,0.04);
        }

        .day-card.today { border-color: var(--gold); }
        .day-card.today .day-name { color: var(--gold); }

        .day-num {
            font-size: 38px;
            font-weight: 900;
            line-height: 1;
            margin-bottom: 4px;
            transition: color 0.3s;
        }

        .day-card.selected .day-num { color: var(--accent); }

        .day-name { font-size: 12px; color: var(--muted); margin-bottom: 2px; }
        .day-month { font-size: 11px; color: var(--muted); opacity: 0.7; }

        /* شارة الاختيار */
        .selected-badge {
            position: absolute;
            top: 8px; left: 8px;
            background: var(--accent);
            border-radius: 50%;
            width: 22px; height: 22px;
            display: none;
            align-items: center;
            justify-content: center;
            font-size: 11px;
        }
        .day-card.selected .selected-badge { display: flex; }

        /* حجوزات الكارت */
        .card-bookings {
            margin-top: 10px;
            display: flex;
            flex-direction: column;
            gap: 3px;
        }

        .booking-tag {
            font-size: 10px;
            padding: 2px 7px;
            border-radius: 20px;
            background: rgba(255,255,255,0.07);
            color: var(--muted);
            display: flex;
            align-items: center;
            gap: 4px;
            justify-content: center;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .booking-tag .dot-job {
            width: 6px; height: 6px;
            border-radius: 50%;
            flex-shrink: 0;
        }

        /* ========== فورم التأكيد ========== */
        .confirm-section {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 24px;
            padding: 32px;
            margin-bottom: 30px;
            display: none;
            animation: slideUp 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .confirm-section.show { display: block; }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(25px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .selected-day-display {
            background: linear-gradient(135deg, rgba(15,52,96,0.5), rgba(233,69,96,0.15));
            border: 1px solid rgba(233,69,96,0.25);
            border-radius: 16px;
            padding: 18px;
            margin-bottom: 22px;
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .selected-day-icon { font-size: 36px; }

        .selected-day-info h3 {
            font-size: 18px;
            font-weight: 700;
            color: #fff;
        }

        .selected-day-info p {
            font-size: 12px;
            color: var(--muted);
            margin-top: 2px;
        }

        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: var(--muted);
            margin-bottom: 10px;
        }

        .form-input {
            width: 100%;
            background: rgba(255,255,255,0.05);
            border: 2px solid var(--border);
            border-radius: 14px;
            padding: 16px 20px;
            font-size: 20px;
            font-family: 'Cairo', sans-serif;
            color: #fff;
            text-align: center;
            letter-spacing: 6px;
            transition: border-color 0.3s, box-shadow 0.3s;
            outline: none;
        }

        .form-input:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 4px rgba(233,69,96,0.15);
        }

        .form-input::placeholder {
            letter-spacing: 2px;
            color: var(--muted);
            font-size: 13px;
        }

        .submit-btn {
            width: 100%;
            background: linear-gradient(135deg, var(--accent), #b03030);
            border: none;
            border-radius: 14px;
            padding: 17px;
            font-size: 17px;
            font-family: 'Cairo', sans-serif;
            font-weight: 700;
            color: #fff;
            cursor: pointer;
            margin-top: 18px;
            transition: all 0.3s;
            box-shadow: 0 8px 25px rgba(233,69,96,0.35);
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(233,69,96,0.5);
        }

        /* ========== تنبيه خطأ ========== */
        .alert-box {
            border-radius: 14px;
            padding: 14px 18px;
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 14px;
            font-weight: 600;
            background: rgba(233,69,96,0.12);
            border: 1px solid rgba(233,69,96,0.3);
            color: #ff8095;
        }

        .footer {
            text-align: center;
            padding: 25px;
            color: var(--muted);
            font-size: 12px;
        }

        @media (max-width: 600px) {
            .days-grid { grid-template-columns: repeat(3, 1fr); gap: 8px; }
            .day-num { font-size: 28px; }
            .day-name, .day-month { font-size: 10px; }
            .confirm-section { padding: 18px; }
            .info-bar { gap: 8px; }
        }
    </style>
</head>
<body>

<div class="container">

    {{-- هيدر --}}
    <div class="header">
        <div class="logo-badge">
            <i class="fas fa-umbrella-beach"></i>
            نظام طلبات الراحة
        </div>
        <h1>اختار أيام راحتك</h1>
        <p>تقدر تسجل حتى <strong style="color:var(--accent)">5 أيام راحة</strong> — من كل وظيفة 2 في اليوم الواحد</p>
    </div>

    {{-- شريط معلومات --}}
    <div class="info-bar">
        <div class="info-chip">
            <span class="dot" style="background:var(--green)"></span>
            اليوم متاح
        </div>
        <div class="info-chip">
            <span class="dot" style="background:var(--accent)"></span>
            محجوز جزئياً
        </div>
        <div class="info-chip">
            <span class="dot" style="background:#444"></span>
            مكتمل (وظيفتك ممتلية)
        </div>
        <div class="info-chip">
            <span class="dot" style="background:var(--gold)"></span>
            اليوم
        </div>
    </div>

    {{-- أخطاء --}}
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert-box">
                <i class="fas fa-exclamation-circle"></i>
                {{ $error }}
            </div>
        @endforeach
    @endif

    {{-- عنوان الأيام --}}
    <div class="days-title">
        <i class="fas fa-calendar-days" style="color:var(--accent)"></i>
        الأيام المتاحة — {{ \App\Http\Controllers\DayOffController::DAYS_TO_SHOW }} يوماً قادمة
    </div>

    {{-- كروت الأيام --}}
    <div class="days-grid" id="daysGrid">
        @php
            // ألوان للوظائف — تتعيّن ديناميكياً
            $jobColors = ['#e94560','#3498db','#2ecc71','#f5a623','#9b59b6','#1abc9c','#e67e22','#e74c3c'];
            $jobColorMap = [];
            $colorIdx = 0;
        @endphp

        @foreach ($days as $day)
            @php
                $bookings   = $day['bookings'];
                $jobCounts  = $day['job_counts'];

                // لو في حجوزات → بيّن
                $hasBookings = $bookings->count() > 0;

                // لكل وظيفة — لو كل الوظائف وصلت حدها → full (صعب نعرفه بدون job_id الموظف الحالي)
                // بنحطه كـ "partially booked" بس
            @endphp

            <div
                class="day-card {{ $loop->first ? 'today' : '' }} {{ $hasBookings ? 'partial' : '' }}"
                data-date="{{ $day['date_str'] }}"
                data-label="{{ $day['day_name'] }} {{ $day['day_num'] }} {{ $day['month'] }}"
                onclick="selectDay(this)"
            >
                <div class="selected-badge">✓</div>

                <div class="day-num">{{ $day['day_num'] }}</div>
                <div class="day-name">{{ $day['day_name'] }}</div>
                <div class="day-month">{{ $day['month'] }}</div>

                {{-- عرض الحجوزات --}}
                @if ($hasBookings)
                    <div class="card-bookings">
                        @foreach ($bookings as $booking)
                            @php
                                $jid = $booking->employee->job_id ?? 0;
                                if (!isset($jobColorMap[$jid])) {
                                    $jobColorMap[$jid] = $jobColors[$colorIdx % count($jobColors)];
                                    $colorIdx++;
                                }
                                $color = $jobColorMap[$jid];
                            @endphp
                            <div class="booking-tag">
                                <span class="dot-job" style="background:{{ $color }}"></span>
                                {{ mb_substr($booking->employee->name, 0, 10) }}
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        @endforeach
    </div>

    {{-- فورم التأكيد --}}
    <div class="confirm-section" id="confirmSection">
        <div class="selected-day-display">
            <div class="selected-day-icon">🏖️</div>
            <div class="selected-day-info">
                <h3 id="selectedDayLabel">—</h3>
                <p>اليوم المختار — أكد برقم الموظف</p>
            </div>
        </div>

        <form action="{{ route('dayoff.store') }}" method="POST">
            @csrf
            <input type="hidden" name="date" id="selectedDateInput">

            <label class="form-label">
                <i class="fas fa-id-badge" style="color:var(--accent)"></i>
                ادخل رقم الموظف بتاعك
            </label>
            <input
                type="number"
                name="employee_code"
                class="form-input"
                placeholder="رقم الموظف"
                value="{{ old('employee_code') }}"
                required
            >

            <button type="submit" class="submit-btn">
                <i class="fas fa-check-circle"></i>
                تأكيد طلب الراحة
            </button>
        </form>
    </div>

    <div class="footer">
        &copy; {{ date('Y') }} — كشري التحرير | نظام إدارة الراحات | تم التطوير بواسطة ميدو شركس
    </div>
</div>

@include('vendor.sweetalert.alert')

<script>
    let selectedCard = null;

    function selectDay(card) {
        if (selectedCard === card) {
            card.classList.remove('selected');
            selectedCard = null;
            document.getElementById('confirmSection').classList.remove('show');
            return;
        }

        if (selectedCard) selectedCard.classList.remove('selected');

        card.classList.add('selected');
        selectedCard = card;

        document.getElementById('selectedDateInput').value = card.dataset.date;
        document.getElementById('selectedDayLabel').textContent = card.dataset.label;

        const section = document.getElementById('confirmSection');
        section.classList.add('show');

        setTimeout(() => {
            section.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }, 100);
    }

    // استعادة الاختيار بعد فشل الفورم
    const oldDate = "{{ old('date') }}";
    if (oldDate) {
        document.querySelectorAll('.day-card').forEach(card => {
            if (card.dataset.date === oldDate) selectDay(card);
        });
    }
</script>
</body>
</html>
