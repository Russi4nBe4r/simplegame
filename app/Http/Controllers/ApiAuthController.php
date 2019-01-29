<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Token;
use App\Models\User;

class ApiAuthController extends Controller
{
	private $user;
	private $token;

	public function __construct(Token $token, User $user)
	{
		$this->user = $user;
		$this->token = $token;
	}

	public function index(Request $request)
	{
		if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
			$user = $this->user->where(['email' => $request->email])->first();
			
			if (!empty($token = $this->token->where(['user' => $user->id])->first())) {
				return $token->api_token;
			} else {
				$token = $this->token->create(['user' => $user->id, 'api_token' => Hash::make(time())]);
				return $token->api_token;
			
			}
		}
		return '403';
	}
}
