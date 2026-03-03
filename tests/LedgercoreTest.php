<?php
/**
 * Tests for LedgerCore
 */

use PHPUnit\Framework\TestCase;
use Ledgercore\Ledgercore;

class LedgercoreTest extends TestCase {
    private Ledgercore $instance;

    protected function setUp(): void {
        $this->instance = new Ledgercore(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Ledgercore::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
