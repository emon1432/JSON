<?php

if ($_POST['id'] != '' && $_POST['fullname'] != '' && $_POST['age'] != '') {
    if (file_exists('json/test.json')) {
        $current_data = file_get_contents('json/test.json');
        $array_data = json_decode($current_data, true);
        $new_data = array(
            'id' => $_POST['id'],
            'name' => $_POST['fullname'],
            'age' => $_POST['age'],
            'gender' => $_POST['gender'],
            'country' => $_POST['country']
        );
        $array_data[] = $new_data;
        $json_data = json_encode($array_data, JSON_PRETTY_PRINT);
        if (file_put_contents('json/test.json', $json_data)) {
            echo "<h3>Successfully saved data in JSON file!!!</h3>";
        } else {
            echo "<h3>Data can't be saved!!!</h3>";
        }
    }else{
        echo "<h3>JSON file not exits!!!</h3>"; 
    }
} else {
    echo "<h3>All form fields are required!!!</h3>";
}
?>