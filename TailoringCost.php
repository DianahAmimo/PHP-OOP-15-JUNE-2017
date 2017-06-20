<?php
    class TailoringCost{
        //initializing a sharable trait
        use PriceTrait;

        private $amount;

        public function costIncurred($amount)
        {
            $this->amount = $amount;
            return 'Tailoring expense: ' . $this->amount;
        }

    }