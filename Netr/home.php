<?php
session_start();
if(!isset($_SESSION['unique_id'])){
          header("location: Login.php");
}
?>
<?php
include "header.php";
?>
<body>
          <div class="wrapper">
                    <section class="users posts">
                             <header class="post-head">
                              <div class="icon">
                                        <a href="user.php" class="back-icon">⬅</a>
                                        <img src="NetrIcon2.png" width="50px" ; height="50px">
                                        <h5>Netr | Home</h5>
                              </div>
                              <div class="navLinks">
                                        <a href="user.php">✉</a>
                                        <a href="fast-view.php">💜</a>
                              </div>
                             
                             </header> 

                             <div class="scrollNav">
                              <div class="nav-text">
                                        <a href="#" id="home">Home</a>
                                        <a href="user.php" id="msg">Message</a>
                                        <a href="profile.php" id="profile">profile</a>
                              </div>
                              <div class="scroll-line">
                                        <div class="child"></div>
                              </div>
                             </div>
                             <div class="post-wrapper">
                           
                           
                           </div>
                    </section>

          </div>
<script src="javascript/home.js"></script>

</body>
</html>