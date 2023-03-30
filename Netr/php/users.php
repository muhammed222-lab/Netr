<?php
session_start();
include_once "config.php";
include_once "user.php";
$sql = mysqli_query($conn, " SELECT * FROM users");
$output = "";

if(mysqli_num_rows($sql) == 1){
          $output .= "No user are available to chat";
}
elseif(mysqli_num_rows($sql) > 0){
          while($row = mysqli_fetch_assoc($sql)){
                    $sql2 = "SELECT * FROM messagess WHERE (incoming_msg_id = {$row['unique_id']}
                    OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id}
                    OR outgoing_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
          $query2 = mysqli_query($conn, $sql2);
          $row2 = mysqli_fetch_assoc($query2);
          if(mysqli_num_rows($query2) > 0){
                    $result = $row2['msg'];
          }else{
                    $result = "No chat initiated yet";
          }

          (strlen($result) > 28) ? $msg = substr($result, 0, 28).'...' : $msg = $result;
          ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "you: " : $you = "";


                    $output .='<a href="chat.php?user_id='.$row['unique_id'].'">
                                        <div class="content">
                                                  <img src="php/images/'. $row['img'] .'" alt="">
                                                  <div class="details">
                                                            <span class="name">'.$row['fname'] . " ". $row['lname'].'</span>
                                                            <p class="message">'.$you . $msg.'</p>
                                                  </div>
                                        </div>
                                        <div class="status-dot">✔</div>
                              </a>';
          }
}

echo $output;
?>