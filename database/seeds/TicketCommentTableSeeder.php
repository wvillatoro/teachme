<?php

use TeachMe\Entities\TicketComments;
use Faker\Generator;
    
class TicketCommentTableSeeder extends BaseSeeder
{
    protected $total = 250;
   
    public function getModel()
    {
        return new TicketComments();
        
    }
    
    public function getDummyData(\Faker\Generator $faker, array $customValues = array())
    {
        return 
        [
            'user_id'   =>$this->getRandom('User')->id,
            'ticket_id' =>$this->getRandom('Ticket')->id,
            'comment'   =>$faker->paragraph(),
            'link'      =>$faker->randomElement(['', '', $faker->url])
        ];
        
    }
    
}



?>