<?php
    header('Content-Type: text/html; charset=UTF8');
    echo "<pre>"; print_r($_REQUEST); echo"</pre>";
    echo "<br/>O valor recibido do campo nome completo é: ".$_REQUEST["nomeCompleto"];
    echo "<br/>O valor recibido do campo nome de usuario é: ".$_REQUEST["nomeUsr"];
    echo "<br/>O valor recibido do campo contrasinal é: ".$_REQUEST["contrasinal"];
    echo "<br/>O valor recibido do campo idade é: ".$_REQUEST["idade"];
    echo "<br/>O valor recibido do campo data nacemento é: ".$_REQUEST["dNac"];
    echo "<br/>O valor recibido do campo email é: ".$_REQUEST["email"];
    echo "<br/>O valor recibido do campo URL da páxina persoal é: ".$_REQUEST["url"];
    echo "<br/>O valor recibido do campo IP é: ".$_REQUEST["ip"];
    echo "<br/>O valor recibido do campo descrición dos hobbies é: ".$_REQUEST["hobbies"];
    echo "<br/>O valor recibido do campo recibir información é: ".$_REQUEST["rcbInfo"];
    echo "<br/>O valor recibido do campo sexo é: ".$_REQUEST["sexo"];
    echo "</br>Os valores recibidos do menú linguas estranxeiras son: <pre>";
    print_r($_REQUEST["linguasEs"]);
    echo "</pre>";
    echo "<br/>O nome e o tamaño do arquivo recibido no campo currículo son: ".$_FILES["curriculo"] ["name"]." e " .$_FILES["curriculo"]["size"]." bytes";
    move_uploaded_file($_FILES["curriculo"]["tmp_name"], "subi-dos/".$_FILES["curriculo"]["name"]);




?>