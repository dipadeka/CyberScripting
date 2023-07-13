
<?php
 
// Check if form was submitted
if(isset($_POST['submit'])) {
 
    $upload_dir = 'uploads'.DIRECTORY_SEPARATOR;
    $allowed_types = array('jpg', 'png', 'jpeg', 'gif','py');
     
    $maxsize = 2 * 1024 * 1024;
    $domainName = $_POST['domainName'];
    // echo "domianNAme {$domainName}";
    // Checks if user sent an empty form
    if(!empty(array_filter($_FILES['files']['name']))) {
 
        // Loop through each file in files[] array
        foreach ($_FILES['files']['tmp_name'] as $key => $value) {
             
            $file_tmpname = $_FILES['files']['tmp_name'][$key];
            $file_name = $_FILES['files']['name'][$key];
            $file_size = $_FILES['files']['size'][$key];
            $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
 
            $filepath = $upload_dir.$file_name;
 
            if(in_array(strtolower($file_ext), $allowed_types)) {

                if(file_exists($filepath)) {
                    $filepath = $upload_dir.time().$file_name;
                    if( move_uploaded_file($file_tmpname, $filepath)) {
                        // echo "{$file_name} { $filepath}  successfully uploaded <br />";
                        $command = escapeshellcmd("python {$filepath} {$domainName}");
                        $output = shell_exec($command);
                        echo $output;
                    }
                    else {                    
                        echo "Error uploading {$file_name} <br />";
                    }
                }
                else {
                    if( move_uploaded_file($file_tmpname, $filepath)) {
                        // echo "{$file_name} {$filepath}  successfully uploaded <br />";
                        $command = escapeshellcmd("python {$filepath} {$domainName}");
                        $output = shell_exec($command);
                        echo $output;
                    }
                    else {                    
                        echo "Error uploading {$file_name} <br />";
                    }
                }
            }
            else {
                echo "Error uploading {$file_name} ";
                echo "({$file_ext} file type is not allowed)<br / >";
            }
        }

    }
    else {
        echo "No files selected.";
    }
}
 
?>
