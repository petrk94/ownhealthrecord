<?php
$upload_folder = 'uploads/'; //The Upload directory
$filename = pathinfo($_FILES['datei']['name'], PATHINFO_FILENAME);
$extension = strtolower(pathinfo($_FILES['datei']['name'], PATHINFO_EXTENSION));
 
 
//Check file extension
$allowed_extensions = array('png', 'jpg', 'jpeg', 'gif');
if(!in_array($extension, $allowed_extensions)) {
 die("not allowed file extension. Only PNG, JPG, JPEG and GIF are allowed");
}
 
//Check file size
$max_size = 500*1024; //500 KB
if($_FILES['datei']['size'] > $max_size) {
 die("Please dont upload files larger than 500kb");
}
 
//Check whether the image contains no issues
if(function_exists('exif_imagetype')) { //exif_imagetype need exif-extension
 $allowed_types = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
 $detected_type = exif_imagetype($_FILES['datei']['tmp_name']);
 if(!in_array($detected_type, $allowed_types)) {
 die("Only upload of image files is allowed");
 }
}
 
//Path to upload location
$new_path = $upload_folder.$filename.'.'.$extension;
 
//New file name, if file already exist
 $id = 1;
if(file_exists($new_path)) { //If file exists, add number to the file name
 do {
 $new_path = $upload_folder.$filename.'_'.$id.'.'.$extension;
 $id++;
 } while(file_exists($new_path));
}
 
//If everything fine, move file to new location
move_uploaded_file($_FILES['datei']['tmp_name'], $new_path);
echo 'Image uploaded successfully to: <a href="'.$new_path.'">'.$new_path.'</a>';
?>
