<?php

class Standard_action_index_277425bd41638795db8a851bf821b63a6f402ad1 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Format\TrimViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
CREATE TABLE ';
$array19 = array (
);
$output18 .= $renderingContext->getVariableProvider()->getByPath('domainObject.databaseTableName', $array19);

$output18 .= ' (';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
	';
$array26 = array (
);
$output25 .= $renderingContext->getVariableProvider()->getByPath('relation.foreignKeyName', $array26);

$output25 .= ' int(11) unsigned DEFAULT \'0\' NOT NULL,';
return $output25;
};
$arguments20 = array();
$arguments20['each'] = NULL;
$arguments20['as'] = NULL;
$arguments20['key'] = NULL;
$arguments20['reverse'] = false;
$arguments20['iteration'] = NULL;
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\ListForeignKeyRelationsViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['domainObject'] = NULL;
$array24 = array (
);$arguments22['domainObject'] = $renderingContext->getVariableProvider()->getByPath('domainObject', $array24);
$arguments20['each'] = EBT\ExtensionBuilder\ViewHelpers\ListForeignKeyRelationsViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);
$arguments20['as'] = 'relation';

$output18 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
	';
$array31 = array (
);
$output30 .= $renderingContext->getVariableProvider()->getByPath('property.sqlDefinition', $array31);
return $output30;
};
$arguments27 = array();
$arguments27['each'] = NULL;
$arguments27['as'] = NULL;
$arguments27['key'] = NULL;
$arguments27['reverse'] = false;
$arguments27['iteration'] = NULL;
$array29 = array (
);$arguments27['each'] = $renderingContext->getVariableProvider()->getByPath('domainObject.properties', $array29);
$arguments27['as'] = 'property';

$output18 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\MappingViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return '
	tx_extbase_type varchar(255) DEFAULT \'\' NOT NULL,';
};
$arguments32 = array();
$arguments32['then'] = NULL;
$arguments32['else'] = NULL;
$arguments32['domainObject'] = NULL;
$arguments32['renderCondition'] = NULL;
$arguments32['renderCondition'] = 'needsTypeField';
$array34 = array (
);$arguments32['domainObject'] = $renderingContext->getVariableProvider()->getByPath('domainObject', $array34);
$arguments32['__thenClosure'] = $renderChildrenClosure33;

$output18 .= EBT\ExtensionBuilder\ViewHelpers\MappingViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output18 .= '
);
';
return $output18;
};
$arguments8 = array();
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array10 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$array13 = array (
);return $renderingContext->getVariableProvider()->getByPath('domainObject.properties', $array13);
};
$arguments11 = array();
$arguments11['subject'] = NULL;
$renderChildrenClosure12 = ($arguments11['subject'] !== null) ? function() use ($arguments11) { return $arguments11['subject']; } : $renderChildrenClosure12;$array10['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);
$array10['1'] = ' > 0 || ';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\DomainObjectChecksViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$arguments14['domainObject'] = NULL;
$arguments14['renderCondition'] = NULL;
$arguments14['renderCondition'] = 'needsTypeField';
$array16 = array (
);$arguments14['domainObject'] = $renderingContext->getVariableProvider()->getByPath('domainObject', $array16);
$arguments14['__thenClosure'] = $renderChildrenClosure15;
$array10['2'] = EBT\ExtensionBuilder\ViewHelpers\DomainObjectChecksViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$expression17 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression17(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)
					),
					$renderingContext
				);
$arguments8['__thenClosure'] = $renderChildrenClosure9;

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
';
return $output7;
};
$arguments4 = array();
$arguments4['each'] = NULL;
$arguments4['as'] = NULL;
$arguments4['key'] = NULL;
$arguments4['reverse'] = false;
$arguments4['iteration'] = NULL;
$array6 = array (
);$arguments4['each'] = $renderingContext->getVariableProvider()->getByPath('extension.domainObjects', $array6);
$arguments4['as'] = 'domainObject';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
';
return $output3;
};
$arguments1 = array();

$output0 .= EBT\ExtensionBuilder\ViewHelpers\Format\TrimViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
   ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\GroupedForViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output68 = '';

$output68 .= '

CREATE TABLE ';
$array69 = array (
);
$output68 .= $renderingContext->getVariableProvider()->getByPath('tableName', $array69);

$output68 .= ' (
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
	';
$array74 = array (
);
$output73 .= $renderingContext->getVariableProvider()->getByPath('relation.foreignKeyName', $array74);

$output73 .= ' int(11) unsigned DEFAULT \'0\' NOT NULL,
';
return $output73;
};
$arguments70 = array();
$arguments70['each'] = NULL;
$arguments70['as'] = NULL;
$arguments70['key'] = NULL;
$arguments70['reverse'] = false;
$arguments70['iteration'] = NULL;
$array72 = array (
);$arguments70['each'] = $renderingContext->getVariableProvider()->getByPath('relationsWithSameForeignTable', $array72);
$arguments70['as'] = 'relation';

$output68 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output68 .= '
);
        ';
return $output68;
};
$arguments66 = array();
$arguments66['if'] = NULL;
return '';
};
$arguments54 = array();
$arguments54['then'] = NULL;
$arguments54['else'] = NULL;
$arguments54['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array63 = array();
$array64 = array (
);$array63['0'] = $renderingContext->getVariableProvider()->getByPath('tableName', $array64);
$array63['1'] = ' == \'sys_file_reference\'';

$expression65 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'sys_file_reference');};
$arguments54['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression65(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array63)
					),
					$renderingContext
				);
$arguments54['__elseClosures'][] = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '

CREATE TABLE ';
$array57 = array (
);
$output56 .= $renderingContext->getVariableProvider()->getByPath('tableName', $array57);

$output56 .= ' (
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
	';
$array62 = array (
);
$output61 .= $renderingContext->getVariableProvider()->getByPath('relation.foreignKeyName', $array62);

$output61 .= ' int(11) unsigned DEFAULT \'0\' NOT NULL,
';
return $output61;
};
$arguments58 = array();
$arguments58['each'] = NULL;
$arguments58['as'] = NULL;
$arguments58['key'] = NULL;
$arguments58['reverse'] = false;
$arguments58['iteration'] = NULL;
$array60 = array (
);$arguments58['each'] = $renderingContext->getVariableProvider()->getByPath('relationsWithSameForeignTable', $array60);
$arguments58['as'] = 'relation';

$output56 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output56 .= '
);
        ';
return $output56;
};
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);
};
$arguments49 = array();
$arguments49['then'] = NULL;
$arguments49['else'] = NULL;
$arguments49['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array51 = array();
$array52 = array (
);$array51['0'] = $renderingContext->getVariableProvider()->getByPath('relation.renderType', $array52);
$array51['1'] = ' == \'inline\'';

$expression53 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'inline');};
$arguments49['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression53(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)
					),
					$renderingContext
				);
$arguments49['__thenClosure'] = $renderChildrenClosure50;

$output48 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output48 .= '
      ';
return $output48;
};
$arguments43 = array();
$arguments43['then'] = NULL;
$arguments43['else'] = NULL;
$arguments43['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array45 = array();
$array46 = array (
);$array45['0'] = $renderingContext->getVariableProvider()->getByPath('tableName', $array46);

$expression47 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments43['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression47(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array45)
					),
					$renderingContext
				);
$arguments43['__thenClosure'] = $renderChildrenClosure44;

$output42 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '
   ';
return $output42;
};
$arguments39 = array();
$arguments39['each'] = NULL;
$arguments39['as'] = NULL;
$arguments39['groupBy'] = NULL;
$arguments39['groupKey'] = 'groupKey';
$array41 = array (
);$arguments39['each'] = $renderingContext->getVariableProvider()->getByPath('domainObject.zeroToManyRelationProperties', $array41);
$arguments39['as'] = 'relationsWithSameForeignTable';
$arguments39['groupBy'] = 'foreignDatabaseTableName';
$arguments39['groupKey'] = 'tableName';

$output38 .= TYPO3Fluid\Fluid\ViewHelpers\GroupedForViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
   ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output80 = '';

$output80 .= '

CREATE TABLE ';
$array81 = array (
);
$output80 .= $renderingContext->getVariableProvider()->getByPath('domainObject.databaseTableName', $array81);

$output80 .= ' (
	categories int(11) unsigned DEFAULT \'0\' NOT NULL,
);
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
);$array77['0'] = $renderingContext->getVariableProvider()->getByPath('domainObject.categorizable', $array78);

$expression79 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments75['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression79(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array77)
					),
					$renderingContext
				);
$arguments75['__thenClosure'] = $renderChildrenClosure76;

$output38 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output38 .= '

   ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '

CREATE TABLE ';
$array92 = array (
);
$output91 .= $renderingContext->getVariableProvider()->getByPath('relation.relationTableName', $array92);

$output91 .= ' (
	uid_local int(11) unsigned DEFAULT \'0\' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT \'0\' NOT NULL,
	sorting int(11) unsigned DEFAULT \'0\' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT \'0\' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
       ';
return $output91;
};
$arguments86 = array();
$arguments86['then'] = NULL;
$arguments86['else'] = NULL;
$arguments86['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array88 = array();
$array89 = array (
);$array88['0'] = $renderingContext->getVariableProvider()->getByPath('relation.useMMTable', $array89);

$expression90 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments86['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression90(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array88)
					),
					$renderingContext
				);
$arguments86['__thenClosure'] = $renderChildrenClosure87;

$output85 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output85 .= '
    ';
return $output85;
};
$arguments82 = array();
$arguments82['each'] = NULL;
$arguments82['as'] = NULL;
$arguments82['key'] = NULL;
$arguments82['reverse'] = false;
$arguments82['iteration'] = NULL;
$array84 = array (
);$arguments82['each'] = $renderingContext->getVariableProvider()->getByPath('domainObject.anyToManyRelationProperties', $array84);
$arguments82['as'] = 'relation';

$output38 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output38 .= '
';
return $output38;
};
$arguments35 = array();
$arguments35['each'] = NULL;
$arguments35['as'] = NULL;
$arguments35['key'] = NULL;
$arguments35['reverse'] = false;
$arguments35['iteration'] = NULL;
$array37 = array (
);$arguments35['each'] = $renderingContext->getVariableProvider()->getByPath('extension.domainObjects', $array37);
$arguments35['as'] = 'domainObject';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#