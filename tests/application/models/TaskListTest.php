<?php

class TaskListTest extends Memory_Model {

    public function setUp()
    {
            //Load a tasks model
            $this->CI = &get_instance();
            $this->CI->load->model('tasks');
            $this->item = new Tasks();
    }

    public function testAllTestByStatus() {
        $inProgressList = count($this->item->getAllTasksByStatus(1));
        $completedList =  count($this->item->getAllTasksByStatus(2));
		$this->assertTrue($inProgressList > $completedList);
    }
}
