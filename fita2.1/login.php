
<h2>Login</h2>

<form method="POST">
    <input type="text" name="user" placeholder="User">
    <br>
    <input type="password" name="pass" placeholder="password">
    <br>
    <input type="submit"> 
</form>

<?php
$usuaris = ["Pepito"=>"pepita", "juanito"=>"juanita"];
$correcto = 0;
if( isset($_POST["user"]) && isset($_POST["pass"]) ){
    foreach ($usuaris as $key => $value) {
        if ($_POST["user"] == $key && $_POST["pass"] == $value){
            $correcto = 1 ;
            break;
        }else {
            $correcto = 2;   
        }  
    } 
    if ($correcto ==  1 ){
        print "Usuario Correcto";
    }else {
        print "acceso denegado";
    }
}

?>