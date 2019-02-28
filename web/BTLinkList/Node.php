<?php
class Node
{
	public $data;
	public $next;
	function __contruct($data)
	{
		$this->data = $data;
		$this->next = Null;
	}
	function getData()
	{
		return $this->data;
	}
	function Node()
	{
		
	}
}