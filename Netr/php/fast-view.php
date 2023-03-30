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
                    $output .='<div class="reels-container">
                                        <div class="reel">
                                                  <img src="php/postedImg/'. $row['img'] .'" alt="">
                                        </div>

                                        <div class="front-data">
                                                  <div class="roll-line"></div>
                                                  <div class="act-btns">
                                                            <a href="#">122k💝</a>
                                                            <a href="#">123🙍🏼‍♂️</a>
                                                            <a href="#">344🔈</a>
                                                  </div>
                                                  <div class="reel-caption">
                                                             '.$row['caption'].'
                                                  </div>
                                                  <div class="comment-box">
                                                            <form action="#">
                                                                      <input type="text" class="commentInput" name="comment" placeholder="comment..">
                                                                      <input type="submit" class="commentSubmit" value="Send">
                                                            </form>
                                                  
                                                  </div>
                                        </div>

                                       
                             
                              </div>';
          }
}

echo $output;
?>