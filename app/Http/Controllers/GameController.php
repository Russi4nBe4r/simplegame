<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class GameController extends Controller
{
	private $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

	public function users(Request $request)
	{
		return $this->user->all();
	}
}
