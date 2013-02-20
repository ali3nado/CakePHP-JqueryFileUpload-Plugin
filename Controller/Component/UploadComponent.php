<?php

App::uses('Component', 'Controller');
App::import('Vendor', 'JqueryFileUpload.UploadHandler', array('file' => 'UploadHandler.php'));

class UploadComponent extends Component {

    public function uploadFile($options = null) {
        return new UploadHandler($options);
    }

    public function deleteFile($options = null) {
        $file = new UploadHandler($options, false);
        return $file->delete();
    }

}

?>
