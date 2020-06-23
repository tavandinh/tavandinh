<header>
    <h1>Task List Manager</h1>
</header>
<main>
    <p><?php print_r($task_list); ?></p>
    <!-- part 1 : the errors -->
    <?php if(count($errors) > 0) : ?>
    <h2>Errors</h2>
    <ul>
        <?php foreach($errors as $error) : ?>
            <li><?php echo htmlspecialchars($error); ?></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>

    <!-- part 2: the tasks -->
    <h2>Tasks</h2>
    <?php if(count($task_list) == 0) :?>
        <p>There are no tasks in the task list.</p>
    <?php else : ?>
        <ul>
            <?php foreach($task_list as $id => $task) : ?>
                <li><?php echo $id + 1 .'. '.htmlspecialchars($task); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <br>

    <!-- part 3: the add form -->
    <h2>Add Task</h2>
    <form action="." method="post">
        <?php foreach ($task_list as $task) : ?>
            <input type="hidden" name="tasklist[]" value="<?php echo htmlspecialchars($task); ?>">
        <?php endforeach; ?>
        <input type="hidden" name="action" value="add">
        <label>Task:</label>
        <input type="text" name="task"><br>
        <label>&nbsp;</label><br>
        <input type="submit" value="Add Task"><br>
    </form>
    <br>

    <!-- part 4: the delete form -->
    <?php if (count($task_list) > 0) : ?>
    <h2>Delete Task</h2>
    <form action="." method="post">
        <?php foreach ($task_list as $task) : ?>
            <input type="hidden" name="tasklist[]" value="<?php echo htmlspecialchars($task); ?>">
        <?php endforeach; ?>
        <input type="hidden" name="action" value="delete">
        <label>Task:</label>
        <select name="taskid">
            <?php foreach( $task_list as $id => $task) : ?>
                <option value="<?php echo $id; ?>">
                    <?php echo htmlspecialchars($task); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br>
        <label>&nbsp;</label>
        <input type="submit" value="Delete_Task">
    </form>
    <?php endif; ?>

    <!-- part 5: the modify form -->
    <?php if (count($task_list) > 0) : ?>
    <h2>Modify Task</h2>
    <form action="." method="post" style="display:<?php if($action == 'modife'){echo 'none';}else{echo 'block';}?>" >
        <?php foreach ($task_list as $task) : ?>
            <input type="hidden" name="tasklist[]" value="<?php echo htmlspecialchars($task); ?>">
        <?php endforeach; ?>
        <input type="hidden" name="action" value="modife">
        <label>Task:</label>
        <select name="taskid">
            <?php foreach( $task_list as $id => $task) : ?>
                <option value="<?php echo $id; ?>">
                    <?php echo htmlspecialchars($task); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br>
        <label>&nbsp;</label>
        <input type="submit" value="Modife_Task">
    </form>

    <form action="." method="post" style="display:<?php if($action == 'modife'){echo 'block';}else{echo 'none';}?>" >
        <?php foreach ($task_list as $task) : ?>
            <input type="hidden" name="tasklist[]" value="<?php echo htmlspecialchars($task); ?>">
        <?php endforeach; ?>
        <label>Task:</label>
        <input type="text" name="task"  value="<?php echo htmlspecialchars($edit_task); ?>"><br>
        <label>&nbsp;</label>
        <input type="hidden" name="taskid" value="<?php echo $task_index;?>">
        <input type="hidden" name="action" value="save">
        <input type="submit" value="Save_Task">
        <button onclick="history.go(-1);">Cancel </button>
    </form>
    <?php endif; ?>

    <!-- part 6: the promote form -->
    <?php if (count($task_list) > 1) : ?>
    <h2>Promote Task</h2>
    <form action="." method="post">
        <?php foreach ($task_list as $task) : ?>
            <input type="hidden" name="tasklist[]" value="<?php echo htmlspecialchars($task); ?>">
        <?php endforeach; ?>
        <input type="hidden" name="action" value="promote">
        <label>Task:</label>
        <select name="taskid">
            <?php foreach( $task_list as $id => $task) : ?>
                <option value="<?php echo $id; ?>">
                    <?php echo htmlspecialchars($task); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br>
        <label>&nbsp;</label>
        <input type="submit" value="Promote_Task">
    </form>
    <?php endif; ?>

     <!-- part 6: the sort form -->
     <?php if (count($task_list) > 1) : ?>
    <h2>Sort Task</h2>
    <form action="." method="post">
        <?php foreach ($task_list as $task) : ?>
            <input type="hidden" name="tasklist[]" value="<?php echo htmlspecialchars($task); ?>">
        <?php endforeach; ?>
        <input type="hidden" name="action" value="sort">
        <label>&nbsp;</label>
        <input type="submit" value="Sort_Task">
    </form>
    <?php endif; ?>
</main>