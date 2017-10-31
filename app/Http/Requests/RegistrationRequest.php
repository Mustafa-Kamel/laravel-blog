<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;
use App\Mail\welcome;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:6|max:30|confirmed'
        ];
    }

    public function persist()
    {
        /*$user = User::create([
            'name' => request()->name,
            'email' => request()->email,
            'password' => bcrypt(request()->password)
        ]);*/
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);
        auth()->login($user);
        \Mail::to($user)->send(new welcome($user));
    }
}
