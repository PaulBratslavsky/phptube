<?php 
    class VideoUploadData {

        // Creates private variables for the data that will be passed into the class
        public $videoDataArray, $title, $description, $privacy, $category, $uploadedBy;
        public function __construct( $videoDataArray, $title, $description, $privacy, $category, $uploadedBy  ) {
            
            // Bind private variables to passed in data
            $this->videoDataArray = $videoDataArray;
            $this->title = $title;
            $this->description = $description;
            $this->privacy = $privacy;
            $this->category =$category;
            $this->uploadedBy = $uploadedBy;
        }

    
    }
?>