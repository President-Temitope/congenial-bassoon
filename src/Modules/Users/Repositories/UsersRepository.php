<?php

namespace Modules\Users\Repositories;

use App\User;
use Modules\Core\Repositories\CoreRepository;
use Modules\Users\Interfaces\UsersRepositoryInterface;

class UsersRepository implements UsersRepositoryInterface
{
protected $model = '';
protected $core = '';

    public function __construct(CoreRepository $core, User $model)
{
    $this->core = $core;
    $this->model = $model;
}

public function all(){
        return $this->core->all($this->model);
}

public function create(array $data){
        return $this->core->create($this->model,$data);
}

public function update($id,array $data){
        return $this->core->update($this->model,$id,$data);
}

public function show($id){
        return$this->core->show($this->model,$id);
}

public function delete($id){
        return $this->core->delete($this->model,$id);
}
}
