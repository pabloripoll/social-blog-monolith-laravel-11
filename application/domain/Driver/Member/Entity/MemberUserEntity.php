<?php

namespace Domain\Driver\Member\Entity;

use Domain\Driver\Member\Model\MemberUserModel;
use Domain\Driver\Member\Object\MemberUserObject;
use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Member\Repository\MemberUserRepository;

class MemberUserEntity implements DomainEntityInterface
{
    public function model()
    {
        return new MemberUserModel;
    }

    public function object()
    {
        return new MemberUserObject;
    }

    public function get()
    {
        return new MemberUserRepository;
    }

    public function save(object | array $input): mixed
    {
        /* $check = $this->object()->isValid($input);
        if ($check->has_errors) {
            return $check;
        } */

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

}
