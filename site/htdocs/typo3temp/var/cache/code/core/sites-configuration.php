<?php
return array (
  'projektseite' => 
  array (
    'base' => '/',
    'languages' => 
    array (
      0 => 
      array (
        'title' => 'Deutsch',
        'enabled' => true,
        'languageId' => 0,
        'base' => '/',
        'typo3Language' => 'de',
        'locale' => 'de_DE.UTF-8',
        'iso-639-1' => 'de',
        'navigationTitle' => '',
        'hreflang' => '',
        'direction' => '',
        'flag' => 'de',
        'websiteTitle' => 'Projektseite',
      ),
    ),
    'rootPageId' => 1,
    'websiteTitle' => 'Projektseite',
    'routeEnhancers' => 
    array (
      'News' => 
      array (
        'type' => 'Extbase',
        'limitToPages' => 
        array (
          0 => 2,
          1 => 3,
          2 => 5,
          3 => 6,
          4 => 9,
          5 => 59,
          6 => 60,
          7 => 61,
          8 => 62,
        ),
        'extension' => 'News',
        'plugin' => 'Pi1',
        'routes' => 
        array (
          0 => 
          array (
            'routePath' => '/page-{page}',
            '_controller' => 'News::list',
            '_arguments' => 
            array (
              'page' => '@widget_0/currentPage',
            ),
          ),
          1 => 
          array (
            'routePath' => '/{news-title}',
            '_controller' => 'News::detail',
            '_arguments' => 
            array (
              'news-title' => 'news',
            ),
          ),
        ),
        'defaultController' => 'News::list',
        'defaults' => 
        array (
          'page' => '0',
        ),
        'aspects' => 
        array (
          'news-title' => 
          array (
            'type' => 'PersistedAliasMapper',
            'tableName' => 'tx_news_domain_model_news',
            'routeFieldName' => 'path_segment',
          ),
          'page' => 
          array (
            'type' => 'StaticRangeMapper',
            'start' => '1',
            'end' => '100',
          ),
        ),
      ),
      'PageTypeSuffix' => 
      array (
        'type' => 'PageType',
        'map' => 
        array (
          'feed.xml' => 9818,
        ),
      ),
    ),
  ),
);
#