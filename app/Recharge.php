<?php namespace App;
 
 use Illuminate\Database\Eloquent\Model;
 
 
 class Recharge extends Model
 {
     
    protected $fillable = ['time', 'amount', 'accounts_id', 'costs_id'];
     
 }
 