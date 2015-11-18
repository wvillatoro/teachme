<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->truncateTables(array(
			'users',
			'tickets',
			'ticket_votes',
			'ticket_comments',
			'password_resets'
			));
			$this->call('UserTableSeeder');
			$this->call('TicketTableSeeder');
	}
	
		private function truncateTables(array $tables) 
	{
	
		$this->checkForeingKeys(false);
		
		foreach ($tables as $table) 
		{
			DB::table($table)->truncate(false);
		}
		
		$this->checkForeingKeys(true);
	}
	
	

	private function checkForeingKeys($check) 
	{
			
		$check = $check ? '1' : '0';
			
		DB::statement("SET FOREIGN_KEY_CHECKS = $check;");
			
	}
}


