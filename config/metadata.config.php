<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

return array(
    'name'    => 'Midnight theme',
    'version' => '0.2',
    'provider' => array(
        'name' => 'sdrdis',
    ),
    'namespace' => 'Sdrdis\Templates\Midnight',
    'launchers' => array(
    ),
    'enhancers' => array(
    ),
    'templates' => array(
        'sdrdis_templates_midnight::top_menu' => array(
            'file' => 'sdrdis_templates_midnight::top_menu',
            'title' => 'Midnight template with a top menu',
            'cols' => 1,
            'rows' => 1,
            'layout' => array(
                'content' => '0,0,1,1',
            ),
            'module' => '',
        )
    ),
);
