<?php

class Standard_action_index_6a7e21aca44967f29ce29f76d98a56bc1460661f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '# EditorConfig is awesome: http://EditorConfig.org

# top-most EditorConfig file
root = true

# Unix-style newlines with a newline ending every file
[*]
charset = utf-8
end_of_line = lf
indent_style = space
indent_size = 4
insert_final_newline = true
trim_trailing_whitespace = true

# TS/JS-Files
[*.';

$output0 .= '{ts,js}';

$output0 .= ']
indent_size = 2

# JSON-Files
[*.json]
indent_style = tab

# ReST-Files
[*.rst]
indent_size = 3
max_line_length = 80

# YAML-Files
[*.';

$output0 .= '{yaml,yml}';

$output0 .= ']
indent_size = 2

# package.json
# .travis.yml
[';

$output0 .= '{package.json,.travis.yml}';

$output0 .= ']
indent_size = 2

# TypoScript
[*.';

$output0 .= '{typoscript,tsconfig}';

$output0 .= ']
indent_size = 2

# XLF-Files
[*.xlf]
indent_style = tab

# SQL-Files
[*.sql]
indent_style = tab
indent_size = 2

# .htaccess
[';

$output0 .= '{_.htaccess,.htaccess}';

$output0 .= ']
indent_style = tab
';

return $output0;
}


}
#