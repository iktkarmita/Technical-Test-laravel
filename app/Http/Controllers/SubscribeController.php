<?php

namespace App\Http\Controllers;

use App\Models\subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubscribeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {


        return view('subscribe');
    }
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'email' => ['required', 'min:10', 'email'],
        ]);

        DB::table('subscriptions')->insert($validatedData);
        session()->flash('success', 'subscribe success !!');
        return redirect('subscribe');
    }
}
