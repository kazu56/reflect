<?php

class EachMembersController extends AppController{

    public $uses = [
        'ReflectList',
    ];

    public function show($user_id,$week = ''){
        
        if($this->request->is('get')){
            foreach(['1'=>'takaishi','2'=>'mori','3'=>'kawaguti']  as $user_id => $name){
                $reflect_list[$name] = $this->ReflectList->find('all',array(
                    'conditions'=>[
                        'week' => $week,
                        'user_id' => $user_id
                    ]
                ));    
            }
            
            $this->set(compact('reflect_list','user_id','week'));
        }
    }

    public function edit($user_id = '',$week = ''){
        if($this->request->is('get')){
            $reflect_list = $this->ReflectList->find('first',array(
                'conditions'=>compact('user_id','week')
            ));

            $this->set(compact('reflect_list','user_id','week'));
        }
    }

    public function update($user_id = '',$week = ''){
        if($this->request->is('post')){
            $data = $this->request->data;

            $data['user_id'] = $user_id;
            $data['week'] = $week;

            $res = $this->ReflectList->save($data);

            if($res){
                $this->redirect('/reflectLists/show/' . $user_id . '/' . $week);
            }else{
                $this->redirect($this->request->referer());
            }
        }
    }

    /**
     * 書籍検索
     */
    public function search(){
        $key_word = $this->request->query('key_word');

        $book_list = $this->Book->find('all',array(
            'conditions'=>array(
                'Book.title like'=>"%{$key_word}%"
            )
        ));

        $this->set(compact('book_list','key_word'));
    }

    /**
     * 詳細
     */
    public function detail($book_id){
        $this->Book->bindModel(array(
            'hasMany'=>array(
                'RecommendList'
            ),
        ));
        $this->Book->recursive = 2;

        $book_list = $this->Book->findById($book_id);

        $this->PossessedBook->bindModel(array(
            'hasMany'=>array(
                'Reserve'
            )
        ));

        $possessed_book_list = $this->PossessedBook->findAllByBookId($book_id);

        $this->set(compact('book_list','possessed_book_list'));
    }

    /**
     * 感想記入
     * @param string $book_id
     */
    public function write_impression($book_id=''){
        $this->Impression->save(array(
            'book_id'=>$book_id,
            'impressions'=>$this->request->data('impressions'),
        ));

        $this->redirect($this->referer());
    }

    /**
     * 貸出処理
     */
    public function borrow_book(){

        $this->PossessedBook->save(array(
            'id'=>$this->request->data('possessed_book_id'),
            'status'=>1,
            'borrow_user'=>$this->request->data('borrow_user'),
        ));

        $this->redirect($this->request->referer());
    }

    /**
     * 貸出処理
     */
    public function return_book($possessed_book_id){

        $this->PossessedBook->save(array(
            'id'=>$possessed_book_id,
            'status'=>0,
            'borrow_user'=>'',
        ));

        $this->redirect($this->request->referer());
    }


}

