<?
/**
* function to comparing multiple values against in_array check if all $needle exist in $haystack
* from https://dcblog.dev/comparing-multiple-values-against-in-array
* Modified by @Danimaxpd - https://github.com/Danimaxpd
*
* @param array $needle
* @param array $haystack
* @return boolean
*/
public static function isInArray($needle, $haystack)
{
    $result = array();
    foreach ($needle as $stack) {
        if (in_array($stack, $haystack)) {
            $result[] = true;
        }
    }
    if (count(array_unique($result)) === 1) {
        return current($result);
    } else {
        return false;
    }
}
