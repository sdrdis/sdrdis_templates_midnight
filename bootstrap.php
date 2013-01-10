<?php
namespace Sdrdis\Templates\Midnight;

function loadViewConfig()
{
\Config::load('sdrdis_templates_midnight::template', 'template');
$config = \Config::get('template');

return $config;
}
