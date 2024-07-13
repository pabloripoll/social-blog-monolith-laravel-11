<?php

namespace Domain\Driver\Member\Repository;

use Domain\Driver\Member\Model\MemberSessionModel;
use Domain\Driver\Member\Object\MemberSessionObject;
use Domain\Contract\Repository\DomainRepositoryAbstract;
use Domain\Contract\Repository\DomainRepositoryInterface;

class MemberSessionRepository extends DomainRepositoryAbstract implements DomainRepositoryInterface
{
    /**
     * Required
     */
    public function model(): object
    {
        return new MemberSessionModel;
    }

    public function object(): object
    {
        return new MemberSessionObject;
    }

    /**
     * Entity set by "id" reside in parent - other type of set statements should be placed below
     */

    /**
     * Entity delete by "id" reside in parent - other type of delete statements should be placed below
     */

    /**
     * Get single entity
     */
    public function id(int $id): object | null
    {
        $row = $this->model()->where('id', '=', $id)->first() ?? null;

        return ! $row ? null : $this->dto($row);
    }

    public function token(string $token): object | null
    {
        $row = $this->model()->where('token', '=', $token)->first() ?? null;

        return ! $row ? null : $this->dto($row);
    }

    /**
     * Get multiple entities
     */
    public function total(): int
    {
        return $this->model()->all()->count();
    }

    public function list(object $params = null): object | null
    {
        $page = $params->page ?? 1;
        $take = $params->take ?? 30;
        $order = isset($params->order) ? $params->order : ['id', 'asc'];

        $result = $this->model();

        ! isset($params->date_start)  ? : $result = $result->whereDate('date_start', $params->date_start);
        ! isset($params->vehicle_id)  ? : $result = $result->where('vehicle_id', $params->vehicle_id);
        ! isset($params->customer_id) ? : $result = $result->where('customer_id', $params->customer_id);

        $result = $result->skip(($page - 1) * $take)->take($take);
        $result = $result->orderBy($order[0], $order[1]);
        $result = $result->get();

        return count($result) < 1 ? null : $this->dto($result);
    }

}
