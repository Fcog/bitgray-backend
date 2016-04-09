<?php namespace App;
 
 use Illuminate\Database\Eloquent\Model;
 
 
 class Usage extends Model
 {
     
    protected $fillable = ['time', 'amount', 'accounts_id', 'costs_id'];
     
 }
 