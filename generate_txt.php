<?php
if (isset($_POST['submit'])) {
    $siteID = $_POST['siteid'];
    $alarmText = $_POST['alarm'];

    // Split the alarm text into lines
    $alarms = explode("\n", $alarmText);

    // Create the content for the .txt file
    $content = "";

    foreach ($alarms as $index => $alarm) {
        // Extract the alarm code and message
        $parts = explode('|', $alarm);
$code = trim(substr($parts[0], 0, strpos($parts[0], ':')));

// Extract $message1
$explodeColon = explode(':', $parts[0]);
$message1 = trim($explodeColon[1]);

// Extract $message2
$message2 = trim($parts[1]);

// Extract $message3
$message3 = trim($parts[2]);

$message4 = trim($parts[3]);


        // Determine the FieldReplaceableUnit value based on the code
        switch ($code) {
            case '9000101':
                $fru = '1';
                break;
            case '9000102':
                $fru = '2';
                break;
            case '9000103':
                $fru = '3';
                    break;
            case '9000104':
                $fru = '4';
                break;
            case '9000105':
                $fru = '5';
                break;
            case '9000106':
                $fru = '6';
                break;
            case '9000107':
                $fru = '7';
                break;
            case '9000108':
                $fru = '8';
                break;
            case '9000109':
                $fru = '9';
                break;
            case '9000110':
                $fru = '10';
                break;
            case '9000111':
                $fru = '11';
                break;
            case '9000112':
                $fru = '12';
                break;
            case '9000113':
                $fru = '13';
                break;
            case '9000114':
                $fru = '14';
                break;
            case '9000116':
                $fru = '16';
                break;
            case '9000117':
                $fru = '17';
                break;            
            default:
                $fru = '1'; // Default value
                break;
        }

        // Append to the content
        $content .= "cmedit set SubNetwork=ONRM_ROOT_MO,MeContext=$siteID,ManagedElement=$siteID,Equipment=1,FieldReplaceableUnit=SAU-1,AlarmPort=$fru userlabel=\"$message1\", priority=\"$message2\", status=\"$message3\", admin=\"$message4\"\n";
    }

    // Generate the file name with the siteID
    $fileName = $siteID . '_External_Alarm.txt';

    // Set headers to force download with the named file
    header('Content-Type: text/plain');
    header("Content-Disposition: attachment; filename=\"$fileName\"");

    // Output the content
    echo $content;
    exit;
} else {
    // Redirect if accessed directly
    header('Location: index.php');
    exit;
}
?>
