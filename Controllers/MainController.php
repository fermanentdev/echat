<?php

namespace Controllers;

use \http\Client\Request;

class MainController
{
    public function InitRequest($data)
    {
        if (is_array($data))
        {
            $link = mysqli_connect("localhost", "root", "", "echat");

            $message = $data['message'];
            $author = $data['author'];
            $now_time = date('H:i');

            try
            {
                mysqli_query($link, 'INSERT INTO messages (message_text, message_author, created_at) VALUES ("'.$message.'", "'.$author.'", "'.$now_time.'");');
                return header('Location: /?au='.$author);
            }
            catch (\Exception $e)
            {
                echo "error";
            }
        }
    }

    public function getMessages()
    {
        $link = mysqli_connect("localhost", "root", "", "echat");

        try
        {
            $result = mysqli_query($link, 'SELECT * FROM messages');
            return $result;
        }
        catch (\Exception $e)
        {
            echo "error";
        }
    }
}