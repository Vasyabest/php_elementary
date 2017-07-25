<?php
class PetShopController
{
    public function getObjects($path)
    {
        $this->path = $path;
        $this->file = file_get_contents($this->path, true);
        $this->objectsPets = json_decode($this->file);

        return $this->objectsPets;
    }
}
