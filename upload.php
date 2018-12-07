<?php require_once './includes/header.php'; ?>
<?php require_once "./includes/classes/VideoDetailsFormProvider.php"; ?>

    <div class="column">
        <h2>Upload Page</h2>
        <?php   $formProvider = new VideoDetailsFormProvider( $connection ); ?>
        <?php   echo $formProvider->createUploadForm(); ?>
        
    </div>
<?php require_once './includes/footer.php'; ?>