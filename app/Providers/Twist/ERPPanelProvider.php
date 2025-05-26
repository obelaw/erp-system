<?php

namespace App\Providers\Twist;

use Obelaw\Permit\PermitPlugin;
use Obelaw\Twist\Classes\TwistClass;
use Obelaw\Twist\Support\TwistPanelProvider;

class ERPPanelProvider extends TwistPanelProvider
{
    public function twist(TwistClass $twist)
    {
        $twist->appendAddon(PermitPlugin::make());
    }
}
