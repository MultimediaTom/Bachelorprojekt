<?php

class Standard_action_index_6b9cd8284080d81c4403ce19a1d52ab5ff19433a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'k' => 
  array (
    0 => 'EBT\\ExtensionBuilder\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= 'plugin.';
$array5 = array (
);
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey', $array5)]);

$output4 .= '_';
$array6 = array (
);
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('plugin.key', $array6)]);

$output4 .= ' {
    view ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
        templateRootPaths.0 = EXT:';
$array10 = array (
);
$output9 .= $renderingContext->getVariableProvider()->getByPath('extension.extensionKey', $array10);

$output9 .= '/Resources/Private/Templates/
        templateRootPaths.1 = ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '$plugin.';
$array14 = array (
);
$output13 .= $renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey', $array14);

$output13 .= '_';
$array15 = array (
);
$output13 .= $renderingContext->getVariableProvider()->getByPath('plugin.key', $array15);

$output13 .= '.view.templateRootPath';
return $output13;
};
$arguments11 = array();

$output9 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output9 .= '
        partialRootPaths.0 = EXT:';
$array16 = array (
);
$output9 .= $renderingContext->getVariableProvider()->getByPath('extension.extensionKey', $array16);

$output9 .= '/Resources/Private/Partials/
        partialRootPaths.1 = ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '$plugin.';
$array20 = array (
);
$output19 .= $renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey', $array20);

$output19 .= '_';
$array21 = array (
);
$output19 .= $renderingContext->getVariableProvider()->getByPath('plugin.key', $array21);

$output19 .= '.view.partialRootPath';
return $output19;
};
$arguments17 = array();

$output9 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output9 .= '
        layoutRootPaths.0 = EXT:';
$array22 = array (
);
$output9 .= $renderingContext->getVariableProvider()->getByPath('extension.extensionKey', $array22);

$output9 .= '/Resources/Private/Layouts/
        layoutRootPaths.1 = ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '$plugin.';
$array26 = array (
);
$output25 .= $renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey', $array26);

$output25 .= '_';
$array27 = array (
);
$output25 .= $renderingContext->getVariableProvider()->getByPath('plugin.key', $array27);

$output25 .= '.view.layoutRootPath';
return $output25;
};
$arguments23 = array();

$output9 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output9 .= '
    ';
return $output9;
};
$arguments7 = array();

$output4 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output4 .= '
    persistence {
        storagePid = ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '$plugin.';
$array31 = array (
);
$output30 .= $renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey', $array31);

$output30 .= '_';
$array32 = array (
);
$output30 .= $renderingContext->getVariableProvider()->getByPath('plugin.key', $array32);

$output30 .= '.persistence.storagePid';
return $output30;
};
$arguments28 = array();

$output4 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output4 .= '
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}
';
return $output4;
};
$arguments1 = array();
$arguments1['each'] = NULL;
$arguments1['as'] = NULL;
$arguments1['key'] = NULL;
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$array3 = array (
);$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('extension.plugins', $array3);
$arguments1['as'] = 'plugin';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
# these classes are only used in auto-generated templates
plugin.';
$array39 = array (
);
$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey', $array39)]);

$output38 .= '._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .';
$array40 = array (
);
$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.cssClassName', $array40)]);

$output38 .= ' table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .';
$array41 = array (
);
$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.cssClassName', $array41)]);

$output38 .= ' table th {
        font-weight:bold;
    }

    .';
$array42 = array (
);
$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.cssClassName', $array42)]);

$output38 .= ' table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
';
return $output38;
};
$arguments33 = array();
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$arguments33['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['0'] = $renderingContext->getVariableProvider()->getByPath('extension.plugins', $array36);

$expression37 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments33['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)
					),
					$renderingContext
				);
$arguments33['__thenClosure'] = $renderChildrenClosure34;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
# Module configuration
module.';
$array47 = array (
);
$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey', $array47)]);

$output46 .= '_';
$array48 = array (
);
$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendModule.mainModule', $array48)]);

$output46 .= '_';
$array49 = array (
);
$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.unprefixedShortExtensionKey', $array49)]);
$array50 = array (
);
$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendModule.key', $array50)]);

$output46 .= ' {
    persistence {
        storagePid = ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '$module.';
$array54 = array (
);
$output53 .= $renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey', $array54);

$output53 .= '_';
$array55 = array (
);
$output53 .= $renderingContext->getVariableProvider()->getByPath('backendModule.key', $array55);

$output53 .= '.persistence.storagePid';
return $output53;
};
$arguments51 = array();

$output46 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output46 .= '
    }
    view ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
        templateRootPaths.0 = EXT:';
$array59 = array (
);
$output58 .= $renderingContext->getVariableProvider()->getByPath('extension.extensionKey', $array59);

$output58 .= '/Resources/Private/Backend/Templates/
        templateRootPaths.1 = ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '$module.';
$array63 = array (
);
$output62 .= $renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey', $array63);

$output62 .= '_';
$array64 = array (
);
$output62 .= $renderingContext->getVariableProvider()->getByPath('backendModule.key', $array64);

$output62 .= '.view.templateRootPath';
return $output62;
};
$arguments60 = array();

$output58 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output58 .= '
        partialRootPaths.0 = EXT:';
$array65 = array (
);
$output58 .= $renderingContext->getVariableProvider()->getByPath('extension.extensionKey', $array65);

$output58 .= '/Resources/Private/Backend/Partials/
        partialRootPaths.1 = ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output68 = '';

$output68 .= '$module.';
$array69 = array (
);
$output68 .= $renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey', $array69);

$output68 .= '_';
$array70 = array (
);
$output68 .= $renderingContext->getVariableProvider()->getByPath('backendModule.key', $array70);

$output68 .= '.view.partialRootPath';
return $output68;
};
$arguments66 = array();

$output58 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output58 .= '
        layoutRootPaths.0 = EXT:';
$array71 = array (
);
$output58 .= $renderingContext->getVariableProvider()->getByPath('extension.extensionKey', $array71);

$output58 .= '/Resources/Private/Backend/Layouts/
        layoutRootPaths.1 = ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '$module.';
$array75 = array (
);
$output74 .= $renderingContext->getVariableProvider()->getByPath('extension.shortExtensionKey', $array75);

$output74 .= '_';
$array76 = array (
);
$output74 .= $renderingContext->getVariableProvider()->getByPath('backendModule.key', $array76);

$output74 .= '.view.layoutRootPath';
return $output74;
};
$arguments72 = array();

$output58 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output58 .= '
    ';
return $output58;
};
$arguments56 = array();

$output46 .= EBT\ExtensionBuilder\ViewHelpers\CurlyBracketsViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output46 .= '
}
';
return $output46;
};
$arguments43 = array();
$arguments43['each'] = NULL;
$arguments43['as'] = NULL;
$arguments43['key'] = NULL;
$arguments43['reverse'] = false;
$arguments43['iteration'] = NULL;
$array45 = array (
);$arguments43['each'] = $renderingContext->getVariableProvider()->getByPath('extension.backendModules', $array45);
$arguments43['as'] = 'backendModule';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#