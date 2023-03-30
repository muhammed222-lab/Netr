<?php
session_start();
include_once "config.php";
$sql = mysqli_query($conn, " SELECT * FROM postss");
$output = "";

if(mysqli_num_rows($sql) == 1){
          $output .= "No post are available to view";
}
elseif(mysqli_num_rows($sql) > 0){
          while($row = mysqli_fetch_assoc($sql)){
                    $output .='<div class="post-box">
                              <a href="#">
                              <div class="content">
                                       <img src="php/postedImg/'. $row['img'] .'" alt="">
                                        <div class="details">
                                                  <span>
                                                   Muhammed Olayemi
                                                  </span>
                                                  <p>
                                                  <a href="#">'.$row['time'].'</a>
                                                  </p>
                                        </div>
                              </div>
                              <p>20 mins ago</p>
                              </a>
                              <div class="post-object">
                                        <div class="img-box">
                                                   <img src="php/postedImg/'. $row['img'] .'" alt="">
                                        </div>
                                        <div class="post-captions">
                                          '.$row['caption'].'
                                          <a href="#">more</a>
                                        </div>
                                        <div class="bth-actions">
                                        <div class="reactions">
                                        <p>'.$row['likes'].'</p>|
                                        <p>'.$row['comment'].'</p>
                                        </div>
                                        <div class="buttons">
                                               <a href="#">
                                                  <button>Like</button>
                                               </a>   
                                               <a href="#">
                                                  <button>comment</button>
                                               </a>   
                                               <a href="#">
                                                  <button>Save</button>
                                               </a>   
                                        </div>
                                        </div>
                              </div>
                              
          </div>';
          }
}

echo $output;
?>