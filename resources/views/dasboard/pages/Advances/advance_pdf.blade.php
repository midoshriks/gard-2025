@extends('dasboard.layouts.pdf.app')

@section('content')
    <div class="cs-container">
        <div class="cs-invoice cs-style1">
            <div class="cs-invoice_in" id="download_section">

                <div class="cs-invoice_head cs-mb10">

                    {{-- <div class="cs-invoice_left">
                    <b class="cs-primary_color">IVONNE UNIVERSITY</b>
                    <p>
                        237 Roanoke Road, North York, <br />
                        Ontario, Canada <br />
                        demo@email.com <br />
                        +1-613-555-0141
                    </p>
                </div> --}}

                    <div class="cs-invoice_right cs-text_right">
                        <p class="mb-0">
                            <img class="logo" style="width: 150px;" src="{{ asset('assets/logo/tah.png') }}"
                                alt="Logo" />
                            <b class="cs-primary_color">{{ display('**NO.1**') }}</b>
                        </p>
                        <b class="cs-primary_color">{{ display('Koshari Tahrir') }}</b>
                        <p>
                            {{ display('Al-Saeed Company for Restaurant Management and Operation') }} <br />
                            {{ display('Branch / Miami') }} <br />
                            {{ display('To Mr. Human Resources Director') }} <br />
                            @foreach ($settingpdf as $setting)
                                {{ display('Advance month /') }} {{ $setting->month }} <br />
                            @endforeach
                        </p>
                    </div>
                </div>

                <div class="cs-table cs-style2">
                    <div class="cs-round_border">
                        <div class="cs-table_responsive">
                            <table>
                                <thead>
                                    <tr class="cs-focus_bg">
                                        <th class="cs-width_5 cs-semi_bold cs-primary_color">{{ display('amount') }}
                                        </th>
                                        <th class="cs-width_5 cs-semi_bold cs-primary_color">{{ display('job') }}</th>
                                        <th class="cs-width_2 cs-semi_bold cs-primary_color cs-text_right">
                                            {{ display('name employee') }}</th>
                                        <th class="cs-semi_bold cs-primary_color">#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($advances as $index => $advance)
                                        <tr>
                                            <td class="cs-width_5 cs-primary_color">{{ $advance->amount }}</td>
                                            <td class="cs-width_2 cs-primary_color">
                                                {{ display($advance->jobs->name) }}</td>
                                            <td class="cs-width_5 cs-text_right cs-primary_color">
                                                {{ $advance->name_employee }}</td>
                                            <td class="cs-primary_color">{{ $index + 1 }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="cs-table cs-style2">
                    <div class="cs-table_responsive">
                        <table>
                            <tbody>
                                <tr class="cs-table_baseline">
                                    <td class="cs-width_5">
                                        @foreach ($settingpdf as $setting)
                                            <b class="cs-primary_color">{{ display('Branch manager') }}</b><br />
                                            {{ display($setting->branch_manager) }}
                                        @endforeach
                                    </td>
                                    <td class="cs-width_5 cs-primary_color cs-bold cs-f16 cs-text_right">
                                        {{ display('Total Users advance') }}:
                                    </td>
                                    <td class="cs-width_2 cs-text_right cs-primary_color cs-bold cs-primary_color cs-f16">
                                        {{ $advances->count() }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
