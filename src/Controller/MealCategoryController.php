<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * MealCategory Controller
 *
 * @property \App\Model\Table\MealCategoryTable $MealCategory
 */
class MealCategoryController extends AppController
{
	
	
		public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }
	
	  public function isAuthorized($user)
     {
   return true;

       }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('mealCategory', $this->paginate($this->MealCategory));
        $this->set('_serialize', ['mealCategory']);
    }

    /**
     * View method
     *
     * @param string|null $id Meal Category id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mealCategory = $this->MealCategory->get($id, [
            'contain' => []
        ]);
        $this->set('mealCategory', $mealCategory);
        $this->set('_serialize', ['mealCategory']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mealCategory = $this->MealCategory->newEntity();
        if ($this->request->is('post')) {
            $mealCategory = $this->MealCategory->patchEntity($mealCategory, $this->request->data);
            if ($this->MealCategory->save($mealCategory)) {
                $this->Flash->success('The meal category has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The meal category could not be saved. Please, try again.');
            }
        }
        $this->set(compact('mealCategory'));
        $this->set('_serialize', ['mealCategory']);
		
		
			$foods = TableRegistry::get('Foods')
   ->find('list', [
    'keyField' => 'name_food', 'valueField' => 'name_food'
]);
    
   $this->set('foods', $foods);
    }

    /**
     * Edit method
     *
     * @param string|null $id Meal Category id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mealCategory = $this->MealCategory->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mealCategory = $this->MealCategory->patchEntity($mealCategory, $this->request->data);
            if ($this->MealCategory->save($mealCategory)) {
                $this->Flash->success('The meal category has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The meal category could not be saved. Please, try again.');
            }
        }
        $this->set(compact('mealCategory'));
        $this->set('_serialize', ['mealCategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Meal Category id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mealCategory = $this->MealCategory->get($id);
        if ($this->MealCategory->delete($mealCategory)) {
            $this->Flash->success('The meal category has been deleted.');
        } else {
            $this->Flash->error('The meal category could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
	
	public function assign($id = null) {
		
		if (!$id) {
        throw new NotFoundException(__('Invalid meals id'));
          }
		   $meal = $this->MealCategory->get($id);
    if ($this->request->is(['post', 'put'])) {
        $this->MealCategory->patchEntity($meal, $this->request->data);
        if ($this->MealCategory->save($meal)) {
            $this->Flash->success(__('Your meal has been assigned'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Unable to update your article.'));
    }
		
			$users = TableRegistry::get('Users')
    ->find('list', ['valueField' => 'username'])
    ->select(['id' ,'username'])
    ->where(['role' => 'patient']);
   $this->set('users', $users);
     
	 
	  $id1 = $this->Auth->user('id');
	 
	 
	 $this->set('id', $id1);

    $this->set('meal', $meal);
		
		
	}
}
