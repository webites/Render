<?php

namespace Web\Inc\Render;

require_once('RenderConfig.php');

class GetAssets
{
    static function css($file, bool $cdn = false, bool $min = false, string $id = '')
    {
        if ($min === true) {
            $m = '.min';
        } else {
            $m = '';
        }
        if ($cdn !== true) {
            $c = CSSFILES;
            $f = '.css';
        } else {
            $c = '';
            $f = '';
            $m = '';
        }
        if (gettype($file) == 'string') {
            return "<link id='" . $id . "' rel='stylesheet' href='" . $c . $file . $m . $f . "' />\n";
        }
        if (gettype($file) == 'array') {
            $return = '';
            foreach ($file as $item) {
                $return .= "<link rel='stylesheet' href='" . $c . $item . $m . $f . "' />\n";
            }
            return $return;
        }
    }

    static function js_src($url)
    {
        if (gettype($url) == 'string') {
            return "<script src='" . $url . "'></script>\n";
        }
        if (gettype($url) == 'array') {
            $return = '';
            foreach ($url as $item) {
                $return .= "<script src='" . $item . "'></script>\n";
            }
            return $return;
        }
    }
}
