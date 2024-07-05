<?php

namespace Domain\Contract\Object;

interface DomainObjectInterface
{
    public function validation(): object;

    public function value(object $row = null): object;

}