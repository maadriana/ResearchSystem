<?php

namespace App\Livewire\Auth;

use App\Models\Email;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;
use Livewire\Component;

class AuthRegistration extends Component
{
    public $email = '';

    #[Rule('required|min:6')]
    public $password;

    #[Rule('required|min:6')]
    public $name;

    #[Rule('required')]
    public $role;


    public function register()
    { 
        $this->validate();


        $res = DB::table('users')->insertGetId([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        DB::table('user_roles')->insert([
            'user_id' => $res,
            'role_id' => $this->role,
        ]);

        $this->reset();

    }



    public function render()
    {

        $res = DB::table('emails')->where('email', '=', $this->email)->count();

        $roles = DB::table('roles')->get();

        return view('livewire.auth.auth-registration', [
            'account' => $res,
            'roles' => $roles,
        ]);
    }
}
