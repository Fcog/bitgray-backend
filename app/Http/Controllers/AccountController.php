<?php
 
namespace App\Http\Controllers;
 
use App\Account;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
 
class AccountController extends Controller{
 
 
    public function index(){
 
        $accounts  = Account::all();
 
        return response()->json($accounts);
 
    }
 
    public function getAccount($id){
 
        $account  = Account::find($id);
 
        return response()->json($account);
    }
 
    public function saveAccount(Request $request){
 
        $account = Account::create($request->all());
 
        return response()->json($account);
 
    }
 
    public function deleteAccount($id){
        $account  = Account::find($id);
 
        $account->delete();
 
        return response()->json('success');
    }
 
    public function updateAccount(Request $request,$id){
        $account  = Account::find($id);
 
        $account->balance = $request->input('balance');
 
        $account->save();
 
        return response()->json($account);
    }
 
}