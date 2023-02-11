<?php

$assignTask = function($task, $staffMember) {
    // Add the task to the staff member's task list
    addTaskToDB($task, $staffMember);

    // Notify the staff member of the new task
    notifyStaffMember($staffMember, $task);
};

$trackTaskProgress = function($task) {
    // Check the status of the task
    $taskStatus = getTaskStatusFromDB($task);

    // Update the task status in the database
    updateTaskStatusInDB($task, $taskStatus);

    return $taskStatus;
};

