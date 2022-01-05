<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * --A--
 * -B-B-
 * C---C
 * -B-B-
 * --A--
 */

class Diamond extends Model
{
    use HasFactory;

    public static function diamond($d)
    {
        $width = -1;
        if ($width < 0) {
            $width = ord($d) - ord("A");
            $l = 0;
            $r = $width;
        }
        $res = [];
        while ($d >= "A") {
            $row = self::row($d, $l, $r);
            $res[] = $row;
            $d = chr(ord($d) - 1);
            $l += 1;
            $r -= 1;
        }
        return array_merge(array_reverse($res), array_slice($res, 1));
    }

    public static function row($d, $l, $r)
    {
        if ($d == "A") {
            return str_repeat(" ", $l) . $d . str_repeat(" ", $l);
        } else {
            return str_repeat(" ", $l) . $d . str_repeat(" ", $r * 2 - 1) . $d . str_repeat(" ", $l);
        }
    }
}
