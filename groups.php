<?php
/**
 * THIS IS AN EXAMPLE
 * ----------------------------------------------------------------
 *
 * This is an example of how to use api/groups
 * Documentation url: https://docs.hellodialog.dev/v1/#tag/Groups-operations
 *
 */

use Czim\HelloDialog\Contracts\groups\Group;
use Czim\HelloDialog\Handlers\GroupsHandler;
require_once('vendor/autoload.php');
require_once('src/config/hellodialog.php');

$groupsHandler = new GroupsHandler();

// Get all groups
try {
    $groups = $groupsHandler->getGroups();
    //print_r($groups);
} catch (Exception $e) {
    print_r($e);
}

// Get a single group
try {
    $groups = $groupsHandler->getGroup(1);
    //print_r($groups);
} catch (Exception $e) {
    print_r($e);
}

// Post a group
try {
    $group = new Group();
    $group->name = 'Group for testing';
    $group->visible_name = 'Test Group';
    $group->description = 'A short description';
    $group->is_private = false;
    //$result = $groupsHandler->createGroup($group);
    //print_r($result);
} catch (Exception $e) {
    print_r($e);
}