<?php
// 1st way to receive data is through get request

// json_encode gets an array and converts into a string.
$get = json_encode($_GET);

// Now that string, we can save it into a file

file_put_contents('get.txt', $get);


// 2nd way to receive data is through POST request

$post = json_encode($_POST);
file_put_contents('post.txt', $post);

// 3rd and the most common way to to get data is following
// Usually, in real world, we will not be using GET or POST request but
// the above one.

$data = file_get_contents('php://input');
file_put_contents('data_php.txt', $data);
// The reason we are not encoding the data is because it's not in an array, it's already in string

echo "Connected";