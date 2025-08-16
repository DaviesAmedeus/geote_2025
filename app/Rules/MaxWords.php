<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;


class MaxWords implements Rule {

    protected $max;

    public function __construct($max)
    {
        $this->max = $max;
    }

    public function passes($attribute, $value){
       return str_word_count($value) <= $this->max;
    }

     public function message()
    {
        return "The :attribute must not exceed {$this->max} words.";
    }
}
