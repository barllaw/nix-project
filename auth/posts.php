<?php head('Home page');

$arr = [
    'Post One',
    'Post Two',
    'Post Three',
    'Post Four',
    'Post Five',
];

$filename = 'auth/array.txt';

$data = json_encode($arr);
file_put_contents($filename, $data);

?>

    <h2>Posts</h2>

<div class="posts-wrap" style="width: 50%; margin: auto; text-align:left;">
<?php

$data = file_get_contents($filename);
$arr_file = json_decode($data, TRUE);

//var_dump($arr_file);

    foreach ($arr_file as $key => $value){
        echo '<p>'.($key + 1).'. '.$value.'</p>';
    }

?>
</div>


<?php footer(); ?>