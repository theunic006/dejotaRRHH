<?php

$archivosEntrada = array('CARTA.pdf', 'Certificado.pdf');

// Ruta y nombre del archivo PDF de salida. Ajusta esta ruta según tus necesidades.
$archivoSalida = 'Terminado.pdf';

// Verifica que todos los archivos de entrada existan
foreach ($archivosEntrada as $archivo) {
    if (!file_exists($archivo)) {
        die("El archivo $archivo no existe.");
    }
}

// Comando Ghostscript. Ajusta la ruta según tu instalación.
$gsPath = '"C:\\Program Files\\gs\\gs10.03.0\bin\gswin64c.exe"';
$cmd = "$gsPath -q -dNOPAUSE -dBATCH -sDEVICE=pdfwrite -sOutputFile=\"$archivoSalida\" " . implode(' ', $archivosEntrada);

// Ejecuta el comando
$resultado = shell_exec($cmd);

// Verifica si el archivo de salida se creó correctamente
if (file_exists($archivoSalida)) {
    // Descargar el archivo resultante
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="' . $archivoSalida . '"');
    readfile($archivoSalida);
    
    // Visualizar el PDF en el navegador
    echo "<script>window.open('$archivoSalida', '_blank');</script>";
} else {
    echo 'Hubo un error al unir los archivos PDF.';
}

?>

