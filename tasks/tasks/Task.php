<?php

abstract class Task
{

    abstract protected function run();
    abstract protected function isValid();
    abstract protected function validate();

    public function resolveAsString()
    {
        $this->validate();

        if (!$this->isValid()) {
            return $this->error;
        } else {
            return $this->run();
        }
    }
}

?>