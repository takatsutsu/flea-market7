<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
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

class ProductController extends Controller
{
    public function index()
    {
        // $user = Auth::User();
        $today = date("Y-m-d");
        $today_time = date("Y-m-d H:i:s");

        // $query = Attendee::where('user_id', $user->id)->where('work_date', $today)->latest()->first();

            $btn1 = 'A';


        return view('index', compact('btn1'));
    }
}
