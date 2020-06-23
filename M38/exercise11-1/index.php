<?php 
    //get tasklist array from POST
    $task_list = filter_input(INPUT_POST,'tasklist',FILTER_DEFAULT,FILTER_REQUIRE_ARRAY);
    if($task_list == NULL){
        $task_list = array();
    }

    //get action variable from POST
    $action = filter_input(INPUT_POST,'action');

    //initialize error messages array
    $errors = array();

    //process
    switch($action){
        case 'add':
            $new_task = filter_input(INPUT_POST,'task');
            if(empty($new_task)){
                $errors[] = 'The new task cannot be empty.';
            }else{
                // $task_list[] = $new_task;
                array_push($task_list,$new_task);
            }
            break;
        case 'delete':
            $task_index = filter_input(INPUT_POST,'taskid',FILTER_VALIDATE_INT);
            if($task_index === NULL OR $task_index === FALSE){
                $errors[] = 'The task cannot be deleted.';
            }else{
                unset($task_list[$task_index]);
                $task_list = array_values($task_list);
            }
            break;
        case 'modife':
            $task_index = filter_input(INPUT_POST,'taskid',FILTER_VALIDATE_INT);
            if($task_index === NULL OR $task_index === FALSE){
                $errors[] = 'The task cannot be deleted.';
            }else{
                $edit_task = $task_list[$task_index];
            }
            break;
        case 'save':
            $edit_task = filter_input(INPUT_POST,'task');
            $task_index = filter_input(INPUT_POST,'taskid',FILTER_VALIDATE_INT);
            if(empty($edit_task)){
                $errors[] = 'The modife task cannot be empty.';
            }else{
                // $task_list[] = $new_task;
                $task_list[$task_index] = $edit_task;
            }
            break;
        case 'promote':
            $task_index = filter_input(INPUT_POST,'taskid',FILTER_VALIDATE_INT);
            if($task_index === NULL OR $task_index === FALSE){
                $errors[] = 'The task cannot be promote.';
            }elseif($task_index == 0){
                $errors[] = 'First task cannot be promote.';
            }else{
                $task_tmp = $task_list[$task_index];
                $task_list[$task_index] =  $task_list[$task_index-1];
                $task_list[$task_index-1] = $task_tmp;
            }
            break;
        case 'sort':
            sort($task_list);
            break;
        }
    include('task_list.php');
?>