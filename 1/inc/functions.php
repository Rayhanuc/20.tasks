<?php

define('DB_NAME', "D:/xampp/htdocs/php7_classes/8.2/data/db.txt");

function seed(){
    $data = array(
        array(
            'id' => 1,
            'fname' => 'Kamal',
            'lname' => 'Ahmed',
            'roll' => '11'
        ),
        array(
            'id' => 2,
            'fname' => 'Jamal',
            'lname' => 'Ahmed',
            'roll' => '12'
        ),
        array(
            'id' => 3,
            'fname' => 'Sharmin',
            'lname' => 'Ahmed',
            'roll' => '13'
        ),
        array(
            'id' => 4,
            'fname' => 'Kuddos',
            'lname' => 'Ahmed',
            'roll' => '9'
        ),
        array(
            'id' => 5,
            'fname' => 'Maliha',
            'lname' => 'Chopda',
            'roll' => '8'
        ),
        array(
            'id' => 6,
            'fname' => 'Shojol',
            'lname' => 'Das',
            'roll' => '14'
        ),
        array(
            'id' => 7,
            'fname' => 'Nikhil',
            'lname' => 'Chandra',
            'roll' => '8'
        ),
        array(
            'id' => 8,
            'fname' => 'John',
            'lname' => 'Rosario',
            'roll' => '7'
        ),
        array(
            'id' => 9,
            'fname' => 'Stib',
            'lname' => 'Clark',
            'roll' => '7'
        ),
    );

    $serializedData = serialize($data);
    file_put_contents(DB_NAME, $serializedData, LOCK_EX);
}


function generateReport(){
    $sirialziedData = file_get_contents(DB_NAME);
    $students = unserialize($sirialziedData);
    ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Roll</th>
            <th width="25%">Action</th>
        </tr>
        <?php
        foreach($students as $student){
            ?>
            <tr>
                <td><?php printf('%s %s', $student['fname'],$student['lname']); ?></td>
                <td><?php printf('%s', $student['roll']); ?></td>
                <td><?php printf('<a style="color:green; font-weight: 700" href="index.php?task=edit&id=%s">Edit</a> | <a style="color:red; font-weight: 700" href="index.php?task=delete&id=%s">Delete</a>', $student['id'], $student['id']); ?></td>
            </tr>
            <!-- http://localhost/php7_classes/8.2/index.php?task=report -->

            <?php
        }
        ?>
    </table>
    <?php
}