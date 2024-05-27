class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        if (empty($strs)) {
        return "";
    }

   
    $common = $strs[0];

 
    for ($i = 1; $i < count($strs); $i++) {
        while (strpos($strs[$i], $common) !== 0) {

            $common = substr($common, 0, -1);
            if ($common === "") {
                return "";
            }
        }
    }

    return $common;
        
    }
}