<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use App\Constants\UserRole;

class RoleManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
      //

      //
     public function handle(Request $request, Closure $next , $role): Response
    {
        // $AdminRole = 0;
        // $InstituteRole = 1;
        // $UserRole = 2;

       if(!Auth::check()){
        return redirect()->route('login');
       }
       $authUserRole = Auth::user()->role;

       switch($role){
        case 'admin':
            if($authUserRole == UserRole::AdminRole){
                return $next($request);
            } break;
            case 'institute':
                if($authUserRole == UserRole::InstituteRole){
                    return $next($request);
                } break;
                case 'user':
                    if($authUserRole == UserRole::UserRole){
                        return $next($request);
                    } break;
       }

       switch($authUserRole){
            case UserRole::AdminRole:
                return redirect()->route('admin');
            case UserRole::InstituteRole:
                return redirect()->route('institute');
            case UserRole::UserRole:
                return redirect()->route('user');

            //     default:
            // return redirect()->route('login'); // Fallback to login
       }

       return redirect()->route('login');

    }
}
