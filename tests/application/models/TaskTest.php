<?php

use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{

        function setUp()
        {
                //Load a task model
                $this->CI = &get_instance();
                $this->CI->load->model('task');
                $this->item = new Task();
        }

        //Valid tests
        public function testValidTask() {
            $expected = "Duck";
            $this->item->task = $expected;
           $this->assertEquals($expected, $this->item->task);
        }

        public function testValidPriority() {
            $expected = 1;
            $this->item->priority = $expected;
            $this->assertEquals($expected, $this->item->priority);
        }

        public function testValidSize() {
            $expected = 0;
            $this->item->size = $expected;
            $this->assertEquals($expected, $this->item->size);
        }

        public function testValidGroup() {
            $expected = 3;
            $this->item->group = $expected;
            $this->assertEquals($expected, $this->item->group);
        }

        public function testValidStatus() {
            $expected = 1;
            $this->item->status = $expected;
            $this->assertEquals($expected, $this->item->status);
        }

        //Invalid Tests
        public function testInvalidTaskName() {
            $this->expectException(Exception::class);
                $this->item->task = "!@#$ Task";
        }

        public function testInvalidPriority() {
            $this->expectException(Exception::class);
                $this->item->priority = 9001;
        }

        public function testInvalidSize() {
            $this->expectException(Exception::class);
                $this->item->size = 1111;
        }

        public function testInvalidGroup() {
            $this->expectException(Exception::class);
                $this->item->group = 123;
        }

        public function testInvalidStatus() {
            $this->expectException(Exception::class);
                $this->item->status= 321;
        }
}
