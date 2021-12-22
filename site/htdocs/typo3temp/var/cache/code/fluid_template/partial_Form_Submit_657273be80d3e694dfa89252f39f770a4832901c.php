<?php

class partial_Form_Submit_657273be80d3e694dfa89252f39f770a4832901c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
    2 => 'TYPO3\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'register' => 
  array (
    0 => 'Evoweb\\SfRegister\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

<div class="col-6 offset-md-6 text-md-right mb-3 ';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('fieldName', $array1)]);

$output0 .= '">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['additionalAttributes'] = NULL;
$arguments2['data'] = NULL;
$arguments2['name'] = NULL;
$arguments2['value'] = NULL;
$arguments2['property'] = NULL;
$arguments2['disabled'] = NULL;
$arguments2['class'] = NULL;
$arguments2['dir'] = NULL;
$arguments2['id'] = NULL;
$arguments2['lang'] = NULL;
$arguments2['style'] = NULL;
$arguments2['title'] = NULL;
$arguments2['accesskey'] = NULL;
$arguments2['tabindex'] = NULL;
$arguments2['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['key'] = NULL;
$arguments4['id'] = NULL;
$arguments4['default'] = NULL;
$arguments4['arguments'] = NULL;
$arguments4['extensionName'] = NULL;
$arguments4['languageKey'] = NULL;
$arguments4['alternativeLanguageKeys'] = NULL;
$arguments4['id'] = 'submit_create';
$arguments2['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);
$arguments2['class'] = 'btn btn-primary';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '
</div>


';

return $output0;
}


}
#