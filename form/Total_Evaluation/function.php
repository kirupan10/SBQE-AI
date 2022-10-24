 <?php 

 function statuschecker($n_total){

     if ($n_total > 0 && $n_total < 25 ) {
            
            $status_1 = "Immediate development required";
            
        }

        if ($n_total >= 25 && $n_total < 45 ) {
            
            $status_1 = "Development Required";
            
        }

        if ($n_total >= 45 && $n_total < 60 ) {
            
            $status_1 = "Satisfactory";
            
        }

        if ($n_total >= 60 && $n_total < 75 ) {
            
            $status_1 = "Good";
            
        }

        if ( $n_total >= 75 && $n_total < 90 ) {
           
            $status_1 = "Very Good";
            
        }

         if ( $n_total >= 90 ) {
            
            $status_1 = "Excellent";
            
        }
        return $status_1;

}
echo statuschecker(78);

    ?>