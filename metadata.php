<?php
/**
 * @TODO LICENCE HERE
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = array(
    'id'          => 'mdmodule',
    'title'       => array(
        'de' => 'Moritz Modul',
        'en' => 'Moritz Module',
    ),
    'description' => array(
        'de' => '<h2>Enorm krankes Modul/h2>',
        'en' => '<h2>Really impressive module</h2>',
    ),
    'thumbnail'   => 'out/pictures/linslin-org-logo.png',
    'version'     => '1.0.0',
    'author'      => 'Moritz Demmer',
    'email'       => 'info@linslin.org',
    'extend'      => array(
    ),
    'controllers'       => array(
        'linslinexamplemodulemain' => \linslin\oxid6ExampleModule\Controller\Admin\MainController::class,
    ),
    'files'       => array(),
    'templates'   => array(
        'main.tpl' => 'linslin/oxid6-example-module/views/admin/main.tpl'
    ),
    'blocks'      => array(),
    'settings'    => array(),
    'events'      => array(),
);
