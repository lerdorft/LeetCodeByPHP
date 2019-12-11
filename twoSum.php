<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 2019/12/11
 * Time: 16:37
 */

/**
 * @param array $nums
 * @param int $target
 * @return array
 */
function twoSum($nums, $target)
{
    $arr = array_map(function ($v) use($target) {
        return $target - $v;
    }, $nums);

    $rt = [];
    foreach ($arr as $k => $v) {
        $kk = array_search($v, $nums);
        if ($kk !== false && $kk != $k) {
            $rt = [
                $kk,
                $k
            ];
        }
    }

    return $rt;
}