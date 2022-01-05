<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\ReviewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->middleware(['auth'])->name('home');
Auth::routes();

Route::middleware(['checkrole:user'])->name('user.')->group(function () {
    Route::get('/submission', [ProposalController::class, 'submission'])->name('submission');
    Route::get('/submission/new', [ProposalController::class, 'submissionForm'])->name('submission.new');
    Route::post('/submission/new', [ProposalController::class, 'submitProposal']);
    Route::get('/result', [ProposalController::class, 'resultForm'])->name('result-form');
    Route::post('/result', [ProposalController::class, 'searchResult']);
    Route::get('/result/{proposal}', [ProposalController::class, 'showResult'])->name('result');
});

Route::middleware(['checkrole:reviewer'])->name('reviewer.')->group(function () {
    Route::get('/review', [ReviewController::class, 'index'])->name('review.index');
    Route::get('/review/history', [ReviewController::class, 'history'])->name('review.history');
    Route::get('/review/{proposal}', [ReviewController::class, 'showQuestion'])->name('review.question');
    Route::post('/review/{proposal}', [ReviewController::class, 'saveAnswer']);
});