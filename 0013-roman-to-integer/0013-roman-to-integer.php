class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $length = strlen($s);
        $sum = 0;

        // Define a mapping of special substrings and their values
        $sub = ['CM' => 900, 'CD' => 400, 'XC' => 90, 'XL' => 40, 'IX' => 9, 'IV' => 4];
        
          foreach ($sub as $key => $value) {
        if (strpos($s, $key) !== false) {
            $sum += substr_count($s, $key) * $value; // Multiply by the number of occurrences
            $s = str_replace($key, '', $s); // Remove the substring from $s
        }
    }

    // Define a mapping of individual characters and their values
    $single = ['I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000];

    // Iterate through the remaining string
    for ($i = 0; $i < strlen($s); $i++) {
        $sum += $single[$s[$i]];
    }

    return $sum;

    }
}