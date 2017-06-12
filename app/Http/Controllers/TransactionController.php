<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Store a transaction.
     *
     */
    public function storeTransaction()
    {
        return "this function *maybe* saved something in the db"
    }
}
