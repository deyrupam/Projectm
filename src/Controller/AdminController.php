<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;
   use Cake\Datasource\ConnectionManager;
   use Cake\Auth\DefaultPasswordHasher;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class AdminController extends AppController
{

    public function index(){
        
        $this->viewBuilder()->setLayout('admin');

        $result=$this->loadModel('assign_job');
        $data=$result->find('all', [ // or 'first'
            'conditions' => ['status_job' => 0],
            
        ]);
        $this->set('viewdata',$data);

    //     foreach($data as $row){
    //         echo $row;
    //     }

 
    }
    public function add(){
        if($this->request->is('post')){
           $name = $this->request->getData('name');
           $email = $this->request->getData('email');
           $hashPswdObj = new DefaultPasswordHasher;
           $password = $hashPswdObj->hash($this->request->getData('password'));
           $user_type = $this->request->getData('user_type');
           
    $users_table = TableRegistry::get('users');
           $users = $users_table->newEntity();
           $users->name = $name;
           $users->email = $email;
           $users->password = $password;
           $users->user_type = $user_type;
        
           if($users_table->save($users))
           echo "User is added.";
        }
     }

    
}
