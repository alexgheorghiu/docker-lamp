<?php

$connect = mysqli_connect(
    'db',    
    'lamp_docker',
    'password',
    'lamp_docker'
);

$query = "SELECT * FROM blog";
$r = mysqli_query($connect, $query);

while($record = mysqli_fetch_assoc($r)){
    printf('<h2>%s</h2>', $record['title']);
    printf('<p>%s</p>', $record['content']);
    printf('Posted%s</p>', $record['date']);
    print('<hr/>');
}
