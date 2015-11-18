<?php

    use TeachMe\Entities\User;
    use Faker\Factory as Faker;
    use Faker\Generator;
    use TeachMe\Entities\Ticket;
    

    class UserTableSeeder extends BaseSeeder 
    {
        
        public function getModel()
        {
            return new User();
        }
        
        public function getDummyData(Generator $faker, array $customValues = array())
        {
            return [
                    'first_name'    => $faker->firstName,
                    'last_name'     => $faker->lastName,
                    'email'         => $faker->email,
                    'password'      => bcrypt('secret')
                ];
        }
        
        public function run() 
        {
            $this->createAdmin();
            $this->createMultiple(50);
        }
        
        private function createAdmin()
        {
            $this->create([
                'first_name'=>'Willy',
                'last_name'=>'Villatoro',
                'email'=>'willy.villatoro@onsec.gob.gt',
                'password'=>bcrypt('Admin')
            ]);
        }
        
    }
    

