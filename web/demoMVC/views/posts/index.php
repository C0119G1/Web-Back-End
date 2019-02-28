<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 22/02/2019
 * Time: 9:21 SA
 */
echo '<ul>';
foreach ($posts as $post){
    echo '<li>
  <a href="index.php?controller=posts&action=showPost&id=' . $post->id . '">' . $post->title . '</a>
    </li>';
}
echo '</ul>';
?>