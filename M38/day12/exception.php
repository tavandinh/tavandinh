<?php 
    class Catalog{
        public function calculate_future_value($investment,$invest_rate,$years){
            if($investment <= 0 OR $invest_rate <= 0 OR $years <= 0){
                throw new Exception("Please check your entries for validity.");
            }

            $future_value = $investment;
            for($i = 1; $i <= $years; $i++){
                $future_value = ($future_value + ($future_value * $invest_rate * .01));
            }

            return round($future_value,2);
        }
    }

    $catalog = new Catalog();
    try{
        $test = $catalog->calculate_future_value(2,2,0);
    }catch(Exception $e){
        echo 'Error: '.$e->getMessage().' code: '.$e->getCode();
    }
?>