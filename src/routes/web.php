<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\MyPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PurchaseController;


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
// routes/web.php
// Route::get('/user_complete', [AuthController::class, 'user_complete']);
//店舗一覧
Route::get('/', [ProductController::class, 'index']);
// 商品詳細ページのルート
// {product} のルートモデルバインディングが ExhibitionProduct クラスに解決されるようにLaravelが自動的に判断します。
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');


// コメント追加のルート（後で実装することを想定）
Route::post('/products/{product}/comments', [CommentController::class, 'store'])->name('products.comments.store')->middleware('auth');

// // 商品一覧表示のルート
// Route::get('/', [ProductController::class, 'index'])->name('index');

// // ルートパスの例、必要に応じて調整
// Route::get('/', function () {
//     return view('welcome');
// });






//店舗詳細画面予約入力
Route::get('/detail/{id}', [ShopController::class, 'detail']);
//店舗検索
Route::post('/shop_search', [ShopController::class, 'shop_search']);
// //ログイン画面
Route::post('/login', [LoginController::class, 'login']);
//一般ユーザ登録画面
Route::post('/register_store', [RegisterController::class, 'register_store']);
//支払い決済　テスト中
Route::get('/payment_form', [PaymentController::class, 'payment_form']);
Route::post('/payment_create', [PaymentController::class, 'payment_store']);


Route::middleware('auth')->group(function () {

    // メール認証済みのユーザー向けルート
    Route::middleware('verified')->group(function () {
        // products/{product_id}/purchase というURL形式で、商品IDを渡す
        Route::get('/products/{product}/purchase', [PurchaseController::class, 'showPurchaseForm'])->name('products.purchase.form');

        // 購入処理を行うPOSTルート
        // POSTリクエストでデータを受け取り、購入処理を行う
        Route::post('/products/{product}/purchase/process', [PurchaseController::class, 'processPurchase'])->name('products.purchase.process');

    });
    //メール認証未完了の場合のルート
    Route::get('/email/verify', function () {
        return view('auth.user_thanks');
    })->name('verification.notice');
    //会員登録時認証メール送信処理
    Route::get(
        '/user_thanks',
        function () {
            return view('auth.user_thanks');
        }
    )->name('registration.success');

    //会員登録時認証メール再送信
    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', '認証メールを再送しました。');
    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');
});
