<?php

namespace App\Rules;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\Rule;

class CurrentPasswordCheckRule implements Rule
{
    protected $userId;

    public function __construct($userId)
    {
        $this->userId = $userId;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $user = User::find($this->userId);
        return Hash::check($value, $user->password);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('The current password field does not match your password');
    }
}
