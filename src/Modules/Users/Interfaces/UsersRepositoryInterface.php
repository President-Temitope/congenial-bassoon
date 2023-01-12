<?php

namespace Modules\Users\Interfaces;

interface UsersRepositoryInterface
{
    public function all();

    public function create(array $data);

    public function update($id, array $data);

    public function show($id);

    public function delete($id);
}
