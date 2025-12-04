<?php

namespace PostOwner;

class Owner
{
    public static function checkOwner($resourceUserId, $currentUserId)
    {
        if ($resourceUserId == $currentUserId) {
            return true;
        }
        return false;
    }

}