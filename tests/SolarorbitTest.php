<?php
/**
 * Tests for SolarOrbit
 */

use PHPUnit\Framework\TestCase;
use Solarorbit\Solarorbit;

class SolarorbitTest extends TestCase {
    private Solarorbit $instance;

    protected function setUp(): void {
        $this->instance = new Solarorbit(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Solarorbit::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
