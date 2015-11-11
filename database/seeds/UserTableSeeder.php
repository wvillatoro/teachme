<?php

    use Illuminate\Database\Seeder;
    use TeachMe\Entities\User;
    use Faker\Factory as Faker;
    

    class UserTableSeeder extends Seeder 
    {
        public function run() 
        {
            $this->createAdmin();
            $this->createUsers(50);
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
        
        private function createUsers($total) 
        {
            $faker = Faker::create();
            
            for($i = 1; $i <= $total; $i++ ) 
            {
                User::create([
                    'first_name' => $faker->firstName,
                    'last_name' => $faker->lastName,
                    'email' => $faker->email,
                    'password' => bcrypt('secret')
                ]);
            }
        }
        
    }
    

