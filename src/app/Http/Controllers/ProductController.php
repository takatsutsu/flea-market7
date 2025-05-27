<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\ContactRequest;
use App\Models\Attendee;
use App\Models\Breaktime;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;
use Carbon\Carbon;
use CreateAttendeesTable;
use App\Http\Controllers\Controller;
use App\Models\ExhibitionProduct;

class ProductController extends Controller
{
    public function index()
    {
        // データベースから全てのデータを取得
        $products = ExhibitionProduct::all();

        // ビューにデータを渡して表示
        return view('index', compact('products'));
    }
}
