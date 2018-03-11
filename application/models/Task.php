<?php

class Task extends Entity {

    //provide default argument + use magic set/get
    public function setTask($value = "") {

        if (!ctype_alnum($value))
            throw new Exception('A task should contain either alphabits or numbers');
        if (strlen($value) > 64)
            throw new Exception('A task name should be max 64 characters');
        $this->task= $value;
        return $this;
    }

    //provide default argument + use magic set/get
    //insist that a priority must be less than 4
    public function setPriority($value = 0){
        if (!is_int($value))
            throw new Exception('A priority must be number');
        if ($value > 3)
            throw new Exception('A priority must less than 4');
        if ($value < 0)
            throw new Exception('A priority must greater than 0');
        $this->priority = $value;
        return $this;
    }

    //provide default argument + use magic set/get
    //insist that a size is present
    public function setSize($value = 0) {
        if (!is_int($value))
            throw new Exception('A size must be a number');
        if ($value > 3)
            throw new Exception('A size must less than 3');
        if ($value < 0)
            throw new Exception('A size must greater than 0');
        $this->size = $value;
        return $this;
    }

    //provide default argument + use magic set/get
    //insist that a size is present
    public function setGroup($value = 0) {
        if (!is_int($value))
            throw new Exception('A group must be a number');
        if ($value > 4)
            throw new Exception('A group must less than 5');
        if ($value < 0)
            throw new Exception('A group must greater than 0');
        $this->group = $value;
        return $this;
    }

    //provide default argument + use magic set/get
    //insist that a size is present
    public function setStatus($value = 0) {
        if (!is_int($value))
            throw new Exception('A status must be a number');
        if ($value > 1)
            throw new Exception('A status must less than 2');
        if ($value < 0)
            throw new Exception('A status must greater than 0');
        $this->status = $value;
        return $this;
    }
}
