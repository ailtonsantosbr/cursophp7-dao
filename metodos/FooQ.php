<?php

class FooQ {

	private $bar = '';

	public function __construct($val) {

		$this->bar = $val;
	}

	public function __debugInfo() {

		return ['_bar' => $this->bar];
	}
}

$fooq = new FooQ("q");
print_r($fooq);

?>
