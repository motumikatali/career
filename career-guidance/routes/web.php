use App\Http\Controllers\AdminController;

Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/admin/institution', [AdminController::class, 'addInstitution'])->name('admin.addInstitution');
    Route::delete('/admin/institution/{id}', [AdminController::class, 'deleteInstitution'])->name('admin.deleteInstitution');
});
