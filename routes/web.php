<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Admin\NewElectionController;
use App\Http\Controllers\Admin\VotersController;
use App\Http\Controllers\Admin\ViewElection;
use App\Http\Controllers\Admin\CandidateController;
use App\Http\Controllers\Voters\ViewCandidateController;
use App\Http\Controllers\Voters\VoteController;
use App\Http\Controllers\Admin\ResultController;
use App\Http\Controllers\Candidate\VoteCandidateController;
use App\Http\Controllers\Voters\ResultElectionController;
use App\Http\Controllers\Candidate\ListElectionController;
use App\Http\Controllers\Admin\PanddingController;
use App\Http\Controllers\Admin\CandidateUserController;

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
    return view('welcome');
});

Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('login', [CustomAuthController::class, 'index'])->name('custom.login');


Route::get('/register', [UserController::class, 'AddUser'])->name('user.register');
Route::post('/store', [UserController::class, 'StoreUser'])->name('user.store');


Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::prefix('users')->group(function () {
});






//Url Admin

Route::get('/new-election', [NewElectionController::class, 'AddElection'])->name('admin.new-election');
Route::post('/store-election', [NewElectionController::class, 'StoreNewElection'])->name('admin.store-election');
Route::get('/delete-election{id}', [ViewElection::class, 'DeleteElection'])->name('admin.delete-election');
Route::get('/edit-election{id}', [ViewElection::class, 'EditElection'])->name('admin.edit-election');
Route::post('/update-election{id}', [ViewElection::class, 'UpdateElection'])->name('admin.update-election');

Route::post('/fetch-dropdown', [NewElectionController::class, 'fetchcandidate'])->name('admin.fetch-dropdown');


Route::get('/info-candidate', [NewElectionController::class, 'AddInfoCandidate'])->name('admin.info-candidate');
Route::post('/store-info-candidate', [NewElectionController::class, 'StoreInfoCandidate'])->name('admin.store-info-candidate');

Route::get('/view-voters', [VotersController::class, 'index'])->name('admin.view-voters');
Route::get('/voters-list', [VotersController::class, 'viewVoters'])->name('admin.voters-list');
Route::get('/delete-voters{id}', [VotersController::class, 'VoterDelete'])->name('admin.delete-voters');

Route::get('/edit-voters{id}', [VotersController::class, 'EditVoters'])->name('admin.edit-voters');
Route::post('/update-voters{id}', [VotersController::class, 'VoterUpdate'])->name('admin.update-voters');

Route::get('/voters-register', [VotersController::class, 'VoterAdd'])->name('admin.voters-register');
Route::post('/voters-store', [VotersController::class, 'VoterStore'])->name('admin.voters-store');

Route::get('/add-candidate', [CandidateController::class, 'AddCandidate'])->name('admin.add-candidate');
Route::post('/candidate-store', [CandidateController::class, 'CandidateStore'])->name('admin.candidate-store');

Route::get('/view-candidates', [CandidateController::class, 'ViewCandidate'])->name('admin.view-candidates');
Route::get('/delete-candidate{id}', [CandidateController::class, 'DeleteCandidate'])->name('admin.delete-candidate');
Route::get('/edit-candidate{id}', [CandidateController::class, 'EditCandidate'])->name('admin.edit-candidate');
Route::post('/update-candidate{id}', [CandidateController::class, 'UpdateCandidate'])->name('admin.update-candidate');

Route::get('/view-candidates-user', [CandidateUserController::class, 'ViewCandidateUser'])->name('admin.view-candidates-user');
Route::get('/delete-user-candidate{id}', [CandidateUserController::class, 'DeleteCandidateUser'])->name('admin.delete-user-candidate');
Route::get('/edit-users-candidate{id}', [CandidateUserController::class, 'EditCandidateUser'])->name('admin.edit-users-candidate');
Route::post('/update-candidate-users{id}', [CandidateUserController::class, 'UpdateCandidateUser'])->name('admin.update-candidate-users');


Route::get('/view-elections', [ViewElection::class, 'ViewElections'])->name('admin.view-elections');

Route::get('/view-result', [ResultController::class, 'ViewResult'])->name('admin.view-result');
Route::get('/view-election-resulttt{id}', [ViewElection::class, 'ViewResultElection'])->name('admin.view-election-resulttt');

Route::get('/pandding-users', [PanddingController::class, 'ViewUsers'])->name('admin.pandding-users');

Route::post('/verify-users{id}', [PanddingController::class, 'Verify'])->name('admin.verify-users');
Route::post('/reject-users{id}', [PanddingController::class, 'Reject    '])->name('admin.reject-users');




// Route::prefix('Voters')->group(function(){
// });

// URL Voters
Route::get('/view-candidate', [ViewCandidateController::class, 'ViewCandidate'])->name('voters.view-candidate');

Route::get('/view-election', [ViewCandidateController::class, 'ViewElection'])->name('voters.view-election');
Route::get('/view-vote-candidate{id}', [ViewCandidateController::class, 'ViewVoteCandidate'])->name('voters.view-vote-candidate');

Route::post('/vote-store', [VoteController::class, 'AddVote'])->name('Voters.vote-store');
Route::post('/vote-store2', [VoteController::class, 'AddVote2'])->name('Voters.vote-store2');

Route::get('/view-election-result{id}', [ResultElectionController::class, 'ViewElectionResult'])->name('voters.view--election-result');





//URL Candidate

Route::get('/total-vote', [VoteCandidateController::class, 'TotalVote'])->name('candidate.total-vote');
Route::get('/view-election-vote', [VoteCandidateController::class, 'ViewVoteElection'])->name('candidate.view-election-vote');
Route::get('/view-candidate-result{id}', [VoteCandidateController::class, 'ViewCandidateElectionResult'])->name('candidate.view-candidate-result');

Route::get('/view-election-list', [ListElectionController::class, 'ViewElectionList'])->name('candidate.view-election-list');
Route::get('/view-election-results{id}', [ListElectionController::class, 'ViewElectionResults'])->name('candidate.view-election-results');
