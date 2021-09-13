<?php

class Mailer
{
    /**
     * Send a message
     *
     * @return boolean
     */
    public function sendMessage($email, $message)
    {
        if (empty($email)) {
            throw new Exception();
        }
        sleep(3);

        echo "send $message to $email";

        return true;
    }
}
