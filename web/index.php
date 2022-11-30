<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
require __DIR__ . '/../vendor/autoload.php';

use OctopusEnergy\TechChallenge\Factory;

$factory = new Factory();

$exportService = $factory->createExportService();
$fileHeader = $exportService->exportFileHeader();
$mpanCores = $exportService->exportMpanCores();
?>
<h1>ZHV File Header</h1>
<table>
    <tr>
        <th>File Identifier</th>
        <th>Data flow and Version Number</th>
        <th>From Market Participant Role Code</th>
        <th>File Identifier</th>
        <th>From Market Participant Id</th>
        <th>To Market Participant Role Code</th>
        <th>To Market Participant Id</th>
        <th>File creation timestamp</th>
        <th>Sending Application Id</th>
        <th>Receiving Application Id</th>
        <th>Broadcast</th>
        <th>Test data flag</th>
    </tr>
    <tr>
        <td><?php echo $fileHeader[0]['file_id']; ?></td>
        <td><?php echo $fileHeader[0]['data_flow_and_version_number']; ?></td>
        <td><?php echo $fileHeader[0]['from_market_participant_role_code']; ?></td>
        <td><?php echo $fileHeader[0]['from_market_participant_id']; ?></td>
        <td><?php echo $fileHeader[0]['to_market_participant_role_code']; ?></td>
        <td><?php echo $fileHeader[0]['to_market_participant_role_code']; ?></td>
        <td><?php echo $fileHeader[0]['creation_timestamp']; ?></td>
        <td><?php echo $fileHeader[0]['sending_application_id']; ?></td>
        <td><?php echo $fileHeader[0]['receiving_application_id']; ?></td>
        <td><?php echo $fileHeader[0]['broadcast']; ?></td>
        <td><?php echo $fileHeader[0]['test_data_flag']; ?></td>
    </tr>
</table>
<br>
<h1>MPAN Cores</h1>
<table>
    <tr>
        <th>MPAN Core</th>
        <th>BSC Validation Status</th>
    </tr>
    <?php foreach ($mpanCores as $mpanCore) { ?>
    <tr>
        <td><?php echo $mpanCore['mpan_core']; ?></td>
        <td><?php echo $mpanCore['bsc_validation_status']; ?></td>
    </tr>
    <?php }?>
</table>

</body>
</html>
<style>
    table, th, td {
        border: 1px solid black;
    }
</style>
