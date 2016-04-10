<?php
 
namespace App\Http\Controllers;
 
use App\Cost;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
 
 
class CostController extends Controller{
 
 
    public function index(){
 
        $query = DB::table('costs');

        if (Input::get('limit')){
            $query->limit(Input::get('limit'));
        }

        if (Input::get('orderby')){

            if (Input::get('order')){
                $query->orderBy(Input::get('orderby'), Input::get('order'));
            }
            else{
                $query->orderBy(Input::get('orderby'), 'DESC');
            }
        }        

        $costs = $query->get();
 
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