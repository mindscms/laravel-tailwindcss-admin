<?php


namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as ContractsLoginResponse;

class LoginResponse implements ContractsLoginResponse
{

    public function toResponse($request)
    {

        if (auth()->user()->roles[0]->allowed_route == 'admin') {
            return redirect()->route('admin.index');
        } else {
            return redirect()->intended(config('fortify.home'));
        }
        
    }

}
