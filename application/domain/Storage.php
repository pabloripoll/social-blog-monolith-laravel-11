<?php

namespace Domain;

use Domain\Driver\Storage\Entity\PublicEntity;
use Domain\Driver\Storage\Entity\PrivateEntity;

final class Storage
{
    public static function public()
    {
        return new PublicEntity;
    }

    public static function private()
    {
        return new PrivateEntity;
    }

}
