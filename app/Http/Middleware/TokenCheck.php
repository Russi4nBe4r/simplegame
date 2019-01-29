<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Token;

class TokenCheck
{
	private $token;

	public function __construct(Token $token)
	{
		$this->token = $token;
	}

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
	    if ($request->has('token') && !empty($this->token->where(['api_token' => $request->token])->first())) {
		    return $next($request);
	    }

	    return abort('403');
    }
}
