<?php



use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserListController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TrainingController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\UserTrainingController;
use App\Http\Controllers\DogController;
use App\Http\Controllers\Training_DogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\CompletedTrainingController;

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
    return view('index');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/admin/trainingcreate', function () {
    return view('admin.trainingcreate');
});

Route::get('/dog', function () {
    return view('dog');
});



Route::get('/show', function () {
    return view('usertraining');
});

Route::get('/commendation', function () {
    return view('commendation');
});

//ユーザーリスト削除
Route::delete('/admin/userslist/{user}', [UserListController::class, 'destroy'])->name('admin.users.destroy');
Route::get('/admin/userlist', [UserListController::class, 'index'])->name('admin.userlist');


//ユーザー  
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
//↑ログイン先pic


Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/userlist', [UserListController::class, 'index'])->name('userlist');
    Route::get('/training', [TrainingController::class, 'index'])->name('training');
    //↑ユーザーリスト(編集可能)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__ . '/auth.php';

//管理者
Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->middleware(['auth:admin', 'verified'])->name('dashboard');

    require __DIR__ . '/admin.php';
});



Route::get('/show', [TrainingController::class, 'show'])->name('trainings.show');
Route::get('trainings/{id}/show', [TrainingController::class, 'show'])->name('trainings.show');

//トレーニング
Route::post('/training', [TrainingController::class, 'submit'])->name('form.submit');
Route::get('/createok', function () {
    return view('createok');
});
Route::get('/admin/training', [TrainingController::class, 'index'])->name('admin.training');
//トレーニング内容削除編集
Route::delete('/admin/trainings/{id}', [TrainingController::class, 'destroy'])->name('trainings.destroy');
Route::get('trainings/{id}/edit', [TrainingController::class, 'edit'])->name('trainings.edit');
Route::put('trainings/{id}', [TrainingController::class, 'update'])->name('trainings.update');


// 犬登録追加
// Route::post('/dashboard', [DogController::class, 'submit'])->name('dog.submit');
// // Route::get('/dogcreateok', function () {
// //     return view('.dogcreateok');
// // });
// Route::get('/dashboard', [DogController::class, 'index'])->name('dog.additon');
// // 犬情報削除
// Route::delete('/dogs/{id}', [DogController::class, 'destroy'])->name('dogs.destroy');
// // 犬切り替え
// Route::get('/dogs/{id}/training/usertraining', [DogController::class, 'training'])->name('currentDog');
// Route::post('/dogs/{id}/complete-training', [Training_DogController::class, 'completeTraining'])->name('dogs.completeTraining');
// Route::get('/dogs/{id}/pic', [DogController::class, 'getPic'])->name('dogs.pic');

Route::get('/dashboard', [PostController::class, 'index'])->name('post.index');


//ユーザー側トレーニング
Route::get('/training/{id}', [DogController::class, 'training'])->name('dogtraining');
Route::get('/training/{id}', [TrainingController::class, 'user'])->name('training');

Route::get('/usertraining/{dog_id}', [UserTrainingController::class, 'show'])->name('usertraining.show');

Route::get('/users/{user_id}/dogs/{dog_id}', [DogController::class, 'show'])->name('dogs.show');



Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit', [PostController::class, 'ineditdex'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');


// ユーザートレーニング一覧
Route::get('/trainings', [TrainingController::class, 'index'])->name('trainings.index');
// Route::post('/trainings', [TrainingController::class, 'store'])->name('trainings.store');
// Route::get('/trainings/create', [TrainingController::class, 'create'])->name('trainings.create');
Route::get('/trainings/{training_id}', [TrainingController::class, 'show'])->name('trainings.show');
// Route::get('/trainings/{training}/edit', [TrainingController::class, 'ineditdex'])->name('trainings.edit');
// Route::put('/trainings/{training}', [TrainingController::class, 'update'])->name('trainings.update');
// Route::delete('/trainings/{training}', [TrainingController::class, 'destroy'])->name('trainings.destroy');


// PDF出力
Route::get('/pdf/dl/{customer_id}', [PdfController::class, 'index'])->name('pdf.dl');
Route::get('/pdf/view/{customer_id}', [PdfController::class, 'view'])->name('pdf.view');

//修了レベルで色変える
Route::get('/completed_trainings', [CompletedTrainingController::class, 'index'])->name('completed_trainings.index');