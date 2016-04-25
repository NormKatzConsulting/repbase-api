<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class CustomerController extends Controller
{
    //
    $customers = DB::select('select * from customers');
    foreach ($customers as $customer) {
        echo $customer->store_name . ',';
    }

}
