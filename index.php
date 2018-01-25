<?php
/**
 * WHIA - Cohortsync
 *
 * Main landing page
 *
 * @package   local_whiacohortsync
 * @author    Priya Ramakrishnan <priya@pukunui.com>, Pukunui
 * @copyright 2016 onwards, Pukunui
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
require_once('../../config.php');
require($CFG->dirroot.'/local/whiacohortsync/locallib.php');

// Require login.
require_login();

$strtitle = get_string('pluginname', 'local_whiacohortsync');
$systemcontext = context_system::instance();
$url = new moodle_url('/local/whiacohortsync/index.php');

// Require Capability.
require_capability('local/whiacohortsync:synccohorts', $systemcontext);

local_whiacohortsync_cohortsynctask();
