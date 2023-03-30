<?php
include_once "header.php";
?>
<body>
          <div class="wrapper">
                    <section class="form signup">
                              <header>
                                        <img src="NetrIcon2.png" clas="netr-icon" width="50px"; height="50px">
                                        <h5>Netr Connection</h5>
                              </header>
                              <form action="#" enctype="multipart/form-data">
                                        <div class="error-txt"></div>
                                        <div class="name-details">
                                                  <div class="field input FN">
                                                            <label for="">First Name</label>
                                                            <input type="text" placeholder="First name" name="fname" required>
                                                  </div>
                                                  <div class="field input LN">
                                                            <label for="">Last Name</label>
                                                            <input type="text" placeholder="Last name" name="lname" required>
                                                  </div>
                                                  <div class="field input">
                                                            <label for="">Email adress</label>
                                                            <input type="email" placeholder="Enter your email" name="email" required>
                                                  </div>
                                                  <div class="field input">
                                                            <label for="">Password</label>
                                                            <input type="password" id="password" name="password" required placeholder="Enter new password">
                                                            <span id="hide_show_pass" class="hide_show_pass">Show</span>
                                                  </div>
                                                  <div class="field">
                                                            <label for="">Select Image</label>
                                                            <input type="file" name="image" required>
                                                  </div>
                                                  <div class="field button">
                                                            <input type="submit"  value="Continue to chat">
                                                            
                                                  </div>
                                        </div>
                              </form>
                              <div class="link">
                                        Already signed up? <a href="Login.php">Login now</a>
                              </div>
                    </section>

          </div>
<script src="javascript/toggle.js"></script>
<script src="javascript/signup.js"></script>
</body>
</html>