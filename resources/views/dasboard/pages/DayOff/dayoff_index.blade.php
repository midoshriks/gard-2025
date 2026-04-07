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
            --card2: #16213e;
            --accent: #e94560;
            --accent2: #0f3460;
            --gold: #f5a623;
            --green: #2ecc71;
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

        /* خلفية متحركة */
        body::before {
            content: '';
            position: fixed;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: radial-gradient(ellipse, rgba(233,69,96,0.15) 0%, transparent 60%);
            animation: pulse-bg 8s ease-in-out infinite;
            pointer-events: none;
        }

        body::after {
            content: '';
            position: fixed;
            bottom: -50%;
            left: -50%;
            width: 100%;
            height: 100%;
            background: radial-gradient(ellipse, rgba(15,52,96,0.3) 0%, transparent 60%);
            animation: pulse-bg 8s ease-in-out infinite reverse;
            pointer-events: none;
        }

        @keyframes pulse-bg {
            0%, 100% { transform: scale(1); opacity: 0.7; }
            50% { transform: scale(1.2); opacity: 1; }
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            position: relative;
            z-index: 1;
        }

        /* هيدر */
        .header {
            text-align: center;
            padding: 50px 20px 30px;
        }

        .logo-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: linear-gradient(135deg, var(--accent), var(--accent2));
            padding: 10px 25px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 20px;
            box-shadow: 0 4px 20px rgba(233,69,96,0.4);
        }

        .header h1 {
            font-size: clamp(28px, 5vw, 48px);
            font-weight: 900;
            line-height: 1.2;
            margin-bottom: 10px;
            background: linear-gradient(135deg, #fff 30%, var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .header p {
            color: var(--muted);
            font-size: 16px;
        }

        /* كروت الأيام */
        .days-title {
            font-size: 18px;
            font-weight: 700;
            color: var(--muted);
            margin-bottom: 20px;
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
            grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
            gap: 15px;
            margin-bottom: 40px;
        }

        .day-card {
            background: var(--card);
            border: 2px solid var(--border);
            border-radius: 20px;
            padding: 20px 15px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
            position: relative;
            overflow: hidden;
            user-select: none;
        }

        .day-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, transparent, rgba(233,69,96,0.1));
            opacity: 0;
            transition: opacity 0.3s;
        }

        .day-card:hover:not(.booked) {
            border-color: var(--accent);
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 15px 40px rgba(233,69,96,0.25);
        }

        .day-card:hover:not(.booked)::before { opacity: 1; }

        .day-card.selected {
            border-color: var(--accent);
            background: linear-gradient(135deg, var(--card), rgba(233,69,96,0.2));
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 20px 50px rgba(233,69,96,0.35);
        }

        .day-card.selected .day-num {
            color: var(--accent);
        }

        .day-card.booked {
            background: rgba(255,255,255,0.02);
            border-color: rgba(255,255,255,0.04);
            cursor: not-allowed;
            opacity: 0.6;
        }

        .day-card.today {
            border-color: var(--gold);
        }

        .day-card.today .day-name {
            color: var(--gold);
        }

        .day-num {
            font-size: 40px;
            font-weight: 900;
            line-height: 1;
            margin-bottom: 5px;
            transition: color 0.3s;
        }

        .day-name {
            font-size: 13px;
            color: var(--muted);
            margin-bottom: 3px;
        }

        .day-month {
            font-size: 12px;
            color: var(--muted);
            opacity: 0.7;
        }

        .booked-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background: rgba(255,255,255,0.1);
            border-radius: 20px;
            padding: 3px 8px;
            font-size: 10px;
            color: var(--muted);
        }

        .selected-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background: var(--accent);
            border-radius: 50%;
            width: 24px;
            height: 24px;
            display: none;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }

        .day-card.selected .selected-badge { display: flex; }

        /* فورم التأكيد */
        .confirm-section {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 24px;
            padding: 35px;
            margin-bottom: 30px;
            display: none;
            animation: slideUp 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .confirm-section.show { display: block; }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .selected-day-display {
            background: linear-gradient(135deg, var(--accent2), rgba(233,69,96,0.2));
            border: 1px solid rgba(233,69,96,0.3);
            border-radius: 16px;
            padding: 20px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .selected-day-icon {
            font-size: 40px;
        }

        .selected-day-info h3 {
            font-size: 20px;
            font-weight: 700;
            color: #fff;
        }

        .selected-day-info p {
            font-size: 13px;
            color: var(--muted);
            margin-top: 3px;
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
            font-size: 18px;
            font-family: 'Cairo', sans-serif;
            color: #fff;
            text-align: center;
            letter-spacing: 5px;
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
            font-size: 14px;
        }

        .submit-btn {
            width: 100%;
            background: linear-gradient(135deg, var(--accent), #c0392b);
            border: none;
            border-radius: 14px;
            padding: 18px;
            font-size: 18px;
            font-family: 'Cairo', sans-serif;
            font-weight: 700;
            color: #fff;
            cursor: pointer;
            margin-top: 20px;
            transition: all 0.3s;
            box-shadow: 0 8px 25px rgba(233,69,96,0.4);
            position: relative;
            overflow: hidden;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 35px rgba(233,69,96,0.5);
        }

        .submit-btn:active { transform: translateY(0); }

        .submit-btn::after {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(255,255,255,0.1);
            opacity: 0;
            transition: opacity 0.2s;
        }

        .submit-btn:hover::after { opacity: 1; }

        /* رسائل السويت ألرت */
        .alert-box {
            border-radius: 14px;
            padding: 15px 20px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 14px;
            font-weight: 600;
        }

        .alert-error {
            background: rgba(233,69,96,0.15);
            border: 1px solid rgba(233,69,96,0.3);
            color: #ff7b8a;
        }

        /* فوتر */
        .footer {
            text-align: center;
            padding: 30px;
            color: var(--muted);
            font-size: 13px;
        }

        /* موبايل */
        @media (max-width: 600px) {
            .days-grid { grid-template-columns: repeat(2, 1fr); gap: 10px; }
            .day-num { font-size: 32px; }
            .confirm-section { padding: 20px; }
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
        <h1>اختار يوم راحتك</h1>
        <p>اختار اليوم المناسب ليك وأكد بـ رقم الموظف بتاعك</p>
    </div>

    {{-- عرض الأخطاء --}}
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert-box alert-error">
                <i class="fas fa-exclamation-circle"></i>
                {{ $error }}
            </div>
        @endforeach
    @endif

    {{-- عنوان الأيام --}}
    <div class="days-title">
        <i class="fas fa-calendar-days" style="color: var(--accent)"></i>
        الأيام المتاحة — 15 يومًا قادمة
    </div>

    {{-- كروت الأيام --}}
    <div class="days-grid" id="daysGrid">
        @foreach ($days as $day)
            <div
                class="day-card {{ $day['is_booked'] ? 'booked' : '' }} {{ $loop->first ? 'today' : '' }}"
                data-date="{{ $day['date_str'] }}"
                data-label="{{ $day['day_name'] }} {{ $day['day_num'] }} {{ $day['month'] }}"
                onclick="{{ $day['is_booked'] ? '' : 'selectDay(this)' }}"
            >
                {{-- شارة محجوز --}}
                @if ($day['is_booked'])
                    <div class="booked-badge">
                        <i class="fas fa-lock"></i>
                        {{ $day['booked_by'] }}
                    </div>
                @else
                    <div class="selected-badge">✓</div>
                @endif

                <div class="day-num">{{ $day['day_num'] }}</div>
                <div class="day-name">{{ $day['day_name'] }}</div>
                <div class="day-month">{{ $day['month'] }}</div>

                @if ($day['is_booked'])
                    <div style="margin-top:10px; font-size:11px; color:var(--muted)">
                        <i class="fas fa-user"></i> محجوز
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
                <p>اليوم المختار لراحتك</p>
            </div>
        </div>

        <form action="{{ route('dayoff.store') }}" method="POST">
            @csrf
            <input type="hidden" name="date" id="selectedDateInput">

            <label class="form-label">
                <i class="fas fa-id-badge" style="color:var(--accent)"></i>
                ادخل رقم الموظف بتاعك للتأكيد
            </label>
            <input
                type="number"
                name="employee_code"
                class="form-input"
                placeholder="مثال: 1234"
                value="{{ old('employee_code') }}"
                required
                autofocus
            >

            <button type="submit" class="submit-btn">
                <i class="fas fa-check-circle"></i>
                تأكيد طلب الراحة
            </button>
        </form>
    </div>

    <div class="footer">
        &copy; {{ date('Y') }} — كشري التحرير | نظام إدارة الراحات
    </div>
</div>

{{-- SweetAlert --}}
@include('vendor.sweetalert.alert')

<script>
    let selectedCard = null;

    function selectDay(card) {
        // شيل الاختيار القديم
        if (selectedCard) {
            selectedCard.classList.remove('selected');
        }

        // لو ضغط على نفس الكارد → الغي
        if (selectedCard === card) {
            selectedCard = null;
            document.getElementById('confirmSection').classList.remove('show');
            return;
        }

        // اختار الجديد
        card.classList.add('selected');
        selectedCard = card;

        const date = card.dataset.date;
        const label = card.dataset.label;

        document.getElementById('selectedDateInput').value = date;
        document.getElementById('selectedDayLabel').textContent = label;
        document.getElementById('confirmSection').classList.add('show');

        // سكرول للفورم
        setTimeout(() => {
            document.getElementById('confirmSection').scrollIntoView({ behavior: 'smooth', block: 'center' });
        }, 100);
    }

    // لو في قيمة قديمة (بعد فشل الفورم)
    const oldDate = "{{ old('date') }}";
    if (oldDate) {
        const cards = document.querySelectorAll('.day-card:not(.booked)');
        cards.forEach(card => {
            if (card.dataset.date === oldDate) {
                selectDay(card);
            }
        });
    }
</script>

</body>
</html>
