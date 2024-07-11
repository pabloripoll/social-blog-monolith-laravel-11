<?php

namespace Domain\Driver\Member\Entity;

use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Member\Model\MemberImageModel;
use Domain\Driver\Member\Object\MemberImageObject;
use Domain\Driver\Member\Repository\MemberImageRepository;

class MemberImageEntity implements DomainEntityInterface
{
    public function model()
    {
        return new MemberImageModel;
    }

    public function object()
    {
        return new MemberImageObject;
    }

    public function get()
    {
        return new MemberImageRepository;
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
            ! isset($input->is_profile) ? : $row->is_profile = $input->is_profile;
            ! isset($input->is_background) ? : $row->is_background = $input->is_background;
            ! isset($input->is_selected) ? : $row->is_selected = $input->is_selected;
            ! isset($input->storage_id) ? : $row->storage_id = $input->storage_id;
            ! isset($input->file_name) ? : $row->file_name = $input->file_name;
            ! isset($input->title) ? : $row->title = $input->title;
            ! isset($input->file_extension) ? : $row->file_extension = $input->file_extension;
            ! isset($input->position) ? : $row->position = $input->position;

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
