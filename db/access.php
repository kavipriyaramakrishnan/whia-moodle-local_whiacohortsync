<?php
/**
 * WHIA - Cohortsync
 *
 * Plugin Capabilities 
 *
 * @package   local_whiacohortsync
 * @author    Priya Ramakrishnan <priya@pukunui.com>, Pukunui
 * @copyright 2016 onwards, Pukunui
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$capabilities = array(
   'local/whiacohortsync:synccohorts' => array(
        'riskbitmask' => RISK_DATALOSS,
        'captype'     => 'read',
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes'  => array(
            'manager'   => CAP_ALLOW,
             )
        ),
);
