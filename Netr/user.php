
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
                    <section class="users">
                             <header>
                              <?php
                              include_once "php/config.php";
                              $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                              if(mysqli_num_rows($sql) > 0){
                                        $row = mysqli_fetch_assoc($sql);
                              }
                              ?>
                              <div class="content">
                                        <a href="login.php" class="back-icon">⬅</a>
                                        <img src="php/images/<?php echo $row['img']?>" alt="" srcset="">
                                        <div class="details">
                                                  <span><?php echo $row['fname'] . " ". $row['lname']?></span>
                                                  <p><?php echo $row['status']?></p>
                                        </div>
                              </div>
                              <a href="home.php" class="logout">Home</a>
                             </header> 
                             <div class="search">
                              <span class="text">Select an user to start chat</span>
                              <input type="text" placeholder="Enter name to search...">
                              <button>Search</button>
                             </div>
                             <div class="users-list">
                              
                              
                             </div>
                    </section>

          </div>
<script src="javascript/users.js"></script>
<script src="javascript/hideshow.js"></script>

</body>
</html>