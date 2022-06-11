<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use App\Mail\PedidoMailable;
use Illuminate\Support\Facades\Mail;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param array $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'apellidos' => ['required', 'string', 'max:255'],
            'password' => $this->passwordRules(),
            'provincia' => ['required', 'string', 'max:255'],
            'localidad' => ['required', 'string', 'max:255'],
            'direccion' => ['required', 'string', 'max:255'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        // Manda un correo electrónico al crear el usuario por registro
        $correo = new PedidoMailable;
        Mail::to($input['email'])->send($correo);

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'apellidos' => $input['apellidos'],
            'password' => Hash::make($input['password']),
            'rol' => 0,
            'provincia' => $input['provincia'],
            'localidad' => $input['localidad'],
            'direccion' => $input['direccion']
        ]);
    }
}
