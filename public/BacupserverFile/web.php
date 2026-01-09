<?php
// Controllers Office
use App\Models\Advance;

// Controllers Gard
use App\Models\SettingPdf;
use App\Models\SweetProduction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\TipController;



use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\GardsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LanguagesController;
use App\Http\Controllers\Gard\SweetController;
use App\Http\Controllers\SettingPdfController;
use App\Http\Controllers\Socil\GoogleController;
// use App\Http\Controllers\SweetController;
use App\Http\Controllers\Gard\BigWaterController;
// use App\Http\Controllers\AdvanceController;
// use App\Http\Controllers\BigWaterController;
use App\Http\Controllers\Dashboard\RolsController;
use App\Http\Controllers\Gard\PepsiCansController;
// use App\Http\Controllers\PepsiCansController;
use App\Http\Controllers\Socil\FacebookController;
// use App\Http\Controllers\SmallWaterController;
// use App\Http\Controllers\PepsiPlasticController;
use App\Http\Controllers\Gard\SmallWaterController;
use App\Http\Controllers\Office\AdvancesControllers;
use App\Http\Controllers\Dashboard\ReportsController;
// use App\Http\Controllers\SweetProductionController;
use App\Http\Controllers\Gard\PepsiPlasticController;
use App\Http\Controllers\Dashboard\EmployeesController;
use App\Http\Controllers\Gard\SweetProductionController;
use App\Http\Controllers\Dashboard\SectionReportsController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('migrate', function () {
    Artisan::call('migrate');
    // Artisan::call('config:clear');
    dd("run migrate");
});
Route::get('clear', function () {
    Artisan::call('config:clear');
    dd("Cache is cleared");
});
Route::get('migrate:refresh', function () {
    Artisan::call('migrate:refresh');
    dd("run migrate:refresh");
});
Route::get('migrate:refreshseed', function () {
    Artisan::call('migrate:refresh --seed');
    dd("run migrate:refresh --seed");
});

Route::get('/', function () {
    return view('auth.login');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('gard', GardsController::class);


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () { //...

        Route::get('/test', function () {
            // $advances = Advance::all();
            // $settingpdf = SettingPdf::all();
            // return view('dasboard.pages.Advances.advance_pdf', compact('advances','settingpdf'));

            $settingpdf = SettingPdf::all();
            $sweets = SweetProduction::all();
            return view('dasboard.pages.Pdf.pages.sweet_pdf', compact('sweets', 'settingpdf'));
        });
        // Advances Gaust
        Route::get('/get_advance', [AdvancesControllers::class, 'create'])->name('get.advance');
        Route::post('/store_advance', [AdvancesControllers::class, 'store'])->name('store.advance');
        Route::post('/jobs/employees', [AdvancesControllers::class, 'showEmployees'])->name('jobs.employees');

        // Tip leaderboard
        Route::get('/tips/leaderboard', [TipController::class, 'leaderboard'])->name('tip.leaderboard');
    }
);

Auth::routes();

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () { //...


        // Advances Gaust
        Route::get('/get_advance', [AdvancesControllers::class, 'create'])->name('get.advance');
        Route::post('/store_advance', [AdvancesControllers::class, 'store'])->name('store.advance');

        // Auth by Google to users
        // require write in rout http://localhost:8000/login or http://127.0.0.1:8000/login
        Route::get('auth/google', [GoogleController::class, 'google']);
        Route::get('auth/google/callback', [GoogleController::class, 'googlecallback']);

        // Auth by Facebook to users
        // require write in rout http://localhost:8000/login
        Route::get('auth/facebook', [FacebookController::class, 'facebook']);
        Route::get('auth/facebook/callback', [FacebookController::class, 'facebookcallback']);

        // dashboard
        Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {
            // Dashboard
            Route::resource('/index', DashboardController::class);

            // PepsiCans
            Route::resource('/pepsi_cans', PepsiCansController::class);
            // PepsiPlastic
            Route::resource('/pepsiplastic', PepsiPlasticController::class);
            Route::delete('/delets/pepsiplastic', [PepsiPlasticController::class, 'delets'])->name('delets.pepsiplastic');


            // Route::get('edit/pepsi_plastics/{id}', [PepsiPlasticController::class, 'edit'])->name('edit.pepsi');
            // Route::put('update/pepsi_plastics/{id}', [PepsiPlasticController::class, 'update'])->name('update.pepsi');
            // Route::delete('delete/pepsi_plastics/{id}', [PepsiPlasticController::class, 'destroy'])->name('delete.pepsi');

            // SmallWater
            Route::resource('/smallwater', SmallWaterController::class);
            Route::delete('/delets/smallwater', [SmallWaterController::class, 'delets'])->name('delets.smallwater');


            // BigWater
            Route::resource('/bigwater', BigWaterController::class);
            Route::delete('/delets/bigwater', [BigWaterController::class, 'delets'])->name('delets.bigwater');


            // SweetPoding
            Route::resource('/sweetpoding', SweetController::class);
            Route::delete('/delets/sweetpoding', [SweetController::class, 'delets'])->name('delets.sweetpoding');


            // SweetProduction
            Route::resource('/sweetProduction', SweetProductionController::class);
            Route::delete('/delets/sweetProduction', [SweetProductionController::class, 'delets'])->name('delets.sweetProduction');
            Route::get('/export-excel/sweetProduction', [SweetProductionController::class, 'exportexcel'])->name('sweetProduction.excel');

            // Tip
            Route::resource('/tip', TipController::class);
            Route::get('/tips/leaderboard', [TipController::class, 'leaderboard'])->name('tips.leaderboard');
            Route::get('/tips/edit/{date}', [TipController::class, 'edit'])->name('tips.edit');
            Route::put('/tips/update/{date}', [TipController::class, 'update'])->name('tips.update');
            Route::delete('/tips/{date}', [TipController::class, 'destroy'])->name('tips.destroy');
            Route::delete('/delets/tips', [TipController::class, 'delets'])->name('delets.tips');




            // ------------------------ admin ------------------------
            //  Languages
            Route::resource('/lang', LanguagesController::class);

            // Users
            Route::resource('/users', UsersController::class);

            // Jobs
            Route::resource('/jobs', JobsController::class);

            // Advances
            Route::resource('/advance', AdvancesControllers::class);
            Route::delete('/delets/advances', [AdvancesControllers::class, 'delets'])->name('delets.advances');
            Route::resource('/setting_pdf', SettingPdfController::class);
            Route::get('/export-excel/advance', [AdvancesControllers::class, 'exportexcel'])->name('advance.excel');
            Route::get('/export-pdf/advance', [AdvancesControllers::class, 'exportpdf'])->name('advance.pdf');


            // PDF FILES
            Route::get('/export-pdf/sweets', [PdfController::class, 'sweet'])->name('sweet.pdf');

            // Rols
            Route::resource('/rols', RolsController::class);

            // Employees
            Route::resource('/employees', EmployeesController::class);
            Route::get('/export-excel/employees', [EmployeesController::class, 'exportexcel'])->name('employees.excel');
            Route::post('/import-excel/employees', [EmployeesController::class, 'importexcel'])->name('employees.excel.import');
            Route::delete('/delets/employees', [EmployeesController::class, 'delets'])->name('delets.employees');

            //Section Repotes
            Route::resource('/sections_repots', SectionReportsController::class);

            // Repotes
            Route::resource('/reports', ReportsController::class);
        });
    }
);
