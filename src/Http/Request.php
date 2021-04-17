<?php

namespace phpMvc\Http;


class Request
{
    public function method()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function path()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';

        if (strpos($path, '?')) {
            return explode('?', $path)[0];
        }
        return $path;
    }

}
