
<?php
$input = 'http://cdn.wonderfulengineering.com/wp-content/uploads/2013/11/Extraction-of-Diamonds.jpg';
// echo fopen($input,"r");
file_put_contents("assets/img/pixels.jpeg", $thepost['image']);
var_dump($thepost['image']);
	echo "<img src='".$thepost['image']."'>";

//     $dir = '/pictures';
//     $file_display = array('jpg', 'jpeg', 'png', 'gif');

//     if (file_exists($dir) == false) {
//     echo 'Directory \''. $dir. '\' not found!';
//     } else {
//     $dir_contents = scandir($dir);

//     foreach ($dir_contents as $file) {
//       $file_type = strtolower(end(explode('.', $file)));

//      if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true)     
// {
//             echo '<img src="../../../../../..'. $dir. '/'. $file. '" alt="'. $file. '" >';
//      }
//     }
//     }
// $fp = fopen('pic.jpg', 'w');
// fwrite($fp, file_get_contents($input));
?>