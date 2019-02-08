<?php
namespace App\Model\Table;
use Cake\ORM\Table;
class assign extends Table{
   
        public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
        $this->belongsTo('users',[
            'className' => 'id.users'
        ])
        ->setForeignKey('user_id');
            
        
    }   
    
    
            
   


}