<?php

class Distribution_action_show_968c58363e3bc4cbb57c3b455710a2b5a943fe69 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'main';
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
  'em' => 
  array (
    0 => 'TYPO3\\CMS\\Extensionmanager\\ViewHelpers',
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

    <div class="distribution-detail">
        <div class="distribution-detail-previewpane">
            ';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\DistributionImageViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['extensionkey'] = NULL;
$arguments1['width'] = NULL;
$arguments1['height'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['alt'] = NULL;
$array3 = array (
);$arguments1['extensionkey'] = $renderingContext->getVariableProvider()->getByPath('extension.extensionKey', $array3);
$arguments1['alt'] = '';
$arguments1['height'] = 225;
$arguments1['width'] = 300;

$output0 .= TYPO3\CMS\Extensionmanager\ViewHelpers\DistributionImageViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
        </div>
        <div class="distribution-detail-body">
            <div class="distribution-detail-header">
                <h1>';
$array4 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title', $array4)]);

$output0 .= '</h1>
                <p>';
$array5 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.description', $array5)]);

$output0 .= '</p>
            </div>

            <ul class="distribution-detail-actions">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
                        <li>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['identifier'] = NULL;
$arguments39['size'] = 'small';
$arguments39['overlay'] = NULL;
$arguments39['state'] = 'default';
$arguments39['alternativeMarkupIdentifier'] = NULL;
$arguments39['identifier'] = 'actions-system-extension-import';

$output38 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return 'Install';
};
$arguments41 = array();
$arguments41['key'] = NULL;
$arguments41['id'] = NULL;
$arguments41['default'] = NULL;
$arguments41['arguments'] = NULL;
$arguments41['extensionName'] = NULL;
$arguments41['languageKey'] = NULL;
$arguments41['alternativeLanguageKeys'] = NULL;
$arguments41['key'] = 'extensionList.installDistribution';

$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext)]);

$output38 .= '
                            ';
return $output38;
};
$arguments34 = array();
$arguments34['additionalAttributes'] = NULL;
$arguments34['data'] = NULL;
$arguments34['class'] = NULL;
$arguments34['dir'] = NULL;
$arguments34['id'] = NULL;
$arguments34['lang'] = NULL;
$arguments34['style'] = NULL;
$arguments34['title'] = NULL;
$arguments34['accesskey'] = NULL;
$arguments34['tabindex'] = NULL;
$arguments34['onclick'] = NULL;
$arguments34['name'] = NULL;
$arguments34['rel'] = NULL;
$arguments34['rev'] = NULL;
$arguments34['target'] = NULL;
$arguments34['action'] = NULL;
$arguments34['controller'] = NULL;
$arguments34['extensionName'] = NULL;
$arguments34['pluginName'] = NULL;
$arguments34['pageUid'] = NULL;
$arguments34['pageType'] = NULL;
$arguments34['noCache'] = NULL;
$arguments34['noCacheHash'] = NULL;
$arguments34['section'] = NULL;
$arguments34['format'] = NULL;
$arguments34['linkAccessRestrictedPages'] = NULL;
$arguments34['additionalParams'] = NULL;
$arguments34['absolute'] = NULL;
$arguments34['addQueryString'] = NULL;
$arguments34['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments34['addQueryStringMethod'] = NULL;
$arguments34['arguments'] = NULL;
$arguments34['action'] = 'installDistribution';
$arguments34['controller'] = 'Download';
// Rendering Array
$array36 = array();
$array37 = array (
);$array36['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array37);
$arguments34['arguments'] = $array36;
$arguments34['class'] = 'btn btn-default t3-button-action-installdistribution';

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output33 .= '
                        </li>
                    ';
return $output33;
};
$arguments31 = array();
$arguments31['if'] = NULL;

$output30 .= '';

$output30 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
                        <li>
                            <button class="btn btn-default distribution-openViewModule" onclick="top.goToModule(\'web_ViewpageView\');">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['identifier'] = NULL;
$arguments46['size'] = 'small';
$arguments46['overlay'] = NULL;
$arguments46['state'] = 'default';
$arguments46['alternativeMarkupIdentifier'] = NULL;
$arguments46['identifier'] = 'actions-document-view';

$output45 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['key'] = NULL;
$arguments48['id'] = NULL;
$arguments48['default'] = NULL;
$arguments48['arguments'] = NULL;
$arguments48['extensionName'] = NULL;
$arguments48['languageKey'] = NULL;
$arguments48['alternativeLanguageKeys'] = NULL;
$arguments48['key'] = 'distribution.welcome.openViewModule';

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext)]);

$output45 .= '
                            </button>
                        </li>
                        <li>
                            <button class="btn btn-default distribution-openPageModule" onclick="top.goToModule(\'web_layout\');">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['identifier'] = NULL;
$arguments50['size'] = 'small';
$arguments50['overlay'] = NULL;
$arguments50['state'] = 'default';
$arguments50['alternativeMarkupIdentifier'] = NULL;
$arguments50['identifier'] = 'actions-open';

$output45 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output45 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['key'] = NULL;
$arguments52['id'] = NULL;
$arguments52['default'] = NULL;
$arguments52['arguments'] = NULL;
$arguments52['extensionName'] = NULL;
$arguments52['languageKey'] = NULL;
$arguments52['alternativeLanguageKeys'] = NULL;
$arguments52['key'] = 'distribution.welcome.openPageModule';

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext)]);

$output45 .= '
                            </button>
                        </li>
                    ';
return $output45;
};
$arguments43 = array();

$output30 .= '';

$output30 .= '
                ';
return $output30;
};
$arguments6 = array();
$arguments6['then'] = NULL;
$arguments6['else'] = NULL;
$arguments6['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['0'] = $renderingContext->getVariableProvider()->getByPath('distributionActive', $array28);

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments6['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression29(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)
					),
					$renderingContext
				);
$arguments6['__elseClosures'][] = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
                        <li>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['identifier'] = NULL;
$arguments14['size'] = 'small';
$arguments14['overlay'] = NULL;
$arguments14['state'] = 'default';
$arguments14['alternativeMarkupIdentifier'] = NULL;
$arguments14['identifier'] = 'actions-system-extension-import';

$output13 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return 'Install';
};
$arguments16 = array();
$arguments16['key'] = NULL;
$arguments16['id'] = NULL;
$arguments16['default'] = NULL;
$arguments16['arguments'] = NULL;
$arguments16['extensionName'] = NULL;
$arguments16['languageKey'] = NULL;
$arguments16['alternativeLanguageKeys'] = NULL;
$arguments16['key'] = 'extensionList.installDistribution';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext)]);

$output13 .= '
                            ';
return $output13;
};
$arguments9 = array();
$arguments9['additionalAttributes'] = NULL;
$arguments9['data'] = NULL;
$arguments9['class'] = NULL;
$arguments9['dir'] = NULL;
$arguments9['id'] = NULL;
$arguments9['lang'] = NULL;
$arguments9['style'] = NULL;
$arguments9['title'] = NULL;
$arguments9['accesskey'] = NULL;
$arguments9['tabindex'] = NULL;
$arguments9['onclick'] = NULL;
$arguments9['name'] = NULL;
$arguments9['rel'] = NULL;
$arguments9['rev'] = NULL;
$arguments9['target'] = NULL;
$arguments9['action'] = NULL;
$arguments9['controller'] = NULL;
$arguments9['extensionName'] = NULL;
$arguments9['pluginName'] = NULL;
$arguments9['pageUid'] = NULL;
$arguments9['pageType'] = NULL;
$arguments9['noCache'] = NULL;
$arguments9['noCacheHash'] = NULL;
$arguments9['section'] = NULL;
$arguments9['format'] = NULL;
$arguments9['linkAccessRestrictedPages'] = NULL;
$arguments9['additionalParams'] = NULL;
$arguments9['absolute'] = NULL;
$arguments9['addQueryString'] = NULL;
$arguments9['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments9['addQueryStringMethod'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['action'] = 'installDistribution';
$arguments9['controller'] = 'Download';
// Rendering Array
$array11 = array();
$array12 = array (
);$array11['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array12);
$arguments9['arguments'] = $array11;
$arguments9['class'] = 'btn btn-default t3-button-action-installdistribution';

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
                        </li>
                    ';
return $output8;
};
$arguments6['__thenClosure'] = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
                        <li>
                            <button class="btn btn-default distribution-openViewModule" onclick="top.goToModule(\'web_ViewpageView\');">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['identifier'] = NULL;
$arguments19['size'] = 'small';
$arguments19['overlay'] = NULL;
$arguments19['state'] = 'default';
$arguments19['alternativeMarkupIdentifier'] = NULL;
$arguments19['identifier'] = 'actions-document-view';

$output18 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['key'] = NULL;
$arguments21['id'] = NULL;
$arguments21['default'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['extensionName'] = NULL;
$arguments21['languageKey'] = NULL;
$arguments21['alternativeLanguageKeys'] = NULL;
$arguments21['key'] = 'distribution.welcome.openViewModule';

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output18 .= '
                            </button>
                        </li>
                        <li>
                            <button class="btn btn-default distribution-openPageModule" onclick="top.goToModule(\'web_layout\');">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['identifier'] = NULL;
$arguments23['size'] = 'small';
$arguments23['overlay'] = NULL;
$arguments23['state'] = 'default';
$arguments23['alternativeMarkupIdentifier'] = NULL;
$arguments23['identifier'] = 'actions-open';

$output18 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output18 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['key'] = NULL;
$arguments25['id'] = NULL;
$arguments25['default'] = NULL;
$arguments25['arguments'] = NULL;
$arguments25['extensionName'] = NULL;
$arguments25['languageKey'] = NULL;
$arguments25['alternativeLanguageKeys'] = NULL;
$arguments25['key'] = 'distribution.welcome.openPageModule';

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output18 .= '
                            </button>
                        </li>
                    ';
return $output18;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '
            </ul>

            <dl class="dl-horizontal dl-horizontal-wide distribution-detail-summary">
                <dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['key'] = NULL;
$arguments54['id'] = NULL;
$arguments54['default'] = NULL;
$arguments54['arguments'] = NULL;
$arguments54['extensionName'] = NULL;
$arguments54['languageKey'] = NULL;
$arguments54['alternativeLanguageKeys'] = NULL;
$arguments54['key'] = 'extensionList.distribution.title';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext)]);

$output0 .= '</dt>
                <dd>';
$array56 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title', $array56)]);

$output0 .= '</dd>
                <dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['key'] = NULL;
$arguments57['id'] = NULL;
$arguments57['default'] = NULL;
$arguments57['arguments'] = NULL;
$arguments57['extensionName'] = NULL;
$arguments57['languageKey'] = NULL;
$arguments57['alternativeLanguageKeys'] = NULL;
$arguments57['key'] = 'extensionList.distribution.key';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output0 .= '</dt>
                <dd>';
$array59 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.extensionKey', $array59)]);

$output0 .= '</dd>
                <dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['key'] = NULL;
$arguments60['id'] = NULL;
$arguments60['default'] = NULL;
$arguments60['arguments'] = NULL;
$arguments60['extensionName'] = NULL;
$arguments60['languageKey'] = NULL;
$arguments60['alternativeLanguageKeys'] = NULL;
$arguments60['key'] = 'extensionList.distribution.version';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext)]);

$output0 .= '</dt>
                <dd>';
$array62 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.version', $array62)]);

$output0 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$array65 = array (
);return $renderingContext->getVariableProvider()->getByPath('extension.lastUpdated', $array65);
};
$arguments63 = array();
$arguments63['date'] = NULL;
$arguments63['format'] = '';
$arguments63['base'] = NULL;
$arguments63['format'] = 'd.m.Y';
$renderChildrenClosure64 = ($arguments63['date'] !== null) ? function() use ($arguments63) { return $arguments63['date']; } : $renderChildrenClosure64;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext)]);

$output0 .= ')<br><span class="';
$array66 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.stateString', $array66)]);

$output0 .= '">';
$array67 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.stateString', $array67)]);

$output0 .= '</span></dd>
                <dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['key'] = NULL;
$arguments68['id'] = NULL;
$arguments68['default'] = NULL;
$arguments68['arguments'] = NULL;
$arguments68['extensionName'] = NULL;
$arguments68['languageKey'] = NULL;
$arguments68['alternativeLanguageKeys'] = NULL;
$arguments68['key'] = 'extensionList.distribution.author';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext)]);

$output0 .= '</dt>
                <dd>';
$array70 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.authorName', $array70)]);

$output0 .= '</dd>
                <dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['key'] = NULL;
$arguments71['id'] = NULL;
$arguments71['default'] = NULL;
$arguments71['arguments'] = NULL;
$arguments71['extensionName'] = NULL;
$arguments71['languageKey'] = NULL;
$arguments71['alternativeLanguageKeys'] = NULL;
$arguments71['key'] = 'extensionList.distribution.downloads';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext)]);

$output0 .= '</dt>
                <dd>';
$array73 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.alldownloadcounter', $array73)]);

$output0 .= '</dd>
            </dl>

            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
                <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['key'] = NULL;
$arguments80['id'] = NULL;
$arguments80['default'] = NULL;
$arguments80['arguments'] = NULL;
$arguments80['extensionName'] = NULL;
$arguments80['languageKey'] = NULL;
$arguments80['alternativeLanguageKeys'] = NULL;
$arguments80['key'] = 'distribution.dependency.headline';

$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext)]);

$output79 .= '</h2>
                <div class="table-fit">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['key'] = NULL;
$arguments82['id'] = NULL;
$arguments82['default'] = NULL;
$arguments82['arguments'] = NULL;
$arguments82['extensionName'] = NULL;
$arguments82['languageKey'] = NULL;
$arguments82['alternativeLanguageKeys'] = NULL;
$arguments82['key'] = 'distribution.dependency.identifier';

$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext)]);

$output79 .= '</td>
                                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['key'] = NULL;
$arguments84['id'] = NULL;
$arguments84['default'] = NULL;
$arguments84['arguments'] = NULL;
$arguments84['extensionName'] = NULL;
$arguments84['languageKey'] = NULL;
$arguments84['alternativeLanguageKeys'] = NULL;
$arguments84['key'] = 'distribution.dependency.type';

$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext)]);

$output79 .= '</td>
                                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['key'] = NULL;
$arguments86['id'] = NULL;
$arguments86['default'] = NULL;
$arguments86['arguments'] = NULL;
$arguments86['extensionName'] = NULL;
$arguments86['languageKey'] = NULL;
$arguments86['alternativeLanguageKeys'] = NULL;
$arguments86['key'] = 'distribution.dependency.version';

$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext)]);

$output79 .= '</td>
                            </tr>
                        </thead>
                        <tbody>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
                                <tr>
                                    <td>';
$array92 = array (
);
$output91 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dependency.identifier', $array92)]);

$output91 .= '</td>
                                    <td>';
$array93 = array (
);
$output91 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dependency.type', $array93)]);

$output91 .= '</td>
                                    <td>
                                        ';
$array94 = array (
);
$output91 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dependency.lowestVersion', $array94)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '-';
$array101 = array (
);
$output100 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dependency.highestVersion', $array101)]);
return $output100;
};
$arguments95 = array();
$arguments95['then'] = NULL;
$arguments95['else'] = NULL;
$arguments95['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array97 = array();
$array98 = array (
);$array97['0'] = $renderingContext->getVariableProvider()->getByPath('dependency.highestVersion', $array98);

$expression99 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments95['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression99(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array97)
					),
					$renderingContext
				);
$arguments95['__thenClosure'] = $renderChildrenClosure96;

$output91 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output91 .= '
                                    </td>
                                </tr>
                            ';
return $output91;
};
$arguments88 = array();
$arguments88['each'] = NULL;
$arguments88['as'] = NULL;
$arguments88['key'] = NULL;
$arguments88['reverse'] = false;
$arguments88['iteration'] = NULL;
$array90 = array (
);$arguments88['each'] = $renderingContext->getVariableProvider()->getByPath('extension.dependencies', $array90);
$arguments88['as'] = 'dependency';

$output79 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output79 .= '
                        </tbody>
                    </table>
                </div>
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
);$array76['0'] = $renderingContext->getVariableProvider()->getByPath('extension.dependencies', $array77);

$expression78 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments74['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression78(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array76)
					),
					$renderingContext
				);
$arguments74['__thenClosure'] = $renderChildrenClosure75;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

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
$output102 = '';

$output102 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments103 = array();
$arguments103['name'] = NULL;
$arguments103['name'] = 'main';

$output102 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output102 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '

    <div class="distribution-detail">
        <div class="distribution-detail-previewpane">
            ';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\DistributionImageViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments108 = array();
$arguments108['additionalAttributes'] = NULL;
$arguments108['data'] = NULL;
$arguments108['extensionkey'] = NULL;
$arguments108['width'] = NULL;
$arguments108['height'] = NULL;
$arguments108['class'] = NULL;
$arguments108['dir'] = NULL;
$arguments108['id'] = NULL;
$arguments108['lang'] = NULL;
$arguments108['style'] = NULL;
$arguments108['title'] = NULL;
$arguments108['accesskey'] = NULL;
$arguments108['tabindex'] = NULL;
$arguments108['onclick'] = NULL;
$arguments108['alt'] = NULL;
$array110 = array (
);$arguments108['extensionkey'] = $renderingContext->getVariableProvider()->getByPath('extension.extensionKey', $array110);
$arguments108['alt'] = '';
$arguments108['height'] = 225;
$arguments108['width'] = 300;

$output107 .= TYPO3\CMS\Extensionmanager\ViewHelpers\DistributionImageViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output107 .= '
        </div>
        <div class="distribution-detail-body">
            <div class="distribution-detail-header">
                <h1>';
$array111 = array (
);
$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title', $array111)]);

$output107 .= '</h1>
                <p>';
$array112 = array (
);
$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.description', $array112)]);

$output107 .= '</p>
            </div>

            <ul class="distribution-detail-actions">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '
                        <li>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$output145 = '';

$output145 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['identifier'] = NULL;
$arguments146['size'] = 'small';
$arguments146['overlay'] = NULL;
$arguments146['state'] = 'default';
$arguments146['alternativeMarkupIdentifier'] = NULL;
$arguments146['identifier'] = 'actions-system-extension-import';

$output145 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output145 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
return 'Install';
};
$arguments148 = array();
$arguments148['key'] = NULL;
$arguments148['id'] = NULL;
$arguments148['default'] = NULL;
$arguments148['arguments'] = NULL;
$arguments148['extensionName'] = NULL;
$arguments148['languageKey'] = NULL;
$arguments148['alternativeLanguageKeys'] = NULL;
$arguments148['key'] = 'extensionList.installDistribution';

$output145 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext)]);

$output145 .= '
                            ';
return $output145;
};
$arguments141 = array();
$arguments141['additionalAttributes'] = NULL;
$arguments141['data'] = NULL;
$arguments141['class'] = NULL;
$arguments141['dir'] = NULL;
$arguments141['id'] = NULL;
$arguments141['lang'] = NULL;
$arguments141['style'] = NULL;
$arguments141['title'] = NULL;
$arguments141['accesskey'] = NULL;
$arguments141['tabindex'] = NULL;
$arguments141['onclick'] = NULL;
$arguments141['name'] = NULL;
$arguments141['rel'] = NULL;
$arguments141['rev'] = NULL;
$arguments141['target'] = NULL;
$arguments141['action'] = NULL;
$arguments141['controller'] = NULL;
$arguments141['extensionName'] = NULL;
$arguments141['pluginName'] = NULL;
$arguments141['pageUid'] = NULL;
$arguments141['pageType'] = NULL;
$arguments141['noCache'] = NULL;
$arguments141['noCacheHash'] = NULL;
$arguments141['section'] = NULL;
$arguments141['format'] = NULL;
$arguments141['linkAccessRestrictedPages'] = NULL;
$arguments141['additionalParams'] = NULL;
$arguments141['absolute'] = NULL;
$arguments141['addQueryString'] = NULL;
$arguments141['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments141['addQueryStringMethod'] = NULL;
$arguments141['arguments'] = NULL;
$arguments141['action'] = 'installDistribution';
$arguments141['controller'] = 'Download';
// Rendering Array
$array143 = array();
$array144 = array (
);$array143['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array144);
$arguments141['arguments'] = $array143;
$arguments141['class'] = 'btn btn-default t3-button-action-installdistribution';

$output140 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output140 .= '
                        </li>
                    ';
return $output140;
};
$arguments138 = array();
$arguments138['if'] = NULL;

$output137 .= '';

$output137 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$output152 = '';

$output152 .= '
                        <li>
                            <button class="btn btn-default distribution-openViewModule" onclick="top.goToModule(\'web_ViewpageView\');">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['identifier'] = NULL;
$arguments153['size'] = 'small';
$arguments153['overlay'] = NULL;
$arguments153['state'] = 'default';
$arguments153['alternativeMarkupIdentifier'] = NULL;
$arguments153['identifier'] = 'actions-document-view';

$output152 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output152 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments155 = array();
$arguments155['key'] = NULL;
$arguments155['id'] = NULL;
$arguments155['default'] = NULL;
$arguments155['arguments'] = NULL;
$arguments155['extensionName'] = NULL;
$arguments155['languageKey'] = NULL;
$arguments155['alternativeLanguageKeys'] = NULL;
$arguments155['key'] = 'distribution.welcome.openViewModule';

$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext)]);

$output152 .= '
                            </button>
                        </li>
                        <li>
                            <button class="btn btn-default distribution-openPageModule" onclick="top.goToModule(\'web_layout\');">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments157 = array();
$arguments157['identifier'] = NULL;
$arguments157['size'] = 'small';
$arguments157['overlay'] = NULL;
$arguments157['state'] = 'default';
$arguments157['alternativeMarkupIdentifier'] = NULL;
$arguments157['identifier'] = 'actions-open';

$output152 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output152 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments159 = array();
$arguments159['key'] = NULL;
$arguments159['id'] = NULL;
$arguments159['default'] = NULL;
$arguments159['arguments'] = NULL;
$arguments159['extensionName'] = NULL;
$arguments159['languageKey'] = NULL;
$arguments159['alternativeLanguageKeys'] = NULL;
$arguments159['key'] = 'distribution.welcome.openPageModule';

$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext)]);

$output152 .= '
                            </button>
                        </li>
                    ';
return $output152;
};
$arguments150 = array();

$output137 .= '';

$output137 .= '
                ';
return $output137;
};
$arguments113 = array();
$arguments113['then'] = NULL;
$arguments113['else'] = NULL;
$arguments113['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array134 = array();
$array135 = array (
);$array134['0'] = $renderingContext->getVariableProvider()->getByPath('distributionActive', $array135);

$expression136 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments113['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression136(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array134)
					),
					$renderingContext
				);
$arguments113['__elseClosures'][] = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
                        <li>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$output120 = '';

$output120 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments121 = array();
$arguments121['identifier'] = NULL;
$arguments121['size'] = 'small';
$arguments121['overlay'] = NULL;
$arguments121['state'] = 'default';
$arguments121['alternativeMarkupIdentifier'] = NULL;
$arguments121['identifier'] = 'actions-system-extension-import';

$output120 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output120 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return 'Install';
};
$arguments123 = array();
$arguments123['key'] = NULL;
$arguments123['id'] = NULL;
$arguments123['default'] = NULL;
$arguments123['arguments'] = NULL;
$arguments123['extensionName'] = NULL;
$arguments123['languageKey'] = NULL;
$arguments123['alternativeLanguageKeys'] = NULL;
$arguments123['key'] = 'extensionList.installDistribution';

$output120 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext)]);

$output120 .= '
                            ';
return $output120;
};
$arguments116 = array();
$arguments116['additionalAttributes'] = NULL;
$arguments116['data'] = NULL;
$arguments116['class'] = NULL;
$arguments116['dir'] = NULL;
$arguments116['id'] = NULL;
$arguments116['lang'] = NULL;
$arguments116['style'] = NULL;
$arguments116['title'] = NULL;
$arguments116['accesskey'] = NULL;
$arguments116['tabindex'] = NULL;
$arguments116['onclick'] = NULL;
$arguments116['name'] = NULL;
$arguments116['rel'] = NULL;
$arguments116['rev'] = NULL;
$arguments116['target'] = NULL;
$arguments116['action'] = NULL;
$arguments116['controller'] = NULL;
$arguments116['extensionName'] = NULL;
$arguments116['pluginName'] = NULL;
$arguments116['pageUid'] = NULL;
$arguments116['pageType'] = NULL;
$arguments116['noCache'] = NULL;
$arguments116['noCacheHash'] = NULL;
$arguments116['section'] = NULL;
$arguments116['format'] = NULL;
$arguments116['linkAccessRestrictedPages'] = NULL;
$arguments116['additionalParams'] = NULL;
$arguments116['absolute'] = NULL;
$arguments116['addQueryString'] = NULL;
$arguments116['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments116['addQueryStringMethod'] = NULL;
$arguments116['arguments'] = NULL;
$arguments116['action'] = 'installDistribution';
$arguments116['controller'] = 'Download';
// Rendering Array
$array118 = array();
$array119 = array (
);$array118['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array119);
$arguments116['arguments'] = $array118;
$arguments116['class'] = 'btn btn-default t3-button-action-installdistribution';

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output115 .= '
                        </li>
                    ';
return $output115;
};
$arguments113['__thenClosure'] = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
                        <li>
                            <button class="btn btn-default distribution-openViewModule" onclick="top.goToModule(\'web_ViewpageView\');">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments126 = array();
$arguments126['identifier'] = NULL;
$arguments126['size'] = 'small';
$arguments126['overlay'] = NULL;
$arguments126['state'] = 'default';
$arguments126['alternativeMarkupIdentifier'] = NULL;
$arguments126['identifier'] = 'actions-document-view';

$output125 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output125 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['key'] = NULL;
$arguments128['id'] = NULL;
$arguments128['default'] = NULL;
$arguments128['arguments'] = NULL;
$arguments128['extensionName'] = NULL;
$arguments128['languageKey'] = NULL;
$arguments128['alternativeLanguageKeys'] = NULL;
$arguments128['key'] = 'distribution.welcome.openViewModule';

$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext)]);

$output125 .= '
                            </button>
                        </li>
                        <li>
                            <button class="btn btn-default distribution-openPageModule" onclick="top.goToModule(\'web_layout\');">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments130 = array();
$arguments130['identifier'] = NULL;
$arguments130['size'] = 'small';
$arguments130['overlay'] = NULL;
$arguments130['state'] = 'default';
$arguments130['alternativeMarkupIdentifier'] = NULL;
$arguments130['identifier'] = 'actions-open';

$output125 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output125 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments132 = array();
$arguments132['key'] = NULL;
$arguments132['id'] = NULL;
$arguments132['default'] = NULL;
$arguments132['arguments'] = NULL;
$arguments132['extensionName'] = NULL;
$arguments132['languageKey'] = NULL;
$arguments132['alternativeLanguageKeys'] = NULL;
$arguments132['key'] = 'distribution.welcome.openPageModule';

$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext)]);

$output125 .= '
                            </button>
                        </li>
                    ';
return $output125;
};

$output107 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output107 .= '
            </ul>

            <dl class="dl-horizontal dl-horizontal-wide distribution-detail-summary">
                <dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments161 = array();
$arguments161['key'] = NULL;
$arguments161['id'] = NULL;
$arguments161['default'] = NULL;
$arguments161['arguments'] = NULL;
$arguments161['extensionName'] = NULL;
$arguments161['languageKey'] = NULL;
$arguments161['alternativeLanguageKeys'] = NULL;
$arguments161['key'] = 'extensionList.distribution.title';

$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext)]);

$output107 .= '</dt>
                <dd>';
$array163 = array (
);
$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title', $array163)]);

$output107 .= '</dd>
                <dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments164 = array();
$arguments164['key'] = NULL;
$arguments164['id'] = NULL;
$arguments164['default'] = NULL;
$arguments164['arguments'] = NULL;
$arguments164['extensionName'] = NULL;
$arguments164['languageKey'] = NULL;
$arguments164['alternativeLanguageKeys'] = NULL;
$arguments164['key'] = 'extensionList.distribution.key';

$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext)]);

$output107 .= '</dt>
                <dd>';
$array166 = array (
);
$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.extensionKey', $array166)]);

$output107 .= '</dd>
                <dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments167 = array();
$arguments167['key'] = NULL;
$arguments167['id'] = NULL;
$arguments167['default'] = NULL;
$arguments167['arguments'] = NULL;
$arguments167['extensionName'] = NULL;
$arguments167['languageKey'] = NULL;
$arguments167['alternativeLanguageKeys'] = NULL;
$arguments167['key'] = 'extensionList.distribution.version';

$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext)]);

$output107 .= '</dt>
                <dd>';
$array169 = array (
);
$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.version', $array169)]);

$output107 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$array172 = array (
);return $renderingContext->getVariableProvider()->getByPath('extension.lastUpdated', $array172);
};
$arguments170 = array();
$arguments170['date'] = NULL;
$arguments170['format'] = '';
$arguments170['base'] = NULL;
$arguments170['format'] = 'd.m.Y';
$renderChildrenClosure171 = ($arguments170['date'] !== null) ? function() use ($arguments170) { return $arguments170['date']; } : $renderChildrenClosure171;
$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext)]);

$output107 .= ')<br><span class="';
$array173 = array (
);
$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.stateString', $array173)]);

$output107 .= '">';
$array174 = array (
);
$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.stateString', $array174)]);

$output107 .= '</span></dd>
                <dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments175 = array();
$arguments175['key'] = NULL;
$arguments175['id'] = NULL;
$arguments175['default'] = NULL;
$arguments175['arguments'] = NULL;
$arguments175['extensionName'] = NULL;
$arguments175['languageKey'] = NULL;
$arguments175['alternativeLanguageKeys'] = NULL;
$arguments175['key'] = 'extensionList.distribution.author';

$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext)]);

$output107 .= '</dt>
                <dd>';
$array177 = array (
);
$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.authorName', $array177)]);

$output107 .= '</dd>
                <dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments178 = array();
$arguments178['key'] = NULL;
$arguments178['id'] = NULL;
$arguments178['default'] = NULL;
$arguments178['arguments'] = NULL;
$arguments178['extensionName'] = NULL;
$arguments178['languageKey'] = NULL;
$arguments178['alternativeLanguageKeys'] = NULL;
$arguments178['key'] = 'extensionList.distribution.downloads';

$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext)]);

$output107 .= '</dt>
                <dd>';
$array180 = array (
);
$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.alldownloadcounter', $array180)]);

$output107 .= '</dd>
            </dl>

            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
$output186 = '';

$output186 .= '
                <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments187 = array();
$arguments187['key'] = NULL;
$arguments187['id'] = NULL;
$arguments187['default'] = NULL;
$arguments187['arguments'] = NULL;
$arguments187['extensionName'] = NULL;
$arguments187['languageKey'] = NULL;
$arguments187['alternativeLanguageKeys'] = NULL;
$arguments187['key'] = 'distribution.dependency.headline';

$output186 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext)]);

$output186 .= '</h2>
                <div class="table-fit">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments189 = array();
$arguments189['key'] = NULL;
$arguments189['id'] = NULL;
$arguments189['default'] = NULL;
$arguments189['arguments'] = NULL;
$arguments189['extensionName'] = NULL;
$arguments189['languageKey'] = NULL;
$arguments189['alternativeLanguageKeys'] = NULL;
$arguments189['key'] = 'distribution.dependency.identifier';

$output186 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext)]);

$output186 .= '</td>
                                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments191 = array();
$arguments191['key'] = NULL;
$arguments191['id'] = NULL;
$arguments191['default'] = NULL;
$arguments191['arguments'] = NULL;
$arguments191['extensionName'] = NULL;
$arguments191['languageKey'] = NULL;
$arguments191['alternativeLanguageKeys'] = NULL;
$arguments191['key'] = 'distribution.dependency.type';

$output186 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext)]);

$output186 .= '</td>
                                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments193 = array();
$arguments193['key'] = NULL;
$arguments193['id'] = NULL;
$arguments193['default'] = NULL;
$arguments193['arguments'] = NULL;
$arguments193['extensionName'] = NULL;
$arguments193['languageKey'] = NULL;
$arguments193['alternativeLanguageKeys'] = NULL;
$arguments193['key'] = 'distribution.dependency.version';

$output186 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext)]);

$output186 .= '</td>
                            </tr>
                        </thead>
                        <tbody>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$output198 = '';

$output198 .= '
                                <tr>
                                    <td>';
$array199 = array (
);
$output198 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dependency.identifier', $array199)]);

$output198 .= '</td>
                                    <td>';
$array200 = array (
);
$output198 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dependency.type', $array200)]);

$output198 .= '</td>
                                    <td>
                                        ';
$array201 = array (
);
$output198 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dependency.lowestVersion', $array201)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
$output207 = '';

$output207 .= '-';
$array208 = array (
);
$output207 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dependency.highestVersion', $array208)]);
return $output207;
};
$arguments202 = array();
$arguments202['then'] = NULL;
$arguments202['else'] = NULL;
$arguments202['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array204 = array();
$array205 = array (
);$array204['0'] = $renderingContext->getVariableProvider()->getByPath('dependency.highestVersion', $array205);

$expression206 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments202['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression206(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array204)
					),
					$renderingContext
				);
$arguments202['__thenClosure'] = $renderChildrenClosure203;

$output198 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output198 .= '
                                    </td>
                                </tr>
                            ';
return $output198;
};
$arguments195 = array();
$arguments195['each'] = NULL;
$arguments195['as'] = NULL;
$arguments195['key'] = NULL;
$arguments195['reverse'] = false;
$arguments195['iteration'] = NULL;
$array197 = array (
);$arguments195['each'] = $renderingContext->getVariableProvider()->getByPath('extension.dependencies', $array197);
$arguments195['as'] = 'dependency';

$output186 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output186 .= '
                        </tbody>
                    </table>
                </div>
            ';
return $output186;
};
$arguments181 = array();
$arguments181['then'] = NULL;
$arguments181['else'] = NULL;
$arguments181['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array183 = array();
$array184 = array (
);$array183['0'] = $renderingContext->getVariableProvider()->getByPath('extension.dependencies', $array184);

$expression185 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments181['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression185(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array183)
					),
					$renderingContext
				);
$arguments181['__thenClosure'] = $renderChildrenClosure182;

$output107 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);

$output107 .= '

        </div>
    </div>

';
return $output107;
};
$arguments105 = array();
$arguments105['name'] = NULL;
$arguments105['name'] = 'content';

$output102 .= NULL;

$output102 .= '
';

return $output102;
}


}
#