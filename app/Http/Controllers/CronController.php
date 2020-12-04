<?php

namespace App\Http\Controllers;


use App\Loa;
use DB;
use Illuminate\Http\Request;

class CronController extends Controller
{
    public function index()
    {
        $date_today = date("Y-m-d h:i:s");

        DB::Table('loas')->where('status','=','pending')->where('created_at','>',$date_today)->update(['status' => 'completed']);

        //$Select_status = "";
    }
}
