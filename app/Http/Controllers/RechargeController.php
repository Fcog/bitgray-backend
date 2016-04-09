<?php
 
namespace App\Http\Controllers;
 
use App\Recharge;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
 
class RechargeController extends Controller{
 
 
    public function index(){
 
        $recharges  = Recharge::all();
 
        return response()->json($recharges);
 
    }
 
    public function getRecharge($id){
 
        $recharge  = Recharge::find($id);
 
        return response()->json($recharge);
    }
 
    public function saveRecharge(Request $request){
 
        $recharge = Recharge::create($request->all());
 
        return response()->json($recharge);
 
    }
 
    public function deleteRecharge($id){
        $recharge  = Recharge::find($id);
 
        $recharge->delete();
 
        return response()->json('success');
    }
 
    public function updateRecharge(Request $request,$id){
        $recharge  = Recharge::find($id);
        
        $recharge->amount = $request->input('amount');
        $recharge->time = $request->input('time');
        $recharge->costs_id = $request->input('costs_id');
        $recharge->accounts_id = $request->input('accounts_id');
 
        $recharge->save();
 
        return response()->json($recharge);
    }
 
}