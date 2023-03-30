<?php
include_once "header.php";
?>
<body>
          <div class="wrapper">
                    <section class="post form">
                              <header>
                                        <a href="profile.php" class="back-icon">⬅</a>
                                        <img src="NetrIcon2.png" width="50px"; height="50px">
                                        <h5>Netr Connection</h5>
                              </header>
                              <form action="#" enctype="multipart/form-data">
                              <div class="error-txt"></div>
                              <div class="post-details">
                                        <div class="field input caption">
                                                  <label for="">Caption</label>
                                                  <textarea class="caption-text" id="post-caption" name="caption" required>
                                                            type something..
                                                  </textarea>
                                        </div> 
                                        <div class="field input">
                                                            <label for="">Tags Users</label>
                                                            <input type="text" placeholder="Enter tag" name="tag" required>
                                        </div>
                                        <div class="field input">
                                                  <input type="date" name="time" required>
                                        </div>   
                                        <div class="field">
                                                  <label for="">Select an image to post|| #follows by name</label>
                                                  <input type="file" name="image" required>
                                        </div>
                                        <div class="field button">
                                                  <input type="submit" value="Add Post">
                    
                                        </div>
                              </div>
                              </form>
                    </section>

          </div>
<script src="javascript/Post.js"></script>
</body>
</html>