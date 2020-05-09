<?php
namespace App\Http\Controllers;
use App\WaterBill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class WbillController extends Controller
{



    public function displayform(){
        return view('WaterBill');
    }
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

     public function viewTable(){
        return view(WbillTable);
     }
     public function index(){
         $Wbill = DB::select('select * from water_bills');
         return view('WbillTable', ['Wbill'=>$Wbill]);
     }

     public function edit_function($ID){
        $Wbill = DB::select('select * from water_bills where ID = ?',[$ID]);
        return view('WbillEdit',['Wbill' => $Wbill]);

     }

     public function update_function(Request $request, $ID){

         $Account_name = $request->input('Account_name');
         $Service_address = $request->input('Service_address');
         $Bill_Period = $request->input('Bill_Period');
         $Bill_Date = $request->input('Bill_Date');
         $Meter_Number = $request->input('Meter_Number');
         $Past_Due_Amount = $request->input('Past_Due_Amount');
         $Current_Charge = $request->input('Current_Charge');
         $Total_Amount = $request->input('Total_Amount');

    DB::update('update water_bills set Account_name=?,Service_address=?,Bill_Period=?,Bill_Date=?,Meter_Number=?,Past_Due_Amount=?,
            Current_Charge=?,Total_Amount=? where ID =? ', [$Account_name,$Service_address,$Bill_Period, $Bill_Date,$Meter_Number,
        $Past_Due_Amount,$Current_Charge,$Total_Amount, $ID]);

         return redirect('WbillTable');
     }

     public function delete_function($ID){

        DB::delete('delete from water_bills where ID = ?', [$ID]);
        return redirect('WbillTable');
     }

//-------------------------------------------------------------------------------------------------------------------------

public function showSecond(){
    return view('SecondPage');
}

    public function showThird(){
        return view('SelectButton');
    }
   // public function viewTable1(){
        //return view('WbillTable');
    //}

    public function show_bill(){
        return view('UtilityBills');
    }
    public function show_report(){
        return view('report');
    }

       public function btn(){
        return view('report');
    }
    public function submit(){
        return view('login');
    }


}
