<?php
$xpdo_meta_map['MediamanagerCategories']= array (
  'package' => 'mediamanager',
  'version' => NULL,
  'table' => 'mediamanager_categories',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'parent_id' => 0,
    'name' => '',
    'rank' => 0,
  ),
  'fieldMeta' => 
  array (
    'parent_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '50',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'rank' => 
    array (
      'dbtype' => 'mediumint',
      'precision' => '6',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'icon' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '3',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'is_deleted' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'attributes' => 'unsigned',
      'phptype' => 'boolean',
      'null' => false,
      'default' => 0,
    ),
  ),
  'composites' => 
  array (
    'CategoriesExcludes' => 
    array (
      'class' => 'MediamanagerCategoriesExcludes',
      'local' => 'id',
      'foreign' => 'mediamanager_categories_id',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
    'Files' => 
    array (
      'class' => 'MediamanagerFilesCategories',
      'local' => 'id',
      'foreign' => 'mediamanager_categories_id',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
);
