<?php
 
namespace App\Http\Controllers;
 
use App\Usage;
use App\Account;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
 
class UsageController extends Controller{
 
 
    public function index(){
 
        $usages  = Usage::all();
 
        return response()->json($usages);
 
    }
 
    public function getUsage($id){
 
        $usage  = Usage::find($id);
 
        return response()->json($usage);
    }
 
    public function saveUsage(Request $request){
 
        $usage = Usage::create($request->all());

        $account = Account::find($request->input('accounts_id'));

        $account->balance -= $request->input('amount');

        $account->save();        
 
        return response()->json($usage);
 
    }
 
    public function deleteUsage($id){
        $usage  = Usage::find($id);
 
        $usage->delete();
 
        return response()->json('success');
    }
 
    public function updateUsage(Request $request,$id){
        $usage  = Usage::find($id);
 
        $usage->amount = $request->input('amount');
        $usage->time = $request->input('time');
        $usage->costs_id = $request->input('costs_id');
        $usage->accounts_id = $request->input('accounts_id');
 
        $usage->save();
 
        return response()->json($usage);
    }
 
}