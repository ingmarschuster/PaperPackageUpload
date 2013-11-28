<?php


import('lib.pkp.classes.form.validation.FormValidator');

class FormValidatorUpload extends FormValidator {

        /*
	*Constructor
        * @param $form Form the associated form
	* @param $field string the name of the associated field
        * @param $type string the type of check, either "required" or "optional"
        * @param $message string the error message for validation failures (i18n key)
        */
	function FormValidatorUpload(&$form, $field, $type, $message){
          parent::FormValidator($form, $field, $type, $message);
        }

         /**
         * @see FormValidator::isValid()
         * @return boolean
         */
        function isValid() {
        $uploadFieldId = $this->getFieldValue();
	foreach ($uploadFieldId as $value) {
           if (!is_numeric($value)){ 
           return false; 

          }
          return true;
          }
       }    
       
   }
?>
