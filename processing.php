<?php require_once './includes/header.php'; ?>
<?php require_once './includes/classes/VideoUploadData.php'; ?>
<?php require_once './includes/classes/VideoProcessor.php'; ?>


<?php if ( !isset( $_POST['uploadButton'] ) ) {
    echo "<h2>No data to send</h2>";
    exit();
}

// 1. create file upload data
$videoUploadData = new VideoUploadData( 
    $_POST['fileInput'], 
    $_POST['titleInput'], 
    $_POST['descriptionInput'], 
    $_POST['privacyInput'], 
    $_POST['categoryInput'], 
    'Dummy Data' );

// 2. Process video data ( upload )
$videoProcessor = new VideoProcessor( $connection );
$wasSuccessful = $videoProcessor->upload( $videoUploadData );

// 3. Check if upload completed