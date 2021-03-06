<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(User $user){
        return view('profiles.show', [
            'user' => $user,
            'tweets' => $user->tweets()->withLikes()->paginate(5),
        ]);
    }

    public function edit(User $user){

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user){
        $attributes = request()->validate([
            'username' => ['string', 'required', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'avatar' => ['required'],
            'name' => ['string', 'required', 'max:255'],
            'email' => ['string', 'required', 'max:255', 'email', Rule::unique('users')->ignore($user)],
            'password' => ['string', 'required', 'max:255', 'min:8', 'confirmed']
        ]);

        if (request('avatar')){
            $attributes['avatar'] = request('avatar')->store('avatars');
        }

        $user->update($attributes);

        return redirect($user->path());
    }
}
