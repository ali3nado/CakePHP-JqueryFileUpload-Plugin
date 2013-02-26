#JqueryFileUpload Plugin for CakePHP2.x
The JqueryFileUpload Plugin provides an easy-to-use feature jQuery-File-Upload in CakePHP2.x

#Version
This v1.0

## Description
JqueryFileUpload Plugin for CakePHP2.x is a practical way to use the library [jQuery-File-Upload](https://github.com/blueimp/jQuery-File-Upload)

## Libs
* [jQuery-File-Upload, from blueimp](https://github.com/blueimp/jQuery-File-Upload)
* [Bootstrap-Image-Gallery, from blueimp](https://github.com/blueimp/Bootstrap-Image-Gallery)
* [JavaScript-Load-Image, from blueimp](https://github.com/blueimp/JavaScript-Load-Image)
* [JavaScript-Canvas-to-Blob, from blueimp](https://github.com/blueimp/JavaScript-Canvas-to-Blob)
* [JavaScript-Templates, from blueimp](https://github.com/blueimp/JavaScript-Templates)

## Bootstrap
* [Bootstrap, from Twitter](http://twitter.github.com/bootstrap/)

## Usage
Controller/AppController.php:

	<?php
	class AppController extends Controller {
            public $components = array('JqueryFileUpload.Upload');
            public $helpers = array('JqueryFileUpload.UploadScript', 'JqueryFileUpload.UploadTemplate');


            public function deleteFile($file) {
                $this->autoRender = false;
                if ($this->request->is('delete')) {
                    $_GET['file'] = $file;
                    $this->Upload->deleteFile(array('image_versions' => array('' => array(), 'medium' => array(), 'thumbnail' => array())));
                }
            }


            public function upload() {
                $this->autoRender = false;
                $this->Upload->uploadFile(array(
                    'image_versions' => array(
                        '' => array(
                            'max_width' => 500,
                            'max_height' => 375,
                            'jpeg_quality' => 95
                        ),
                        'medium' => array(
                            'max_width' => 160,
                            'max_height' => 160,
                            'jpeg_quality' => 80
                        ),
                        'thumbnail' => array(
                            'max_width' => 100,
                            'max_height' => 100
                        )
                    )
                ));
            }
           
        }

Your View file:
   
    <?php
    
    	 /* Load templates */
        echo $this->UploadTemplate->renderForm(array('action' => 'upload')); //Set action for form
        echo $this->UploadTemplate->renderListFiles(array('action_delete' => 'deleteFile')); //Set action for remove files
    
        /* Load libs js e css jQuery-File-Upload and dependences */
        echo $this->UploadScript->loadLibs();
        echo $this->Html->scriptBlock("
            $(function () {
                $('#fileupload').fileupload({
                        xhrFields   : {withCredentials: true},
                        url         : 'upload' //Set your action
                });
            });    
        ");
    ?>

##License

The MIT License (MIT)

Copyright (c) 2013 Alexandro Luiz Dias

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
