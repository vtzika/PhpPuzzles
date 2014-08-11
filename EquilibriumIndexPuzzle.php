//This function returns -1 when no equilibrium index exists on an array 
//or the first one it will find

function equilibriumArrayIndex($A) {
    $N = count($A);
    $sum_lower = 0;
    $sum_higher = array_sum($A)-$A[0];

    if($A[0] == $sum_higher) {
        return $A[0];
    }
    
    for($i=1; $i<$N-1; $i++) {
        $sum_lower = $sum_lower + $A[$i-1] ;
        $sum_higher = $sum_higher - $A[$i] ;
        if($sum_lower==$sum_higher)
            return $i;
    }

    if($A[$N] == $sum_higher) {
        return $N;
    }

    return -1;
}
