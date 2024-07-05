<?php

namespace Domain\Driver\Admin\Repository;

use Domain\Driver\Admin\Model\AdminCategoryActivityModel;
use Domain\Contract\Repository\DomainRepositoryAbstract;
use Domain\Contract\Repository\DomainRepositoryInterface;

class AdminCategoryActivityRepository extends DomainRepositoryAbstract implements DomainRepositoryInterface
{
    /**
     * Required
     */
    public function model(): object
    {
        return new AdminCategoryActivityModel;
    }

    public function byId(int $id): object
    {
        $result = $this->model()::get()->byId($id) ?? null;

        return ! $result ? null : $this->object($result);
    }

    public function all(): object
    {
        $result = $this->model()::get()->all();

        return ! $result ? null : $this->object($result);
    }

}
