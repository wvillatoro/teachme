<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Model::unguard();
        $this->truncateTables(array(
            'users',
            'password_resets',
            'tickets',
            'ticket_votes',
            'ticket_comments',
        ));
        $this->call('UserTableSeeder');
        $this->call('TicketTableSeeder');
        $this->call('TicketVoteTableSeeder');
        $this->call('TicketCommentTableSeeder');
    }
    private function truncateTables(array $tables)
    {
        $this->checkForeignKeys(false);
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
        $this->checkForeignKeys(true);
    }
    private function checkForeignKeys($check)
    {
        $check = $check ? '1' : '0';
        DB::statement('SET FOREIGN_KEY_CHECKS = '.$check);
    }

}







/*
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;



class DatabaseSeeder extends Seeder {


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
			$this->call('TicketVoteTableSeeder');
			$this->call('TicketCommentTableSeeder');
		
			
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
*/

