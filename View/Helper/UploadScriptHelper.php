<?php

App::uses('HtmlHelper', 'View/Helper');

class UploadScriptHelper extends HtmlHelper {
    
    /**
     * @return css and js path
     * 
     */
    public function loadLibs() {
        //Lib css
        echo parent::css(
                array(
                    /* CSS to style the file input field as button and adjust the Bootstrap progress bars */
                    '/JqueryFileUpload/jQuery-File-Upload/css/jquery.fileupload-ui.css',
                    /* Bootstrap Image Gallery styles */
                    '/JqueryFileUpload/Bootstrap-Image-Gallery/css/bootstrap-image-gallery.min.css'
                )
        );

        //Lib js
        echo parent::script(
                array(
                    /* The jQuery UI widget factory, can be omitted if jQuery UI is already included */
                    '/JqueryFileUpload/jQuery-File-Upload/js/vendor/jquery.ui.widget.js',
                    /* The Templates plugin is included to render the upload/download listings */
                    '/JqueryFileUpload/JavaScript-Templates/tmpl.min.js',
                    /* The Load Image plugin is included for the preview images and image resizing functionality */
                    '/JqueryFileUpload/JavaScript-Load-Image/load-image.min.js',                                        
                    /* The Canvas to Blob plugin is included for image resizing functionality */
                    '/JqueryFileUpload/JavaScript-Canvas-to-Blob/canvas-to-blob.min.js',
                    '/JqueryFileUpload/Bootstrap-Image-Gallery/js/bootstrap-image-gallery.min.js',
                    /* The Iframe Transport is required for browsers without support for XHR file uploads */
                    '/JqueryFileUpload/jQuery-File-Upload/js/jquery.iframe-transport.js',
                    /* The basic File Upload plugin */
                    '/JqueryFileUpload/jQuery-File-Upload/js/jquery.fileupload.js',
                    /* The File Upload file processing plugin */
                    '/JqueryFileUpload/jQuery-File-Upload/js/jquery.fileupload-fp.js',
                    /* The File Upload user interface plugin */
                    '/JqueryFileUpload/jQuery-File-Upload/js/jquery.fileupload-ui.js'
                )
        );
    }

}

?>
