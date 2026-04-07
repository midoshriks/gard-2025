<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('assets/logo/mido-logo.png') }}" alt="Mido Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light"><b>{{ display('Admin') }}</b>{{ display('MIDO') }} </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/user/avatar.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('dashboard.index.index') }}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            {{ display('Dashboard') }}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    {{-- <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>tsts</p>
                            </a>
                        </li>
                    </ul> --}}
                </li>


                <!-- ---------------------GARD--------------------------- -->
                <li class="nav-header">{{ display('GARD') }}</li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-database"></i>
                        <p>
                            {{ display('Gard Mime') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.pepsi_cans.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ display('pepsi cans') }}</p>
                                <i class="fas fa-prescription-bottle"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard.pepsiplastic.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ display('pepsi plastic') }}</p>
                                <i class="fas fa-wine-glass-alt"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard.smallwater.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ display('small water') }}</p>
                                <i class="fas fa-wine-bottle"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard.bigwater.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ display('big water') }}</p>
                                <i class="fas fa-wine-bottle"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard.sweetpoding.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ display('Sweet') }}</p>
                                <i class="fas fa-cookie-bite"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('dashboard.sweetProduction.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ display('Sweet production') }}</p>
                                <i class="fas fa-file-excel"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- ---------------------CashierPosts--------------------------- -->
                <li class="nav-header">{{ display('Cashier Posts') }}</li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-database"></i>
                        <p>
                            {{ display('Cashier Mime') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.cashierpost.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ display('Cashier Posts') }}</p>
                                <i class="fas fa-cash"></i>
                            </a>
                        </li>

                    </ul>
                </li>


                <!-- ---------------------SYSTEM--------------------------- -->
                <li class="nav-header">
                    {{-- <i class="fas fa-user-shield m-2"></i> --}}
                    {{ display('SYSTEM') }}
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <p>
                            {{ display('Advances') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                        <i class="fas fa-money-bill-wave"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('get.advance') }}" class="nav-link" target="_blank"
                                rel="noopener noreferrer">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ display('Create Advances') }}</p>
                                <i class="fas fa-plus"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard.advance.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ display('Advances') }}</p>
                                <i class="fas fa-list-alt"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard.setting_pdf.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ display('setting pdf') }}</p>
                                <i class="fas fa-plus"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <p>
                            {{ display('employees') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                        <i class="fas fa-users"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.employees.index') }}" class="nav-link"
                                rel="noopener noreferrer">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ display('data employees') }}</p>
                                <i class="fas fa-plus"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Tip   --}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <p>
                            {{ display('Tip') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                        <i class="fas fa-users"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.tip.index') }}" class="nav-link" rel="noopener noreferrer">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ display('Tip ' . ' employee') }}</p>
                                <i class="fas fa-plus"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard.tips.leaderboard') }}" class="nav-link" rel="noopener noreferrer">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ display('leaderboard ' . 'Tip ') }}</p>
                                <i class="fas fa-plus"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Day Off --}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <p>
                            {{ display('day ' . 'off') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                        <i class="fas fa-calendar-day"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.dayoff.index') }}" class="nav-link" rel="noopener noreferrer">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ display('day ' . 'off') }}</p>
                                <i class="fas fa-calendar-day"></i>
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- ---------------------@ FOR  Files--------------------------- -->
                <li class="nav-header">{{ display('Files') }}</li>
                @foreach ($section_reports as $section_report)
                    <li class="nav-item has-treeview">
                        @if ($section_report->status == 1)
                            <a href="#" class="nav-link">
                                <i class="fas fa-clipboard-check"></i>
                                <p>
                                    {{ display($section_report->name) }}
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                        @endif
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('dashboard.reports.create') }}" class="nav-link" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ display('Create') }} {{ display('Report') }}</p>
                                    <i class="fas fa-plus"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dashboard.reports.index') }}" class="nav-link"
                                    rel="noopener noreferrer">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ display('all') }} {{ display('Report') }}</p>
                                    <i class="fas fa-plus"></i>
                                </a>
                            </li>
                            @foreach ($reports as $report)
                                <li class="nav-item">
                                    <a href="{{ route('dashboard.reports.show', $report->id) }}" class="nav-link"
                                        target="_blank" rel="noopener noreferrer">
                                        @if ($section_report->id == $report->section_report_id)
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>{{ display($report->name) }}</p>
                                            <i class="far fa-file"></i>
                                        @endif
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
                <!-- ---------------------@ FOR  Files--------------------------- -->


                <li class="nav-header">{{ display('Pdf') }}</li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-user-shield m-2"></i>
                        <p>
                            {{ display('pdf') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                        <i class="far fa-file"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.sweet.pdf') }}" class="nav-link" rel="noopener noreferrer">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ display('pdf sweet') }}</p>
                                <i class="far fa-file-pdf"></i>
                            </a>
                        </li>
                    </ul>
                </li>



                <!-- ---------------------ADMIN--------------------------- -->
                @if (Auth::user()->rol_id == '1')
                    <li class="nav-header">
                        <i class="fas fa-user-shield m-2"></i>
                        {{ display('Admin') }}
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fas fa-user-shield m-2"></i>
                            <p>
                                {{ display('Tools') }}
                                <i class="fas fa-angle-left right"></i>
                            </p>
                            <i class="fas fa-tools"></i>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('dashboard.lang.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ display('translate') }}</p>
                                    <i class="fas fa-language"></i>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('dashboard.users.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ display('users') }}</p>
                                    <i class="fas fa-user"></i>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('dashboard.rols.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ display('rols') }}</p>
                                    <i class="fas fa-scroll"></i>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('dashboard.jobs.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ display('jobs') }}</p>
                                    <i class="fas fa-user-md"></i>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('dashboard.sections_repots.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ display('section') }} {{ display('section') }}</p>
                                    <i class="fas fa-user-md"></i>
                                </a>
                            </li>

                        </ul>
                    </li>
                @endif



                {{-- <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Extras
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/examples/login.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Login</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/register.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Register</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/lockscreen.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lockscreen</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Legacy User Menu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/language-menu.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Language Menu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/404.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Error 404</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/500.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Error 500</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/blank.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blank Page</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="starter.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Starter Page</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
