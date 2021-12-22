<?php

class partial_FieldError_6bca7dbe91b60b161887659b0976d17dcabecfe7 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
			<div class="error errorMessage errorField field';
$array15 = array (
);
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field', $array15)]);

$output14 .= '">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\PrintfViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
					';
$array23 = array (
);
$output22 .= $renderingContext->getVariableProvider()->getByPath('propertyError.message', $array23);

$output22 .= '
				';
return $output22;
};
$arguments16 = array();
$arguments16['value'] = NULL;
$arguments16['arguments'] = array (
);
// Rendering Array
$array18 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['key'] = NULL;
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['languageKey'] = NULL;
$arguments19['alternativeLanguageKeys'] = NULL;
$array21 = array (
);$arguments19['id'] = $renderingContext->getVariableProvider()->getByPath('field', $array21);
$array18['field'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);
$arguments16['arguments'] = $array18;
$renderChildrenClosure17 = ($arguments16['value'] !== null) ? function() use ($arguments16) { return $arguments16['value']; } : $renderChildrenClosure17;
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\Format\PrintfViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext)]);

$output14 .= '
			</div>
		';
return $output14;
};
$arguments11 = array();
$arguments11['each'] = NULL;
$arguments11['as'] = NULL;
$arguments11['key'] = NULL;
$arguments11['reverse'] = false;
$arguments11['iteration'] = NULL;
$array13 = array (
);$arguments11['each'] = $renderingContext->getVariableProvider()->getByPath('propertyErrors', $array13);
$arguments11['as'] = 'propertyError';

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
	';
return $output10;
};
$arguments7 = array();
$arguments7['each'] = NULL;
$arguments7['as'] = NULL;
$arguments7['key'] = NULL;
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$array9 = array (
);$arguments7['each'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors', $array9);
$arguments7['as'] = 'propertyErrors';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
';
return $output6;
};
$arguments1 = array();
$arguments1['for'] = '';
$arguments1['as'] = 'validationResults';
$output3 = '';
$array4 = array (
);
$output3 .= $renderingContext->getVariableProvider()->getByPath('for', $array4);

$output3 .= '.';
$array5 = array (
);
$output3 .= $renderingContext->getVariableProvider()->getByPath('field', $array5);
$arguments1['for'] = $output3;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '


';

return $output0;
}


}
#