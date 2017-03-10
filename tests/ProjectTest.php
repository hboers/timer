<?php

use App\Project;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ProjectTest extends TestCase
{
    /**
     * Test the Project Model.
     *
     * @return void
     */
    public function testProject()
    {
        $project = new Project(['name'=>'test']);
        $this->assertInstanceof('\App\Project',$project);
    }
}
