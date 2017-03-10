<?php

use App\Task;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class TaskTest extends TestCase
{
    /**
     * Test the Task Model.
     *
     * @return void
     */
    public function testTask()
    {
        $task = new Task(['name'=>'test']);
        $this->assertInstanceof('\App\Task',$task);
    }
}
