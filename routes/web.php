<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MedicamentController;
use App\Http\Controllers\SpecialityController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin/admin');
});

// Route::get('/test', function () {
//     return view('test');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/apah', [SpecialityController::class, 'createSpeciality']);
Route::delete('/deleting/{specialite}', [SpecialityController::class, 'DeleteSpeciality']);
Route::post('/add-medicament', [MedicamentController::class, 'addMedicament']);
Route::get('/admin', [MedicamentController::class, 'listMedicamentsAndSpecialities']);

require __DIR__ . '/auth.php';
