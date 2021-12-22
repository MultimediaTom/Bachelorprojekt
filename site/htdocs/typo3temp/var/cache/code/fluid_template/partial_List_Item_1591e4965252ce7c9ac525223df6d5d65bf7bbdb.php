<?php

class partial_List_Item_1591e4965252ce7c9ac525223df6d5d65bf7bbdb extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'n' => 
  array (
    0 => 'GeorgRinger\\News\\ViewHelpers',
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
<!--
	=====================
		Partials/List/Item.html
-->
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['newsItem'] = NULL;
$array3 = array (
);$arguments1['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array3);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
<div class="row news-list-item">
	<div class="col-md-3">
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['additionalAttributes'] = NULL;
$arguments50['data'] = NULL;
$arguments50['class'] = NULL;
$arguments50['dir'] = NULL;
$arguments50['id'] = NULL;
$arguments50['lang'] = NULL;
$arguments50['style'] = NULL;
$arguments50['title'] = NULL;
$arguments50['accesskey'] = NULL;
$arguments50['tabindex'] = NULL;
$arguments50['onclick'] = NULL;
$arguments50['alt'] = NULL;
$arguments50['file'] = NULL;
$arguments50['additionalConfig'] = array (
);
$arguments50['width'] = NULL;
$arguments50['height'] = NULL;
$arguments50['cropVariant'] = 'default';
$arguments50['fileExtension'] = NULL;
$arguments50['loading'] = NULL;
$arguments50['class'] = 'img-responsive';
$array52 = array (
);$arguments50['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array52);
$array53 = array (
);$arguments50['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array53);
$array54 = array (
);$arguments50['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array54);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['then'] = NULL;
$arguments55['else'] = NULL;
$arguments55['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array57 = array();
$array58 = array (
);$array57['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array58);

$expression59 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments55['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression59(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array57)
					),
					$renderingContext
				);
$array60 = array (
);$arguments55['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array60);
$array61 = array (
);$arguments55['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array61);
$arguments50['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['then'] = NULL;
$arguments62['else'] = NULL;
$arguments62['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array64 = array();
$array65 = array (
);$array64['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array65);

$expression66 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments62['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression66(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array64)
					),
					$renderingContext
				);
$array67 = array (
);$arguments62['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array67);
$arguments62['else'] = '';
$arguments50['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output49 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '
				';
return $output49;
};
$arguments47 = array();

$output46 .= '';

$output46 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['additionalAttributes'] = NULL;
$arguments77['data'] = NULL;
$arguments77['class'] = NULL;
$arguments77['dir'] = NULL;
$arguments77['id'] = NULL;
$arguments77['lang'] = NULL;
$arguments77['style'] = NULL;
$arguments77['title'] = NULL;
$arguments77['accesskey'] = NULL;
$arguments77['tabindex'] = NULL;
$arguments77['onclick'] = NULL;
$arguments77['alt'] = NULL;
$arguments77['ismap'] = NULL;
$arguments77['longdesc'] = NULL;
$arguments77['usemap'] = NULL;
$arguments77['loading'] = NULL;
$arguments77['src'] = '';
$arguments77['treatIdAsReference'] = false;
$arguments77['image'] = NULL;
$arguments77['crop'] = NULL;
$arguments77['cropVariant'] = 'default';
$arguments77['fileExtension'] = NULL;
$arguments77['width'] = NULL;
$arguments77['height'] = NULL;
$arguments77['minWidth'] = NULL;
$arguments77['minHeight'] = NULL;
$arguments77['maxWidth'] = NULL;
$arguments77['maxHeight'] = NULL;
$arguments77['absolute'] = false;
$arguments77['class'] = 'img-dummy img-responsive';
$array79 = array (
);$arguments77['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array79);
$arguments77['title'] = '';
$arguments77['alt'] = '';
$array80 = array (
);$arguments77['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array80);
$array81 = array (
);$arguments77['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array81);

$output76 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output76 .= '
					';
return $output76;
};
$arguments71 = array();
$arguments71['then'] = NULL;
$arguments71['else'] = NULL;
$arguments71['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array73 = array();
$array74 = array (
);$array73['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array74);

$expression75 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments71['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression75(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array73)
					),
					$renderingContext
				);
$arguments71['__thenClosure'] = $renderChildrenClosure72;

$output70 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output70 .= '
				';
return $output70;
};
$arguments68 = array();
$arguments68['if'] = NULL;

$output46 .= '';

$output46 .= '
			';
return $output46;
};
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array43 = array();
$array44 = array (
);$array43['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array44);

$expression45 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression45(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array43)
					),
					$renderingContext
				);
$arguments10['__thenClosure'] = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['additionalAttributes'] = NULL;
$arguments13['data'] = NULL;
$arguments13['class'] = NULL;
$arguments13['dir'] = NULL;
$arguments13['id'] = NULL;
$arguments13['lang'] = NULL;
$arguments13['style'] = NULL;
$arguments13['title'] = NULL;
$arguments13['accesskey'] = NULL;
$arguments13['tabindex'] = NULL;
$arguments13['onclick'] = NULL;
$arguments13['alt'] = NULL;
$arguments13['file'] = NULL;
$arguments13['additionalConfig'] = array (
);
$arguments13['width'] = NULL;
$arguments13['height'] = NULL;
$arguments13['cropVariant'] = 'default';
$arguments13['fileExtension'] = NULL;
$arguments13['loading'] = NULL;
$arguments13['class'] = 'img-responsive';
$array15 = array (
);$arguments13['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array15);
$array16 = array (
);$arguments13['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array16);
$array17 = array (
);$arguments13['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array17);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['then'] = NULL;
$arguments18['else'] = NULL;
$arguments18['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array20 = array();
$array21 = array (
);$array20['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array21);

$expression22 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments18['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression22(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)
					),
					$renderingContext
				);
$array23 = array (
);$arguments18['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array23);
$array24 = array (
);$arguments18['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array24);
$arguments13['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['then'] = NULL;
$arguments25['else'] = NULL;
$arguments25['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array28);

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments25['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression29(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)
					),
					$renderingContext
				);
$array30 = array (
);$arguments25['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array30);
$arguments25['else'] = '';
$arguments13['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
				';
return $output12;
};
$arguments10['__elseClosures'][] = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['additionalAttributes'] = NULL;
$arguments38['data'] = NULL;
$arguments38['class'] = NULL;
$arguments38['dir'] = NULL;
$arguments38['id'] = NULL;
$arguments38['lang'] = NULL;
$arguments38['style'] = NULL;
$arguments38['title'] = NULL;
$arguments38['accesskey'] = NULL;
$arguments38['tabindex'] = NULL;
$arguments38['onclick'] = NULL;
$arguments38['alt'] = NULL;
$arguments38['ismap'] = NULL;
$arguments38['longdesc'] = NULL;
$arguments38['usemap'] = NULL;
$arguments38['loading'] = NULL;
$arguments38['src'] = '';
$arguments38['treatIdAsReference'] = false;
$arguments38['image'] = NULL;
$arguments38['crop'] = NULL;
$arguments38['cropVariant'] = 'default';
$arguments38['fileExtension'] = NULL;
$arguments38['width'] = NULL;
$arguments38['height'] = NULL;
$arguments38['minWidth'] = NULL;
$arguments38['minHeight'] = NULL;
$arguments38['maxWidth'] = NULL;
$arguments38['maxHeight'] = NULL;
$arguments38['absolute'] = false;
$arguments38['class'] = 'img-dummy img-responsive';
$array40 = array (
);$arguments38['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array40);
$arguments38['title'] = '';
$arguments38['alt'] = '';
$array41 = array (
);$arguments38['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array41);
$array42 = array (
);$arguments38['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array42);

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output37 .= '
					';
return $output37;
};
$arguments32 = array();
$arguments32['then'] = NULL;
$arguments32['else'] = NULL;
$arguments32['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array34 = array();
$array35 = array (
);$array34['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array35);

$expression36 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments32['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression36(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array34)
					),
					$renderingContext
				);
$arguments32['__thenClosure'] = $renderChildrenClosure33;

$output31 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
				';
return $output31;
};

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
		';
return $output9;
};
$arguments4 = array();
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$arguments4['newsItem'] = NULL;
$arguments4['settings'] = array (
);
$arguments4['uriOnly'] = false;
$arguments4['configuration'] = array (
);
$arguments4['content'] = '';
$arguments4['section'] = NULL;
$array6 = array (
);$arguments4['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array6);
$array7 = array (
);$arguments4['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array7);
$array8 = array (
);$arguments4['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array8);

$output0 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
	</div>

	<div class="col-md-9 articletype-';
$array82 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.type', $array82)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$arguments83['then'] = NULL;
$arguments83['else'] = NULL;
$arguments83['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array85 = array();
$array86 = array (
);$array85['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.istopnews', $array86);

$expression87 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments83['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression87(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array85)
					),
					$renderingContext
				);
$arguments83['then'] = ' topnews';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output0 .= '" itemscope="itemscope" itemtype="http://schema.org/Article">
		<h3 itemprop="headline">
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
				';
$array94 = array (
);
$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array94)]);

$output93 .= '
			';
return $output93;
};
$arguments88 = array();
$arguments88['additionalAttributes'] = NULL;
$arguments88['data'] = NULL;
$arguments88['class'] = NULL;
$arguments88['dir'] = NULL;
$arguments88['id'] = NULL;
$arguments88['lang'] = NULL;
$arguments88['style'] = NULL;
$arguments88['title'] = NULL;
$arguments88['accesskey'] = NULL;
$arguments88['tabindex'] = NULL;
$arguments88['onclick'] = NULL;
$arguments88['newsItem'] = NULL;
$arguments88['settings'] = array (
);
$arguments88['uriOnly'] = false;
$arguments88['configuration'] = array (
);
$arguments88['content'] = '';
$arguments88['section'] = NULL;
$array90 = array (
);$arguments88['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array90);
$array91 = array (
);$arguments88['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array91);
$array92 = array (
);$arguments88['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array92);

$output0 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output0 .= '
		</h3>

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['section'] = NULL;
$arguments95['partial'] = NULL;
$arguments95['delegate'] = NULL;
$arguments95['renderable'] = NULL;
$arguments95['arguments'] = array (
);
$arguments95['optional'] = false;
$arguments95['default'] = NULL;
$arguments95['contentAs'] = NULL;
$arguments95['debug'] = true;
$arguments95['partial'] = 'General/AdditionalInformation';
// Rendering Array
$array97 = array();
$array98 = array (
);$array97['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array98);
$array99 = array (
);$array97['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array99);
$arguments95['arguments'] = $array97;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output0 .= '

		<!-- teaser -->
		<div class="lead" itemprop="description">
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\RemoveMediaTagsViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$output102 = '';

$output102 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$output126 = '';

$output126 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$array137 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array137);
};
$arguments132 = array();
$arguments132['maxCharacters'] = NULL;
$arguments132['append'] = '&hellip;';
$arguments132['respectWordBoundaries'] = true;
$arguments132['respectHtml'] = true;
$array134 = array (
);$arguments132['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array134);
// Rendering Boolean node
// Rendering Array
$array135 = array();
$array135['0'] = 1;

$expression136 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments132['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression136(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array135)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);
};
$arguments130 = array();
$arguments130['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output129 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output129 .= '
					';
return $output129;
};
$arguments127 = array();

$output126 .= '';

$output126 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$array148 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array148);
};
$arguments143 = array();
$arguments143['maxCharacters'] = NULL;
$arguments143['append'] = '&hellip;';
$arguments143['respectWordBoundaries'] = true;
$arguments143['respectHtml'] = true;
$array145 = array (
);$arguments143['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array145);
// Rendering Boolean node
// Rendering Array
$array146 = array();
$array146['0'] = 1;

$expression147 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments143['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression147(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array146)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);
};
$arguments141 = array();
$arguments141['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output140 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output140 .= '
					';
return $output140;
};
$arguments138 = array();
$arguments138['if'] = NULL;

$output126 .= '';

$output126 .= '
				';
return $output126;
};
$arguments103 = array();
$arguments103['then'] = NULL;
$arguments103['else'] = NULL;
$arguments103['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array123 = array();
$array124 = array (
);$array123['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array124);

$expression125 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments103['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression125(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array123)
					),
					$renderingContext
				);
$arguments103['__thenClosure'] = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$array113 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array113);
};
$arguments108 = array();
$arguments108['maxCharacters'] = NULL;
$arguments108['append'] = '&hellip;';
$arguments108['respectWordBoundaries'] = true;
$arguments108['respectHtml'] = true;
$array110 = array (
);$arguments108['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array110);
// Rendering Boolean node
// Rendering Array
$array111 = array();
$array111['0'] = 1;

$expression112 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments108['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression112(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array111)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);
};
$arguments106 = array();
$arguments106['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output105 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output105 .= '
					';
return $output105;
};
$arguments103['__elseClosures'][] = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$array122 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array122);
};
$arguments117 = array();
$arguments117['maxCharacters'] = NULL;
$arguments117['append'] = '&hellip;';
$arguments117['respectWordBoundaries'] = true;
$arguments117['respectHtml'] = true;
$array119 = array (
);$arguments117['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array119);
// Rendering Boolean node
// Rendering Array
$array120 = array();
$array120['0'] = 1;

$expression121 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments117['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression121(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array120)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);
};
$arguments115 = array();
$arguments115['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output114 .= '
					';
return $output114;
};

$output102 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output102 .= '
			';
return $output102;
};
$arguments100 = array();

$output0 .= GeorgRinger\News\ViewHelpers\RemoveMediaTagsViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output0 .= '
		</div>

		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
$output154 = '';

$output154 .= '
			';
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
$arguments155['key'] = 'more-link';

$output154 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext)]);

$output154 .= '
		';
return $output154;
};
$arguments149 = array();
$arguments149['additionalAttributes'] = NULL;
$arguments149['data'] = NULL;
$arguments149['class'] = NULL;
$arguments149['dir'] = NULL;
$arguments149['id'] = NULL;
$arguments149['lang'] = NULL;
$arguments149['style'] = NULL;
$arguments149['title'] = NULL;
$arguments149['accesskey'] = NULL;
$arguments149['tabindex'] = NULL;
$arguments149['onclick'] = NULL;
$arguments149['newsItem'] = NULL;
$arguments149['settings'] = array (
);
$arguments149['uriOnly'] = false;
$arguments149['configuration'] = array (
);
$arguments149['content'] = '';
$arguments149['section'] = NULL;
$array151 = array (
);$arguments149['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array151);
$array152 = array (
);$arguments149['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array152);
$arguments149['class'] = 'btn btn-default btn-read-more';
$array153 = array (
);$arguments149['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array153);

$output0 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output0 .= '
	</div>
</div>
';

return $output0;
}


}
#