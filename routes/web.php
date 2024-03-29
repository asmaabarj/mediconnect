<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MedicamentController;
use App\Http\Controllers\SpecialityController;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\Auth\RegisteredUserController;


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
})->middleware(RedirectIfAuthenticated::class);



Route::get('/PaHistory', function () {
    return view('PaHistory');
});
Route::get('/notifPatient', function () {
    return view('notifPatient');
});
Route::get('/certificat', function () {
    return view('certificat');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
 Route::get('/admin', function () {
        return view('admin/admin');
    });
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
   
});

Route::post('/apah', [SpecialityController::class, 'createSpeciality']);
Route::post('/delete-specialiste', [SpecialityController::class, 'DeleteSpeciality'])->name('deleteSpecialite');
Route::post('/add-medicament', [MedicamentController::class, 'addMedicament']);
Route::get('/admin', [MedicamentController::class, 'listMedicamentsAndSpecialities']);
Route::post('/delete-medicament', [MedicamentController::class, 'deleteMedicament'])->name('deleteMedicament');
Route::post('/edite-speciality', [MedicamentController::class, 'listMedicamentsAndSpecialities'])->name('editeSpeciality');
Route::post('/edite-Medicament', [MedicamentController::class, 'listMedicamentsAndSpecialities'])->name('editeMedicament');
Route::post('/apahUpdate', [MedicamentController::class, 'UpdateSpecialities']);
Route::post('/medcamentUpdate', [MedicamentController::class, 'UpdateMedicaments']);
Route::post('/favorit', [PatientController::class, 'favorit']);
Route::post('/reservation', [PatientController::class, 'reservation']);

require __DIR__ . '/auth.php';


Route::get('/notifDoctor', function () {
    return VIEW('doctor/notifDoctor');
});
Route::get('/certificates', function () {
    return view('doctor/certificates');
});

Route::get('/doctor', [DoctorController::class, 'listMedicamentsAndSpecialitiesDoctor']);
Route::get('/notifDoctor', [DoctorController::class, 'ReservationsDoc']);
Route::get('/notifPatient', [PatientController::class, 'notification']);
Route::post('/certificat', [DoctorController::class, 'storeCertificate'])->name('storeCertificate');
Route::get('/certificates', [DoctorController::class, 'showCertificates'])->name('certificates');
Route::get('/certificat', [PatientController::class, 'consultation']);
Route::post('/add-comment', [PatientController::class, 'addComment'])->name('add-comment');
Route::get('/doctor-comments/{doctorId}', [PatientController::class, 'doctorComments'])->name('doctor-comments');
Route::post('/rate-doctor', [PatientController::class, 'rateDoctor'])->name('rate-doctor');


// Route::get('', [DoctorController::class, 'DoctorDashboard'])->middleware(RedirectIfAuthenticated::class);
// Route::get('/patient/dashboard', [PatientController::class, 'PatientDashboard'])->middleware(RedirectIfAuthenticated::class);

Route::get('/dashboard', [PatientController::class, 'dashboard'])->name('dashboard');
Route::post('/reserve', [PatientController::class, 'reserve'])->name('reserve');
Route::get('/PaHistory', [PatientController::class, 'favoriteDoctors'])->name('PaHistory');
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::get('/download-certificate/{certificateId}', [PatientController::class, 'downloadCertificate']);

Route::post('/add-medicament', [MedicamentController::class, 'addMedicament'])->name('medicament.add');
Route::post('/update-medicament', [MedicamentController::class, 'updateMedicament'])->name('medicament.update');
Route::post('/delete-medicament', [MedicamentController::class, 'deleteMedicament'])->name('medicament.delete');
