<?php

class Standard_action_index_8093b5e0ee7d538213a69d98bfe6b6584771c39b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'ImageManipulation';
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
));
}

/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output131 = '';

$output131 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$output134 = '';

$output134 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$output165 = '';

$output165 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
$output168 = '';

$output168 .= '
                        <div class="form-control-wrap">
                            <input type="hidden" id="';
$array169 = array (
);
$output168 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array169)]);

$output168 .= '"
                                    name="';
$array170 = array (
);
$output168 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.name', $array170)]);

$output168 .= '"
                                    value="';
$array171 = array (
);
$output168 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array171)]);

$output168 .= '"
                                    data-formengine-validation-rules="';
$array172 = array (
);
$output168 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.validation', $array172)]);

$output168 .= '"/>
                            <button class="btn btn-default t3js-image-manipulation-trigger"
                                    data-url="';
$array173 = array (
);
$output168 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardUri', $array173)]);

$output168 .= '"
                                    data-payload="';
$array174 = array (
);
$output168 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardPayload', $array174)]);

$output168 .= '"
                                    data-preview-url="';
$array175 = array (
);
$output168 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('previewUrl', $array175)]);

$output168 .= '"
                                    data-severity="notice"
                                    data-modal-title="';
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
$arguments176['partial'] = 'ModalTitle';
$arguments176['section'] = 'Main';
$arguments176['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output168 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output168 .= '"
                                    data-image-uid="';
$array179 = array (
);
$output168 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.uid', $array179)]);

$output168 .= '"
                                    data-crop-variants="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$array182 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array182);
};
$arguments180 = array();
$arguments180['value'] = NULL;
$arguments180['forceObject'] = false;
$renderChildrenClosure181 = ($arguments180['value'] !== null) ? function() use ($arguments180) { return $arguments180['value']; } : $renderChildrenClosure181;
$output168 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext)]);

$output168 .= '"
                                    data-button-preview-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments183 = array();
$arguments183['key'] = NULL;
$arguments183['id'] = NULL;
$arguments183['default'] = NULL;
$arguments183['arguments'] = NULL;
$arguments183['extensionName'] = NULL;
$arguments183['languageKey'] = NULL;
$arguments183['alternativeLanguageKeys'] = NULL;
$arguments183['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.preview';

$output168 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext)]);

$output168 .= '"
                                    data-button-dismiss-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments185 = array();
$arguments185['key'] = NULL;
$arguments185['id'] = NULL;
$arguments185['default'] = NULL;
$arguments185['arguments'] = NULL;
$arguments185['extensionName'] = NULL;
$arguments185['languageKey'] = NULL;
$arguments185['alternativeLanguageKeys'] = NULL;
$arguments185['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.cancel';

$output168 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext)]);

$output168 .= '"
                                    data-button-save-text="';
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
$arguments187['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.accept';

$output168 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext)]);

$output168 .= '"
                                    data-file-field="';
$array189 = array (
);
$output168 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.file_field', $array189)]);

$output168 .= '"
                                    data-field="';
$array190 = array (
);
$output168 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array190)]);

$output168 .= '">
                                <span class="t3-icon fa fa-crop"></span>
                                ';
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
$arguments191['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.open-editor';

$output168 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext)]);

$output168 .= '
                            </button>
                        </div>
                    ';
return $output168;
};
$arguments166 = array();
$arguments166['if'] = NULL;

$output165 .= '';

$output165 .= '
                ';
return $output165;
};
$arguments135 = array();
$arguments135['then'] = NULL;
$arguments135['else'] = NULL;
$arguments135['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array162 = array();
$array163 = array (
);$array162['0'] = $renderingContext->getVariableProvider()->getByPath('config.readOnly', $array163);

$expression164 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments135['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression164(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array162)
					),
					$renderingContext
				);
$arguments135['__elseClosures'][] = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
                        <div class="form-control-wrap">
                            <input type="hidden" id="';
$array138 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array138)]);

$output137 .= '"
                                    name="';
$array139 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.name', $array139)]);

$output137 .= '"
                                    value="';
$array140 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array140)]);

$output137 .= '"
                                    data-formengine-validation-rules="';
$array141 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.validation', $array141)]);

$output137 .= '"/>
                            <button class="btn btn-default t3js-image-manipulation-trigger"
                                    data-url="';
$array142 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardUri', $array142)]);

$output137 .= '"
                                    data-payload="';
$array143 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardPayload', $array143)]);

$output137 .= '"
                                    data-preview-url="';
$array144 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('previewUrl', $array144)]);

$output137 .= '"
                                    data-severity="notice"
                                    data-modal-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments145 = array();
$arguments145['section'] = NULL;
$arguments145['partial'] = NULL;
$arguments145['delegate'] = NULL;
$arguments145['renderable'] = NULL;
$arguments145['arguments'] = array (
);
$arguments145['optional'] = false;
$arguments145['default'] = NULL;
$arguments145['contentAs'] = NULL;
$arguments145['debug'] = true;
$arguments145['partial'] = 'ModalTitle';
$arguments145['section'] = 'Main';
$arguments145['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output137 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output137 .= '"
                                    data-image-uid="';
$array148 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.uid', $array148)]);

$output137 .= '"
                                    data-crop-variants="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
$array151 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array151);
};
$arguments149 = array();
$arguments149['value'] = NULL;
$arguments149['forceObject'] = false;
$renderChildrenClosure150 = ($arguments149['value'] !== null) ? function() use ($arguments149) { return $arguments149['value']; } : $renderChildrenClosure150;
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext)]);

$output137 .= '"
                                    data-button-preview-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments152 = array();
$arguments152['key'] = NULL;
$arguments152['id'] = NULL;
$arguments152['default'] = NULL;
$arguments152['arguments'] = NULL;
$arguments152['extensionName'] = NULL;
$arguments152['languageKey'] = NULL;
$arguments152['alternativeLanguageKeys'] = NULL;
$arguments152['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.preview';

$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext)]);

$output137 .= '"
                                    data-button-dismiss-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments154 = array();
$arguments154['key'] = NULL;
$arguments154['id'] = NULL;
$arguments154['default'] = NULL;
$arguments154['arguments'] = NULL;
$arguments154['extensionName'] = NULL;
$arguments154['languageKey'] = NULL;
$arguments154['alternativeLanguageKeys'] = NULL;
$arguments154['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.cancel';

$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext)]);

$output137 .= '"
                                    data-button-save-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments156 = array();
$arguments156['key'] = NULL;
$arguments156['id'] = NULL;
$arguments156['default'] = NULL;
$arguments156['arguments'] = NULL;
$arguments156['extensionName'] = NULL;
$arguments156['languageKey'] = NULL;
$arguments156['alternativeLanguageKeys'] = NULL;
$arguments156['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.accept';

$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext)]);

$output137 .= '"
                                    data-file-field="';
$array158 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.file_field', $array158)]);

$output137 .= '"
                                    data-field="';
$array159 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array159)]);

$output137 .= '">
                                <span class="t3-icon fa fa-crop"></span>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments160 = array();
$arguments160['key'] = NULL;
$arguments160['id'] = NULL;
$arguments160['default'] = NULL;
$arguments160['arguments'] = NULL;
$arguments160['extensionName'] = NULL;
$arguments160['languageKey'] = NULL;
$arguments160['alternativeLanguageKeys'] = NULL;
$arguments160['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.open-editor';

$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext)]);

$output137 .= '
                            </button>
                        </div>
                    ';
return $output137;
};

$output134 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output134 .= '
                <div class="row media-gallery__list">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
$output196 = '';

$output196 .= '
                        <div class="col-xs-6 col-sm-4 col-md-3 media-gallery__item">
                            <p>
                                <b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments197 = array();
$arguments197['key'] = NULL;
$arguments197['id'] = NULL;
$arguments197['default'] = NULL;
$arguments197['arguments'] = NULL;
$arguments197['extensionName'] = NULL;
$arguments197['languageKey'] = NULL;
$arguments197['alternativeLanguageKeys'] = NULL;
$array199 = array (
);$arguments197['id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.title', $array199);
$array200 = array (
);$arguments197['default'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.title', $array200);

$output196 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext)]);

$output196 .= '</b><br/>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
$output206 = '';

$output206 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments207 = array();
$arguments207['key'] = NULL;
$arguments207['id'] = NULL;
$arguments207['default'] = NULL;
$arguments207['arguments'] = NULL;
$arguments207['extensionName'] = NULL;
$arguments207['languageKey'] = NULL;
$arguments207['alternativeLanguageKeys'] = NULL;
$arguments207['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.aspect-ratio';

$output206 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext)]);

$output206 .= ': <span class="t3js-image-manipulation-selected-ratio" data-crop-variant-id="';
$array209 = array (
);
$output206 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array209)]);

$output206 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments210 = array();
$arguments210['key'] = NULL;
$arguments210['id'] = NULL;
$arguments210['default'] = NULL;
$arguments210['arguments'] = NULL;
$arguments210['extensionName'] = NULL;
$arguments210['languageKey'] = NULL;
$arguments210['alternativeLanguageKeys'] = NULL;
$array212 = array (
);$arguments210['id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title', $array212);
$array213 = array (
);$arguments210['default'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title', $array213);

$output206 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext)]);

$output206 .= '</span>
                                ';
return $output206;
};
$arguments201 = array();
$arguments201['then'] = NULL;
$arguments201['else'] = NULL;
$arguments201['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array203 = array();
$array204 = array (
);$array203['0'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title', $array204);

$expression205 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments201['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression205(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array203)
					),
					$renderingContext
				);
$arguments201['__thenClosure'] = $renderChildrenClosure202;

$output196 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output196 .= '
                            </p>
                            <div class="t3js-image-manipulation-preview media-object"
                                data-preview-height="150"
                                data-crop-variant-id="';
$array214 = array (
);
$output196 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array214)]);

$output196 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments215 = array();
$arguments215['additionalAttributes'] = NULL;
$arguments215['data'] = NULL;
$arguments215['class'] = NULL;
$arguments215['dir'] = NULL;
$arguments215['id'] = NULL;
$arguments215['lang'] = NULL;
$arguments215['style'] = NULL;
$arguments215['title'] = NULL;
$arguments215['accesskey'] = NULL;
$arguments215['tabindex'] = NULL;
$arguments215['onclick'] = NULL;
$arguments215['alt'] = NULL;
$arguments215['ismap'] = NULL;
$arguments215['longdesc'] = NULL;
$arguments215['usemap'] = NULL;
$arguments215['loading'] = NULL;
$arguments215['src'] = '';
$arguments215['treatIdAsReference'] = false;
$arguments215['image'] = NULL;
$arguments215['crop'] = NULL;
$arguments215['cropVariant'] = 'default';
$arguments215['fileExtension'] = NULL;
$arguments215['width'] = NULL;
$arguments215['height'] = NULL;
$arguments215['minWidth'] = NULL;
$arguments215['minHeight'] = NULL;
$arguments215['maxWidth'] = NULL;
$arguments215['maxHeight'] = NULL;
$arguments215['absolute'] = false;
$array217 = array (
);$arguments215['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array217);
$array218 = array (
);$arguments215['crop'] = $renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array218);
$array219 = array (
);$arguments215['cropVariant'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array219);
$arguments215['maxHeight'] = 150;
$arguments215['class'] = 'thumbnail thumbnail-status';
// Rendering Array
$array220 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
$array223 = array (
);return $renderingContext->getVariableProvider()->getByPath('cropVariant', $array223);
};
$arguments221 = array();
$arguments221['value'] = NULL;
$arguments221['forceObject'] = false;
$renderChildrenClosure222 = ($arguments221['value'] !== null) ? function() use ($arguments221) { return $arguments221['value']; } : $renderChildrenClosure222;$array220['data-crop-variant'] = TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);
$array224 = array (
);$array220['data-crop-variant-id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array224);
$arguments215['additionalAttributes'] = $array220;

$output196 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output196 .= '
                            </div>
                        </div>
                    ';
return $output196;
};
$arguments193 = array();
$arguments193['each'] = NULL;
$arguments193['as'] = NULL;
$arguments193['key'] = NULL;
$arguments193['reverse'] = false;
$arguments193['iteration'] = NULL;
$array195 = array (
);$arguments193['each'] = $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array195);
$arguments193['as'] = 'cropVariant';

$output134 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output134 .= '
                </div>
            ';
return $output134;
};
$arguments132 = array();

$output131 .= '';

$output131 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
$output227 = '';

$output227 .= '
                <div class="media-body">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
$output244 = '';

$output244 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
$output247 = '';

$output247 .= '
                        <p>
                            <em>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments248 = array();
$arguments248['key'] = NULL;
$arguments248['id'] = NULL;
$arguments248['default'] = NULL;
$arguments248['arguments'] = NULL;
$arguments248['extensionName'] = NULL;
$arguments248['languageKey'] = NULL;
$arguments248['alternativeLanguageKeys'] = NULL;
$arguments248['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.supported-types-message';

$output247 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext)]);

$output247 .= '<br/>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
$array252 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.allowedExtensions', $array252);
};
$arguments250 = array();
$arguments250['value'] = NULL;
$arguments250['mode'] = 'upper';
$arguments250['mode'] = 'upper';

$output247 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext)]);

$output247 .= '
                            </em>
                        </p>
                    ';
return $output247;
};
$arguments245 = array();

$output244 .= '';

$output244 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
$output255 = '';

$output255 .= '
                        <div class="alert alert-info">
                            <h4>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments256 = array();
$arguments256['key'] = NULL;
$arguments256['id'] = NULL;
$arguments256['default'] = NULL;
$arguments256['arguments'] = NULL;
$arguments256['extensionName'] = NULL;
$arguments256['languageKey'] = NULL;
$arguments256['alternativeLanguageKeys'] = NULL;
$arguments256['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions';

$output255 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext)]);

$output255 .= '
                            </h4>
                            <p>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments258 = array();
$arguments258['key'] = NULL;
$arguments258['id'] = NULL;
$arguments258['default'] = NULL;
$arguments258['arguments'] = NULL;
$arguments258['extensionName'] = NULL;
$arguments258['languageKey'] = NULL;
$arguments258['alternativeLanguageKeys'] = NULL;
$arguments258['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions-message';

$output255 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext)]);

$output255 .= '
                            </p>
                        </div>
                    ';
return $output255;
};
$arguments253 = array();
$arguments253['if'] = NULL;

$output244 .= '';

$output244 .= '
                ';
return $output244;
};
$arguments228 = array();
$arguments228['then'] = NULL;
$arguments228['else'] = NULL;
$arguments228['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array241 = array();
$array242 = array (
);$array241['0'] = $renderingContext->getVariableProvider()->getByPath('image.properties.width', $array242);

$expression243 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments228['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression243(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array241)
					),
					$renderingContext
				);
$arguments228['__thenClosure'] = function() use ($renderingContext, $self) {
$output230 = '';

$output230 .= '
                        <p>
                            <em>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments231 = array();
$arguments231['key'] = NULL;
$arguments231['id'] = NULL;
$arguments231['default'] = NULL;
$arguments231['arguments'] = NULL;
$arguments231['extensionName'] = NULL;
$arguments231['languageKey'] = NULL;
$arguments231['alternativeLanguageKeys'] = NULL;
$arguments231['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.supported-types-message';

$output230 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext)]);

$output230 .= '<br/>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
$array235 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.allowedExtensions', $array235);
};
$arguments233 = array();
$arguments233['value'] = NULL;
$arguments233['mode'] = 'upper';
$arguments233['mode'] = 'upper';

$output230 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext)]);

$output230 .= '
                            </em>
                        </p>
                    ';
return $output230;
};
$arguments228['__elseClosures'][] = function() use ($renderingContext, $self) {
$output236 = '';

$output236 .= '
                        <div class="alert alert-info">
                            <h4>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments237 = array();
$arguments237['key'] = NULL;
$arguments237['id'] = NULL;
$arguments237['default'] = NULL;
$arguments237['arguments'] = NULL;
$arguments237['extensionName'] = NULL;
$arguments237['languageKey'] = NULL;
$arguments237['alternativeLanguageKeys'] = NULL;
$arguments237['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions';

$output236 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext)]);

$output236 .= '
                            </h4>
                            <p>
                                ';
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
$arguments239['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions-message';

$output236 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext)]);

$output236 .= '
                            </p>
                        </div>
                    ';
return $output236;
};

$output227 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext);

$output227 .= '
                </div>
            ';
return $output227;
};
$arguments225 = array();
$arguments225['if'] = NULL;

$output131 .= '';

$output131 .= '
        ';
return $output131;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array127 = array();
$array128 = array (
);$array127['0'] = $renderingContext->getVariableProvider()->getByPath('isAllowedFileExtension', $array128);
$array127['1'] = ' && ';
$array129 = array (
);$array127['2'] = $renderingContext->getVariableProvider()->getByPath('image.properties.width', $array129);

$expression130 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression130(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array127)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
                        <div class="form-control-wrap">
                            <input type="hidden" id="';
$array38 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array38)]);

$output37 .= '"
                                    name="';
$array39 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.name', $array39)]);

$output37 .= '"
                                    value="';
$array40 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array40)]);

$output37 .= '"
                                    data-formengine-validation-rules="';
$array41 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.validation', $array41)]);

$output37 .= '"/>
                            <button class="btn btn-default t3js-image-manipulation-trigger"
                                    data-url="';
$array42 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardUri', $array42)]);

$output37 .= '"
                                    data-payload="';
$array43 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardPayload', $array43)]);

$output37 .= '"
                                    data-preview-url="';
$array44 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('previewUrl', $array44)]);

$output37 .= '"
                                    data-severity="notice"
                                    data-modal-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['section'] = NULL;
$arguments45['partial'] = NULL;
$arguments45['delegate'] = NULL;
$arguments45['renderable'] = NULL;
$arguments45['arguments'] = array (
);
$arguments45['optional'] = false;
$arguments45['default'] = NULL;
$arguments45['contentAs'] = NULL;
$arguments45['debug'] = true;
$arguments45['partial'] = 'ModalTitle';
$arguments45['section'] = 'Main';
$arguments45['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output37 .= '"
                                    data-image-uid="';
$array48 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.uid', $array48)]);

$output37 .= '"
                                    data-crop-variants="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$array51 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array51);
};
$arguments49 = array();
$arguments49['value'] = NULL;
$arguments49['forceObject'] = false;
$renderChildrenClosure50 = ($arguments49['value'] !== null) ? function() use ($arguments49) { return $arguments49['value']; } : $renderChildrenClosure50;
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext)]);

$output37 .= '"
                                    data-button-preview-text="';
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
$arguments52['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.preview';

$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext)]);

$output37 .= '"
                                    data-button-dismiss-text="';
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
$arguments54['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.cancel';

$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext)]);

$output37 .= '"
                                    data-button-save-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['key'] = NULL;
$arguments56['id'] = NULL;
$arguments56['default'] = NULL;
$arguments56['arguments'] = NULL;
$arguments56['extensionName'] = NULL;
$arguments56['languageKey'] = NULL;
$arguments56['alternativeLanguageKeys'] = NULL;
$arguments56['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.accept';

$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output37 .= '"
                                    data-file-field="';
$array58 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.file_field', $array58)]);

$output37 .= '"
                                    data-field="';
$array59 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array59)]);

$output37 .= '">
                                <span class="t3-icon fa fa-crop"></span>
                                ';
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
$arguments60['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.open-editor';

$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext)]);

$output37 .= '
                            </button>
                        </div>
                    ';
return $output37;
};
$arguments35 = array();
$arguments35['if'] = NULL;

$output34 .= '';

$output34 .= '
                ';
return $output34;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array31 = array();
$array32 = array (
);$array31['0'] = $renderingContext->getVariableProvider()->getByPath('config.readOnly', $array32);

$expression33 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression33(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)
					),
					$renderingContext
				);
$arguments4['__elseClosures'][] = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
                        <div class="form-control-wrap">
                            <input type="hidden" id="';
$array7 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array7)]);

$output6 .= '"
                                    name="';
$array8 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.name', $array8)]);

$output6 .= '"
                                    value="';
$array9 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array9)]);

$output6 .= '"
                                    data-formengine-validation-rules="';
$array10 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.validation', $array10)]);

$output6 .= '"/>
                            <button class="btn btn-default t3js-image-manipulation-trigger"
                                    data-url="';
$array11 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardUri', $array11)]);

$output6 .= '"
                                    data-payload="';
$array12 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardPayload', $array12)]);

$output6 .= '"
                                    data-preview-url="';
$array13 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('previewUrl', $array13)]);

$output6 .= '"
                                    data-severity="notice"
                                    data-modal-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['section'] = NULL;
$arguments14['partial'] = NULL;
$arguments14['delegate'] = NULL;
$arguments14['renderable'] = NULL;
$arguments14['arguments'] = array (
);
$arguments14['optional'] = false;
$arguments14['default'] = NULL;
$arguments14['contentAs'] = NULL;
$arguments14['debug'] = true;
$arguments14['partial'] = 'ModalTitle';
$arguments14['section'] = 'Main';
$arguments14['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output6 .= '"
                                    data-image-uid="';
$array17 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.uid', $array17)]);

$output6 .= '"
                                    data-crop-variants="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$array20 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array20);
};
$arguments18 = array();
$arguments18['value'] = NULL;
$arguments18['forceObject'] = false;
$renderChildrenClosure19 = ($arguments18['value'] !== null) ? function() use ($arguments18) { return $arguments18['value']; } : $renderChildrenClosure19;
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext)]);

$output6 .= '"
                                    data-button-preview-text="';
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
$arguments21['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.preview';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output6 .= '"
                                    data-button-dismiss-text="';
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
$arguments23['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.cancel';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output6 .= '"
                                    data-button-save-text="';
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
$arguments25['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.accept';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output6 .= '"
                                    data-file-field="';
$array27 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.file_field', $array27)]);

$output6 .= '"
                                    data-field="';
$array28 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array28)]);

$output6 .= '">
                                <span class="t3-icon fa fa-crop"></span>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['key'] = NULL;
$arguments29['id'] = NULL;
$arguments29['default'] = NULL;
$arguments29['arguments'] = NULL;
$arguments29['extensionName'] = NULL;
$arguments29['languageKey'] = NULL;
$arguments29['alternativeLanguageKeys'] = NULL;
$arguments29['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.open-editor';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output6 .= '
                            </button>
                        </div>
                    ';
return $output6;
};

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
                <div class="row media-gallery__list">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
                        <div class="col-xs-6 col-sm-4 col-md-3 media-gallery__item">
                            <p>
                                <b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['key'] = NULL;
$arguments66['id'] = NULL;
$arguments66['default'] = NULL;
$arguments66['arguments'] = NULL;
$arguments66['extensionName'] = NULL;
$arguments66['languageKey'] = NULL;
$arguments66['alternativeLanguageKeys'] = NULL;
$array68 = array (
);$arguments66['id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.title', $array68);
$array69 = array (
);$arguments66['default'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.title', $array69);

$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext)]);

$output65 .= '</b><br/>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['key'] = NULL;
$arguments76['id'] = NULL;
$arguments76['default'] = NULL;
$arguments76['arguments'] = NULL;
$arguments76['extensionName'] = NULL;
$arguments76['languageKey'] = NULL;
$arguments76['alternativeLanguageKeys'] = NULL;
$arguments76['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.aspect-ratio';

$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext)]);

$output75 .= ': <span class="t3js-image-manipulation-selected-ratio" data-crop-variant-id="';
$array78 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array78)]);

$output75 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['key'] = NULL;
$arguments79['id'] = NULL;
$arguments79['default'] = NULL;
$arguments79['arguments'] = NULL;
$arguments79['extensionName'] = NULL;
$arguments79['languageKey'] = NULL;
$arguments79['alternativeLanguageKeys'] = NULL;
$array81 = array (
);$arguments79['id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title', $array81);
$array82 = array (
);$arguments79['default'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title', $array82);

$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext)]);

$output75 .= '</span>
                                ';
return $output75;
};
$arguments70 = array();
$arguments70['then'] = NULL;
$arguments70['else'] = NULL;
$arguments70['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array72 = array();
$array73 = array (
);$array72['0'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title', $array73);

$expression74 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments70['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression74(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array72)
					),
					$renderingContext
				);
$arguments70['__thenClosure'] = $renderChildrenClosure71;

$output65 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output65 .= '
                            </p>
                            <div class="t3js-image-manipulation-preview media-object"
                                data-preview-height="150"
                                data-crop-variant-id="';
$array83 = array (
);
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array83)]);

$output65 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['additionalAttributes'] = NULL;
$arguments84['data'] = NULL;
$arguments84['class'] = NULL;
$arguments84['dir'] = NULL;
$arguments84['id'] = NULL;
$arguments84['lang'] = NULL;
$arguments84['style'] = NULL;
$arguments84['title'] = NULL;
$arguments84['accesskey'] = NULL;
$arguments84['tabindex'] = NULL;
$arguments84['onclick'] = NULL;
$arguments84['alt'] = NULL;
$arguments84['ismap'] = NULL;
$arguments84['longdesc'] = NULL;
$arguments84['usemap'] = NULL;
$arguments84['loading'] = NULL;
$arguments84['src'] = '';
$arguments84['treatIdAsReference'] = false;
$arguments84['image'] = NULL;
$arguments84['crop'] = NULL;
$arguments84['cropVariant'] = 'default';
$arguments84['fileExtension'] = NULL;
$arguments84['width'] = NULL;
$arguments84['height'] = NULL;
$arguments84['minWidth'] = NULL;
$arguments84['minHeight'] = NULL;
$arguments84['maxWidth'] = NULL;
$arguments84['maxHeight'] = NULL;
$arguments84['absolute'] = false;
$array86 = array (
);$arguments84['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array86);
$array87 = array (
);$arguments84['crop'] = $renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array87);
$array88 = array (
);$arguments84['cropVariant'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array88);
$arguments84['maxHeight'] = 150;
$arguments84['class'] = 'thumbnail thumbnail-status';
// Rendering Array
$array89 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$array92 = array (
);return $renderingContext->getVariableProvider()->getByPath('cropVariant', $array92);
};
$arguments90 = array();
$arguments90['value'] = NULL;
$arguments90['forceObject'] = false;
$renderChildrenClosure91 = ($arguments90['value'] !== null) ? function() use ($arguments90) { return $arguments90['value']; } : $renderChildrenClosure91;$array89['data-crop-variant'] = TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);
$array93 = array (
);$array89['data-crop-variant-id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array93);
$arguments84['additionalAttributes'] = $array89;

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output65 .= '
                            </div>
                        </div>
                    ';
return $output65;
};
$arguments62 = array();
$arguments62['each'] = NULL;
$arguments62['as'] = NULL;
$arguments62['key'] = NULL;
$arguments62['reverse'] = false;
$arguments62['iteration'] = NULL;
$array64 = array (
);$arguments62['each'] = $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array64);
$arguments62['as'] = 'cropVariant';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output3 .= '
                </div>
            ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
                <div class="media-body">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output111 = '';

$output111 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
                        <p>
                            <em>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments115 = array();
$arguments115['key'] = NULL;
$arguments115['id'] = NULL;
$arguments115['default'] = NULL;
$arguments115['arguments'] = NULL;
$arguments115['extensionName'] = NULL;
$arguments115['languageKey'] = NULL;
$arguments115['alternativeLanguageKeys'] = NULL;
$arguments115['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.supported-types-message';

$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext)]);

$output114 .= '<br/>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$array119 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.allowedExtensions', $array119);
};
$arguments117 = array();
$arguments117['value'] = NULL;
$arguments117['mode'] = 'upper';
$arguments117['mode'] = 'upper';

$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext)]);

$output114 .= '
                            </em>
                        </p>
                    ';
return $output114;
};
$arguments112 = array();

$output111 .= '';

$output111 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= '
                        <div class="alert alert-info">
                            <h4>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments123 = array();
$arguments123['key'] = NULL;
$arguments123['id'] = NULL;
$arguments123['default'] = NULL;
$arguments123['arguments'] = NULL;
$arguments123['extensionName'] = NULL;
$arguments123['languageKey'] = NULL;
$arguments123['alternativeLanguageKeys'] = NULL;
$arguments123['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext)]);

$output122 .= '
                            </h4>
                            <p>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments125 = array();
$arguments125['key'] = NULL;
$arguments125['id'] = NULL;
$arguments125['default'] = NULL;
$arguments125['arguments'] = NULL;
$arguments125['extensionName'] = NULL;
$arguments125['languageKey'] = NULL;
$arguments125['alternativeLanguageKeys'] = NULL;
$arguments125['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions-message';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext)]);

$output122 .= '
                            </p>
                        </div>
                    ';
return $output122;
};
$arguments120 = array();
$arguments120['if'] = NULL;

$output111 .= '';

$output111 .= '
                ';
return $output111;
};
$arguments95 = array();
$arguments95['then'] = NULL;
$arguments95['else'] = NULL;
$arguments95['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array108 = array();
$array109 = array (
);$array108['0'] = $renderingContext->getVariableProvider()->getByPath('image.properties.width', $array109);

$expression110 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments95['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression110(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array108)
					),
					$renderingContext
				);
$arguments95['__thenClosure'] = function() use ($renderingContext, $self) {
$output97 = '';

$output97 .= '
                        <p>
                            <em>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments98 = array();
$arguments98['key'] = NULL;
$arguments98['id'] = NULL;
$arguments98['default'] = NULL;
$arguments98['arguments'] = NULL;
$arguments98['extensionName'] = NULL;
$arguments98['languageKey'] = NULL;
$arguments98['alternativeLanguageKeys'] = NULL;
$arguments98['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.supported-types-message';

$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext)]);

$output97 .= '<br/>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$array102 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.allowedExtensions', $array102);
};
$arguments100 = array();
$arguments100['value'] = NULL;
$arguments100['mode'] = 'upper';
$arguments100['mode'] = 'upper';

$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext)]);

$output97 .= '
                            </em>
                        </p>
                    ';
return $output97;
};
$arguments95['__elseClosures'][] = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
                        <div class="alert alert-info">
                            <h4>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['key'] = NULL;
$arguments104['id'] = NULL;
$arguments104['default'] = NULL;
$arguments104['arguments'] = NULL;
$arguments104['extensionName'] = NULL;
$arguments104['languageKey'] = NULL;
$arguments104['alternativeLanguageKeys'] = NULL;
$arguments104['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions';

$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext)]);

$output103 .= '
                            </h4>
                            <p>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['key'] = NULL;
$arguments106['id'] = NULL;
$arguments106['default'] = NULL;
$arguments106['arguments'] = NULL;
$arguments106['extensionName'] = NULL;
$arguments106['languageKey'] = NULL;
$arguments106['alternativeLanguageKeys'] = NULL;
$arguments106['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions-message';

$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext)]);

$output103 .= '
                            </p>
                        </div>
                    ';
return $output103;
};

$output94 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '
                </div>
            ';
return $output94;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    ';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output260 = '';

$output260 .= '<html xmlns:f="http://typo3.org/ns/TYPO3/CMS/Fluid/ViewHelpers"
    xmlns:core="http://typo3.org/ns/TYPO3/CMS/Core/ViewHelpers">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments261 = array();
$arguments261['name'] = NULL;
$arguments261['name'] = 'ImageManipulation';

$output260 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output260 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
$output265 = '';

$output265 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
$output396 = '';

$output396 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure398 = function() use ($renderingContext, $self) {
$output399 = '';

$output399 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure401 = function() use ($renderingContext, $self) {
$output430 = '';

$output430 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure432 = function() use ($renderingContext, $self) {
$output433 = '';

$output433 .= '
                        <div class="form-control-wrap">
                            <input type="hidden" id="';
$array434 = array (
);
$output433 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array434)]);

$output433 .= '"
                                    name="';
$array435 = array (
);
$output433 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.name', $array435)]);

$output433 .= '"
                                    value="';
$array436 = array (
);
$output433 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array436)]);

$output433 .= '"
                                    data-formengine-validation-rules="';
$array437 = array (
);
$output433 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.validation', $array437)]);

$output433 .= '"/>
                            <button class="btn btn-default t3js-image-manipulation-trigger"
                                    data-url="';
$array438 = array (
);
$output433 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardUri', $array438)]);

$output433 .= '"
                                    data-payload="';
$array439 = array (
);
$output433 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardPayload', $array439)]);

$output433 .= '"
                                    data-preview-url="';
$array440 = array (
);
$output433 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('previewUrl', $array440)]);

$output433 .= '"
                                    data-severity="notice"
                                    data-modal-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure442 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments441 = array();
$arguments441['section'] = NULL;
$arguments441['partial'] = NULL;
$arguments441['delegate'] = NULL;
$arguments441['renderable'] = NULL;
$arguments441['arguments'] = array (
);
$arguments441['optional'] = false;
$arguments441['default'] = NULL;
$arguments441['contentAs'] = NULL;
$arguments441['debug'] = true;
$arguments441['partial'] = 'ModalTitle';
$arguments441['section'] = 'Main';
$arguments441['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output433 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments441, $renderChildrenClosure442, $renderingContext);

$output433 .= '"
                                    data-image-uid="';
$array444 = array (
);
$output433 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.uid', $array444)]);

$output433 .= '"
                                    data-crop-variants="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure446 = function() use ($renderingContext, $self) {
$array447 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array447);
};
$arguments445 = array();
$arguments445['value'] = NULL;
$arguments445['forceObject'] = false;
$renderChildrenClosure446 = ($arguments445['value'] !== null) ? function() use ($arguments445) { return $arguments445['value']; } : $renderChildrenClosure446;
$output433 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments445, $renderChildrenClosure446, $renderingContext)]);

$output433 .= '"
                                    data-button-preview-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure449 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments448 = array();
$arguments448['key'] = NULL;
$arguments448['id'] = NULL;
$arguments448['default'] = NULL;
$arguments448['arguments'] = NULL;
$arguments448['extensionName'] = NULL;
$arguments448['languageKey'] = NULL;
$arguments448['alternativeLanguageKeys'] = NULL;
$arguments448['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.preview';

$output433 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments448, $renderChildrenClosure449, $renderingContext)]);

$output433 .= '"
                                    data-button-dismiss-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments450 = array();
$arguments450['key'] = NULL;
$arguments450['id'] = NULL;
$arguments450['default'] = NULL;
$arguments450['arguments'] = NULL;
$arguments450['extensionName'] = NULL;
$arguments450['languageKey'] = NULL;
$arguments450['alternativeLanguageKeys'] = NULL;
$arguments450['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.cancel';

$output433 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext)]);

$output433 .= '"
                                    data-button-save-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure453 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments452 = array();
$arguments452['key'] = NULL;
$arguments452['id'] = NULL;
$arguments452['default'] = NULL;
$arguments452['arguments'] = NULL;
$arguments452['extensionName'] = NULL;
$arguments452['languageKey'] = NULL;
$arguments452['alternativeLanguageKeys'] = NULL;
$arguments452['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.accept';

$output433 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments452, $renderChildrenClosure453, $renderingContext)]);

$output433 .= '"
                                    data-file-field="';
$array454 = array (
);
$output433 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.file_field', $array454)]);

$output433 .= '"
                                    data-field="';
$array455 = array (
);
$output433 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array455)]);

$output433 .= '">
                                <span class="t3-icon fa fa-crop"></span>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments456 = array();
$arguments456['key'] = NULL;
$arguments456['id'] = NULL;
$arguments456['default'] = NULL;
$arguments456['arguments'] = NULL;
$arguments456['extensionName'] = NULL;
$arguments456['languageKey'] = NULL;
$arguments456['alternativeLanguageKeys'] = NULL;
$arguments456['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.open-editor';

$output433 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments456, $renderChildrenClosure457, $renderingContext)]);

$output433 .= '
                            </button>
                        </div>
                    ';
return $output433;
};
$arguments431 = array();
$arguments431['if'] = NULL;

$output430 .= '';

$output430 .= '
                ';
return $output430;
};
$arguments400 = array();
$arguments400['then'] = NULL;
$arguments400['else'] = NULL;
$arguments400['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array427 = array();
$array428 = array (
);$array427['0'] = $renderingContext->getVariableProvider()->getByPath('config.readOnly', $array428);

$expression429 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments400['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression429(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array427)
					),
					$renderingContext
				);
$arguments400['__elseClosures'][] = function() use ($renderingContext, $self) {
$output402 = '';

$output402 .= '
                        <div class="form-control-wrap">
                            <input type="hidden" id="';
$array403 = array (
);
$output402 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array403)]);

$output402 .= '"
                                    name="';
$array404 = array (
);
$output402 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.name', $array404)]);

$output402 .= '"
                                    value="';
$array405 = array (
);
$output402 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array405)]);

$output402 .= '"
                                    data-formengine-validation-rules="';
$array406 = array (
);
$output402 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.validation', $array406)]);

$output402 .= '"/>
                            <button class="btn btn-default t3js-image-manipulation-trigger"
                                    data-url="';
$array407 = array (
);
$output402 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardUri', $array407)]);

$output402 .= '"
                                    data-payload="';
$array408 = array (
);
$output402 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardPayload', $array408)]);

$output402 .= '"
                                    data-preview-url="';
$array409 = array (
);
$output402 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('previewUrl', $array409)]);

$output402 .= '"
                                    data-severity="notice"
                                    data-modal-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure411 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments410 = array();
$arguments410['section'] = NULL;
$arguments410['partial'] = NULL;
$arguments410['delegate'] = NULL;
$arguments410['renderable'] = NULL;
$arguments410['arguments'] = array (
);
$arguments410['optional'] = false;
$arguments410['default'] = NULL;
$arguments410['contentAs'] = NULL;
$arguments410['debug'] = true;
$arguments410['partial'] = 'ModalTitle';
$arguments410['section'] = 'Main';
$arguments410['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output402 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments410, $renderChildrenClosure411, $renderingContext);

$output402 .= '"
                                    data-image-uid="';
$array413 = array (
);
$output402 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.uid', $array413)]);

$output402 .= '"
                                    data-crop-variants="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure415 = function() use ($renderingContext, $self) {
$array416 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array416);
};
$arguments414 = array();
$arguments414['value'] = NULL;
$arguments414['forceObject'] = false;
$renderChildrenClosure415 = ($arguments414['value'] !== null) ? function() use ($arguments414) { return $arguments414['value']; } : $renderChildrenClosure415;
$output402 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments414, $renderChildrenClosure415, $renderingContext)]);

$output402 .= '"
                                    data-button-preview-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure418 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments417 = array();
$arguments417['key'] = NULL;
$arguments417['id'] = NULL;
$arguments417['default'] = NULL;
$arguments417['arguments'] = NULL;
$arguments417['extensionName'] = NULL;
$arguments417['languageKey'] = NULL;
$arguments417['alternativeLanguageKeys'] = NULL;
$arguments417['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.preview';

$output402 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments417, $renderChildrenClosure418, $renderingContext)]);

$output402 .= '"
                                    data-button-dismiss-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure420 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments419 = array();
$arguments419['key'] = NULL;
$arguments419['id'] = NULL;
$arguments419['default'] = NULL;
$arguments419['arguments'] = NULL;
$arguments419['extensionName'] = NULL;
$arguments419['languageKey'] = NULL;
$arguments419['alternativeLanguageKeys'] = NULL;
$arguments419['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.cancel';

$output402 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments419, $renderChildrenClosure420, $renderingContext)]);

$output402 .= '"
                                    data-button-save-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure422 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments421 = array();
$arguments421['key'] = NULL;
$arguments421['id'] = NULL;
$arguments421['default'] = NULL;
$arguments421['arguments'] = NULL;
$arguments421['extensionName'] = NULL;
$arguments421['languageKey'] = NULL;
$arguments421['alternativeLanguageKeys'] = NULL;
$arguments421['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.accept';

$output402 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments421, $renderChildrenClosure422, $renderingContext)]);

$output402 .= '"
                                    data-file-field="';
$array423 = array (
);
$output402 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.file_field', $array423)]);

$output402 .= '"
                                    data-field="';
$array424 = array (
);
$output402 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array424)]);

$output402 .= '">
                                <span class="t3-icon fa fa-crop"></span>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure426 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments425 = array();
$arguments425['key'] = NULL;
$arguments425['id'] = NULL;
$arguments425['default'] = NULL;
$arguments425['arguments'] = NULL;
$arguments425['extensionName'] = NULL;
$arguments425['languageKey'] = NULL;
$arguments425['alternativeLanguageKeys'] = NULL;
$arguments425['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.open-editor';

$output402 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments425, $renderChildrenClosure426, $renderingContext)]);

$output402 .= '
                            </button>
                        </div>
                    ';
return $output402;
};

$output399 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments400, $renderChildrenClosure401, $renderingContext);

$output399 .= '
                <div class="row media-gallery__list">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure459 = function() use ($renderingContext, $self) {
$output461 = '';

$output461 .= '
                        <div class="col-xs-6 col-sm-4 col-md-3 media-gallery__item">
                            <p>
                                <b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure463 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments462 = array();
$arguments462['key'] = NULL;
$arguments462['id'] = NULL;
$arguments462['default'] = NULL;
$arguments462['arguments'] = NULL;
$arguments462['extensionName'] = NULL;
$arguments462['languageKey'] = NULL;
$arguments462['alternativeLanguageKeys'] = NULL;
$array464 = array (
);$arguments462['id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.title', $array464);
$array465 = array (
);$arguments462['default'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.title', $array465);

$output461 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments462, $renderChildrenClosure463, $renderingContext)]);

$output461 .= '</b><br/>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure467 = function() use ($renderingContext, $self) {
$output471 = '';

$output471 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure473 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments472 = array();
$arguments472['key'] = NULL;
$arguments472['id'] = NULL;
$arguments472['default'] = NULL;
$arguments472['arguments'] = NULL;
$arguments472['extensionName'] = NULL;
$arguments472['languageKey'] = NULL;
$arguments472['alternativeLanguageKeys'] = NULL;
$arguments472['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.aspect-ratio';

$output471 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments472, $renderChildrenClosure473, $renderingContext)]);

$output471 .= ': <span class="t3js-image-manipulation-selected-ratio" data-crop-variant-id="';
$array474 = array (
);
$output471 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array474)]);

$output471 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure476 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments475 = array();
$arguments475['key'] = NULL;
$arguments475['id'] = NULL;
$arguments475['default'] = NULL;
$arguments475['arguments'] = NULL;
$arguments475['extensionName'] = NULL;
$arguments475['languageKey'] = NULL;
$arguments475['alternativeLanguageKeys'] = NULL;
$array477 = array (
);$arguments475['id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title', $array477);
$array478 = array (
);$arguments475['default'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title', $array478);

$output471 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments475, $renderChildrenClosure476, $renderingContext)]);

$output471 .= '</span>
                                ';
return $output471;
};
$arguments466 = array();
$arguments466['then'] = NULL;
$arguments466['else'] = NULL;
$arguments466['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array468 = array();
$array469 = array (
);$array468['0'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title', $array469);

$expression470 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments466['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression470(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array468)
					),
					$renderingContext
				);
$arguments466['__thenClosure'] = $renderChildrenClosure467;

$output461 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments466, $renderChildrenClosure467, $renderingContext);

$output461 .= '
                            </p>
                            <div class="t3js-image-manipulation-preview media-object"
                                data-preview-height="150"
                                data-crop-variant-id="';
$array479 = array (
);
$output461 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array479)]);

$output461 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure481 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments480 = array();
$arguments480['additionalAttributes'] = NULL;
$arguments480['data'] = NULL;
$arguments480['class'] = NULL;
$arguments480['dir'] = NULL;
$arguments480['id'] = NULL;
$arguments480['lang'] = NULL;
$arguments480['style'] = NULL;
$arguments480['title'] = NULL;
$arguments480['accesskey'] = NULL;
$arguments480['tabindex'] = NULL;
$arguments480['onclick'] = NULL;
$arguments480['alt'] = NULL;
$arguments480['ismap'] = NULL;
$arguments480['longdesc'] = NULL;
$arguments480['usemap'] = NULL;
$arguments480['loading'] = NULL;
$arguments480['src'] = '';
$arguments480['treatIdAsReference'] = false;
$arguments480['image'] = NULL;
$arguments480['crop'] = NULL;
$arguments480['cropVariant'] = 'default';
$arguments480['fileExtension'] = NULL;
$arguments480['width'] = NULL;
$arguments480['height'] = NULL;
$arguments480['minWidth'] = NULL;
$arguments480['minHeight'] = NULL;
$arguments480['maxWidth'] = NULL;
$arguments480['maxHeight'] = NULL;
$arguments480['absolute'] = false;
$array482 = array (
);$arguments480['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array482);
$array483 = array (
);$arguments480['crop'] = $renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array483);
$array484 = array (
);$arguments480['cropVariant'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array484);
$arguments480['maxHeight'] = 150;
$arguments480['class'] = 'thumbnail thumbnail-status';
// Rendering Array
$array485 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure487 = function() use ($renderingContext, $self) {
$array488 = array (
);return $renderingContext->getVariableProvider()->getByPath('cropVariant', $array488);
};
$arguments486 = array();
$arguments486['value'] = NULL;
$arguments486['forceObject'] = false;
$renderChildrenClosure487 = ($arguments486['value'] !== null) ? function() use ($arguments486) { return $arguments486['value']; } : $renderChildrenClosure487;$array485['data-crop-variant'] = TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments486, $renderChildrenClosure487, $renderingContext);
$array489 = array (
);$array485['data-crop-variant-id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array489);
$arguments480['additionalAttributes'] = $array485;

$output461 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments480, $renderChildrenClosure481, $renderingContext);

$output461 .= '
                            </div>
                        </div>
                    ';
return $output461;
};
$arguments458 = array();
$arguments458['each'] = NULL;
$arguments458['as'] = NULL;
$arguments458['key'] = NULL;
$arguments458['reverse'] = false;
$arguments458['iteration'] = NULL;
$array460 = array (
);$arguments458['each'] = $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array460);
$arguments458['as'] = 'cropVariant';

$output399 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments458, $renderChildrenClosure459, $renderingContext);

$output399 .= '
                </div>
            ';
return $output399;
};
$arguments397 = array();

$output396 .= '';

$output396 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure491 = function() use ($renderingContext, $self) {
$output492 = '';

$output492 .= '
                <div class="media-body">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure494 = function() use ($renderingContext, $self) {
$output509 = '';

$output509 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure511 = function() use ($renderingContext, $self) {
$output512 = '';

$output512 .= '
                        <p>
                            <em>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure514 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments513 = array();
$arguments513['key'] = NULL;
$arguments513['id'] = NULL;
$arguments513['default'] = NULL;
$arguments513['arguments'] = NULL;
$arguments513['extensionName'] = NULL;
$arguments513['languageKey'] = NULL;
$arguments513['alternativeLanguageKeys'] = NULL;
$arguments513['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.supported-types-message';

$output512 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments513, $renderChildrenClosure514, $renderingContext)]);

$output512 .= '<br/>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure516 = function() use ($renderingContext, $self) {
$array517 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.allowedExtensions', $array517);
};
$arguments515 = array();
$arguments515['value'] = NULL;
$arguments515['mode'] = 'upper';
$arguments515['mode'] = 'upper';

$output512 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments515, $renderChildrenClosure516, $renderingContext)]);

$output512 .= '
                            </em>
                        </p>
                    ';
return $output512;
};
$arguments510 = array();

$output509 .= '';

$output509 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure519 = function() use ($renderingContext, $self) {
$output520 = '';

$output520 .= '
                        <div class="alert alert-info">
                            <h4>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure522 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments521 = array();
$arguments521['key'] = NULL;
$arguments521['id'] = NULL;
$arguments521['default'] = NULL;
$arguments521['arguments'] = NULL;
$arguments521['extensionName'] = NULL;
$arguments521['languageKey'] = NULL;
$arguments521['alternativeLanguageKeys'] = NULL;
$arguments521['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions';

$output520 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments521, $renderChildrenClosure522, $renderingContext)]);

$output520 .= '
                            </h4>
                            <p>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure524 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments523 = array();
$arguments523['key'] = NULL;
$arguments523['id'] = NULL;
$arguments523['default'] = NULL;
$arguments523['arguments'] = NULL;
$arguments523['extensionName'] = NULL;
$arguments523['languageKey'] = NULL;
$arguments523['alternativeLanguageKeys'] = NULL;
$arguments523['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions-message';

$output520 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments523, $renderChildrenClosure524, $renderingContext)]);

$output520 .= '
                            </p>
                        </div>
                    ';
return $output520;
};
$arguments518 = array();
$arguments518['if'] = NULL;

$output509 .= '';

$output509 .= '
                ';
return $output509;
};
$arguments493 = array();
$arguments493['then'] = NULL;
$arguments493['else'] = NULL;
$arguments493['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array506 = array();
$array507 = array (
);$array506['0'] = $renderingContext->getVariableProvider()->getByPath('image.properties.width', $array507);

$expression508 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments493['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression508(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array506)
					),
					$renderingContext
				);
$arguments493['__thenClosure'] = function() use ($renderingContext, $self) {
$output495 = '';

$output495 .= '
                        <p>
                            <em>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure497 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments496 = array();
$arguments496['key'] = NULL;
$arguments496['id'] = NULL;
$arguments496['default'] = NULL;
$arguments496['arguments'] = NULL;
$arguments496['extensionName'] = NULL;
$arguments496['languageKey'] = NULL;
$arguments496['alternativeLanguageKeys'] = NULL;
$arguments496['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.supported-types-message';

$output495 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments496, $renderChildrenClosure497, $renderingContext)]);

$output495 .= '<br/>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure499 = function() use ($renderingContext, $self) {
$array500 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.allowedExtensions', $array500);
};
$arguments498 = array();
$arguments498['value'] = NULL;
$arguments498['mode'] = 'upper';
$arguments498['mode'] = 'upper';

$output495 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments498, $renderChildrenClosure499, $renderingContext)]);

$output495 .= '
                            </em>
                        </p>
                    ';
return $output495;
};
$arguments493['__elseClosures'][] = function() use ($renderingContext, $self) {
$output501 = '';

$output501 .= '
                        <div class="alert alert-info">
                            <h4>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure503 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments502 = array();
$arguments502['key'] = NULL;
$arguments502['id'] = NULL;
$arguments502['default'] = NULL;
$arguments502['arguments'] = NULL;
$arguments502['extensionName'] = NULL;
$arguments502['languageKey'] = NULL;
$arguments502['alternativeLanguageKeys'] = NULL;
$arguments502['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions';

$output501 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments502, $renderChildrenClosure503, $renderingContext)]);

$output501 .= '
                            </h4>
                            <p>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure505 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments504 = array();
$arguments504['key'] = NULL;
$arguments504['id'] = NULL;
$arguments504['default'] = NULL;
$arguments504['arguments'] = NULL;
$arguments504['extensionName'] = NULL;
$arguments504['languageKey'] = NULL;
$arguments504['alternativeLanguageKeys'] = NULL;
$arguments504['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions-message';

$output501 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments504, $renderChildrenClosure505, $renderingContext)]);

$output501 .= '
                            </p>
                        </div>
                    ';
return $output501;
};

$output492 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments493, $renderChildrenClosure494, $renderingContext);

$output492 .= '
                </div>
            ';
return $output492;
};
$arguments490 = array();
$arguments490['if'] = NULL;

$output396 .= '';

$output396 .= '
        ';
return $output396;
};
$arguments266 = array();
$arguments266['then'] = NULL;
$arguments266['else'] = NULL;
$arguments266['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array392 = array();
$array393 = array (
);$array392['0'] = $renderingContext->getVariableProvider()->getByPath('isAllowedFileExtension', $array393);
$array392['1'] = ' && ';
$array394 = array (
);$array392['2'] = $renderingContext->getVariableProvider()->getByPath('image.properties.width', $array394);

$expression395 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments266['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression395(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array392)
					),
					$renderingContext
				);
$arguments266['__thenClosure'] = function() use ($renderingContext, $self) {
$output268 = '';

$output268 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
$output299 = '';

$output299 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
$output302 = '';

$output302 .= '
                        <div class="form-control-wrap">
                            <input type="hidden" id="';
$array303 = array (
);
$output302 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array303)]);

$output302 .= '"
                                    name="';
$array304 = array (
);
$output302 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.name', $array304)]);

$output302 .= '"
                                    value="';
$array305 = array (
);
$output302 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array305)]);

$output302 .= '"
                                    data-formengine-validation-rules="';
$array306 = array (
);
$output302 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.validation', $array306)]);

$output302 .= '"/>
                            <button class="btn btn-default t3js-image-manipulation-trigger"
                                    data-url="';
$array307 = array (
);
$output302 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardUri', $array307)]);

$output302 .= '"
                                    data-payload="';
$array308 = array (
);
$output302 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardPayload', $array308)]);

$output302 .= '"
                                    data-preview-url="';
$array309 = array (
);
$output302 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('previewUrl', $array309)]);

$output302 .= '"
                                    data-severity="notice"
                                    data-modal-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments310 = array();
$arguments310['section'] = NULL;
$arguments310['partial'] = NULL;
$arguments310['delegate'] = NULL;
$arguments310['renderable'] = NULL;
$arguments310['arguments'] = array (
);
$arguments310['optional'] = false;
$arguments310['default'] = NULL;
$arguments310['contentAs'] = NULL;
$arguments310['debug'] = true;
$arguments310['partial'] = 'ModalTitle';
$arguments310['section'] = 'Main';
$arguments310['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output302 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments310, $renderChildrenClosure311, $renderingContext);

$output302 .= '"
                                    data-image-uid="';
$array313 = array (
);
$output302 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.uid', $array313)]);

$output302 .= '"
                                    data-crop-variants="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
$array316 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array316);
};
$arguments314 = array();
$arguments314['value'] = NULL;
$arguments314['forceObject'] = false;
$renderChildrenClosure315 = ($arguments314['value'] !== null) ? function() use ($arguments314) { return $arguments314['value']; } : $renderChildrenClosure315;
$output302 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext)]);

$output302 .= '"
                                    data-button-preview-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure318 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments317 = array();
$arguments317['key'] = NULL;
$arguments317['id'] = NULL;
$arguments317['default'] = NULL;
$arguments317['arguments'] = NULL;
$arguments317['extensionName'] = NULL;
$arguments317['languageKey'] = NULL;
$arguments317['alternativeLanguageKeys'] = NULL;
$arguments317['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.preview';

$output302 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext)]);

$output302 .= '"
                                    data-button-dismiss-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure320 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments319 = array();
$arguments319['key'] = NULL;
$arguments319['id'] = NULL;
$arguments319['default'] = NULL;
$arguments319['arguments'] = NULL;
$arguments319['extensionName'] = NULL;
$arguments319['languageKey'] = NULL;
$arguments319['alternativeLanguageKeys'] = NULL;
$arguments319['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.cancel';

$output302 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments319, $renderChildrenClosure320, $renderingContext)]);

$output302 .= '"
                                    data-button-save-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments321 = array();
$arguments321['key'] = NULL;
$arguments321['id'] = NULL;
$arguments321['default'] = NULL;
$arguments321['arguments'] = NULL;
$arguments321['extensionName'] = NULL;
$arguments321['languageKey'] = NULL;
$arguments321['alternativeLanguageKeys'] = NULL;
$arguments321['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.accept';

$output302 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext)]);

$output302 .= '"
                                    data-file-field="';
$array323 = array (
);
$output302 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.file_field', $array323)]);

$output302 .= '"
                                    data-field="';
$array324 = array (
);
$output302 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array324)]);

$output302 .= '">
                                <span class="t3-icon fa fa-crop"></span>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments325 = array();
$arguments325['key'] = NULL;
$arguments325['id'] = NULL;
$arguments325['default'] = NULL;
$arguments325['arguments'] = NULL;
$arguments325['extensionName'] = NULL;
$arguments325['languageKey'] = NULL;
$arguments325['alternativeLanguageKeys'] = NULL;
$arguments325['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.open-editor';

$output302 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext)]);

$output302 .= '
                            </button>
                        </div>
                    ';
return $output302;
};
$arguments300 = array();
$arguments300['if'] = NULL;

$output299 .= '';

$output299 .= '
                ';
return $output299;
};
$arguments269 = array();
$arguments269['then'] = NULL;
$arguments269['else'] = NULL;
$arguments269['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array296 = array();
$array297 = array (
);$array296['0'] = $renderingContext->getVariableProvider()->getByPath('config.readOnly', $array297);

$expression298 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments269['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression298(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array296)
					),
					$renderingContext
				);
$arguments269['__elseClosures'][] = function() use ($renderingContext, $self) {
$output271 = '';

$output271 .= '
                        <div class="form-control-wrap">
                            <input type="hidden" id="';
$array272 = array (
);
$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array272)]);

$output271 .= '"
                                    name="';
$array273 = array (
);
$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.name', $array273)]);

$output271 .= '"
                                    value="';
$array274 = array (
);
$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array274)]);

$output271 .= '"
                                    data-formengine-validation-rules="';
$array275 = array (
);
$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.validation', $array275)]);

$output271 .= '"/>
                            <button class="btn btn-default t3js-image-manipulation-trigger"
                                    data-url="';
$array276 = array (
);
$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardUri', $array276)]);

$output271 .= '"
                                    data-payload="';
$array277 = array (
);
$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('wizardPayload', $array277)]);

$output271 .= '"
                                    data-preview-url="';
$array278 = array (
);
$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('previewUrl', $array278)]);

$output271 .= '"
                                    data-severity="notice"
                                    data-modal-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments279 = array();
$arguments279['section'] = NULL;
$arguments279['partial'] = NULL;
$arguments279['delegate'] = NULL;
$arguments279['renderable'] = NULL;
$arguments279['arguments'] = array (
);
$arguments279['optional'] = false;
$arguments279['default'] = NULL;
$arguments279['contentAs'] = NULL;
$arguments279['debug'] = true;
$arguments279['partial'] = 'ModalTitle';
$arguments279['section'] = 'Main';
$arguments279['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output271 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments279, $renderChildrenClosure280, $renderingContext);

$output271 .= '"
                                    data-image-uid="';
$array282 = array (
);
$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.uid', $array282)]);

$output271 .= '"
                                    data-crop-variants="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
$array285 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array285);
};
$arguments283 = array();
$arguments283['value'] = NULL;
$arguments283['forceObject'] = false;
$renderChildrenClosure284 = ($arguments283['value'] !== null) ? function() use ($arguments283) { return $arguments283['value']; } : $renderChildrenClosure284;
$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext)]);

$output271 .= '"
                                    data-button-preview-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments286 = array();
$arguments286['key'] = NULL;
$arguments286['id'] = NULL;
$arguments286['default'] = NULL;
$arguments286['arguments'] = NULL;
$arguments286['extensionName'] = NULL;
$arguments286['languageKey'] = NULL;
$arguments286['alternativeLanguageKeys'] = NULL;
$arguments286['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.preview';

$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments286, $renderChildrenClosure287, $renderingContext)]);

$output271 .= '"
                                    data-button-dismiss-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments288 = array();
$arguments288['key'] = NULL;
$arguments288['id'] = NULL;
$arguments288['default'] = NULL;
$arguments288['arguments'] = NULL;
$arguments288['extensionName'] = NULL;
$arguments288['languageKey'] = NULL;
$arguments288['alternativeLanguageKeys'] = NULL;
$arguments288['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.cancel';

$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments288, $renderChildrenClosure289, $renderingContext)]);

$output271 .= '"
                                    data-button-save-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments290 = array();
$arguments290['key'] = NULL;
$arguments290['id'] = NULL;
$arguments290['default'] = NULL;
$arguments290['arguments'] = NULL;
$arguments290['extensionName'] = NULL;
$arguments290['languageKey'] = NULL;
$arguments290['alternativeLanguageKeys'] = NULL;
$arguments290['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.accept';

$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments290, $renderChildrenClosure291, $renderingContext)]);

$output271 .= '"
                                    data-file-field="';
$array292 = array (
);
$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.file_field', $array292)]);

$output271 .= '"
                                    data-field="';
$array293 = array (
);
$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formEngine.field.id', $array293)]);

$output271 .= '">
                                <span class="t3-icon fa fa-crop"></span>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments294 = array();
$arguments294['key'] = NULL;
$arguments294['id'] = NULL;
$arguments294['default'] = NULL;
$arguments294['arguments'] = NULL;
$arguments294['extensionName'] = NULL;
$arguments294['languageKey'] = NULL;
$arguments294['alternativeLanguageKeys'] = NULL;
$arguments294['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.open-editor';

$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext)]);

$output271 .= '
                            </button>
                        </div>
                    ';
return $output271;
};

$output268 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output268 .= '
                <div class="row media-gallery__list">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure328 = function() use ($renderingContext, $self) {
$output330 = '';

$output330 .= '
                        <div class="col-xs-6 col-sm-4 col-md-3 media-gallery__item">
                            <p>
                                <b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure332 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments331 = array();
$arguments331['key'] = NULL;
$arguments331['id'] = NULL;
$arguments331['default'] = NULL;
$arguments331['arguments'] = NULL;
$arguments331['extensionName'] = NULL;
$arguments331['languageKey'] = NULL;
$arguments331['alternativeLanguageKeys'] = NULL;
$array333 = array (
);$arguments331['id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.title', $array333);
$array334 = array (
);$arguments331['default'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.title', $array334);

$output330 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments331, $renderChildrenClosure332, $renderingContext)]);

$output330 .= '</b><br/>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
$output340 = '';

$output340 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments341 = array();
$arguments341['key'] = NULL;
$arguments341['id'] = NULL;
$arguments341['default'] = NULL;
$arguments341['arguments'] = NULL;
$arguments341['extensionName'] = NULL;
$arguments341['languageKey'] = NULL;
$arguments341['alternativeLanguageKeys'] = NULL;
$arguments341['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.aspect-ratio';

$output340 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext)]);

$output340 .= ': <span class="t3js-image-manipulation-selected-ratio" data-crop-variant-id="';
$array343 = array (
);
$output340 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array343)]);

$output340 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure345 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments344 = array();
$arguments344['key'] = NULL;
$arguments344['id'] = NULL;
$arguments344['default'] = NULL;
$arguments344['arguments'] = NULL;
$arguments344['extensionName'] = NULL;
$arguments344['languageKey'] = NULL;
$arguments344['alternativeLanguageKeys'] = NULL;
$array346 = array (
);$arguments344['id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title', $array346);
$array347 = array (
);$arguments344['default'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title', $array347);

$output340 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments344, $renderChildrenClosure345, $renderingContext)]);

$output340 .= '</span>
                                ';
return $output340;
};
$arguments335 = array();
$arguments335['then'] = NULL;
$arguments335['else'] = NULL;
$arguments335['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array337 = array();
$array338 = array (
);$array337['0'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios.{cropVariant.selectedRatio}.title', $array338);

$expression339 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments335['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression339(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array337)
					),
					$renderingContext
				);
$arguments335['__thenClosure'] = $renderChildrenClosure336;

$output330 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);

$output330 .= '
                            </p>
                            <div class="t3js-image-manipulation-preview media-object"
                                data-preview-height="150"
                                data-crop-variant-id="';
$array348 = array (
);
$output330 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array348)]);

$output330 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments349 = array();
$arguments349['additionalAttributes'] = NULL;
$arguments349['data'] = NULL;
$arguments349['class'] = NULL;
$arguments349['dir'] = NULL;
$arguments349['id'] = NULL;
$arguments349['lang'] = NULL;
$arguments349['style'] = NULL;
$arguments349['title'] = NULL;
$arguments349['accesskey'] = NULL;
$arguments349['tabindex'] = NULL;
$arguments349['onclick'] = NULL;
$arguments349['alt'] = NULL;
$arguments349['ismap'] = NULL;
$arguments349['longdesc'] = NULL;
$arguments349['usemap'] = NULL;
$arguments349['loading'] = NULL;
$arguments349['src'] = '';
$arguments349['treatIdAsReference'] = false;
$arguments349['image'] = NULL;
$arguments349['crop'] = NULL;
$arguments349['cropVariant'] = 'default';
$arguments349['fileExtension'] = NULL;
$arguments349['width'] = NULL;
$arguments349['height'] = NULL;
$arguments349['minWidth'] = NULL;
$arguments349['minHeight'] = NULL;
$arguments349['maxWidth'] = NULL;
$arguments349['maxHeight'] = NULL;
$arguments349['absolute'] = false;
$array351 = array (
);$arguments349['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array351);
$array352 = array (
);$arguments349['crop'] = $renderingContext->getVariableProvider()->getByPath('formEngine.field.value', $array352);
$array353 = array (
);$arguments349['cropVariant'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array353);
$arguments349['maxHeight'] = 150;
$arguments349['class'] = 'thumbnail thumbnail-status';
// Rendering Array
$array354 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure356 = function() use ($renderingContext, $self) {
$array357 = array (
);return $renderingContext->getVariableProvider()->getByPath('cropVariant', $array357);
};
$arguments355 = array();
$arguments355['value'] = NULL;
$arguments355['forceObject'] = false;
$renderChildrenClosure356 = ($arguments355['value'] !== null) ? function() use ($arguments355) { return $arguments355['value']; } : $renderChildrenClosure356;$array354['data-crop-variant'] = TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments355, $renderChildrenClosure356, $renderingContext);
$array358 = array (
);$array354['data-crop-variant-id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array358);
$arguments349['additionalAttributes'] = $array354;

$output330 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments349, $renderChildrenClosure350, $renderingContext);

$output330 .= '
                            </div>
                        </div>
                    ';
return $output330;
};
$arguments327 = array();
$arguments327['each'] = NULL;
$arguments327['as'] = NULL;
$arguments327['key'] = NULL;
$arguments327['reverse'] = false;
$arguments327['iteration'] = NULL;
$array329 = array (
);$arguments327['each'] = $renderingContext->getVariableProvider()->getByPath('config.cropVariants', $array329);
$arguments327['as'] = 'cropVariant';

$output268 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments327, $renderChildrenClosure328, $renderingContext);

$output268 .= '
                </div>
            ';
return $output268;
};
$arguments266['__elseClosures'][] = function() use ($renderingContext, $self) {
$output359 = '';

$output359 .= '
                <div class="media-body">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure361 = function() use ($renderingContext, $self) {
$output376 = '';

$output376 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure378 = function() use ($renderingContext, $self) {
$output379 = '';

$output379 .= '
                        <p>
                            <em>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure381 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments380 = array();
$arguments380['key'] = NULL;
$arguments380['id'] = NULL;
$arguments380['default'] = NULL;
$arguments380['arguments'] = NULL;
$arguments380['extensionName'] = NULL;
$arguments380['languageKey'] = NULL;
$arguments380['alternativeLanguageKeys'] = NULL;
$arguments380['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.supported-types-message';

$output379 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments380, $renderChildrenClosure381, $renderingContext)]);

$output379 .= '<br/>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
$array384 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.allowedExtensions', $array384);
};
$arguments382 = array();
$arguments382['value'] = NULL;
$arguments382['mode'] = 'upper';
$arguments382['mode'] = 'upper';

$output379 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext)]);

$output379 .= '
                            </em>
                        </p>
                    ';
return $output379;
};
$arguments377 = array();

$output376 .= '';

$output376 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
$output387 = '';

$output387 .= '
                        <div class="alert alert-info">
                            <h4>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure389 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments388 = array();
$arguments388['key'] = NULL;
$arguments388['id'] = NULL;
$arguments388['default'] = NULL;
$arguments388['arguments'] = NULL;
$arguments388['extensionName'] = NULL;
$arguments388['languageKey'] = NULL;
$arguments388['alternativeLanguageKeys'] = NULL;
$arguments388['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions';

$output387 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments388, $renderChildrenClosure389, $renderingContext)]);

$output387 .= '
                            </h4>
                            <p>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure391 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments390 = array();
$arguments390['key'] = NULL;
$arguments390['id'] = NULL;
$arguments390['default'] = NULL;
$arguments390['arguments'] = NULL;
$arguments390['extensionName'] = NULL;
$arguments390['languageKey'] = NULL;
$arguments390['alternativeLanguageKeys'] = NULL;
$arguments390['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions-message';

$output387 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments390, $renderChildrenClosure391, $renderingContext)]);

$output387 .= '
                            </p>
                        </div>
                    ';
return $output387;
};
$arguments385 = array();
$arguments385['if'] = NULL;

$output376 .= '';

$output376 .= '
                ';
return $output376;
};
$arguments360 = array();
$arguments360['then'] = NULL;
$arguments360['else'] = NULL;
$arguments360['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array373 = array();
$array374 = array (
);$array373['0'] = $renderingContext->getVariableProvider()->getByPath('image.properties.width', $array374);

$expression375 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments360['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression375(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array373)
					),
					$renderingContext
				);
$arguments360['__thenClosure'] = function() use ($renderingContext, $self) {
$output362 = '';

$output362 .= '
                        <p>
                            <em>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure364 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments363 = array();
$arguments363['key'] = NULL;
$arguments363['id'] = NULL;
$arguments363['default'] = NULL;
$arguments363['arguments'] = NULL;
$arguments363['extensionName'] = NULL;
$arguments363['languageKey'] = NULL;
$arguments363['alternativeLanguageKeys'] = NULL;
$arguments363['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.supported-types-message';

$output362 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments363, $renderChildrenClosure364, $renderingContext)]);

$output362 .= '<br/>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
$array367 = array (
);return $renderingContext->getVariableProvider()->getByPath('config.allowedExtensions', $array367);
};
$arguments365 = array();
$arguments365['value'] = NULL;
$arguments365['mode'] = 'upper';
$arguments365['mode'] = 'upper';

$output362 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments365, $renderChildrenClosure366, $renderingContext)]);

$output362 .= '
                            </em>
                        </p>
                    ';
return $output362;
};
$arguments360['__elseClosures'][] = function() use ($renderingContext, $self) {
$output368 = '';

$output368 .= '
                        <div class="alert alert-info">
                            <h4>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure370 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments369 = array();
$arguments369['key'] = NULL;
$arguments369['id'] = NULL;
$arguments369['default'] = NULL;
$arguments369['arguments'] = NULL;
$arguments369['extensionName'] = NULL;
$arguments369['languageKey'] = NULL;
$arguments369['alternativeLanguageKeys'] = NULL;
$arguments369['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions';

$output368 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments369, $renderChildrenClosure370, $renderingContext)]);

$output368 .= '
                            </h4>
                            <p>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure372 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments371 = array();
$arguments371['key'] = NULL;
$arguments371['id'] = NULL;
$arguments371['default'] = NULL;
$arguments371['arguments'] = NULL;
$arguments371['extensionName'] = NULL;
$arguments371['languageKey'] = NULL;
$arguments371['alternativeLanguageKeys'] = NULL;
$arguments371['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.no-image-dimensions-message';

$output368 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments371, $renderChildrenClosure372, $renderingContext)]);

$output368 .= '
                            </p>
                        </div>
                    ';
return $output368;
};

$output359 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments360, $renderChildrenClosure361, $renderingContext);

$output359 .= '
                </div>
            ';
return $output359;
};

$output265 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext);

$output265 .= '
    ';
return $output265;
};
$arguments263 = array();
$arguments263['name'] = NULL;
$arguments263['name'] = 'Main';

$output260 .= NULL;

$output260 .= '
</html>
';

return $output260;
}


}
#