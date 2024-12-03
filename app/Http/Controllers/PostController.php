<?php
namespace App\Http\Controllers;

class PostController extends Controller
{
    public function show($name)
    {
        $users = [
            'user1' => 'city1',
            'user2' => 'city2',
            'user3' => 'city3',
            'user4' => 'city4',
            'user5' => 'city5',
        ];

        if (array_key_exists($name, $users)) {
            return 'City: ' . $users[$name];
        } else {
            return 'User not found';
        }
    }
}
?>
