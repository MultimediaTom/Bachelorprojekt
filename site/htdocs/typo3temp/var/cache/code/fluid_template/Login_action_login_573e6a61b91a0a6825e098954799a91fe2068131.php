<?php

class Login_action_login_573e6a61b91a0a6825e098954799a91fe2068131 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <fieldset>
        <legend>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['key'] = 'login';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
        </legend>
        <div>
            <label>
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
$arguments3['key'] = 'username';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['additionalAttributes'] = NULL;
$arguments5['data'] = NULL;
$arguments5['name'] = NULL;
$arguments5['value'] = NULL;
$arguments5['property'] = NULL;
$arguments5['autofocus'] = NULL;
$arguments5['disabled'] = NULL;
$arguments5['maxlength'] = NULL;
$arguments5['readonly'] = NULL;
$arguments5['size'] = NULL;
$arguments5['placeholder'] = NULL;
$arguments5['pattern'] = NULL;
$arguments5['errorClass'] = 'f3-form-error';
$arguments5['class'] = NULL;
$arguments5['dir'] = NULL;
$arguments5['id'] = NULL;
$arguments5['lang'] = NULL;
$arguments5['style'] = NULL;
$arguments5['title'] = NULL;
$arguments5['accesskey'] = NULL;
$arguments5['tabindex'] = NULL;
$arguments5['onclick'] = NULL;
$arguments5['required'] = false;
$arguments5['type'] = 'text';
$arguments5['name'] = 'user';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
            </label>
        </div>
        <div>
            <label>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['key'] = NULL;
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$arguments7['languageKey'] = NULL;
$arguments7['alternativeLanguageKeys'] = NULL;
$arguments7['key'] = 'password';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output0 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\PasswordViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['additionalAttributes'] = NULL;
$arguments9['data'] = NULL;
$arguments9['name'] = NULL;
$arguments9['value'] = NULL;
$arguments9['property'] = NULL;
$arguments9['disabled'] = NULL;
$arguments9['maxlength'] = NULL;
$arguments9['placeholder'] = NULL;
$arguments9['readonly'] = NULL;
$arguments9['size'] = NULL;
$arguments9['errorClass'] = 'f3-form-error';
$arguments9['class'] = NULL;
$arguments9['dir'] = NULL;
$arguments9['id'] = NULL;
$arguments9['lang'] = NULL;
$arguments9['style'] = NULL;
$arguments9['title'] = NULL;
$arguments9['accesskey'] = NULL;
$arguments9['tabindex'] = NULL;
$arguments9['onclick'] = NULL;
$arguments9['name'] = 'pass';
// Rendering Array
$array11 = array();
$array11['rsa-encryption'] = '';
$arguments9['data'] = $array11;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\PasswordViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '
            </label>
        </div>

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
            <div>
                <label>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['key'] = NULL;
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$arguments18['languageKey'] = NULL;
$arguments18['alternativeLanguageKeys'] = NULL;
$arguments18['id'] = 'permalogin';

$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext)]);

$output17 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['additionalAttributes'] = NULL;
$arguments42['data'] = NULL;
$arguments42['name'] = NULL;
$arguments42['value'] = NULL;
$arguments42['property'] = NULL;
$arguments42['class'] = NULL;
$arguments42['dir'] = NULL;
$arguments42['id'] = NULL;
$arguments42['lang'] = NULL;
$arguments42['style'] = NULL;
$arguments42['title'] = NULL;
$arguments42['accesskey'] = NULL;
$arguments42['tabindex'] = NULL;
$arguments42['onclick'] = NULL;
$arguments42['name'] = 'permalogin';
$arguments42['value'] = 0;
// Rendering Array
$array44 = array();
$array44['disabled'] = 'disabled';
$arguments42['additionalAttributes'] = $array44;

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['additionalAttributes'] = NULL;
$arguments45['data'] = NULL;
$arguments45['name'] = NULL;
$arguments45['value'] = NULL;
$arguments45['property'] = NULL;
$arguments45['disabled'] = NULL;
$arguments45['errorClass'] = 'f3-form-error';
$arguments45['class'] = NULL;
$arguments45['dir'] = NULL;
$arguments45['id'] = NULL;
$arguments45['lang'] = NULL;
$arguments45['style'] = NULL;
$arguments45['title'] = NULL;
$arguments45['accesskey'] = NULL;
$arguments45['tabindex'] = NULL;
$arguments45['onclick'] = NULL;
$arguments45['checked'] = NULL;
$arguments45['multiple'] = false;
$arguments45['name'] = 'permalogin';
$arguments45['id'] = 'permalogin';
$arguments45['value'] = 1;
// Rendering Boolean node
// Rendering Array
$array47 = array();
$array47['0'] = 'checked';

$expression48 = function($context) {return "checked";};
$arguments45['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression48(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array47)
					),
					$renderingContext
				);

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output41 .= '
                        ';
return $output41;
};
$arguments39 = array();

$output38 .= '';

$output38 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['additionalAttributes'] = NULL;
$arguments52['data'] = NULL;
$arguments52['name'] = NULL;
$arguments52['value'] = NULL;
$arguments52['property'] = NULL;
$arguments52['class'] = NULL;
$arguments52['dir'] = NULL;
$arguments52['id'] = NULL;
$arguments52['lang'] = NULL;
$arguments52['style'] = NULL;
$arguments52['title'] = NULL;
$arguments52['accesskey'] = NULL;
$arguments52['tabindex'] = NULL;
$arguments52['onclick'] = NULL;
$arguments52['name'] = 'permalogin';
$arguments52['value'] = 0;

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['additionalAttributes'] = NULL;
$arguments54['data'] = NULL;
$arguments54['name'] = NULL;
$arguments54['value'] = NULL;
$arguments54['property'] = NULL;
$arguments54['disabled'] = NULL;
$arguments54['errorClass'] = 'f3-form-error';
$arguments54['class'] = NULL;
$arguments54['dir'] = NULL;
$arguments54['id'] = NULL;
$arguments54['lang'] = NULL;
$arguments54['style'] = NULL;
$arguments54['title'] = NULL;
$arguments54['accesskey'] = NULL;
$arguments54['tabindex'] = NULL;
$arguments54['onclick'] = NULL;
$arguments54['checked'] = NULL;
$arguments54['multiple'] = false;
$arguments54['name'] = 'permalogin';
$arguments54['id'] = 'permalogin';
$arguments54['value'] = 1;

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output51 .= '
                        ';
return $output51;
};
$arguments49 = array();
$arguments49['if'] = NULL;

$output38 .= '';

$output38 .= '
                    ';
return $output38;
};
$arguments20 = array();
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$arguments20['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['0'] = $renderingContext->getVariableProvider()->getByPath('permaloginStatus', $array36);
$array35['1'] = ' == 1';

$expression37 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments20['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)
					),
					$renderingContext
				);
$arguments20['__thenClosure'] = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['additionalAttributes'] = NULL;
$arguments23['data'] = NULL;
$arguments23['name'] = NULL;
$arguments23['value'] = NULL;
$arguments23['property'] = NULL;
$arguments23['class'] = NULL;
$arguments23['dir'] = NULL;
$arguments23['id'] = NULL;
$arguments23['lang'] = NULL;
$arguments23['style'] = NULL;
$arguments23['title'] = NULL;
$arguments23['accesskey'] = NULL;
$arguments23['tabindex'] = NULL;
$arguments23['onclick'] = NULL;
$arguments23['name'] = 'permalogin';
$arguments23['value'] = 0;
// Rendering Array
$array25 = array();
$array25['disabled'] = 'disabled';
$arguments23['additionalAttributes'] = $array25;

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['additionalAttributes'] = NULL;
$arguments26['data'] = NULL;
$arguments26['name'] = NULL;
$arguments26['value'] = NULL;
$arguments26['property'] = NULL;
$arguments26['disabled'] = NULL;
$arguments26['errorClass'] = 'f3-form-error';
$arguments26['class'] = NULL;
$arguments26['dir'] = NULL;
$arguments26['id'] = NULL;
$arguments26['lang'] = NULL;
$arguments26['style'] = NULL;
$arguments26['title'] = NULL;
$arguments26['accesskey'] = NULL;
$arguments26['tabindex'] = NULL;
$arguments26['onclick'] = NULL;
$arguments26['checked'] = NULL;
$arguments26['multiple'] = false;
$arguments26['name'] = 'permalogin';
$arguments26['id'] = 'permalogin';
$arguments26['value'] = 1;
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array28['0'] = 'checked';

$expression29 = function($context) {return "checked";};
$arguments26['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression29(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output22 .= '
                        ';
return $output22;
};
$arguments20['__elseClosures'][] = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['additionalAttributes'] = NULL;
$arguments31['data'] = NULL;
$arguments31['name'] = NULL;
$arguments31['value'] = NULL;
$arguments31['property'] = NULL;
$arguments31['class'] = NULL;
$arguments31['dir'] = NULL;
$arguments31['id'] = NULL;
$arguments31['lang'] = NULL;
$arguments31['style'] = NULL;
$arguments31['title'] = NULL;
$arguments31['accesskey'] = NULL;
$arguments31['tabindex'] = NULL;
$arguments31['onclick'] = NULL;
$arguments31['name'] = 'permalogin';
$arguments31['value'] = 0;

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['additionalAttributes'] = NULL;
$arguments33['data'] = NULL;
$arguments33['name'] = NULL;
$arguments33['value'] = NULL;
$arguments33['property'] = NULL;
$arguments33['disabled'] = NULL;
$arguments33['errorClass'] = 'f3-form-error';
$arguments33['class'] = NULL;
$arguments33['dir'] = NULL;
$arguments33['id'] = NULL;
$arguments33['lang'] = NULL;
$arguments33['style'] = NULL;
$arguments33['title'] = NULL;
$arguments33['accesskey'] = NULL;
$arguments33['tabindex'] = NULL;
$arguments33['onclick'] = NULL;
$arguments33['checked'] = NULL;
$arguments33['multiple'] = false;
$arguments33['name'] = 'permalogin';
$arguments33['id'] = 'permalogin';
$arguments33['value'] = 1;

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output30 .= '
                        ';
return $output30;
};

$output17 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output17 .= '
                </label>
            </div>
        ';
return $output17;
};
$arguments12 = array();
$arguments12['then'] = NULL;
$arguments12['else'] = NULL;
$arguments12['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array14 = array();
$array15 = array (
);$array14['0'] = $renderingContext->getVariableProvider()->getByPath('permaloginStatus', $array15);
$array14['1'] = ' > -1';

$expression16 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > -1);};
$arguments12['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression16(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array14)
					),
					$renderingContext
				);
$arguments12['__thenClosure'] = $renderChildrenClosure13;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output0 .= '

        <div>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['additionalAttributes'] = NULL;
$arguments56['data'] = NULL;
$arguments56['name'] = NULL;
$arguments56['value'] = NULL;
$arguments56['property'] = NULL;
$arguments56['disabled'] = NULL;
$arguments56['class'] = NULL;
$arguments56['dir'] = NULL;
$arguments56['id'] = NULL;
$arguments56['lang'] = NULL;
$arguments56['style'] = NULL;
$arguments56['title'] = NULL;
$arguments56['accesskey'] = NULL;
$arguments56['tabindex'] = NULL;
$arguments56['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['key'] = NULL;
$arguments58['id'] = NULL;
$arguments58['default'] = NULL;
$arguments58['arguments'] = NULL;
$arguments58['extensionName'] = NULL;
$arguments58['languageKey'] = NULL;
$arguments58['alternativeLanguageKeys'] = NULL;
$arguments58['key'] = 'login';
$arguments56['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);
$arguments56['name'] = 'submit';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output0 .= '
        </div>

        <div class="felogin-hidden">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['additionalAttributes'] = NULL;
$arguments60['data'] = NULL;
$arguments60['name'] = NULL;
$arguments60['value'] = NULL;
$arguments60['property'] = NULL;
$arguments60['class'] = NULL;
$arguments60['dir'] = NULL;
$arguments60['id'] = NULL;
$arguments60['lang'] = NULL;
$arguments60['style'] = NULL;
$arguments60['title'] = NULL;
$arguments60['accesskey'] = NULL;
$arguments60['tabindex'] = NULL;
$arguments60['onclick'] = NULL;
$arguments60['name'] = 'logintype';
$arguments60['value'] = 'login';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['additionalAttributes'] = NULL;
$arguments62['data'] = NULL;
$arguments62['name'] = NULL;
$arguments62['value'] = NULL;
$arguments62['property'] = NULL;
$arguments62['class'] = NULL;
$arguments62['dir'] = NULL;
$arguments62['id'] = NULL;
$arguments62['lang'] = NULL;
$arguments62['style'] = NULL;
$arguments62['title'] = NULL;
$arguments62['accesskey'] = NULL;
$arguments62['tabindex'] = NULL;
$arguments62['onclick'] = NULL;
$arguments62['name'] = 'pid';
$array64 = array (
);$arguments62['value'] = $renderingContext->getVariableProvider()->getByPath('storagePid', $array64);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['additionalAttributes'] = NULL;
$arguments71['data'] = NULL;
$arguments71['name'] = NULL;
$arguments71['value'] = NULL;
$arguments71['property'] = NULL;
$arguments71['class'] = NULL;
$arguments71['dir'] = NULL;
$arguments71['id'] = NULL;
$arguments71['lang'] = NULL;
$arguments71['style'] = NULL;
$arguments71['title'] = NULL;
$arguments71['accesskey'] = NULL;
$arguments71['tabindex'] = NULL;
$arguments71['onclick'] = NULL;
$arguments71['name'] = 'redirect_url';
$array73 = array (
);$arguments71['value'] = $renderingContext->getVariableProvider()->getByPath('redirectURL', $array73);

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output70 .= '
            ';
return $output70;
};
$arguments65 = array();
$arguments65['then'] = NULL;
$arguments65['else'] = NULL;
$arguments65['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array67 = array();
$array68 = array (
);$array67['0'] = $renderingContext->getVariableProvider()->getByPath('redirectURL', $array68);
$array67['1'] = '!=\'\'';

$expression69 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != '');};
$arguments65['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression69(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array67)
					),
					$renderingContext
				);
$arguments65['__thenClosure'] = $renderChildrenClosure66;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['additionalAttributes'] = NULL;
$arguments80['data'] = NULL;
$arguments80['name'] = NULL;
$arguments80['value'] = NULL;
$arguments80['property'] = NULL;
$arguments80['class'] = NULL;
$arguments80['dir'] = NULL;
$arguments80['id'] = NULL;
$arguments80['lang'] = NULL;
$arguments80['style'] = NULL;
$arguments80['title'] = NULL;
$arguments80['accesskey'] = NULL;
$arguments80['tabindex'] = NULL;
$arguments80['onclick'] = NULL;
$arguments80['name'] = 'referer';
$array82 = array (
);$arguments80['value'] = $renderingContext->getVariableProvider()->getByPath('referer', $array82);

$output79 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output79 .= '
            ';
return $output79;
};
$arguments74 = array();
$arguments74['then'] = NULL;
$arguments74['else'] = NULL;
$arguments74['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array76 = array();
$array77 = array (
);$array76['0'] = $renderingContext->getVariableProvider()->getByPath('referer', $array77);
$array76['1'] = '!=\'\'';

$expression78 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != '');};
$arguments74['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression78(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array76)
					),
					$renderingContext
				);
$arguments74['__thenClosure'] = $renderChildrenClosure75;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['additionalAttributes'] = NULL;
$arguments89['data'] = NULL;
$arguments89['name'] = NULL;
$arguments89['value'] = NULL;
$arguments89['property'] = NULL;
$arguments89['class'] = NULL;
$arguments89['dir'] = NULL;
$arguments89['id'] = NULL;
$arguments89['lang'] = NULL;
$arguments89['style'] = NULL;
$arguments89['title'] = NULL;
$arguments89['accesskey'] = NULL;
$arguments89['tabindex'] = NULL;
$arguments89['onclick'] = NULL;
$arguments89['name'] = 'redirectReferrer';
$arguments89['value'] = 'off';

$output88 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output88 .= '
            ';
return $output88;
};
$arguments83 = array();
$arguments83['then'] = NULL;
$arguments83['else'] = NULL;
$arguments83['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array85 = array();
$array86 = array (
);$array85['0'] = $renderingContext->getVariableProvider()->getByPath('redirectReferrer', $array86);
$array85['1'] = '!=\'\'';

$expression87 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != '');};
$arguments83['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression87(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array85)
					),
					$renderingContext
				);
$arguments83['__thenClosure'] = $renderChildrenClosure84;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['additionalAttributes'] = NULL;
$arguments97['data'] = NULL;
$arguments97['name'] = NULL;
$arguments97['value'] = NULL;
$arguments97['property'] = NULL;
$arguments97['class'] = NULL;
$arguments97['dir'] = NULL;
$arguments97['id'] = NULL;
$arguments97['lang'] = NULL;
$arguments97['style'] = NULL;
$arguments97['title'] = NULL;
$arguments97['accesskey'] = NULL;
$arguments97['tabindex'] = NULL;
$arguments97['onclick'] = NULL;
$arguments97['name'] = 'noredirect';
$arguments97['value'] = 1;

$output96 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output96 .= '
            ';
return $output96;
};
$arguments91 = array();
$arguments91['then'] = NULL;
$arguments91['else'] = NULL;
$arguments91['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array93 = array();
$array94 = array (
);$array93['0'] = $renderingContext->getVariableProvider()->getByPath('noRedirect', $array94);
$array93['1'] = '!=\'\'';

$expression95 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != '');};
$arguments91['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression95(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)
					),
					$renderingContext
				);
$arguments91['__thenClosure'] = $renderChildrenClosure92;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output0 .= '

            ';
$array99 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraHidden', $array99)]);

$output0 .= '
        </div>
    </fieldset>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output100 = '';

$output100 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments101 = array();
$arguments101['queueIdentifier'] = NULL;
$arguments101['as'] = NULL;

$output100 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output100 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['section'] = NULL;
$arguments109['partial'] = NULL;
$arguments109['delegate'] = NULL;
$arguments109['renderable'] = NULL;
$arguments109['arguments'] = array (
);
$arguments109['optional'] = false;
$arguments109['default'] = NULL;
$arguments109['contentAs'] = NULL;
$arguments109['debug'] = true;
$arguments109['partial'] = 'CookieWarning';

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output108 .= '
';
return $output108;
};
$arguments103 = array();
$arguments103['then'] = NULL;
$arguments103['else'] = NULL;
$arguments103['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array105 = array();
$array106 = array (
);$array105['0'] = $renderingContext->getVariableProvider()->getByPath('cookieWarning', $array106);

$expression107 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments103['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression107(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array105)
					),
					$renderingContext
				);
$arguments103['__thenClosure'] = $renderChildrenClosure104;

$output100 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output100 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
    <h3>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['section'] = NULL;
$arguments117['partial'] = NULL;
$arguments117['delegate'] = NULL;
$arguments117['renderable'] = NULL;
$arguments117['arguments'] = array (
);
$arguments117['optional'] = false;
$arguments117['default'] = NULL;
$arguments117['contentAs'] = NULL;
$arguments117['debug'] = true;
$arguments117['partial'] = 'RenderLabelOrMessage';
// Rendering Array
$array119 = array();
$output120 = '';
$array121 = array (
);
$output120 .= $renderingContext->getVariableProvider()->getByPath('messageKey', $array121);

$output120 .= '_header';
$array119['key'] = $output120;
$arguments117['arguments'] = $array119;

$output116 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output116 .= '
    </h3>
    <p>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments122 = array();
$arguments122['section'] = NULL;
$arguments122['partial'] = NULL;
$arguments122['delegate'] = NULL;
$arguments122['renderable'] = NULL;
$arguments122['arguments'] = array (
);
$arguments122['optional'] = false;
$arguments122['default'] = NULL;
$arguments122['contentAs'] = NULL;
$arguments122['debug'] = true;
$arguments122['partial'] = 'RenderLabelOrMessage';
// Rendering Array
$array124 = array();
$output125 = '';
$array126 = array (
);
$output125 .= $renderingContext->getVariableProvider()->getByPath('messageKey', $array126);

$output125 .= '_message';
$array124['key'] = $output125;
$arguments122['arguments'] = $array124;

$output116 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output116 .= '
    </p>
';
return $output116;
};
$arguments111 = array();
$arguments111['then'] = NULL;
$arguments111['else'] = NULL;
$arguments111['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array113 = array();
$array114 = array (
);$array113['0'] = $renderingContext->getVariableProvider()->getByPath('messageKey', $array114);

$expression115 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments111['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression115(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array113)
					),
					$renderingContext
				);
$arguments111['__thenClosure'] = $renderChildrenClosure112;

$output100 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output100 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$output147 = '';

$output147 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$output150 = '';

$output150 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$output154 = '';

$output154 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments155 = array();
$arguments155['section'] = NULL;
$arguments155['partial'] = NULL;
$arguments155['delegate'] = NULL;
$arguments155['renderable'] = NULL;
$arguments155['arguments'] = array (
);
$arguments155['optional'] = false;
$arguments155['default'] = NULL;
$arguments155['contentAs'] = NULL;
$arguments155['debug'] = true;
$arguments155['section'] = 'content';
$arguments155['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output154 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output154 .= '
        ';
return $output154;
};
$arguments151 = array();
$arguments151['additionalAttributes'] = NULL;
$arguments151['data'] = NULL;
$arguments151['action'] = NULL;
$arguments151['arguments'] = array (
);
$arguments151['controller'] = NULL;
$arguments151['extensionName'] = NULL;
$arguments151['pluginName'] = NULL;
$arguments151['pageUid'] = NULL;
$arguments151['object'] = NULL;
$arguments151['pageType'] = 0;
$arguments151['noCache'] = false;
$arguments151['noCacheHash'] = NULL;
$arguments151['section'] = '';
$arguments151['format'] = '';
$arguments151['additionalParams'] = array (
);
$arguments151['absolute'] = false;
$arguments151['addQueryString'] = false;
$arguments151['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments151['addQueryStringMethod'] = 'GET';
$arguments151['fieldNamePrefix'] = NULL;
$arguments151['actionUri'] = NULL;
$arguments151['objectName'] = NULL;
$arguments151['hiddenFieldClassName'] = NULL;
$arguments151['enctype'] = NULL;
$arguments151['method'] = NULL;
$arguments151['name'] = NULL;
$arguments151['onreset'] = NULL;
$arguments151['onsubmit'] = NULL;
$arguments151['target'] = NULL;
$arguments151['novalidate'] = NULL;
$arguments151['class'] = NULL;
$arguments151['dir'] = NULL;
$arguments151['id'] = NULL;
$arguments151['lang'] = NULL;
$arguments151['style'] = NULL;
$arguments151['title'] = NULL;
$arguments151['accesskey'] = NULL;
$arguments151['tabindex'] = NULL;
$arguments151['onclick'] = NULL;
$arguments151['target'] = '_top';
$arguments151['fieldNamePrefix'] = '';
$arguments151['action'] = 'login';
$array153 = array (
);$arguments151['onsubmit'] = $renderingContext->getVariableProvider()->getByPath('onSubmit', $array153);

$output150 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output150 .= '
    ';
return $output150;
};
$arguments148 = array();

$output147 .= '';

$output147 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
$output163 = '';

$output163 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments164 = array();
$arguments164['section'] = NULL;
$arguments164['partial'] = NULL;
$arguments164['delegate'] = NULL;
$arguments164['renderable'] = NULL;
$arguments164['arguments'] = array (
);
$arguments164['optional'] = false;
$arguments164['default'] = NULL;
$arguments164['contentAs'] = NULL;
$arguments164['debug'] = true;
$arguments164['section'] = 'content';
$arguments164['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output163 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output163 .= '
        ';
return $output163;
};
$arguments161 = array();
$arguments161['additionalAttributes'] = NULL;
$arguments161['data'] = NULL;
$arguments161['action'] = NULL;
$arguments161['arguments'] = array (
);
$arguments161['controller'] = NULL;
$arguments161['extensionName'] = NULL;
$arguments161['pluginName'] = NULL;
$arguments161['pageUid'] = NULL;
$arguments161['object'] = NULL;
$arguments161['pageType'] = 0;
$arguments161['noCache'] = false;
$arguments161['noCacheHash'] = NULL;
$arguments161['section'] = '';
$arguments161['format'] = '';
$arguments161['additionalParams'] = array (
);
$arguments161['absolute'] = false;
$arguments161['addQueryString'] = false;
$arguments161['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments161['addQueryStringMethod'] = 'GET';
$arguments161['fieldNamePrefix'] = NULL;
$arguments161['actionUri'] = NULL;
$arguments161['objectName'] = NULL;
$arguments161['hiddenFieldClassName'] = NULL;
$arguments161['enctype'] = NULL;
$arguments161['method'] = NULL;
$arguments161['name'] = NULL;
$arguments161['onreset'] = NULL;
$arguments161['onsubmit'] = NULL;
$arguments161['target'] = NULL;
$arguments161['novalidate'] = NULL;
$arguments161['class'] = NULL;
$arguments161['dir'] = NULL;
$arguments161['id'] = NULL;
$arguments161['lang'] = NULL;
$arguments161['style'] = NULL;
$arguments161['title'] = NULL;
$arguments161['accesskey'] = NULL;
$arguments161['tabindex'] = NULL;
$arguments161['onclick'] = NULL;
$arguments161['target'] = '_top';
$arguments161['fieldNamePrefix'] = '';
$arguments161['action'] = 'login';

$output160 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output160 .= '
    ';
return $output160;
};
$arguments158 = array();
$arguments158['if'] = NULL;

$output147 .= '';

$output147 .= '
';
return $output147;
};
$arguments127 = array();
$arguments127['then'] = NULL;
$arguments127['else'] = NULL;
$arguments127['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array144 = array();
$array145 = array (
);$array144['0'] = $renderingContext->getVariableProvider()->getByPath('onSubmit', $array145);

$expression146 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments127['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression146(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array144)
					),
					$renderingContext
				);
$arguments127['__thenClosure'] = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments134 = array();
$arguments134['section'] = NULL;
$arguments134['partial'] = NULL;
$arguments134['delegate'] = NULL;
$arguments134['renderable'] = NULL;
$arguments134['arguments'] = array (
);
$arguments134['optional'] = false;
$arguments134['default'] = NULL;
$arguments134['contentAs'] = NULL;
$arguments134['debug'] = true;
$arguments134['section'] = 'content';
$arguments134['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output133 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output133 .= '
        ';
return $output133;
};
$arguments130 = array();
$arguments130['additionalAttributes'] = NULL;
$arguments130['data'] = NULL;
$arguments130['action'] = NULL;
$arguments130['arguments'] = array (
);
$arguments130['controller'] = NULL;
$arguments130['extensionName'] = NULL;
$arguments130['pluginName'] = NULL;
$arguments130['pageUid'] = NULL;
$arguments130['object'] = NULL;
$arguments130['pageType'] = 0;
$arguments130['noCache'] = false;
$arguments130['noCacheHash'] = NULL;
$arguments130['section'] = '';
$arguments130['format'] = '';
$arguments130['additionalParams'] = array (
);
$arguments130['absolute'] = false;
$arguments130['addQueryString'] = false;
$arguments130['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments130['addQueryStringMethod'] = 'GET';
$arguments130['fieldNamePrefix'] = NULL;
$arguments130['actionUri'] = NULL;
$arguments130['objectName'] = NULL;
$arguments130['hiddenFieldClassName'] = NULL;
$arguments130['enctype'] = NULL;
$arguments130['method'] = NULL;
$arguments130['name'] = NULL;
$arguments130['onreset'] = NULL;
$arguments130['onsubmit'] = NULL;
$arguments130['target'] = NULL;
$arguments130['novalidate'] = NULL;
$arguments130['class'] = NULL;
$arguments130['dir'] = NULL;
$arguments130['id'] = NULL;
$arguments130['lang'] = NULL;
$arguments130['style'] = NULL;
$arguments130['title'] = NULL;
$arguments130['accesskey'] = NULL;
$arguments130['tabindex'] = NULL;
$arguments130['onclick'] = NULL;
$arguments130['target'] = '_top';
$arguments130['fieldNamePrefix'] = '';
$arguments130['action'] = 'login';
$array132 = array (
);$arguments130['onsubmit'] = $renderingContext->getVariableProvider()->getByPath('onSubmit', $array132);

$output129 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output129 .= '
    ';
return $output129;
};
$arguments127['__elseClosures'][] = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments141 = array();
$arguments141['section'] = NULL;
$arguments141['partial'] = NULL;
$arguments141['delegate'] = NULL;
$arguments141['renderable'] = NULL;
$arguments141['arguments'] = array (
);
$arguments141['optional'] = false;
$arguments141['default'] = NULL;
$arguments141['contentAs'] = NULL;
$arguments141['debug'] = true;
$arguments141['section'] = 'content';
$arguments141['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output140 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output140 .= '
        ';
return $output140;
};
$arguments138 = array();
$arguments138['additionalAttributes'] = NULL;
$arguments138['data'] = NULL;
$arguments138['action'] = NULL;
$arguments138['arguments'] = array (
);
$arguments138['controller'] = NULL;
$arguments138['extensionName'] = NULL;
$arguments138['pluginName'] = NULL;
$arguments138['pageUid'] = NULL;
$arguments138['object'] = NULL;
$arguments138['pageType'] = 0;
$arguments138['noCache'] = false;
$arguments138['noCacheHash'] = NULL;
$arguments138['section'] = '';
$arguments138['format'] = '';
$arguments138['additionalParams'] = array (
);
$arguments138['absolute'] = false;
$arguments138['addQueryString'] = false;
$arguments138['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments138['addQueryStringMethod'] = 'GET';
$arguments138['fieldNamePrefix'] = NULL;
$arguments138['actionUri'] = NULL;
$arguments138['objectName'] = NULL;
$arguments138['hiddenFieldClassName'] = NULL;
$arguments138['enctype'] = NULL;
$arguments138['method'] = NULL;
$arguments138['name'] = NULL;
$arguments138['onreset'] = NULL;
$arguments138['onsubmit'] = NULL;
$arguments138['target'] = NULL;
$arguments138['novalidate'] = NULL;
$arguments138['class'] = NULL;
$arguments138['dir'] = NULL;
$arguments138['id'] = NULL;
$arguments138['lang'] = NULL;
$arguments138['style'] = NULL;
$arguments138['title'] = NULL;
$arguments138['accesskey'] = NULL;
$arguments138['tabindex'] = NULL;
$arguments138['onclick'] = NULL;
$arguments138['target'] = '_top';
$arguments138['fieldNamePrefix'] = '';
$arguments138['action'] = 'login';

$output137 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output137 .= '
    ';
return $output137;
};

$output100 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output100 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
$output172 = '';

$output172 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
$output175 = '';

$output175 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments176 = array();
$arguments176['section'] = NULL;
$arguments176['partial'] = NULL;
$arguments176['delegate'] = NULL;
$arguments176['renderable'] = NULL;
$arguments176['arguments'] = array (
);
$arguments176['optional'] = false;
$arguments176['default'] = NULL;
$arguments176['contentAs'] = NULL;
$arguments176['debug'] = true;
$arguments176['partial'] = 'RenderLabelOrMessage';
// Rendering Array
$array178 = array();
$array178['key'] = 'forgot_header';
$arguments176['arguments'] = $array178;

$output175 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output175 .= '
    ';
return $output175;
};
$arguments173 = array();
$arguments173['additionalAttributes'] = NULL;
$arguments173['data'] = NULL;
$arguments173['class'] = NULL;
$arguments173['dir'] = NULL;
$arguments173['id'] = NULL;
$arguments173['lang'] = NULL;
$arguments173['style'] = NULL;
$arguments173['title'] = NULL;
$arguments173['accesskey'] = NULL;
$arguments173['tabindex'] = NULL;
$arguments173['onclick'] = NULL;
$arguments173['name'] = NULL;
$arguments173['rel'] = NULL;
$arguments173['rev'] = NULL;
$arguments173['target'] = NULL;
$arguments173['action'] = NULL;
$arguments173['controller'] = NULL;
$arguments173['extensionName'] = NULL;
$arguments173['pluginName'] = NULL;
$arguments173['pageUid'] = NULL;
$arguments173['pageType'] = NULL;
$arguments173['noCache'] = NULL;
$arguments173['noCacheHash'] = NULL;
$arguments173['section'] = NULL;
$arguments173['format'] = NULL;
$arguments173['linkAccessRestrictedPages'] = NULL;
$arguments173['additionalParams'] = NULL;
$arguments173['absolute'] = NULL;
$arguments173['addQueryString'] = NULL;
$arguments173['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments173['addQueryStringMethod'] = NULL;
$arguments173['arguments'] = NULL;
$arguments173['action'] = 'recovery';
$arguments173['controller'] = 'PasswordRecovery';

$output172 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);

$output172 .= '
';
return $output172;
};
$arguments167 = array();
$arguments167['then'] = NULL;
$arguments167['else'] = NULL;
$arguments167['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array169 = array();
$array170 = array (
);$array169['0'] = $renderingContext->getVariableProvider()->getByPath('settings.showForgotPassword', $array170);

$expression171 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments167['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression171(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array169)
					),
					$renderingContext
				);
$arguments167['__thenClosure'] = $renderChildrenClosure168;

$output100 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output100 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$output181 = '';

$output181 .= '
    <fieldset>
        <legend>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments182 = array();
$arguments182['key'] = NULL;
$arguments182['id'] = NULL;
$arguments182['default'] = NULL;
$arguments182['arguments'] = NULL;
$arguments182['extensionName'] = NULL;
$arguments182['languageKey'] = NULL;
$arguments182['alternativeLanguageKeys'] = NULL;
$arguments182['key'] = 'login';

$output181 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext)]);

$output181 .= '
        </legend>
        <div>
            <label>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments184 = array();
$arguments184['key'] = NULL;
$arguments184['id'] = NULL;
$arguments184['default'] = NULL;
$arguments184['arguments'] = NULL;
$arguments184['extensionName'] = NULL;
$arguments184['languageKey'] = NULL;
$arguments184['alternativeLanguageKeys'] = NULL;
$arguments184['key'] = 'username';

$output181 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext)]);

$output181 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments186 = array();
$arguments186['additionalAttributes'] = NULL;
$arguments186['data'] = NULL;
$arguments186['name'] = NULL;
$arguments186['value'] = NULL;
$arguments186['property'] = NULL;
$arguments186['autofocus'] = NULL;
$arguments186['disabled'] = NULL;
$arguments186['maxlength'] = NULL;
$arguments186['readonly'] = NULL;
$arguments186['size'] = NULL;
$arguments186['placeholder'] = NULL;
$arguments186['pattern'] = NULL;
$arguments186['errorClass'] = 'f3-form-error';
$arguments186['class'] = NULL;
$arguments186['dir'] = NULL;
$arguments186['id'] = NULL;
$arguments186['lang'] = NULL;
$arguments186['style'] = NULL;
$arguments186['title'] = NULL;
$arguments186['accesskey'] = NULL;
$arguments186['tabindex'] = NULL;
$arguments186['onclick'] = NULL;
$arguments186['required'] = false;
$arguments186['type'] = 'text';
$arguments186['name'] = 'user';

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);

$output181 .= '
            </label>
        </div>
        <div>
            <label>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments188 = array();
$arguments188['key'] = NULL;
$arguments188['id'] = NULL;
$arguments188['default'] = NULL;
$arguments188['arguments'] = NULL;
$arguments188['extensionName'] = NULL;
$arguments188['languageKey'] = NULL;
$arguments188['alternativeLanguageKeys'] = NULL;
$arguments188['key'] = 'password';

$output181 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext)]);

$output181 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\PasswordViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments190 = array();
$arguments190['additionalAttributes'] = NULL;
$arguments190['data'] = NULL;
$arguments190['name'] = NULL;
$arguments190['value'] = NULL;
$arguments190['property'] = NULL;
$arguments190['disabled'] = NULL;
$arguments190['maxlength'] = NULL;
$arguments190['placeholder'] = NULL;
$arguments190['readonly'] = NULL;
$arguments190['size'] = NULL;
$arguments190['errorClass'] = 'f3-form-error';
$arguments190['class'] = NULL;
$arguments190['dir'] = NULL;
$arguments190['id'] = NULL;
$arguments190['lang'] = NULL;
$arguments190['style'] = NULL;
$arguments190['title'] = NULL;
$arguments190['accesskey'] = NULL;
$arguments190['tabindex'] = NULL;
$arguments190['onclick'] = NULL;
$arguments190['name'] = 'pass';
// Rendering Array
$array192 = array();
$array192['rsa-encryption'] = '';
$arguments190['data'] = $array192;

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\Form\PasswordViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);

$output181 .= '
            </label>
        </div>

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
$output198 = '';

$output198 .= '
            <div>
                <label>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments199 = array();
$arguments199['key'] = NULL;
$arguments199['id'] = NULL;
$arguments199['default'] = NULL;
$arguments199['arguments'] = NULL;
$arguments199['extensionName'] = NULL;
$arguments199['languageKey'] = NULL;
$arguments199['alternativeLanguageKeys'] = NULL;
$arguments199['id'] = 'permalogin';

$output198 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext)]);

$output198 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
$output219 = '';

$output219 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
$output222 = '';

$output222 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments223 = array();
$arguments223['additionalAttributes'] = NULL;
$arguments223['data'] = NULL;
$arguments223['name'] = NULL;
$arguments223['value'] = NULL;
$arguments223['property'] = NULL;
$arguments223['class'] = NULL;
$arguments223['dir'] = NULL;
$arguments223['id'] = NULL;
$arguments223['lang'] = NULL;
$arguments223['style'] = NULL;
$arguments223['title'] = NULL;
$arguments223['accesskey'] = NULL;
$arguments223['tabindex'] = NULL;
$arguments223['onclick'] = NULL;
$arguments223['name'] = 'permalogin';
$arguments223['value'] = 0;
// Rendering Array
$array225 = array();
$array225['disabled'] = 'disabled';
$arguments223['additionalAttributes'] = $array225;

$output222 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);

$output222 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments226 = array();
$arguments226['additionalAttributes'] = NULL;
$arguments226['data'] = NULL;
$arguments226['name'] = NULL;
$arguments226['value'] = NULL;
$arguments226['property'] = NULL;
$arguments226['disabled'] = NULL;
$arguments226['errorClass'] = 'f3-form-error';
$arguments226['class'] = NULL;
$arguments226['dir'] = NULL;
$arguments226['id'] = NULL;
$arguments226['lang'] = NULL;
$arguments226['style'] = NULL;
$arguments226['title'] = NULL;
$arguments226['accesskey'] = NULL;
$arguments226['tabindex'] = NULL;
$arguments226['onclick'] = NULL;
$arguments226['checked'] = NULL;
$arguments226['multiple'] = false;
$arguments226['name'] = 'permalogin';
$arguments226['id'] = 'permalogin';
$arguments226['value'] = 1;
// Rendering Boolean node
// Rendering Array
$array228 = array();
$array228['0'] = 'checked';

$expression229 = function($context) {return "checked";};
$arguments226['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression229(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array228)
					),
					$renderingContext
				);

$output222 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output222 .= '
                        ';
return $output222;
};
$arguments220 = array();

$output219 .= '';

$output219 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
$output232 = '';

$output232 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments233 = array();
$arguments233['additionalAttributes'] = NULL;
$arguments233['data'] = NULL;
$arguments233['name'] = NULL;
$arguments233['value'] = NULL;
$arguments233['property'] = NULL;
$arguments233['class'] = NULL;
$arguments233['dir'] = NULL;
$arguments233['id'] = NULL;
$arguments233['lang'] = NULL;
$arguments233['style'] = NULL;
$arguments233['title'] = NULL;
$arguments233['accesskey'] = NULL;
$arguments233['tabindex'] = NULL;
$arguments233['onclick'] = NULL;
$arguments233['name'] = 'permalogin';
$arguments233['value'] = 0;

$output232 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output232 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments235 = array();
$arguments235['additionalAttributes'] = NULL;
$arguments235['data'] = NULL;
$arguments235['name'] = NULL;
$arguments235['value'] = NULL;
$arguments235['property'] = NULL;
$arguments235['disabled'] = NULL;
$arguments235['errorClass'] = 'f3-form-error';
$arguments235['class'] = NULL;
$arguments235['dir'] = NULL;
$arguments235['id'] = NULL;
$arguments235['lang'] = NULL;
$arguments235['style'] = NULL;
$arguments235['title'] = NULL;
$arguments235['accesskey'] = NULL;
$arguments235['tabindex'] = NULL;
$arguments235['onclick'] = NULL;
$arguments235['checked'] = NULL;
$arguments235['multiple'] = false;
$arguments235['name'] = 'permalogin';
$arguments235['id'] = 'permalogin';
$arguments235['value'] = 1;

$output232 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output232 .= '
                        ';
return $output232;
};
$arguments230 = array();
$arguments230['if'] = NULL;

$output219 .= '';

$output219 .= '
                    ';
return $output219;
};
$arguments201 = array();
$arguments201['then'] = NULL;
$arguments201['else'] = NULL;
$arguments201['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array216 = array();
$array217 = array (
);$array216['0'] = $renderingContext->getVariableProvider()->getByPath('permaloginStatus', $array217);
$array216['1'] = ' == 1';

$expression218 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments201['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression218(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array216)
					),
					$renderingContext
				);
$arguments201['__thenClosure'] = function() use ($renderingContext, $self) {
$output203 = '';

$output203 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments204 = array();
$arguments204['additionalAttributes'] = NULL;
$arguments204['data'] = NULL;
$arguments204['name'] = NULL;
$arguments204['value'] = NULL;
$arguments204['property'] = NULL;
$arguments204['class'] = NULL;
$arguments204['dir'] = NULL;
$arguments204['id'] = NULL;
$arguments204['lang'] = NULL;
$arguments204['style'] = NULL;
$arguments204['title'] = NULL;
$arguments204['accesskey'] = NULL;
$arguments204['tabindex'] = NULL;
$arguments204['onclick'] = NULL;
$arguments204['name'] = 'permalogin';
$arguments204['value'] = 0;
// Rendering Array
$array206 = array();
$array206['disabled'] = 'disabled';
$arguments204['additionalAttributes'] = $array206;

$output203 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);

$output203 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments207 = array();
$arguments207['additionalAttributes'] = NULL;
$arguments207['data'] = NULL;
$arguments207['name'] = NULL;
$arguments207['value'] = NULL;
$arguments207['property'] = NULL;
$arguments207['disabled'] = NULL;
$arguments207['errorClass'] = 'f3-form-error';
$arguments207['class'] = NULL;
$arguments207['dir'] = NULL;
$arguments207['id'] = NULL;
$arguments207['lang'] = NULL;
$arguments207['style'] = NULL;
$arguments207['title'] = NULL;
$arguments207['accesskey'] = NULL;
$arguments207['tabindex'] = NULL;
$arguments207['onclick'] = NULL;
$arguments207['checked'] = NULL;
$arguments207['multiple'] = false;
$arguments207['name'] = 'permalogin';
$arguments207['id'] = 'permalogin';
$arguments207['value'] = 1;
// Rendering Boolean node
// Rendering Array
$array209 = array();
$array209['0'] = 'checked';

$expression210 = function($context) {return "checked";};
$arguments207['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression210(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array209)
					),
					$renderingContext
				);

$output203 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext);

$output203 .= '
                        ';
return $output203;
};
$arguments201['__elseClosures'][] = function() use ($renderingContext, $self) {
$output211 = '';

$output211 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments212 = array();
$arguments212['additionalAttributes'] = NULL;
$arguments212['data'] = NULL;
$arguments212['name'] = NULL;
$arguments212['value'] = NULL;
$arguments212['property'] = NULL;
$arguments212['class'] = NULL;
$arguments212['dir'] = NULL;
$arguments212['id'] = NULL;
$arguments212['lang'] = NULL;
$arguments212['style'] = NULL;
$arguments212['title'] = NULL;
$arguments212['accesskey'] = NULL;
$arguments212['tabindex'] = NULL;
$arguments212['onclick'] = NULL;
$arguments212['name'] = 'permalogin';
$arguments212['value'] = 0;

$output211 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);

$output211 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments214 = array();
$arguments214['additionalAttributes'] = NULL;
$arguments214['data'] = NULL;
$arguments214['name'] = NULL;
$arguments214['value'] = NULL;
$arguments214['property'] = NULL;
$arguments214['disabled'] = NULL;
$arguments214['errorClass'] = 'f3-form-error';
$arguments214['class'] = NULL;
$arguments214['dir'] = NULL;
$arguments214['id'] = NULL;
$arguments214['lang'] = NULL;
$arguments214['style'] = NULL;
$arguments214['title'] = NULL;
$arguments214['accesskey'] = NULL;
$arguments214['tabindex'] = NULL;
$arguments214['onclick'] = NULL;
$arguments214['checked'] = NULL;
$arguments214['multiple'] = false;
$arguments214['name'] = 'permalogin';
$arguments214['id'] = 'permalogin';
$arguments214['value'] = 1;

$output211 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$output211 .= '
                        ';
return $output211;
};

$output198 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output198 .= '
                </label>
            </div>
        ';
return $output198;
};
$arguments193 = array();
$arguments193['then'] = NULL;
$arguments193['else'] = NULL;
$arguments193['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array195 = array();
$array196 = array (
);$array195['0'] = $renderingContext->getVariableProvider()->getByPath('permaloginStatus', $array196);
$array195['1'] = ' > -1';

$expression197 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > -1);};
$arguments193['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression197(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array195)
					),
					$renderingContext
				);
$arguments193['__thenClosure'] = $renderChildrenClosure194;

$output181 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output181 .= '

        <div>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments237 = array();
$arguments237['additionalAttributes'] = NULL;
$arguments237['data'] = NULL;
$arguments237['name'] = NULL;
$arguments237['value'] = NULL;
$arguments237['property'] = NULL;
$arguments237['disabled'] = NULL;
$arguments237['class'] = NULL;
$arguments237['dir'] = NULL;
$arguments237['id'] = NULL;
$arguments237['lang'] = NULL;
$arguments237['style'] = NULL;
$arguments237['title'] = NULL;
$arguments237['accesskey'] = NULL;
$arguments237['tabindex'] = NULL;
$arguments237['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments239 = array();
$arguments239['key'] = NULL;
$arguments239['id'] = NULL;
$arguments239['default'] = NULL;
$arguments239['arguments'] = NULL;
$arguments239['extensionName'] = NULL;
$arguments239['languageKey'] = NULL;
$arguments239['alternativeLanguageKeys'] = NULL;
$arguments239['key'] = 'login';
$arguments237['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext);
$arguments237['name'] = 'submit';

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output181 .= '
        </div>

        <div class="felogin-hidden">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments241 = array();
$arguments241['additionalAttributes'] = NULL;
$arguments241['data'] = NULL;
$arguments241['name'] = NULL;
$arguments241['value'] = NULL;
$arguments241['property'] = NULL;
$arguments241['class'] = NULL;
$arguments241['dir'] = NULL;
$arguments241['id'] = NULL;
$arguments241['lang'] = NULL;
$arguments241['style'] = NULL;
$arguments241['title'] = NULL;
$arguments241['accesskey'] = NULL;
$arguments241['tabindex'] = NULL;
$arguments241['onclick'] = NULL;
$arguments241['name'] = 'logintype';
$arguments241['value'] = 'login';

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output181 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments243 = array();
$arguments243['additionalAttributes'] = NULL;
$arguments243['data'] = NULL;
$arguments243['name'] = NULL;
$arguments243['value'] = NULL;
$arguments243['property'] = NULL;
$arguments243['class'] = NULL;
$arguments243['dir'] = NULL;
$arguments243['id'] = NULL;
$arguments243['lang'] = NULL;
$arguments243['style'] = NULL;
$arguments243['title'] = NULL;
$arguments243['accesskey'] = NULL;
$arguments243['tabindex'] = NULL;
$arguments243['onclick'] = NULL;
$arguments243['name'] = 'pid';
$array245 = array (
);$arguments243['value'] = $renderingContext->getVariableProvider()->getByPath('storagePid', $array245);

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);

$output181 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
$output251 = '';

$output251 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments252 = array();
$arguments252['additionalAttributes'] = NULL;
$arguments252['data'] = NULL;
$arguments252['name'] = NULL;
$arguments252['value'] = NULL;
$arguments252['property'] = NULL;
$arguments252['class'] = NULL;
$arguments252['dir'] = NULL;
$arguments252['id'] = NULL;
$arguments252['lang'] = NULL;
$arguments252['style'] = NULL;
$arguments252['title'] = NULL;
$arguments252['accesskey'] = NULL;
$arguments252['tabindex'] = NULL;
$arguments252['onclick'] = NULL;
$arguments252['name'] = 'redirect_url';
$array254 = array (
);$arguments252['value'] = $renderingContext->getVariableProvider()->getByPath('redirectURL', $array254);

$output251 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output251 .= '
            ';
return $output251;
};
$arguments246 = array();
$arguments246['then'] = NULL;
$arguments246['else'] = NULL;
$arguments246['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array248 = array();
$array249 = array (
);$array248['0'] = $renderingContext->getVariableProvider()->getByPath('redirectURL', $array249);
$array248['1'] = '!=\'\'';

$expression250 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != '');};
$arguments246['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression250(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array248)
					),
					$renderingContext
				);
$arguments246['__thenClosure'] = $renderChildrenClosure247;

$output181 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext);

$output181 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
$output260 = '';

$output260 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments261 = array();
$arguments261['additionalAttributes'] = NULL;
$arguments261['data'] = NULL;
$arguments261['name'] = NULL;
$arguments261['value'] = NULL;
$arguments261['property'] = NULL;
$arguments261['class'] = NULL;
$arguments261['dir'] = NULL;
$arguments261['id'] = NULL;
$arguments261['lang'] = NULL;
$arguments261['style'] = NULL;
$arguments261['title'] = NULL;
$arguments261['accesskey'] = NULL;
$arguments261['tabindex'] = NULL;
$arguments261['onclick'] = NULL;
$arguments261['name'] = 'referer';
$array263 = array (
);$arguments261['value'] = $renderingContext->getVariableProvider()->getByPath('referer', $array263);

$output260 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext);

$output260 .= '
            ';
return $output260;
};
$arguments255 = array();
$arguments255['then'] = NULL;
$arguments255['else'] = NULL;
$arguments255['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array257 = array();
$array258 = array (
);$array257['0'] = $renderingContext->getVariableProvider()->getByPath('referer', $array258);
$array257['1'] = '!=\'\'';

$expression259 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != '');};
$arguments255['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression259(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array257)
					),
					$renderingContext
				);
$arguments255['__thenClosure'] = $renderChildrenClosure256;

$output181 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);

$output181 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
$output269 = '';

$output269 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments270 = array();
$arguments270['additionalAttributes'] = NULL;
$arguments270['data'] = NULL;
$arguments270['name'] = NULL;
$arguments270['value'] = NULL;
$arguments270['property'] = NULL;
$arguments270['class'] = NULL;
$arguments270['dir'] = NULL;
$arguments270['id'] = NULL;
$arguments270['lang'] = NULL;
$arguments270['style'] = NULL;
$arguments270['title'] = NULL;
$arguments270['accesskey'] = NULL;
$arguments270['tabindex'] = NULL;
$arguments270['onclick'] = NULL;
$arguments270['name'] = 'redirectReferrer';
$arguments270['value'] = 'off';

$output269 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments270, $renderChildrenClosure271, $renderingContext);

$output269 .= '
            ';
return $output269;
};
$arguments264 = array();
$arguments264['then'] = NULL;
$arguments264['else'] = NULL;
$arguments264['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array266 = array();
$array267 = array (
);$array266['0'] = $renderingContext->getVariableProvider()->getByPath('redirectReferrer', $array267);
$array266['1'] = '!=\'\'';

$expression268 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != '');};
$arguments264['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression268(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array266)
					),
					$renderingContext
				);
$arguments264['__thenClosure'] = $renderChildrenClosure265;

$output181 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext);

$output181 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
$output277 = '';

$output277 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments278 = array();
$arguments278['additionalAttributes'] = NULL;
$arguments278['data'] = NULL;
$arguments278['name'] = NULL;
$arguments278['value'] = NULL;
$arguments278['property'] = NULL;
$arguments278['class'] = NULL;
$arguments278['dir'] = NULL;
$arguments278['id'] = NULL;
$arguments278['lang'] = NULL;
$arguments278['style'] = NULL;
$arguments278['title'] = NULL;
$arguments278['accesskey'] = NULL;
$arguments278['tabindex'] = NULL;
$arguments278['onclick'] = NULL;
$arguments278['name'] = 'noredirect';
$arguments278['value'] = 1;

$output277 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext);

$output277 .= '
            ';
return $output277;
};
$arguments272 = array();
$arguments272['then'] = NULL;
$arguments272['else'] = NULL;
$arguments272['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array274 = array();
$array275 = array (
);$array274['0'] = $renderingContext->getVariableProvider()->getByPath('noRedirect', $array275);
$array274['1'] = '!=\'\'';

$expression276 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != '');};
$arguments272['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression276(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array274)
					),
					$renderingContext
				);
$arguments272['__thenClosure'] = $renderChildrenClosure273;

$output181 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext);

$output181 .= '

            ';
$array280 = array (
);
$output181 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraHidden', $array280)]);

$output181 .= '
        </div>
    </fieldset>
';
return $output181;
};
$arguments179 = array();
$arguments179['name'] = NULL;
$arguments179['name'] = 'content';

$output100 .= NULL;

$output100 .= '

';

return $output100;
}


}
#