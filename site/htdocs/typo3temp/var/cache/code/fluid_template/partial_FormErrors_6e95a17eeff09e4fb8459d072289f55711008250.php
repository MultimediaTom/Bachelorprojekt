<?php

class partial_FormErrors_6e95a17eeff09e4fb8459d072289f55711008250 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

<div class="formerrors">
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
				<div class="error errorMessage errorField field';
$array19 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field', $array19)]);

$output18 .= '">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\PrintfViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
						';
$array27 = array (
);
$output26 .= $renderingContext->getVariableProvider()->getByPath('propertyError.message', $array27);

$output26 .= '
					';
return $output26;
};
$arguments20 = array();
$arguments20['value'] = NULL;
$arguments20['arguments'] = array (
);
// Rendering Array
$array22 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['key'] = NULL;
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$arguments23['languageKey'] = NULL;
$arguments23['alternativeLanguageKeys'] = NULL;
$array25 = array (
);$arguments23['id'] = $renderingContext->getVariableProvider()->getByPath('propertyPath', $array25);
$array22['field'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);
$arguments20['arguments'] = $array22;
$renderChildrenClosure21 = ($arguments20['value'] !== null) ? function() use ($arguments20) { return $arguments20['value']; } : $renderChildrenClosure21;
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\Format\PrintfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output18 .= '
				</div>
			';
return $output18;
};
$arguments15 = array();
$arguments15['each'] = NULL;
$arguments15['as'] = NULL;
$arguments15['key'] = NULL;
$arguments15['reverse'] = false;
$arguments15['iteration'] = NULL;
$array17 = array (
);$arguments15['each'] = $renderingContext->getVariableProvider()->getByPath('propertyErrors', $array17);
$arguments15['as'] = 'propertyError';

$output14 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
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
);$arguments11['each'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors', $array13);
$arguments11['key'] = 'propertyPath';
$arguments11['as'] = 'propertyErrors';

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
	';
return $output10;
};
$arguments5 = array();
$arguments5['then'] = NULL;
$arguments5['else'] = NULL;
$arguments5['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array7 = array();
$array8 = array (
);$array7['0'] = $renderingContext->getVariableProvider()->getByPath('validationResults.flattenedErrors', $array8);

$expression9 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments5['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression9(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array7)
					),
					$renderingContext
				);
$arguments5['__thenClosure'] = $renderChildrenClosure6;

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
';
return $output4;
};
$arguments1 = array();
$arguments1['for'] = '';
$arguments1['as'] = 'validationResults';
$array3 = array (
);$arguments1['for'] = $renderingContext->getVariableProvider()->getByPath('for', $array3);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ValidationResultsViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
</div>


';

return $output0;
}


}
#