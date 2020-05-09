<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Furniture;


class FurnitureController extends Controller


{
    public function index()
    {
        $Furniture = Furniture::all();
        return view('printFurniture')->with('Furniture', $Furniture);;
    }
    public function prnpriview()
    {
        $Furniture = Furniture::all();
        return view('Furniture')->with('Furniture', $Furniture);;
    }
    public function store(Request $request)
    {
        $furniture = new Furniture;

        $this->validate($request, [
            'FurnitureID' => 'required|max:150|min:3',
            'Name' => 'required|max:150|min:3',
            'Quantity' => 'required'

        ]);
        $furniture->FurnitureID = $request->FurnitureID;
        $furniture->Name = $request->Name;
        $furniture->Details = $request->Details;
        $furniture->Quantity = $request->Quantity;

        $furniture->save();
        $FurData = Furniture::all();

        return redirect()->back();


    }


    public function delete($id){
        $furniture = Furniture::find($id);
        $furniture-> delete();

        return redirect()->back();


    }
    public function updateview($id)
    {
        $furniture = Furniture::find($id);

        return view('UpdateFurniture')->with('updata', $furniture);
    }
    public function update(Request $request){
        $id=$request->id;
        $FurnitureID=$request->FurnitureID;
        $Name=$request->Name;
        $Details=$request->Details;
        $Quantity =$request->Quantity;

        $FurData=Furniture::find($id);
        $FurData->FurnitureID=$FurnitureID;
        $FurData->Name=$Name;
        $FurData->Details=$Details;
        $FurData->Quantity=$Quantity;

        $FurData->save();

        $FurDatas=Furniture::all();


        return view('AddFurniture')->with('AddFurniture', $FurDatas);




    }
}
