<?php
namespace MyApp;

class Greeter
{
    /**
     * @param null|string $name
     * @return string
     */
    public function format($name = null)
    {
        if (!empty($name)) {
            return "Hello, $name!";
        } else {
            return "Hello, stranger!";
        }
    }
}
