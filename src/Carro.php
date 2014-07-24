<?php 

abstract class Carro
{
	protected $GPSmodel;

	public function acelerar()
	{
		echo 'posso acelerar<br />';
	}

	public function travar()
	{
		echo 'posso travar<br />';
	}

	public function setGPSmodel(GPS\GPSInterface $gps)
	{
		$this->GPSmodel = $gps;		
	}

	public function gps()
	{
		$this->GPSmodel->mapa();
	}

	abstract public function nome();
}