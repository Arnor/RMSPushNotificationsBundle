<?php

namespace RMS\PushNotificationsBundle\Message;

use RMS\PushNotificationsBundle\Device\Types;

class iOS2Message extends AppleMessage
{
    /**
     * Returns the target OS for this message
     *
     * @return string
     */
    public function getTargetOS()
    {
        return Types::OS_IOS;
    }
}
