<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/Owner.php';

use PostOwner\Owner;
use PocketTesting\Testing;

class OwnerTest extends Testing
{
    public function run()
    {
        $this->testOwnerTrue();
        $this->testOwnerFalse();

        $this->summary();
    }

    private function testOwnerTrue()
    {
        $result = Owner::checkOwner(10, 10);

        $this->checkTrue(
            $result,
            "Owner check should return TRUE when user IDs match."
        );
    }

    private function testOwnerFalse()
    {
        $result = Owner::checkOwner(10, 5);

        $this->checkFalse(
            $result,
            "Owner check should return FALSE when user IDs do not match."
        );
    }
}

$test = new OwnerTest();
$test->run();
