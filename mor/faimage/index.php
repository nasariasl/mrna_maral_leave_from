<?php
    function farsi_correct($string) {
        // Reverse the string
        $len = mb_strlen($string, 'utf-8');
        $result = '';
        for($i = ($len - 1); $i >= 0; $i--) {
            $result .= mb_substr($string, $i, 1, 'utf-8');
        }
        // These chars work as space when a character comes after them, so the next character will not connect to them
        $spaces_after = array('', ' ', 'ا', 'آ', 'أ', 'إ', 'د', 'ذ', 'ر', 'ز', 'ژ', 'و', 'ؤ');
        // These chars work as space when a character comes before them, so the previous character will not connect to them
        $spaces_before = array('', ' ');
        // Persian chars with their different styles at different positions:
        // Alone, After a non-space char, Before a non-space char, between two non-space chars
        $chars = array();
        $chars[] = array('آ', 'ﺂ', 'آ', 'ﺂ');
        $chars[] = array('أ', 'ﺄ', 'ﺃ', 'ﺄ');
        $chars[] = array('إ', 'ﺈ', 'ﺇ', 'ﺈ');
        $chars[] = array('ا', 'ﺎ', 'ا', 'ﺎ');
        $chars[] = array('ب', 'ﺐ', 'ﺑ', 'ﺒ');
        $chars[] = array('پ', 'ﭗ', 'ﭘ', 'ﭙ');
        $chars[] = array('ت', 'ﺖ', 'ﺗ', 'ﺘ');
        $chars[] = array('ث', 'ﺚ', 'ﺛ', 'ﺜ');
        $chars[] = array('ج', 'ﺞ', 'ﺟ', 'ﺠ');
        $chars[] = array('چ', 'ﭻ', 'ﭼ', 'ﭽ');
        $chars[] = array('ح', 'ﺢ', 'ﺣ', 'ﺤ');
        $chars[] = array('خ', 'ﺦ', 'ﺧ', 'ﺨ');
        $chars[] = array('د', 'ﺪ', 'ﺩ', 'ﺪ');
        $chars[] = array('ذ', 'ﺬ', 'ﺫ', 'ﺬ');
        $chars[] = array('ر', 'ﺮ', 'ﺭ', 'ﺮ');
        $chars[] = array('ز', 'ﺰ', 'ﺯ', 'ﺰ');
        $chars[] = array('ژ', 'ﮋ', 'ﮊ', 'ﮋ');
        $chars[] = array('س', 'ﺲ', 'ﺳ', 'ﺴ');
        $chars[] = array('ش', 'ﺶ', 'ﺷ', 'ﺸ');
        $chars[] = array('ص', 'ﺺ', 'ﺻ', 'ﺼ');
        $chars[] = array('ض', 'ﺾ', 'ﺿ', 'ﻀ');
        $chars[] = array('ط', 'ﻂ', 'ﻃ', 'ﻄ');
        $chars[] = array('ظ', 'ﻆ', 'ﻇ', 'ﻈ');
        $chars[] = array('ع', 'ﻊ', 'ﻋ', 'ﻌ');
        $chars[] = array('غ', 'ﻎ', 'ﻏ', 'ﻐ');
        $chars[] = array('ف', 'ﻒ', 'ﻓ', 'ﻔ');
        $chars[] = array('ق', 'ﻖ', 'ﻗ', 'ﻘ');
        $chars[] = array('ک', 'ﻚ', 'ﻛ', 'ﻜ');
        $chars[] = array('ك', 'ﻚ', 'ﻛ', 'ﻜ');
        $chars[] = array('گ', 'ﮓ', 'ﮔ', 'ﮕ');
        $chars[] = array('ل', 'ﻞ', 'ﻟ', 'ﻠ');
        $chars[] = array('م', 'ﻢ', 'ﻣ', 'ﻤ');
        $chars[] = array('ن', 'ﻦ', 'ﻧ', 'ﻨ');
        $chars[] = array('و', 'ﻮ', 'ﻭ', 'ﻮ');
        $chars[] = array('ؤ', 'ﺆ', 'ﺅ', 'ﺆ');
        $chars[] = array('ی', 'ﯽ', 'ﯾ', 'ﯿ');
        $chars[] = array('ي', 'ﻲ', 'ﻳ', 'ﻴ');
        $chars[] = array('ئ', 'ﺊ', 'ﺋ', 'ﺌ');
        $chars[] = array('ه', 'ﻪ', 'ﮬ', 'ﮭ');
        $chars[] = array('ۀ', 'ﮥ', 'ﮬ', 'ﮭ');
        $chars[] = array('ة', 'ﺔ', 'ﺗ', 'ﺘ');
        $chars[] = array(' ', ' ', ' ', ' ');
        $chars[] = array('0', '0', '0', '0');
        $chars[] = array('1', '1', '1', '1');
        $chars[] = array('2', '2', '2', '2');
        $chars[] = array('3', '3', '3', '3');
        $chars[] = array('4', '4', '4', '4');
        $chars[] = array('5', '5', '5', '5');
        $chars[] = array('6', '6', '6', '6');
        $chars[] = array('7', '7', '7', '7');
        $chars[] = array('8', '8', '8', '8');
        $chars[] = array('9', '9', '9', '9');
        // Start processing the reversed string
        $string = $result;
        $len = mb_strlen($string, 'utf-8');
        $result = '';
        for($i = 0; $i < $len; $i++) {
            $previous_char = $i > 0 ? mb_substr($string, $i - 1, 1, 'utf-8') : '';
            $current_char = mb_substr($string, $i, 1, 'utf-8');
            $next_char = $i < ($len - 1) ? mb_substr($string, $i + 1, 1, 'utf-8') : '';
            foreach($chars as $char) {
                if(in_array($current_char, $char)) {
                    if(!in_array($next_char, $spaces_after) && !in_array($previous_char, $spaces_before)) {
                        $result .= $char[3];
                    }
                    elseif(!in_array($previous_char, $spaces_before)) {
                            $result .= $char[2];
                    }
                    elseif(!in_array($next_char, $spaces_after)) {
                        $result .= $char[1];
                    }
                    else {
                        $result .= $char[0];
                    }
                }
            }
        }
        return $result;
    }
    $string = isset($_GET['string']) ? farsi_correct($_GET['string']) : '';
    $w = 300;
    $h = 200;
    $im = imagecreatetruecolor($w, $h);
    $c_green = imagecolorallocate($im, 127, 255, 127);
    $c_black = imagecolorallocate($im,   0,   0,   0);
    imagefill($im, ceil($w / 2), ceil($h / 2), $c_green);
    $box = imagettfbbox(10, 0, 'B Zar_0.ttf', $string);
    imagettftext($im, 10, 0, ($w - $box[4]) / 2, ($h - $box[5]) / 2, $c_black, 'B Zar_0.ttf', $string);
    header('Content-Type: image/png');
    imagepng($im);
    imagedestroy($im);
?>