<?php if (!defined('FW')) die('Forbidden');

$manifest = array();

$manifest['name']        = __( 'Blog Posts', 'fw' );
$manifest['slug']        = 'unysonplus-blog-posts';
$manifest['description'] = __( 'This extension adds Blog Posts functionality.', 'fw' );

$manifest['version']     = '1.0.2';
$manifest['display']     = false;
$manifest['standalone']  = true;

// Repository Info
$manifest['github_update'] = 'UnysonPlus/UnysonPlus-Blog-Extension';
$manifest['github_repo']   = 'https://github.com/UnysonPlus/UnysonPlus-Blog-Extension';
$manifest['github_branch'] = 'master';

// Author Info
$manifest['author']     = 'UnysonPlus';
$manifest['author_uri'] = 'https://www.lastimosa.com.ph/unysonplus';

// Meta
$manifest['license']      = 'GPL-2.0-or-later';
$manifest['text_domain']  = 'fw';
$manifest['requires_php'] = '7.4';
$manifest['requires_wp']  = '5.8';
