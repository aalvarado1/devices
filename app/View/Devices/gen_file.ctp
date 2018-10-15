<!-- File: /app/View/Devices/gen_file.ctp -->

<h1>Save Generated File</h1>
<?php
echo '<pre>'; var_dump($foos); echo '</pre>';
?>

<?php echo $this->Form->create('Device'); ?>

<?php
    foreach ($devices as $device):
        if($foos[$device['Device']['name']] > 0) {
            //Grab file from folder
            $orgFile = $device['Device']['file_path'];
            $myfile = fopen($orgFile, "r") or die("Unable to find file!");
            //Create a temp file for storage and buffer
            $tempFileDir = $orgFile . ".temp";
            $tempFile = fopen($tempFileDir, "w") or die("Unable to open file!");
            //Go through file till the end
            while(!feof($myfile)) {
                //Reading line
                $fileLine = fgets($myfile);
                if(strpos($fileLine, "[ans]")) {
                    //Found a replace marker, replace and write
                    $replaceTxt = str_replace("[ans]", "questionAns", $fileLine);
                    fwrite($tempFile, $replaceTxt);
                } else {
                    //write reg line to temp file
                    fwrite($tempFile, $fileLine);
                }
            }
            //done with file, close it.
            fclose($myfile);
            fclose($tempFile);
            //Display temp file
            echo '<pre>';
            $displayFile = fopen($tempFileDir, "r") or die("Unable to find file!");
            echo fread($displayFile, filesize($tempFileDir));
            echo '</pre>';
            //done with temp file, close it.

        }
    endforeach;
?>
<?php echo $this->Form->input('File Name'); ?>
<?php echo $this->Form->end('Save File'); ?>

