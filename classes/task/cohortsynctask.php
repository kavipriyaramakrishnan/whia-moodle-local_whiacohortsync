<?php
/**
 * WHIA - Cohortsync
 *
 * Class definition for schedule task
 *
 * @package   local_whiacohortsync
 * @author    Priya Ramakrishnan <priya@pukunui.com>, Pukunui
 * @copyright 2016 onwards, Pukunui
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace local_whiacohortsync\task;

require_once($CFG->dirroot.'/local/whiacohortsync/locallib.php');

/**
 * Extend core scheduled task
 */
class cohortsynctask extends \core\task\scheduled_task {
    /**
     * Return name of the Task
     * 
     * @return string
     */
    public function get_name() {
        return get_string('pluginname', 'local_whiacohortsync');
    }
    
    /**
     * Perform the task
     */
    public function execute() {
        local_whiacohortsync_cohortsynctask('auto');
    }
}
