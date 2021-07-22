<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Haskell extends Model
{
    use HasFactory;

    // reverse :: [a] -> [a]
    // reverse [] = []
    // reverse (x:xs) = reverse xs ++ [x]
    public function reverse(array $xs): array
    {
        if (count($xs) == 0) return $xs; // nothing to reverse

        $hd = array_shift($xs); // $xs now the tail of param $xs
        $reversed = $this->reverse($xs); // reverse the tail
        array_push($reversed, $hd); // append the head
        return $reversed;
    }
}
