<?php

namespace BIQ\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BIQUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
