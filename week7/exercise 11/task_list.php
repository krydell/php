<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Task List Manager</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <div id="page">
    <div id="header">
        <h1>Task List Manager</h1>
    </div>
    <div id="main">


    <?php if (count($errors) > 0) : ?>
    <h2>Errors:</h2>
    <ul>
        <?php foreach($errors as $error) : ?>
            <li><?php echo $error; ?></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>


    <h2>Tasks:</h2>
    <?php if (count($task_list) == 0) : ?>
        <p>There are no tasks in the task list.</p>
    <?php else: ?>
        <ul>
        <?php foreach( $task_list as $id => $task ) : ?>
            <li><?php echo $id + 1 . '. ' . $task; ?></li>
        <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <br />


    <h2>Add Task:</h2>
    <form action="." method="post" >
        <?php foreach( $task_list as $task ) : ?>
          <input type="hidden" name="tasklist[]" value="<?php echo $task; ?>"/>
        <?php endforeach; ?>
        <label>Task:</label>
        <input type="text" name="newtask" id="newtask"/> <br />
        <label>&nbsp;</label>
        <input type="submit" name="action" value="Add Task"/>
    </form>
    <br />


    <?php if (count($task_list) > 0 && empty($task_to_modify)) : ?>
    <h2>Select Task:</h2>
    <form action="." method="post" >
        <?php foreach( $task_list as $task ) : ?>
          <input type="hidden" name="tasklist[]" value="<?php echo $task; ?>"/>
        <?php endforeach; ?>
        <label>Task:</label>
        <select name="taskid">
            <?php foreach( $task_list as $id => $task ) : ?>
                <option value="<?php echo $id; ?>">
                    <?php echo $task; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br />
        <label>&nbsp;</label>
        <input type="submit" name="action" value="Modify Task"/>
        <input type="submit" name="action" value="Promote Task"/>
        <input type="submit" name="action" value="Delete Task"/>
        
        <br />
        <label>&nbsp;</label>
        <input type="submit" name="action" value="Sort Tasks"/>
    </form>
    <?php endif; ?>


    <?php if (!empty($task_to_modify)) : ?>
    <h2>Task to Modify:</h2>
    <form action="." method="post" >
        <?php foreach( $task_list as $task ) : ?>
          <input type="hidden" name="tasklist[]" value="<?php echo $task; ?>"/>
        <?php endforeach; ?>
        <label>Task:</label>
        <input type="hidden" name="modifiedtaskid" value="<?php echo $task_index; ?>" />
        <input type="text" name="modifiedtask" value="<?php echo $task_to_modify; ?>" /><br />
        <label>&nbsp;</label>
        <input type="submit" name="action" value="Save Changes"/>
        <input type="submit" name="action" value="Cancel Changes"/>
    </form>
    <?php endif; ?>

    </div>
    </div>
</body>
</html>