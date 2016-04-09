<?php
 
namespace App\Http\Controllers;
 
use App\Cost;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
 
class CostController extends Controller{
 
 
    public function index(){
 
        $costs  = Cost::all();
 
        return response()->json($costs);
 
    }
 
    public function getCost($id){
 
        $cost  = Cost::find($id);
 
        return response()->json($cost);
    }
 
    public function saveCost(Request $request){
 
        $cost = Cost::create($request->all());
 
        return response()->json($cost);
 
    }
 
    public function deleteCost($id){
        $cost  = Cost::find($id);
 
        $cost->delete();
 
        return response()->json('success');
    }
 
    public function updateCost(Request $request,$id){
        $cost  = Cost::find($id);
 
        $cost->amount = $request->input('amount');
 
        $cost->save();
 
        return response()->json($cost);
    }
 
}