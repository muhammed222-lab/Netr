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
                    <section class="users fastStatus">
                             <header>
                                <a href="home.php" class="back-icon">⬅</a>
                                 <img src="img.jpg" alt="">
                                 <div class="userInfo">
                                        <span>Muhammed Olayemi</span>
                                        <span>07/02/44</span>
                                 </div>
                             </header>
                     <div class="reel-flex">
                              

                              
                              
                              

                              </div>
                     
                    <div class="buttons">
                              <a href="addPost.php"><button>Add reel</button></a>
                              <a href="addPost.php"><button>Add post</button></a>
                              <a href="home.php"><button>Home</button></a>
                    </div>
                    </section>

          </div>
<script src="javascript/fast-view.js"></script>


</body>
</html>