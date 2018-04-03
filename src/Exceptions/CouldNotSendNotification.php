<?php

namespace NotificationChannels\Infobip\Exceptions;

class CouldNotSendNotification extends \Exception
{
    public static function serviceRespondedWithAnError($response)
    {
        return new static("Something went wrong.");
    }
    
    public static function invalidReceiver()
    {
        return new static("The given mobil number is not valid");
    }
}
