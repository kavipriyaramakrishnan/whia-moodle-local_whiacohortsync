<?php
/**
 * WHIA - Cohortsync
 *
 * Scheduled task Definition
 *
 * @package   local_whiacohortsync
 * @author    Priya Ramakrishnan <priya@pukunui.com>, Pukunui
 * @copyright 2016 onwards, Pukunui
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();

$tasks = array(
             array(
                 'classname' => 'local_whiacohortsync\task\cohortsynctask',
                 'blocking'  => 0,
                 'minute'    => '15',
                 'hour'      => '0',
                 'day'       => '*',
                 'dayofweek' => '*',
                 'month'     => '*'
             )
         );
