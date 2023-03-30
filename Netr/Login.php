<?php
include_once "header.php";
?>
<body>
          <div class="wrapper">
                    <section class="form login">
                              <header>
                                        <img src="NetrIcon2.png" clas="netr-icon" width="50px"; height="50px">
                                        <h5>Netr Connection</h5>
                              </header>
                              <form action="#">
                                        <div class="error-txt"></div>
                                        <div class="name-details">
                                                  <div class="field input">
                                                            <label for="">Email adress</label>
                                                            <input type="email" placeholder="Enter your email" name="email" required>
                                                  </div>
                                                  <div class="field input">
                                                            <label for="">Password</label>
                                                            <input type="password" id="password" placeholder="Enter new password" name="password">
                                                            <span id="hide_show_pass" class="hide_show_pass">Show</span>
                                                  </div>
                                                  
                                                  <div class="field button">
                                                            <input type="submit"  value="Continue to chat">
                                                  </div>
                                        </div>
                              </form>
                              <div class="link">
                                        Not yet signed up? <a href="signup.php">Signup now</a>
                              </div>
                    </section>

          </div>

<script src="javascript/toggle.js"></script>
<script src="javascript/login.js"></script>
</body>
</html>