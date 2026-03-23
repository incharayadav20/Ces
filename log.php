<html>
    <body>
        <center>
        <?php
        $n=$_POST["username"];
        $p=$_POST["password"];
        if($n==""){
            echo "username is empty";
        }
        else if($p==""){
            echo "password is empty";
        }
        else if($n=="jhp" && $p=="1234"){
            echo "login successful";
            header("Location: home.html");
        }
        else{       
            echo "login failed";
        }
        ?>
    </body> 
</html>