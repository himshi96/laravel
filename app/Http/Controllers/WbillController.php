<?php
namespace App\Http\Controllers;
use App\WaterBill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class WbillController extends Controller
{
     public function store(Request $request){


       $acc_name = $request->input('Account_name');
       $add = $request->input('Service_address');
       $bill = $request->input('Bill_Period');
       $bDate = $request->input('Bill_Date');
       $no = $request->input('Meter_Number');
       $amount = $request->input('Past_Due_Amount');
       $charge = $request->input('Current_Charge');
       $total = $request->input('Total_Amount');

       DB::insert('insert into water_bills(Account_name,Service_address,Bill_Period,Bill_Date,Meter_Number,Past_Due_Amount,
            Current_Charge,Total_Amount) values (?,?,?,?,?,?,?,?)',[$acc_name,$add,$bill,$bDate,$no,$amount,$charge,$total] );

        return redirect()->back();

     }
}
