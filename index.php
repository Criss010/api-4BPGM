<?php
// Agregamos los objetos
$DispositivoElectronico = [
    "marca" => "iphone",
    "modelo" => 14,
    "numero de serie" =>23487383847 ,
    "tipo de dispositivo" => "smartphone",
    "sistema operativo" => "iOS",
     "capacidad de alacenamiento" => "128GB",
     "tamaño de pantalla" => 13.5,
      "resolucion de pantalla" => "HD 4K",
     "Procesador" => "A15 con 5G",
     "Memoria RAM" => "6G",
     "Cámara principal" => "48MP",
     "Cámara frontal" => "12 MP",
     "Conectividad" => "wifi 6 y 5G",
     "Puertos" => "Usb-C",
     "Duración de la batería(hora)" => 27,
     "peso(gramos)" => 11.3,
     "Dimensiones" => 6.06,
     "Color" => "NEGRO",
     "Precio(pesos)" => 20000.00,
     "disponibilidad en stock" => 100,
     
     
    
    // Puedes agregar más atributos aquí
];

$AplicacionMovil = [
    "nombre" => "COD mobile",
    "Desarrollador" => "Timi studio",
    "Categoría" => "Accion",
    "Plataforma" => "iOS, ANDROID",
    "Versión" => "1.0.4.3",
    "Tamaño de descarga(GB)" => 3,
    "Calificación(stars)" => 4.6,
    "Número de descargas" => "+10M",
    "Idiomas disponibles" => "ES, y 9 mas",
    "Requisitos del sistema" => "iOS y android con al menos 2 GB de memoria ram",
    "Funciones principales" => "cuenta con servidores multijugador, y distintos modo de juego",
    "Fecha de lanzamiento" => "1 de octubre de 2019",
    "Última actualización" => "febrero",
    "Compatibilidad con dispositivos" => "varios dispositivos",
    "In-app purchases" => "si tiene",
    "Publicidad integrada" => "si tiene",
    "Comentarios de usuarios" => "si tiene",
    "Reseñas de expertos" => "si tiene",
    "Precios de las compras dentro de la aplicación" => "99 - 2000",
    "Enlaces a redes sociales del desarrollador" => "@callofdutymobilelatam",
   
    // Puedes agregar más atributos aquí
];

$ProductoTecnologico = [
    "nombre" => "airpods",
    "Marca" => "Apple",
    "Tipo" => "hardware",
    "Descripción" => "dispositivos de audio para escuchar de manera inalambrica",
    "Precio(pesos)" => 2000,
    "Disponibilidad en stock" => 200,
    "Fecha de lanzamiento" => "Marzo 2021",
    "Compatibilidad con sistemas operativos" => "si",
    "Especificaciones técnicas" => "sensores opticos, deteccion de voz y de movimiento etc.",
    "Dimensiones" => "3.09 x 6.06 x 2.4cm",
    "peso(g)" => 5.4,
    "Color" => "blancos",
    "Material de fabricación" => "aluminio, estaño y tierras raras.",
    "Garantía" => "1 año",
    "Contenido del paquete" => "una caja y sus respectivos auriculares",
    "Valoraciones de usuarios" => "las llamadas se escuchan perfectamente y el alcance es muuy bueno",
    "Reseñas de expertos" => "recomendado, son exelentes en su labor",
    "Fotografías del producto" => "si hay",
    "certificado y aprobado" => "si",
    "Enlaces a manuales de usuario" => "https://www.apple.com/mx/store?afid=p238%7CAuuILfqP-dc_mtid_1870765e38482_pcrid_77721937565512_pgrid_2052530177_pntwk_o_pchan__pexid__&cid=aos-mx-kwbi-brand--slid---product-",
    
    // Puedes agregar más atributos aquí
];

$RedSocial = [
    "nombre" => "instagram",
    "Fundador" => "Kevin systrom",
    "Fecha de fundación" => "6 oct 2010",
    "Usuarios activos" => "si",
    "Tipo de plataforma" => "red social",
    "Funciones principales" => "mensajes, publicaciones e historias",
    "Privacidad y seguridad" => "si cumple con las politicas",
    "Interfaz de usuario" => "casita, lupa, icono de video,etc.",
    "Monetización" => "publicidad y patrocinios",
    "Integraciones con otras plataformas" => "si, canva, metricool, etc",
    "Valoraciones de usuarios" => "si cuenta con eso",
    "Reseñas de expertos" => "exelente forma de hacer publicidad por medio de las redes",
    "Actualizaciones recientes" => "hace una semana",
    "Políticas de uso" => "si, cumple con ellas",
    "Contenido generado por el usuario" => "fotos, videos y reels",
    "Estadísticas de uso(millones)" => 500,
    "Tendencias actuales" => "subir stories e intentar tener muchos seguidores",
    "tamaño de descarga(mb)" => 743,
    "valoracion (stars)" => 4.8,
    "top en applipaciones sociales" => 3,
    
    // Puedes agregar más atributos aquí
];

// Creamos una lista de objetos en un arreglo
$tecnologia = [
    $DispositivoElectronico,
    $AplicacionMovil,
    $ProductoTecnologico,
    $RedSocial
];
 echo json_encode($tecnologia);
?>
