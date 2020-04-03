<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ElectricityBill;
use Illuminate\Support\Facades\DB;

class EbillController extends Controller
{
    public function details(Request $request){

        $acc_name = $request->input('Account_name');
        $address = $request->input('Service_Address');
        $date = $request->input('Bill_Date');
        $due_amount = $request->input('Past_Due_Amount');
        $charge = $request->input('Current_Charge');
        $total = $request->input('Total_Amount');
        $due_Date = $request->input('Due_Date');

        DB::insert('insert into water_bills(Account_name,Service_address,Bill_Date,Past_Due_Amount,Current_Charge,Total_Amount,Due_Date)
    values (?,?,?,?,?,?,?)',[$acc_name,$address,$date,$due_amount,$charge,$total,$due_Date] );


        return redirect()->back();
    }
}
