<?php

class Standard_action_texticon_32f0a3563bb94d2927d58e7fe962ab53d2f41102 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
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
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
));
}

/**
 * section Header
 */
public function section_31341c6f0c7af677ffb8fadcb92038e8ac2b6193(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return NULL;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

    <div class="texticon texticon-';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.icon_position', $array1)]);

$output0 .= '">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
            <div class="texticon-icon texticon-size-';
$array12 = array (
);
$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.icon_size', $array12)]);

$output11 .= ' texticon-type-';
$array13 = array (
);
$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.icon_type', $array13)]);

$output11 .= '">

                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['value'] = NULL;
$arguments25['name'] = NULL;
$arguments25['name'] = 'iconStyle';
$output27 = '';
$array28 = array (
);
$output27 .= $renderingContext->getVariableProvider()->getByPath('iconStyle', $array28);

$output27 .= 'color: ';
$array29 = array (
);
$output27 .= $renderingContext->getVariableProvider()->getByPath('data.icon_color', $array29);

$output27 .= ';';
$arguments25['value'] = $output27;
$renderChildrenClosure26 = ($arguments25['value'] !== null) ? function() use ($arguments25) { return $arguments25['value']; } : $renderChildrenClosure26;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);
};
$arguments20 = array();
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$arguments20['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array22 = array();
$array23 = array (
);$array22['0'] = $renderingContext->getVariableProvider()->getByPath('data.icon_color', $array23);

$expression24 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments20['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression24(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)
					),
					$renderingContext
				);
$arguments20['__thenClosure'] = $renderChildrenClosure21;

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['value'] = NULL;
$arguments35['name'] = NULL;
$arguments35['name'] = 'iconStyle';
$output37 = '';
$array38 = array (
);
$output37 .= $renderingContext->getVariableProvider()->getByPath('iconStyle', $array38);

$output37 .= 'background-color: ';
$array39 = array (
);
$output37 .= $renderingContext->getVariableProvider()->getByPath('data.icon_background', $array39);

$output37 .= ';';
$arguments35['value'] = $output37;
$renderChildrenClosure36 = ($arguments35['value'] !== null) ? function() use ($arguments35) { return $arguments35['value']; } : $renderChildrenClosure36;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext)]);
};
$arguments30 = array();
$arguments30['then'] = NULL;
$arguments30['else'] = NULL;
$arguments30['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array32 = array();
$array33 = array (
);$array32['0'] = $renderingContext->getVariableProvider()->getByPath('data.icon_background', $array33);

$expression34 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments30['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression34(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array32)
					),
					$renderingContext
				);
$arguments30['__thenClosure'] = $renderChildrenClosure31;

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output19 .= '
                ';
return $output19;
};
$arguments14 = array();
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$arguments14['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['0'] = $renderingContext->getVariableProvider()->getByPath('data.icon_type', $array17);
$array16['1'] = ' !== default';

$expression18 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) !== "default");};
$arguments14['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
					),
					$renderingContext
				);
$arguments14['__thenClosure'] = $renderChildrenClosure15;

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output11 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['value'] = NULL;
$arguments40['name'] = NULL;
$arguments40['name'] = 'iconHeight';
$array42 = array (
);$arguments40['value'] = $renderingContext->getVariableProvider()->getByPath('settings.texticon.icon.{data.icon_size}.height', $array42);
$renderChildrenClosure41 = ($arguments40['value'] !== null) ? function() use ($arguments40) { return $arguments40['value']; } : $renderChildrenClosure41;
$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext)]);

$output11 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['value'] = NULL;
$arguments43['name'] = NULL;
$arguments43['name'] = 'iconWidth';
$array45 = array (
);$arguments43['value'] = $renderingContext->getVariableProvider()->getByPath('settings.texticon.icon.{data.icon_size}.width', $array45);
$renderChildrenClosure44 = ($arguments43['value'] !== null) ? function() use ($arguments43) { return $arguments43['value']; } : $renderChildrenClosure44;
$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext)]);

$output11 .= '
                <span class="texticon-inner-icon"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['then'] = NULL;
$arguments46['else'] = NULL;
$arguments46['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array48 = array();
$array49 = array (
);$array48['0'] = $renderingContext->getVariableProvider()->getByPath('iconStyle', $array49);

$expression50 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments46['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression50(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array48)
					),
					$renderingContext
				);
$output51 = '';

$output51 .= ' style="';
$array52 = array (
);
$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iconStyle', $array52)]);

$output51 .= '"';
$arguments46['then'] = $output51;

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output11 .= '>
                    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['icon'] = NULL;
$arguments53['height'] = NULL;
$arguments53['width'] = NULL;
$array55 = array (
);$arguments53['icon'] = $renderingContext->getVariableProvider()->getByPath('icon', $array55);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string56 = '{iconHeight as integer}';
$array57 = array (
  0 => '{iconHeight as integer}',
  1 => '{iconHeight as integer}',
);
$arguments53['height'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string56, $array57);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string58 = '{iconWidth as integer}';
$array59 = array (
  0 => '{iconWidth as integer}',
  1 => '{iconWidth as integer}',
);
$arguments53['width'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string58, $array59);

$output11 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output11 .= '
                </span>

            </div>
            ';
return $output11;
};
$arguments8 = array();
$arguments8['parameter'] = NULL;
$arguments8['target'] = '';
$arguments8['class'] = '';
$arguments8['title'] = '';
$arguments8['language'] = NULL;
$arguments8['additionalParams'] = '';
$arguments8['additionalAttributes'] = array (
);
$arguments8['useCacheHash'] = NULL;
$arguments8['addQueryString'] = false;
$arguments8['addQueryStringMethod'] = 'GET';
$arguments8['addQueryStringExclude'] = '';
$arguments8['absolute'] = false;
$arguments8['parts-as'] = 'typoLinkParts';
$array10 = array (
);$arguments8['parameter'] = $renderingContext->getVariableProvider()->getByPath('data.header_link', $array10);

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
        ';
return $output7;
};
$arguments2 = array();
$arguments2['then'] = NULL;
$arguments2['else'] = NULL;
$arguments2['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array4 = array();
$array5 = array (
);$array4['0'] = $renderingContext->getVariableProvider()->getByPath('icon', $array5);

$expression6 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression6(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)
					),
					$renderingContext
				);
$arguments2['__thenClosure'] = $renderChildrenClosure3;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '
        <div class="texticon-content">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['section'] = NULL;
$arguments60['partial'] = NULL;
$arguments60['delegate'] = NULL;
$arguments60['renderable'] = NULL;
$arguments60['arguments'] = array (
);
$arguments60['optional'] = false;
$arguments60['default'] = NULL;
$arguments60['contentAs'] = NULL;
$arguments60['debug'] = true;
$arguments60['partial'] = 'Header/All';
$arguments60['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$array65 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.bodytext', $array65);
};
$arguments63 = array();
$arguments63['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output0 .= '
        </div>
    </div>

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output66 = '';

$output66 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['name'] = NULL;
$arguments67['name'] = 'Default';

$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output66 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['name'] = NULL;
$arguments69['name'] = 'Header';

$output66 .= NULL;

$output66 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '

    <div class="texticon texticon-';
$array74 = array (
);
$output73 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.icon_position', $array74)]);

$output73 .= '">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output80 = '';

$output80 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
            <div class="texticon-icon texticon-size-';
$array85 = array (
);
$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.icon_size', $array85)]);

$output84 .= ' texticon-type-';
$array86 = array (
);
$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.icon_type', $array86)]);

$output84 .= '">

                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output92 = '';

$output92 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments98 = array();
$arguments98['value'] = NULL;
$arguments98['name'] = NULL;
$arguments98['name'] = 'iconStyle';
$output100 = '';
$array101 = array (
);
$output100 .= $renderingContext->getVariableProvider()->getByPath('iconStyle', $array101);

$output100 .= 'color: ';
$array102 = array (
);
$output100 .= $renderingContext->getVariableProvider()->getByPath('data.icon_color', $array102);

$output100 .= ';';
$arguments98['value'] = $output100;
$renderChildrenClosure99 = ($arguments98['value'] !== null) ? function() use ($arguments98) { return $arguments98['value']; } : $renderChildrenClosure99;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext)]);
};
$arguments93 = array();
$arguments93['then'] = NULL;
$arguments93['else'] = NULL;
$arguments93['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['0'] = $renderingContext->getVariableProvider()->getByPath('data.icon_color', $array96);

$expression97 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments93['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression97(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array95)
					),
					$renderingContext
				);
$arguments93['__thenClosure'] = $renderChildrenClosure94;

$output92 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output92 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments108 = array();
$arguments108['value'] = NULL;
$arguments108['name'] = NULL;
$arguments108['name'] = 'iconStyle';
$output110 = '';
$array111 = array (
);
$output110 .= $renderingContext->getVariableProvider()->getByPath('iconStyle', $array111);

$output110 .= 'background-color: ';
$array112 = array (
);
$output110 .= $renderingContext->getVariableProvider()->getByPath('data.icon_background', $array112);

$output110 .= ';';
$arguments108['value'] = $output110;
$renderChildrenClosure109 = ($arguments108['value'] !== null) ? function() use ($arguments108) { return $arguments108['value']; } : $renderChildrenClosure109;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext)]);
};
$arguments103 = array();
$arguments103['then'] = NULL;
$arguments103['else'] = NULL;
$arguments103['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array105 = array();
$array106 = array (
);$array105['0'] = $renderingContext->getVariableProvider()->getByPath('data.icon_background', $array106);

$expression107 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments103['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression107(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array105)
					),
					$renderingContext
				);
$arguments103['__thenClosure'] = $renderChildrenClosure104;

$output92 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output92 .= '
                ';
return $output92;
};
$arguments87 = array();
$arguments87['then'] = NULL;
$arguments87['else'] = NULL;
$arguments87['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array89 = array();
$array90 = array (
);$array89['0'] = $renderingContext->getVariableProvider()->getByPath('data.icon_type', $array90);
$array89['1'] = ' !== default';

$expression91 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) !== "default");};
$arguments87['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression91(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array89)
					),
					$renderingContext
				);
$arguments87['__thenClosure'] = $renderChildrenClosure88;

$output84 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output84 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments113 = array();
$arguments113['value'] = NULL;
$arguments113['name'] = NULL;
$arguments113['name'] = 'iconHeight';
$array115 = array (
);$arguments113['value'] = $renderingContext->getVariableProvider()->getByPath('settings.texticon.icon.{data.icon_size}.height', $array115);
$renderChildrenClosure114 = ($arguments113['value'] !== null) ? function() use ($arguments113) { return $arguments113['value']; } : $renderChildrenClosure114;
$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext)]);

$output84 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['value'] = NULL;
$arguments116['name'] = NULL;
$arguments116['name'] = 'iconWidth';
$array118 = array (
);$arguments116['value'] = $renderingContext->getVariableProvider()->getByPath('settings.texticon.icon.{data.icon_size}.width', $array118);
$renderChildrenClosure117 = ($arguments116['value'] !== null) ? function() use ($arguments116) { return $arguments116['value']; } : $renderChildrenClosure117;
$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext)]);

$output84 .= '
                <span class="texticon-inner-icon"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments119 = array();
$arguments119['then'] = NULL;
$arguments119['else'] = NULL;
$arguments119['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array121 = array();
$array122 = array (
);$array121['0'] = $renderingContext->getVariableProvider()->getByPath('iconStyle', $array122);

$expression123 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments119['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression123(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array121)
					),
					$renderingContext
				);
$output124 = '';

$output124 .= ' style="';
$array125 = array (
);
$output124 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iconStyle', $array125)]);

$output124 .= '"';
$arguments119['then'] = $output124;

$output84 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output84 .= '>
                    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments126 = array();
$arguments126['icon'] = NULL;
$arguments126['height'] = NULL;
$arguments126['width'] = NULL;
$array128 = array (
);$arguments126['icon'] = $renderingContext->getVariableProvider()->getByPath('icon', $array128);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string129 = '{iconHeight as integer}';
$array130 = array (
  0 => '{iconHeight as integer}',
  1 => '{iconHeight as integer}',
);
$arguments126['height'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string129, $array130);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string131 = '{iconWidth as integer}';
$array132 = array (
  0 => '{iconWidth as integer}',
  1 => '{iconWidth as integer}',
);
$arguments126['width'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string131, $array132);

$output84 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output84 .= '
                </span>

            </div>
            ';
return $output84;
};
$arguments81 = array();
$arguments81['parameter'] = NULL;
$arguments81['target'] = '';
$arguments81['class'] = '';
$arguments81['title'] = '';
$arguments81['language'] = NULL;
$arguments81['additionalParams'] = '';
$arguments81['additionalAttributes'] = array (
);
$arguments81['useCacheHash'] = NULL;
$arguments81['addQueryString'] = false;
$arguments81['addQueryStringMethod'] = 'GET';
$arguments81['addQueryStringExclude'] = '';
$arguments81['absolute'] = false;
$arguments81['parts-as'] = 'typoLinkParts';
$array83 = array (
);$arguments81['parameter'] = $renderingContext->getVariableProvider()->getByPath('data.header_link', $array83);

$output80 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output80 .= '
        ';
return $output80;
};
$arguments75 = array();
$arguments75['then'] = NULL;
$arguments75['else'] = NULL;
$arguments75['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array77 = array();
$array78 = array (
);$array77['0'] = $renderingContext->getVariableProvider()->getByPath('icon', $array78);

$expression79 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments75['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression79(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array77)
					),
					$renderingContext
				);
$arguments75['__thenClosure'] = $renderChildrenClosure76;

$output73 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output73 .= '
        <div class="texticon-content">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['section'] = NULL;
$arguments133['partial'] = NULL;
$arguments133['delegate'] = NULL;
$arguments133['renderable'] = NULL;
$arguments133['arguments'] = array (
);
$arguments133['optional'] = false;
$arguments133['default'] = NULL;
$arguments133['contentAs'] = NULL;
$arguments133['debug'] = true;
$arguments133['partial'] = 'Header/All';
$arguments133['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output73 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output73 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
$array138 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.bodytext', $array138);
};
$arguments136 = array();
$arguments136['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output73 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output73 .= '
        </div>
    </div>

';
return $output73;
};
$arguments71 = array();
$arguments71['name'] = NULL;
$arguments71['name'] = 'Main';

$output66 .= NULL;

$output66 .= '

';

return $output66;
}


}
#