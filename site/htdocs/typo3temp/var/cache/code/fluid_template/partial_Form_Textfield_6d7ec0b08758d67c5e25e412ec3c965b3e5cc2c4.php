<?php

class partial_Form_Textfield_6d7ec0b08758d67c5e25e412ec3c965b3e5cc2c4 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

<div class="col-md-6 mb-3 ';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('fieldName', $array1)]);

$output0 .= '">
	<label for="';
$array2 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('fieldName', $array2)]);

$output0 .= '">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['key'] = NULL;
$arguments3['id'] = NULL;
$arguments3['default'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$arguments3['languageKey'] = NULL;
$arguments3['alternativeLanguageKeys'] = NULL;
$array5 = array (
);$arguments3['id'] = $renderingContext->getVariableProvider()->getByPath('fieldName', $array5);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['section'] = NULL;
$arguments6['partial'] = NULL;
$arguments6['delegate'] = NULL;
$arguments6['renderable'] = NULL;
$arguments6['arguments'] = array (
);
$arguments6['optional'] = false;
$arguments6['default'] = NULL;
$arguments6['contentAs'] = NULL;
$arguments6['debug'] = true;
$arguments6['partial'] = 'Required';
// Rendering Array
$array8 = array();
$array9 = array (
);$array8['field'] = $renderingContext->getVariableProvider()->getByPath('fieldName', $array9);
$arguments6['arguments'] = $array8;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '
	</label>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['section'] = NULL;
$arguments10['partial'] = NULL;
$arguments10['delegate'] = NULL;
$arguments10['renderable'] = NULL;
$arguments10['arguments'] = array (
);
$arguments10['optional'] = false;
$arguments10['default'] = NULL;
$arguments10['contentAs'] = NULL;
$arguments10['debug'] = true;
$arguments10['partial'] = 'FieldError';
// Rendering Array
$array12 = array();
$array12['for'] = 'user';
$array13 = array (
);$array12['field'] = $renderingContext->getVariableProvider()->getByPath('fieldName', $array13);
$arguments10['arguments'] = $array12;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['additionalAttributes'] = NULL;
$arguments14['data'] = NULL;
$arguments14['name'] = NULL;
$arguments14['value'] = NULL;
$arguments14['property'] = NULL;
$arguments14['autofocus'] = NULL;
$arguments14['disabled'] = NULL;
$arguments14['maxlength'] = NULL;
$arguments14['readonly'] = NULL;
$arguments14['size'] = NULL;
$arguments14['placeholder'] = NULL;
$arguments14['pattern'] = NULL;
$arguments14['errorClass'] = 'f3-form-error';
$arguments14['class'] = NULL;
$arguments14['dir'] = NULL;
$arguments14['id'] = NULL;
$arguments14['lang'] = NULL;
$arguments14['style'] = NULL;
$arguments14['title'] = NULL;
$arguments14['accesskey'] = NULL;
$arguments14['tabindex'] = NULL;
$arguments14['onclick'] = NULL;
$arguments14['required'] = false;
$arguments14['type'] = 'text';
$array16 = array (
);$arguments14['property'] = $renderingContext->getVariableProvider()->getByPath('fieldName', $array16);
$array17 = array (
);$arguments14['id'] = $renderingContext->getVariableProvider()->getByPath('fieldName', $array17);
$array18 = array (
);$arguments14['placeholder'] = $renderingContext->getVariableProvider()->getByPath('options.placeholder', $array18);
$arguments14['class'] = 'form-control';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output0 .= '
</div>


';

return $output0;
}


}
#