<?php
namespace App\Http\Controllers;

use App\Furniture;
use Illuminate\Http\Request;
use App\Catering;


class CateringController extends Controller


{
    public function indexc()
    {
        $Catering = Catering::all();
        return view('printCatering')->with('Catering', $Catering);;
    }
    public function prnpriviewc()
    {
        $Catering = Catering::all();
        return view('Catering')->with('Catering', $Catering);;
    }
    public function storeCat(Request $request)
    {
        $catering = new Catering;

        $this->validate($request, [
            'CateringID' => 'required|max:150|min:3',
            'ItemName' => 'required|max:150|min:3',
            'ItemQuantity' => 'required'

        ]);

        $catering->CateringID = $request->CateringID;
        $catering->ItemName = $request->ItemName;
        $catering->ItemDetails = $request->ItemDetails;
        $catering->ItemQuantity = $request->ItemQuantity;

        $catering->save();
        $CatData = Catering::all();

        return redirect()->back();


    }


    public function deleteCat($id){
        $catering = Catering::find($id);
        $catering-> delete();

        return redirect()->back();


    }
    public function updateviewCat($id)
    {
        $catering = Catering::find($id);

        return view('UpdateCatering')->with('updata2', $catering);
    }
    public function updateCat(Request $request){
        $id=$request->id;
        $CateringID=$request->CateringID;
        $ItemName=$request->ItemName;
        $ItemDetails=$request->ItemDetails;
        $ItemQuantity =$request->ItemQuantity;

        $CatData=Catering::find($id);
        $CatData->CateringID=$CateringID;
        $CatData->ItemName=$ItemName;
        $CatData->ItemDetails=$ItemDetails;
        $CatData->ItemQuantity=$ItemQuantity;

        $CatData->save();

        $CatDatas=Catering::all();


        return view('AddCatering')->with('AddCatering', $CatDatas);




    }
}
