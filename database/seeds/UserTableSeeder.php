<?php

    use Illuminate\Database\Seeder;
    use TeachMe\Entities\User;

    class UserTableSeeder extends Seeder 
    {
        public function run() 
        {
            $this->createAdmin();
        }
        
        private function createAdmin()
        {
            User::create([
                'first_name'=>'Willy',
                'last_name'=>'Villatoro',
                'email'=>'willy.villatoro@onsec.gob.gt',
                'password'=>bcrypt('Admin')
            ]);
        }
    }

