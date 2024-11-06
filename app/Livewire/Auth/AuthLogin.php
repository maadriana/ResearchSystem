<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Rule;
use Livewire\Component;

class AuthLogin extends Component
{
    #[Rule('required|email')]
    public $email;

    #[Rule('required|min:6')]
    public $password;

    public function login()
    {
        $this->validate();

        if (Auth::attempt([
            'email' => $this->email,
            'password' => $this->password
        ])) {
            // CODE FOR THE ROLES
            // dd(Auth::user()->id);
            $res = DB::table('user_roles')
                    ->join('roles', 'roles.id', '=', 'user_roles.role_id')
                    ->where('user_id', '=', Auth::user()->id)
                    ->first();
            //dd($res->role_name);
            if($res->role_name == 'Director')
            {
                return redirect()->route('director-dashboard');
            }
            // elseif($res->rolename == 'Faculty')
            //     // return redirect()->route('director-dashboard');
            // return redirect()->route('director-dashboard');


        }
        session()->flash('status', 'Invalid Email or Password');
    }

    public function render()
    {
        return view('livewire.auth.auth-login');
    }
}
