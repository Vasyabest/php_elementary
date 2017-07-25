<?php
class View
{
    public function render($template,$args = array())
    {
        extract($args);
        require_once($template);
    }
}