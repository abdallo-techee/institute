<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Constants\UserRole;
class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */

    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */


    public function store(LoginRequest $request): RedirectResponse
    {

        //
        // $AdminRole = 0;
        // $InstituteRole = 1;
        // $UserRole = 2;
        //
        $request->authenticate();

        $request->session()->regenerate();

        $authUserRole = Auth::user()->role;

        if($authUserRole == UserRole::AdminRole){
            return redirect()->intended(route('admin', absolute: false));


        }elseif($authUserRole == UserRole::InstituteRole){
            return redirect()->intended(route('institute', absolute: false));

        }else{
            // return redirect()->intended(route('dashboard', absolute: false));
            return redirect()->intended(route('/', absolute: false));
        }

    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
