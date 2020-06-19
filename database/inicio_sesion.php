<?php
    include('conexion.php');
    #session_start();

    

    if (isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = $conexion->prepare("SELECT*FROM Usuario WHERE User=:username");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->execute();

        $result = $query->fetch(PDO::FETCH_ASSOC);

        if(!$result){
            echo "<p>El usuario y/o la contraseña estan mal</p>";
        }
        else{
            if(password_verify($password, $result['Pass'])){
                session_start();
                $_SESSION['User'] = $username;
                header('location:../view/index.php');
            }
            else{
                echo "<p>El usuario y/o la contraseña estan mal</p>";
            }
        }
    
    
    
    
    
    }



    


?>