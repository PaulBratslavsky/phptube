<?php 
    class VideoDetailsFormProvider {
        
        private $connection;

        public function __construct( $connection ) {
            $this->connection = $connection;
        }

        public function createUploadForm() {
            $fileInput = $this->createFileInput();
            $titleInput = $this->createTitleInput();
            $descriptionInput = $this->createDescriptionInput();
            $privacyInput = $this->createPrivacyInput();
            $categoriesInput = $this->createCategoriesInput();
            $uploadButton = $this->createUploadButton();
            return "<form action='processing.php method='POST'>
                        {$fileInput}
                        {$titleInput}
                        {$descriptionInput}
                        {$privacyInput}
                        {$categoriesInput}
                        {$uploadButton}
                    </form>";
        }

        private function createFileInput() {
            
            return "<div class='form-group'>
                        <input type='file' class='form-control-file' name='fileInput' required>
                    </div>";
        }

        private function createTitleInput() {

            return "<div class='form-group'>
                        <input class='form-control' type='text' placeholder='Title' name='titleInput'>
                    </div>";

        }

        private function createDescriptionInput() {

            return "<div class='form-group'>
                        <textarea class='form-control' placeholder='Description' name='descriptionInput' rows='3'></textarea>
                    </div>";

        }

        private function createPrivacyInput() {

            return "<div class='form-group'>
                        <select class='form-control' name='privacyInput'>
                            <option value='0'>Private</option>
                            <option value='1'>Public</option>
                        </select>
                    </div>";

        }

        private function createCategoriesInput( ) {

            $query = $this->connection->prepare("SELECT * FROM categories"); 
            $query->execute();

            $html = "<div class='form-group'>
                        <select class='form-control' name='categoryInput'>";

            while ( $row = $query->fetch(PDO::FETCH_ASSOC) ) {
                $categorieName = $row['name'];
                $categorieId = $row['id'];
                $html .= "<option value='{$categorieId}'>{$categorieName}</option>";
            }

            $html .= "</select>
                    </div>";

            return $html;
        }

        private function createUploadButton() {
            return "<button type='submit' class='btn btn-primary mb-2' name='uploadButton' >Upload</button>";
        }
    }
?>
