<?php 
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\Reader\Xls;


$name = $_FILES["fileToUpload"]["name"];
$tmp= explode(".", $name);
$ext = end($tmp);

    
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        if($ext == 'xls') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        } else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }
        
        $spreadsheet    = $reader->load($target_file); // Load file yang tadi diupload ke folder tmp
        $sheet          = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

        // echo json_encode($sheet);

        foreach($sheet as $x => $row) {
            // if ($x == 0) {
            //     continue;
            // }
                
                $umur       = $row['A'];
                $min3SD     = $row['B'];
                $min2SD     = $row['C'];
                $min1SD     = $row['D'];
                $median     = $row['E'];
                $plus1SD    = $row['F'];
                $plus2SD    = $row['G'];
                $plus3SD    = $row['H'];

                echo $umur."<BR>";

        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

?>