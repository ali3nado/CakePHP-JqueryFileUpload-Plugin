<?php

App::uses('HtmlHelper', 'View/Helper');

class UploadTemplateHelper extends HtmlHelper {
    
    /**
     * 
     * @param type $options
     * @return element for view
     * 
     */
    public function renderForm($options = array()) {
        
        /*
         * $options = array('action' => 'path action for upload');
         */
        
        $action = isset($options['action']) ? $options['action'] : null;        
        return $this->_View->element('JqueryFileUpload.tmpl_form', array('action' => $action));
    }
    
    /**
     * 
     * @param type $options
     * @return element for view
     * 
     */
    public function renderListFiles($options = array()) {
        /*
         * $options = array('action' => 'path action for delete file');
         */
        $action_delete = isset($options['action_delete']) ? $options['action_delete'] : null;        
        $tmpl  = $this->_View->element('JqueryFileUpload.tmpl_files');
        $tmpl .= $this->_View->element('JqueryFileUpload.tmpl_donwload', array('action_delete' => $action_delete));
        return $tmpl;
    }

}

?>