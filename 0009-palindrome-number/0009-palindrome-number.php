class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $x = strval($x);
        $x_mirror = strrev($x);

        if( $x === $x_mirror ) {
            return true;
        } else {
            return false;
        }
        
    }
}