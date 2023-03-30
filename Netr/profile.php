
<?php
session_start();
if(!isset($_SESSION['unique_id'])){
          header("location: Login.php");
}
?>
<?php
include_once "header.php";
?>
<body>
          <div class="wrapper">
                    <section class="form signup profile">
                              <header>
                              <?php
                              include_once "php/config.php";
                              $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                              if(mysqli_num_rows($sql) > 0){
                                        $row = mysqli_fetch_assoc($sql);
                              }
                              ?>
                                        <a href="home.php" class="back-icon">⬅</a>
                                        <img src="NetrIcon2.png" clas="netr-icon" width="50px" ; height="50px";>
                                        <h5>Netr Connection</h5>
                              </header>
                              
                              <div class="user-profile">
                                        <span>Profile</span>
                                        <div class="img-container">
                                                  <div class="img">
                                                            <img src="php/images/<?php echo $row['img']?>" alt="">
                                                  </div> 
                                                  <img class='back-img' src="php/images/<?php echo $row['img']?>" alt="">
                                        </div>
                                        <div class="name-box">
                                                  <p><?php echo $row['fname'] . " ". $row['lname']?></p>
                                                  <span>Status: <?php echo $row['status']?></span>
                                        </div>
                                        <div class="profile-btn">
                                                  <button>
                                                            <a href="addPost.php">Add to story</a>
                                                  </button>
                                                  <button>
                                                            <a href="#">Edit profile</a>
                                                  </button>
                                        </div>
                              </div>
                    </section>
          
          </div>
</body>
</html>