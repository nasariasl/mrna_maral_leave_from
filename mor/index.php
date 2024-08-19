<?php
error_reporting(0);
require_once('persian_txt2pic.php');

if(!isset($_POST['mor-Radio'])){
    echo '<html dir="rtl">
        <head><title>Persian_log2vis Example</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        </head><body>
        <form method="get">
        <textarea name="name">ناخدا صفر و یک</textarea>
        <textarea name="nowdate">1402/10/09</textarea>
        <input type="submit" name="submit" value="submit">            
        </body></html>';
}else{
    $mor_Radio = $_POST['mor-Radio'];
    $mor_day = $_POST['mor-day'];
    $mor_date = $_POST['mor-date'];
    $name = $_POST['mor-name'];
    $nowdate = $_POST['mor-form-date'];
    $vahed = $_POST['mor-vahed'];
    $start_time = $_POST['mor-start-time'];
    $end_time = $_POST['mor-end-time'];
    $mor_num = $_POST['mor-num'];
    
//Convert
    persian_log2vis($name);
    persian_log2vis($mor_day);
    persian_log2vis($vahed);
    
    // Create the image
    //$im = imagecreatetruecolor(400, 200);
//mrna
if ($mor_Radio == 'saat') { $im = imagecreatefromjpeg('saati.jpg'); } else { $im = imagecreatefromjpeg('rooz.jpg'); } 

    // Create some colors
    $white = imagecolorallocate($im, 255, 255, 255);
    $black = imagecolorallocate($im, 0, 0, 0);
    
    // Replace path by your own font path
    $font = 'fonts/Nazaninb.ttf';

if ($mor_Radio == 'saat') { 
//mor-name
    // @imagettftext($im, 12, 0, 543, 126, $black, $font, $name);
    $helper = imageTTFBbox(12,0,$font,$name);
        // print_r($helper);
    $base_w = abs($helper[4] - $helper[0]);
    // $base_height = abs($base_coords[5] - $base_coords[1]);
    // $base_descent = abs($base_coords[1]);
    @imagettftext($im, 12, -1,735-$base_w, 142, $black, $font, $name);

//mor-vahed
    $helper = imageTTFBbox(12,0,$font,$vahed);
    $base_w = abs($helper[4] - $helper[0]);
    @imagettftext($im, 12, -1,224-$base_w, 142, $black, $font, $vahed);
    
//mor_day
    $mor_day_helper = imageTTFBbox(12,0,$font,$mor_day);
    $base_loc_mor_day = abs($mor_day_helper[4] - $mor_day_helper[0]);
    // $base_height = abs($base_coords[5] - $base_coords[1]);
    // $base_descent = abs($base_coords[1]);
    @imagettftext($im, 12, -1,289-$base_loc_mor_day, 184, $black, $font, $mor_day);
    
    //mor_date
    $mor_day_helper = imageTTFBbox(12,0,$font,$mor_date);
    $base_loc_mor_day = abs($mor_day_helper[4] - $mor_day_helper[0]);
    // $base_height = abs($base_coords[5] - $base_coords[1]);
    // $base_descent = abs($base_coords[1]);
    @imagettftext($im, 12, -1,183-$base_loc_mor_day, 184, $black, $font, $mor_date);

//mor_date
    $mor_day_helper = imageTTFBbox(12,0,$font,$mor_day);
    $base_loc_mor_day = abs($mor_day_helper[4] - $mor_day_helper[0]);
    // $base_height = abs($base_coords[5] - $base_coords[1]);
    // $base_descent = abs($base_coords[1]);
    @imagettftext($im, 12, -1,289-$base_loc_mor_day, 184, $black, $font, $mor_day);
    
//now Date
    $helper = imageTTFBbox(12,0,$font,$nowdate);
    $base_w = abs($helper[4] - $helper[0]);
    @imagettftext($im, 12, 0, 792-$base_w, 51, $black, $font, $nowdate);
    @imagettftext($im, 12, 0, 744-$base_w, 220, $black, $font, $nowdate);
    
//start Time
    $helper = imageTTFBbox(12,0,$font,$start_time);
    $base_w = abs($helper[4] - $helper[0]);
    @imagettftext($im, 12, 0, 656-$base_w, 184, $black, $font, $start_time);
//end Time
    $helper = imageTTFBbox(12,0,$font,$end_time);
    $base_w = abs($helper[4] - $helper[0]);
    @imagettftext($im, 12, 0, 540-$base_w, 184, $black, $font, $end_time);
    
    //mor_num
    $helper = imageTTFBbox(12,0,$font,$mor_num);
    $base_w = abs($helper[4] - $helper[0]);
    @imagettftext($im, 12, 0, 402-$base_w, 184, $black, $font, $mor_num);
    
} else { 
    
//mor-name
    // @imagettftext($im, 12, 0, 543, 126, $black, $font, $name);
    $helper = imageTTFBbox(12,0,$font,$name);
        // print_r($helper);
    $base_w = abs($helper[4] - $helper[0]);
    // $base_height = abs($base_coords[5] - $base_coords[1]);
    // $base_descent = abs($base_coords[1]);
    @imagettftext($im, 12, -1,735-$base_w, 142, $black, $font, $name);

//mor-vahed
    $helper = imageTTFBbox(12,0,$font,$vahed);
    $base_w = abs($helper[4] - $helper[0]);
    @imagettftext($im, 12, -1,227-$base_w, 142, $black, $font, $vahed);

//now Date
    $helper = imageTTFBbox(12,0,$font,$nowdate);
    $base_w = abs($helper[4] - $helper[0]);
    @imagettftext($im, 12, 0, 792-$base_w, 51, $black, $font, $nowdate);
    @imagettftext($im, 12, 0, 744-$base_w, 222, $black, $font, $nowdate);
    
    //start Time
    $helper = imageTTFBbox(12,0,$font,$start_time);
    $base_w = abs($helper[4] - $helper[0]);
    @imagettftext($im, 12, 0, 666-$base_w, 184, $black, $font, $start_time);
//end Time
    $helper = imageTTFBbox(12,0,$font,$end_time);
    $base_w = abs($helper[4] - $helper[0]);
    @imagettftext($im, 12, 0, 526-$base_w, 184, $black, $font, $end_time);
    
//mor_num
    $helper = imageTTFBbox(12,0,$font,$mor_num);
    $base_w = abs($helper[4] - $helper[0]);
    @imagettftext($im, 12, 0, 351-$base_w, 184, $black, $font, $mor_num);
} 
    // Set the content-type
//header('Content-type: image/png');
header('Content-type: image/jpeg');
header('Content-Disposition: attachment; filename="'.$_POST['mor-name']."_".$nowdate."_".$mor_Radio.'".jpg"');

    
    // Using imagepng() results in clearer text compared with imagejpeg()
    //imagepng($im);
    imagejpeg($im);
    imagedestroy($im);
}//else1
?>
