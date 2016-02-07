<?php
namespace hedronium\Jables\types;
use hedronium\Jables\BaseType;
use hedronium\Jables\Field;

class Time extends BaseType implements Field {

	public function init($table, $name)
	{
		return $table->time($name);
	}

	public function render(){}

}
