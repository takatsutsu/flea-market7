<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExhibitionProduct; // 商品情報を取得するため
use App\Models\PaymentMethod;     // 支払い方法を取得するため
use App\Models\PurchaseProduct;   // 追加: PurchaseProduct モデル
use Illuminate\Support\Facades\Auth; // 認証済みユーザーの情報を取得するため
use Illuminate\Support\Facades\DB;   // トランザクションのために追加

class PurchaseController extends Controller
{
    // 購入手続きフォームを表示するメソッド
    public function showPurchaseForm(ExhibitionProduct $product)
    {
        // 認証済みユーザーを取得
        $user = Auth::user();

        // 支払い方法をすべて取得
        $paymentMethods = PaymentMethod::all();

        // 購入手続き画面に商品情報、ユーザー情報、支払い方法を渡す
        return view('purchase', compact('product', 'user', 'paymentMethods'));
    }

    // 購入処理を行うメソッド
    public function processPurchase(Request $request, ExhibitionProduct $product)
    {
        // 1. バリデーション
        // フォームから送られてくる payment_method_id が必須であることを確認
        // 配送先情報も必須であれば、ここに追加します
        $request->validate([
            'selected_payment_method_id' => 'required|exists:payment_methods,id', // payment_methods テーブルにIDが存在することを確認
            // 'delivery_postal_code' => 'required|string|max:10', // 配送先情報をフォームで受け取る場合
            // 'delivery_address' => 'required|string|max:255',
            // 'delivery_building_name' => 'nullable|string|max:255',
        ]);

        // 認証済みユーザーの取得
        $user = Auth::user();

        // ここでトランザクションを開始し、購入処理中にエラーが発生した場合にロールバックできるようにします
        DB::beginTransaction();

        try {
            // 2. purchase_products テーブルにデータを保存
            $purchase = new PurchaseProduct();
            $purchase->user_id = $user->id;
            $purchase->exhibition_product_id = $product->id;
            $purchase->payment_method_id = $request->input('selected_payment_method_id');

            // 配送先情報: 現在のユーザー情報から取得
            // もし配送先がユーザー登録情報以外で入力される場合、フォームからの取得に変更が必要です
            $purchase->delivery_postal_code = $user->postal_code;
            $purchase->delivery_address = $user->address;
            $purchase->delivery_building_name = $user->building_name; // userテーブルに building_name がある前提

            $purchase->save();

            // 3. 商品の購入状態を更新 (例: sold_out フラグを立てる、在庫を減らすなど)
            // ここでは商品の出品状態を「売却済み」などに更新することが考えられます。
            // 例: $product->status = 'sold'; $product->save();
            // または、ExhibitionProduct モデルに sold_at カラムを追加し、購入日時を記録するなど

            DB::commit(); // 全ての処理が成功したらコミット

            // 購入完了後のリダイレクト
            // ここでは仮にダミーのルートにリダイレクトしますが、
            // 実際には購入完了画面へのルートを作成してください。
            // 例: return redirect()->route('products.purchase.complete')->with('success', '購入手続きが完了しました！');
            // 一時的にトップページにリダイレクトします
            return redirect('/')->with('success', '商品を購入しました！');
        } catch (\Exception $e) {
            DB::rollBack(); // エラーが発生したらロールバック
            // エラーログの出力など
            \Log::error('Purchase failed: ' . $e->getMessage());

            // エラーメッセージをユーザーに表示して、購入フォームに戻す
            return redirect()->back()->withInput()->withErrors(['purchase_error' => '購入処理中にエラーが発生しました。もう一度お試しください。']);
        }
    }
}
