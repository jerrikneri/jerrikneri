<?php

if (!function_exists('array_strip_tags')) {
    /**
     * @param input array
     * @param bool $all (true to filter all, false to only filter matches in $filter_array)
     *
     * @return array
     */
    function array_strip_tags($array, $all = true)
    {

        $result = [];
        if (is_array($array)) {
            foreach ($array as $key => $value) {
                if ($all) {
                    $replace = ['&amp;' => '&', '’' => '\'', '‘' => '\'', '“' => '"', '”' => '"', '…' => '...', '–' => '-', '―' => '-']; //“‘’”…–―
                    $key = str_replace(array_keys($replace), array_values($replace), htmlspecialchars($key, ENT_NOQUOTES));
                    if (is_array($value)) {
                        $result[$key] = array_strip_tags($value, $all);
                    } else {
                        if (count($key)) {
                            $result[$key] = str_replace(array_keys($replace), array_values($replace), htmlspecialchars($value, ENT_NOQUOTES));
                        }
                    }
                }
            }
        }
        return $result;
    }
}
