<?php 
session_name("login_supsys"); 
session_start(); 

echo $_SESSION["autentificado"];
echo "<br/>";
echo $_SESSION["s_IdUser"];
echo "<br/>";
echo $_SESSION["s_IdNameUser"];
echo "<br/>";
echo $_SESSION["s_IdPass"];
echo "<br/>";
echo $_SESSION["sTipoUsuario"];
echo "<br/>";
echo $_SESSION["s_IdPersona"];
echo "<br/>";
 ?>