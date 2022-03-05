<?php

class Final2
{
    private $name;
    private $age;
    private $favecolor;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setFaveColor($favecolor)
    {
        $this->favecolor = $favecolor;
    }

    public function setTogetherInput($name,$age,$favecolor)
    {
        $this->name = $name;
        $this->age = $age;
        $this->favecolor = $favecolor;

    }


    public function getName()
    {
        if(!ctype_alpha($this->name))
        {
            throw new \InvalidArgumentException('Letters Only');
        }
        return $this->name;
    }

    

    public function getAge()
    {
        if(!is_numeric($this->age))
        {
            throw new \InvalidArgumentException('Numbers Only');
        }
        return $this->age;
    }
      
    public function getFaveColor()
    {
        if(!ctype_alpha($this->favecolor))
        {
            throw new \InvalidArgumentException('Letters Only');
        }
        return $this->favecolor;
    }

    public function getTogetherInput()
    {
        return $this->name;
        return $this->age;
        return $this->favecolor;
    }

}