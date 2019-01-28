<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
	public function new()
	{
		return 'new game';
	}

	public function status()
	{
		return 'status';
	}

	public function move()
	{
		return 'move';
	}
}
