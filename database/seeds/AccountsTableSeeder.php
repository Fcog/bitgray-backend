<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AccountsTableSeeder extends Seeder
{
    public function run()
    {

		DB::table('accounts')->insert(
		    array(
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            	'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),   		    	
		        'balance' => 0
		    )
		);

    }
}
?>