<?php

namespace Domain\Driver\Member\Repository;

use Domain\Driver\Member\Model\MemberImageModel;
use Domain\Driver\Member\Model\MemberImageObject;
use Domain\Contract\Repository\DomainDelRepositoryAbstract;
use Domain\Contract\Repository\DomainDelRepositoryInterface;

class MemberImageDelRepository extends DomainDelRepositoryAbstract implements DomainDelRepositoryInterface
{
    /**
     * Required
     */
    public function model(): object
    {
        return new MemberImageModel;
    }

    public function object(): object
    {
        return new MemberImageObject;
    }

    /**
     * Single - Delete by "id" column
     */
    public function row(object | array | int $input): mixed
    {
        if (is_object($input)) {
            $validation = $this->object()->isValid($input);

            if ($validation->has_errors) {
                return $validation;
            }
        }

        $input_id = ! is_object($input) ? $input : $input->id;

        try {
            $row = $this->model()->find($input_id);

            if ($row) {
                $row->delete();
            }

            return ! $row ? true : false;

        } catch(\Exception $e) {

            return ['error' => json_encode($e->getMessage())];
        }
    }

    /**
     * Other delete statements
     */

}
