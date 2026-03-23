<html>
    <body>
        <center>
        <?php
        $n=$_POST["services"];
        $p=$_POST["sname"];
        $i=$_POST["loc"];
        $m=$_POST["scontact"];
        $a=$_POST["email"];
        $b=$_POST["license"];
        $c=$_FILES["image"]["name"];
        $d=$_FILES["documents"]["name"];
        $e=$_POST["username"];
        $f=$_POST["password"];
        if($n=="" || $p=="" || $i=="" || $m=="" || $a=="" || $b=="" || $c=="" || $d=="" || $e=="" || $f==""){
            echo "All fields are required";
        }
        else{
             echo "<script>alert('Registration Successful');
             document.getElementById('myform').reset();
             </script>";
            $con = mysqli_connect("localhost", "root","mj", "ces", 3306);
            $sql="INSERT INTO login(ser,sname,sloc,scon,smail,slic,simg,sdoc,suname,spass) VALUES('$n','$p','$i','$m','$a','$b','$c','$d','$e','$f')";            
            mysqli_query($con,$sql);
            mysqli_close($con);
           # header("Location: index.html");
           
        }
        ?>
    </body>
</html>

