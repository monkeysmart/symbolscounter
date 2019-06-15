<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class SymbolCounterTest extends TestCase
{
    public function testWrongStringValidation(): void
    {
    	$strObj = new \Monkeysmart\Tools\SymbolsCounter();

    	$strObj->setStr('()()d()(');

        $this->expectException(InvalidArgumentException::class);

        $strObj->count();
    }

    /** @test*/
    public function canCountStringSymbols() : void
    {
     	$strObj = new \Monkeysmart\Tools\SymbolsCounter();
     	
    	$strObj->setStr('()()(');

    	$this->assertEquals(5, $strObj->count());
    }
}