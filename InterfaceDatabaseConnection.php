<?php
interface IDatabaseConnection
{
    /**
     * Connects to Database
     */
    public function connect();
	function query();
}