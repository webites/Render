<?php

namespace Web\Inc\Render;

require_once('RenderConfig.php');

class RenderPart
{

    static function name(string $part, string $type = 'html')
    {
        // require('res/templates_part/' . $part . '.' . $type);
        require(TEMPLATESFILES . $part . '.' . $type);
    }
    static function css(string|array $file, bool $cdn = false, bool $min = false, string $id = '')
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
        }
        if (gettype($file) == 'string') {
            echo "<link id='" . $id . "' rel='stylesheet' href='" . $c . $file . $m . $f . "' />\n";
        }
        if (gettype($file) == 'array') {
            foreach ($file as $item) {
                echo "<link rel='stylesheet' href='" . $c . $item . $m . $f . "' />\n";
            }
        }
    }

    static function js_src(string|array $url)
    {
        if (gettype($url) == 'string') {
            echo "<script src='" . $url . "'></script>\n";
        }
        if (gettype($url) == 'array') {
            foreach ($url as $item) {
                echo "<script src='" . $item . "'></script>\n";
            }
        }
    }
}
