<?php

namespace App\Providers\Obelaw;

use Obelaw\ERP\Facades\Management;
use Obelaw\Twist\Classes\TwistClass;
use Obelaw\Twist\Support\TwistPanelProvider;

class ERPPanelProvider extends TwistPanelProvider
{
    public function twist(TwistClass $twist)
    {
        $twist->appendAddons(Management::loadAddons());
    }
}
