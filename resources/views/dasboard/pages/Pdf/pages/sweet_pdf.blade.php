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
                            {{-- <img class="logo" style="width: 150px;" src="{{ asset('http://midosoft.great-site.net/public/assets/logo/tah.png') }}"> --}}
                            <img class="logo" style="width: 150px;" src="{{ asset('assets/logo/tah.png') }}" alt="Logo" />
                            <b class="cs-primary_color">{{ display('**NO.1**') }}</b>
                        </p>
                        <b class="cs-primary_color">{{ display('Koshari Tahrir') }}</b>
                        <p>
                            {{ display('Al-Saeed Company for Restaurant Management and Operation') }} <br />
                            {{ display('Branch / Miami') }} <br />
                            {{ display('To the financial department') }} <br />
                            @foreach ($settingpdf as $setting)
                                {{ display('month /') }} {{ $setting->month }}  <br />
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
                                        <th class="cs-width_3 cs-primary_color">{{ display('Chef') }}</th>
                                        <th class="cs-width_3 cs-primary_color">
                                            {{ display('Production of boxes') }}</th>
                                        <th class="cs-width_3 cs-primary_color">{{ display('Pure milk') }}
                                        </th>
                                        <th class="cs-width_3 cs-primary_color">
                                            {{ display('Date') }}</th>
                                        <th class="cs-width_1 cs-primary_color">#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sweets as $index => $sweet)
                                        <tr>
                                            <td class="cs-width_3 cs-primary_color">{{ $sweet->a_cook_G }}</td>
                                            <td class="cs-width_3 cs-primary_color">{{ $sweet->boxes_C }}</td>
                                            <td class="cs-width_3 cs-primary_color">
                                                {{ display($sweet->pure_milka_B) }}</td>
                                            <td class="cs-width_3 cs-primary_color">
                                                {{ $sweet->date_A }}</td>
                                            <td class="cs-width_1 cs-primary_color">{{ $index + 1 }}</td>
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
                                            <b style="color: rgb(0, 115, 255)"> {{ display($setting->branch_manager) }} </b>
                                        @endforeach
                                    </td>
                                    <td class="cs-width_5 cs-primary_color cs-bold cs-f16 cs-text_right">
                                        {{ display('Total Sweet') }}:
                                    </td>
                                    <td class="cs-width_2 cs-text_right cs-primary_color cs-bold cs-primary_color cs-f16">
                                        {{ $sweets->count() }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
