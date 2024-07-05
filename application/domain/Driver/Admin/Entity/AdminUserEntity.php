<?php

namespace Domain\Driver\Admin\Entity;

use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Admin\Model\AdminUserModel;
use Domain\Driver\Admin\Object\AdminUserObject;
use Domain\Driver\Admin\Repository\AdminUserRepository;

class AdminUserEntity implements DomainEntityInterface
{
    public function model()
    {
        return new AdminUserModel;
    }

    public function object()
    {
        return new AdminUserObject;
    }

    public function validation()
    {
        return new AdminUserValidation;
    }

    public function get()
    {
        return new AdminUserRepository;
    }

    public function save(object | array $input): mixed
    {
        try {
            $row = ! isset($input->id) ? $this->model() : $this->model()->find($input->id);

            ! isset($input->pid) ? : $row->pid = $input->pid;
            ! isset($input->is_active) ? : $row->is_active = $input->is_active;
            ! isset($input->is_banned) ? : $row->is_banned = $input->is_banned;
            ! isset($input->banned_id) ? : $row->banned_id = $input->banned_id;
            ! isset($input->signature) ? : $row->signature = $input->signature;
            ! isset($input->alias) ? : $row->alias = $input->alias;
            ! isset($input->password) ? : $row->password = $input->password;
            ! isset($input->created_by_user_id) ? : $row->created_by_user_id = $input->created_by_user_id;

            return $row->save();

        } catch(\Exception $e) {

            return ['error' => json_encode($e->getMessage())];
        }
    }

    public function delete(object | int $input): mixed
    {
        try {
            $input_id = ! is_object($input) ? $input : $input->id;

            $row = $this->model()->find($input_id);

            if ($row) {
                $row->delete();
            }

            return ! $row ? true : false;

        } catch(\Exception $e) {

            return ['error' => json_encode($e->getMessage())];
        }
    }

}
