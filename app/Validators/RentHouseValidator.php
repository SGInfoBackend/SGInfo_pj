<?php
    namespace App\Validators;
    class RentHouseValidator
    {

        public function validate($attribute, $value, $parameters, $validator)
        {
            return strlen($value) < 20;
        }
    }

?>


