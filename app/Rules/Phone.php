<?php
//
//namespace App\Rules;
//
//use Closure;
//use Illuminate\Contracts\Validation\ValidationRule;
//
//class Phone implements ValidationRule
//{
//    /**
//     * Run the validation rule.
//     *
//     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
//     */
//    public function passes($attribute, $value)
//    {
//        return !! preg_match('/^[0-9]{10,20}$/', $value);
//    }
//
//    public function validate(string $attribute, mixed $value, Closure $fail): void
//    {
//        // TODO: Implement validate() method.
//    }
//}


namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Phone implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return !!preg_match('/^[0-9]{10,20}$/', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('Неверный номер телефона.');
    }
}

