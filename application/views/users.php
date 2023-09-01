<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

?>

<table> 
    <tr>  
        <th> ID</th>
        <th> Username</th>
        <th> Email</th>
        <th> Password</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= html_escape($user['id']) ?></td>
            <td><?= html_escape($user['user_name']) ?></td>
            <td><?= html_escape($user['email']) ?></td>
            <td><?= html_escape($user['password']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>