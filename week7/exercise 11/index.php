<?php

if (isset($_POST['tasklist'])) {
    $task_list = $_POST['tasklist'];
} else {
    $task_list = array();
    
    $task_list[] = 'Write chapter';
    $task_list[] = 'Edit chapter';
    $task_list[] = 'Proofread chapter';
}

$errors = array();

switch( $_POST['action'] ) {
    
    case 'Add Task': // new
        
        $new_task = $_POST['newtask'];
        if (empty($new_task)) {
            $errors[] = 'New task cannot be blank!';
            
        } else {
            
            //$task_list[] = $new_task;
            
            array_push($task_list, $new_task);
        }
        break;
        
    case 'Delete Task': // delete
        
        $task_index = $_POST['taskid'];
        unset($task_list[$task_index]);
        $task_list = array_values($task_list);
        
        break;
    
    case 'Modify Task': // begin edit 
        
        $task_index = $_POST['taskid'];
        $task_to_modify = $task_list[$task_index];
        
        break;
    
    case 'Save Changes': // save edit
        
        $i = $_POST['modifiedtaskid'];
        $modified_task = $_POST['modifiedtask'];
        
        if (empty($modified_task)) {
            $errors[] = 'Modified task cannot be blank!';
            
        } else {
            $task_list[$i] = $modified_task;
            $modified_task = '';
        }
        
        break;
        
    case 'Cancel Changes': // cancel edit 
        
        $modified_task = ''; 
        
        break;
    
    case 'Promote Task': // bump up a task 
        
        $task_index = $_POST['taskid'];
        
        if ($task_index == 0) { // if it's the first one...
            $errors[] = 'You cannot promote the first task!';
            
        } else { // find values of indexes
            
            $task_value = $task_list[$task_index];
            $last_task_value = $task_list[$task_index-1];

            $task_list[$task_index-1] = $task_value; // switch values of indexes
            $task_list[$task_index] = $last_task_value;
            
            break;  
        }
    case 'Sort Tasks': // order them
        
        sort($task_list);
        
        break;
}

include('task_list.php');
?>