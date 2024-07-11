<?php

namespace Domain\Driver\Member\Entity;

use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Member\Model\MemberProfileModel;
use Domain\Driver\Member\Object\MemberProfileObject;
use Domain\Driver\Member\Repository\MemberProfileRepository;

class MemberProfileEntity implements DomainEntityInterface
{
    public function model()
    {
        return new MemberProfileModel;
    }

    public function object()
    {
        return new MemberProfileObject;
    }

    public function get()
    {
        return new MemberProfileRepository;
    }

    public function set(object | array $input): mixed
    {
        $input = is_object($input) ? $input : (object) $input;

        $check = $this->object()->isValid($input);
        if ($check->has_errors) {
            return $check;
        }

        try {
            $row = ! isset($input->id) ? $this->model() : $this->model()->find($input->id);

            ! isset($input->user_id) ? : $row->user_id = $input->user_id;
            ! isset($input->email) ? : $row->email = $input->email;
            ! isset($input->name) ? : $row->name = $input->name;
            ! isset($input->surname) ? : $row->surname = $input->surname;
            ! isset($input->phone) ? : $row->phone = $input->phone;
            ! isset($input->address) ? : $row->address = $input->address;

            $row->save();

            return $row;

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
