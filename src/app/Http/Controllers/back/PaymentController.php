<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaymentRequest;
use Illuminate\Http\Request;
use Exception;
use Stripe\Stripe;
use Stripe\Charge;

class PaymentController extends Controller
{
    /**
     * 決済フォーム表示
     */
    public function payment_form()
    {
        return view('payment_form');
    }

    /**
     * 決済実行
     */
    public function payment_store(Request $request)
    {
            Stripe::setApiKey(config('services.stripe.secret'));

            try {
                $charge = Charge::create([
                    'amount' => $request->amount,
                    'currency' => 'jpy', // 円の場合は 'jpy' を使用
                    'source' => $request->stripeToken,
                    'description' => '支払いの説明',
                ]);

                return back()->with('success', '支払いが成功しました！');
            } catch (\Exception $e) {
                return back()->withErrors(['error' => '支払いに失敗しました。']);
            }
    }
}
