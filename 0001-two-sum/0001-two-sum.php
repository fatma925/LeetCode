class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {

        $count = count( $nums );
        for( $i = 0; $i < $count; $i++ ) {
           for( $j = 1; $j <= $count; $j++ ) {
            if ( $nums[$i] + $nums[$j]  == $target && $i != $j ) {
                return array( $i, $j );
            }
           }
        }
    }
}