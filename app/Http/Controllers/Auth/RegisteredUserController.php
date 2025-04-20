<?php

namespace App\Http\Controllers\Auth;

use App\Constants\UserRole;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Student;
use App\Models\Institute;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {

                // dd($request->role);

 // Convert string role to numeric before validation
 $request->merge([
    'role' => match ($request->role) {
        'institute' => UserRole::InstituteRole ,
        'student' => UserRole::UserRole ,
    },
]);


// down line code dd function for printing something in the screen and everything will stop there no line after it will run
        // dd($request->role);
        // Validate shared fields
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'numeric'],
        ]);



        // Handle role-specific validation
        switch ($request->role) {
            case UserRole::InstituteRole :
                $request->validate([
                    'ins_name' => ['required', 'string', 'max:255'],
                    'ins_lic_photo' => ['nullable', 'image', 'max:2048'],
                ]);
                break;

            case UserRole::UserRole :
                $request->validate([
                    'name' => ['required', 'string', 'max:255'],
                ]);
                break;
        }

        // Handle file upload for institute
        $licensePath = null;
        if ($request->hasFile('ins_lic_photo')) {
            $licensePath = $request->file('ins_lic_photo')->store('licenses', 'public');
        }

        // Create the user


    //    if ($request->role === 1) {
    //         // create institute
    //         $user = User::create([
    //             'name' =>  $request->ins_name,
    //             'email' => $request->email,
    //             'password' => Hash::make($request->password),
    //             'role' => UserRole::InstituteRole ,
    //         ]);
    //     }  elseif ($request->role === 2) {
    //         // create student
    //         $user = User::create([
    //             'name' =>  $request->name,
    //             'email' => $request->email,
    //             'password' => Hash::make($request->password),
    //             'role' => UserRole::UserRole,
    //         ]);
    //     }

        $user = User::create([
            'name' => $request->role === UserRole::InstituteRole ? $request->ins_name : $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role === UserRole::InstituteRole ? UserRole::InstituteRole : UserRole::UserRole,
        ]);

        // Create related profile based on role
        switch ($request->role) {
            case UserRole::UserRole:
                Student::create([
                    'user_id_fk' => $user->id,
                ]);
                break;

            case UserRole::InstituteRole:
                Institute::create([
                    'user_id_fk' => $user->id,
                    'ins_name' => $user->name,
                    'ins_lic_photo' => $licensePath ?? '',
                    'ins_is_verified' => false, // Default to false

                    // 'description' can be updated later
                ]);
                break;
        }

        // Fire registration event and log in the user
        event(new Registered($user));
        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}


// <!--

// namespace App\Http\Controllers\Auth;

// use App\Http\Controllers\Controller;
// use App\Models\User;
// use Illuminate\Auth\Events\Registered;
// use Illuminate\Http\RedirectResponse;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Validation\Rules;
// use Illuminate\View\View;

// class RegisteredUserController extends Controller
// {
//     /**
//      * Display the registration view.
//      */
//     public function create(): View
//     {
//         return view('auth.register');
//     }

//     /**
//      * Handle an incoming registration request.
//      *
//      * @throws \Illuminate\Validation\ValidationException
//      */
//     public function store(Request $request): RedirectResponse
//     {
//         $request->validate([
//             'name' => ['required', 'string', 'max:255'],
//             'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
//             'password' => ['required', 'confirmed', Rules\Password::defaults()],
//         ]);

//         $user = User::create([
//             'name' => $request->name,
//             'email' => $request->email,
//             'password' => Hash::make($request->password),
//         ]);

//         event(new Registered($user));

//         Auth::login($user);

//         return redirect(route('dashboard', absolute: false));
//     }
// }
// -->


