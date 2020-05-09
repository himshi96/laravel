<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ElectricityBill;
use Illuminate\Support\Facades\DB;

class EbillController extends Controller
{
    public function displayform(){
        return view('ElectricityBill');
    }

    public function details(Request $request){

        $Account_name = $request->input('Account_name');
        $Service_address = $request->input('Service_address');
        $Bill_Date = $request->input('Bill_Date');
        $Past_Due_Amount = $request->input('Past_Due_Amount');
        $Current_Charge = $request->input('Current_Charge');
        $Total_Amount = $request->input('Total_Amount');
        $Due_Date= $request->input('Due_Date');

        DB::insert('insert into electricity_bills (Account_name,Service_address,Bill_Date,Past_Due_Amount,Current_Charge,Total_Amount,Due_Date)
    values (?,?,?,?,?,?,?)',[$Account_name,$Service_address,$Bill_Date,$Past_Due_Amount,$Current_Charge,$Total_Amount,$Due_Date] );

        return redirect('EbillTable');

    }
public function view(){
    return redirect('EbillTable');
}


    public function index(){
            $Ebill = DB::select('select * from electricity_bills');
            return view('EbillTable', ['Ebill'=>$Ebill]);
        }

    public function edit($ID){
        $Ebill = DB::select('select * from electricity_bills where ID = ?',[$ID]);
        return view('EbillEdit',['Ebill' => $Ebill]);

    }

    public function update(Request $request, $ID){

        $Account_name = $request->input('Account_name');
        $Service_address = $request->input('Service_address');
        $Bill_Date = $request->input('Bill_Date');
        $Past_Due_Amount = $request->input('Past_Due_Amount');
        $Current_Charge = $request->input('Current_Charge');
        $Total_Amount = $request->input('Total_Amount');
        $Due_Date = $request->input('Due_Date');


        DB::update('update electricity_bills set Account_name=?,Service_address=?,Bill_Date=?,Past_Due_Amount=?,Current_Charge=?,
            Total_Amount=?,Due_Date=? where ID =? ', [$Account_name,$Service_address,$Bill_Date, $Past_Due_Amount,$Current_Charge,
            $Total_Amount,$Due_Date, $ID]);

        return redirect('EbillTable');
    }
    public function delete($ID){

        DB::delete('delete from electricity_bills where ID = ?', [$ID]);
        return redirect('EbillTable');
    }


}
