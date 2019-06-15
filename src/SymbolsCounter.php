<?php
namespace Monkeysmart\Tools;

class SymbolsCounter 
{
	private $str;
	private $validSymbols;

	public function __construct()
	{
		$this->validSymbols = [
			"\(",
			"\)",
			"\n",
			"\t",
			"\r"		
		];
	}

	public function count() : int
	{
		if (empty($this->str) || ! $this->isValidStr()) {
			throw new InvalidArgumentException();
		}

		return strlen($this->str);
	}

	private function isValidStr() : bool
	{
		return preg_match('/^[' . implode($this->validSymbols) . ']*$/', $this->str);
	}

	public function setStr(string $str) : void
	{
		$this->str = $str;
	}

	public function getStr() : string
	{
		return $this->str;
	}
}
