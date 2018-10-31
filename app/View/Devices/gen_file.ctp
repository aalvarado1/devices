<!-- File: /app/View/Devices/gen_file.ctp -->

<h1>Save Generated File</h1>
<!--<?php
echo '<pre>'; var_dump($foos); echo '</pre>';
?>-->

<?php echo $this->Form->create('Device', array('url' => 'saveFile')); ?>
<?php
$deviceFiles = "";
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
                    $answer = '<b>' . next($foos) . '</b>';
                    $replaceTxt = str_replace("[ans]", $answer, $fileLine);
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
            $fileToSave = fread($displayFile, filesize($tempFileDir));
            echo $fileToSave;
            $deviceFiles =  $deviceFiles . $fileToSave;
            echo '</pre>';
            //done with temp file, close it.

        }
    endforeach;
$answerList = implode(" ",$foos);
//$answerList = json_encode($foos);
echo '<input type="hidden" name="document" value="' . $deviceFiles . '">';
echo '<input type="hidden" name="answer_list" value="' . $answerList . '">';
echo '<br>';
echo '<label id="file_name_lb">File Name</label>';
echo '<input type="text" name="document_name">';
echo $this->Form->end('Save File');
?>

