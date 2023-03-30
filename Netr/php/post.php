<?php
        session_start();
        include_once "config.php";
        $caption = mysqli_real_escape_string($conn, $_POST['caption']);
        $tag = mysqli_real_escape_string($conn, $_POST['tag']);
        $time = mysqli_real_escape_string($conn, $_POST['time']);

        if(!empty($caption) && !empty($tag)){
            if(isset($_FILES['image'])){
                $img_name = $_FILES['image']['name'];
                $img_type = $_FILES['image']['type'];
                $tmp_name = $_FILES['image']['tmp_name'];

                                        // EXPLODING IMAGE EXTENSION
                $img_explode = explode('.', $img_name);
                $img_ext = end($img_explode);

                $extensions =['png', 'jpeg', 'jpg'];
                if(in_array($img_ext, $extensions) === true){
                        $time = time();
                        $new_img_name = $time.$img_name;

                        if(move_uploaded_file($tmp_name, "postedImg/".$new_img_name)){
                        
                                
                                $likes = rand(time(), 100000);
                                
                                $random_id = rand(time(), 10000000);
                                $times = time();

                                $sql = mysqli_query($conn, "INSERT INTO postss (caption, img, time, likes, id, comment)
                                VALUES ('{$caption}', '{$new_img_name}','{$times}','{$likes}','{$random_id}','{$tag}')");
                                
                                echo "done";
                                
                        }else{
                        echo "Please select an image file! - jpg,png,jpeg";
                        }
                }else{
                echo "Please select an image file!";  
                }
        }                 
        }
        else{
        echo "All input are required!";
        }
          
?>