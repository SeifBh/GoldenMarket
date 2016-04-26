<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Auth;
class Authenticate {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
		 protected $loginPath = 'xxx1';

    protected $redirectPath = 'xxx20';

    protected $redirectAfterLogout = 'xxx3';

protected $redirectTo = '/';
/*
	protected $auth;
protected $redirectTo = '/AjouterProduit';
*/
	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
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
		if ($this->auth->guest())
		{
			if ($request->ajax())
			{
				return response('Unauthorized.', 401);
			}
			else
			{
				return redirect()->guest('auth/login');
			}
		}

		return $next($request);
	}
}
