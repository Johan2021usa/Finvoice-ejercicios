<h3>Punto 1</h3>
<p>Revisar codigo</p>
<?php 
    /**
     * Nombre: Jairo Johan Lasso Chaucanes
     * Correo: lassojairo@gmail.com
     * Pais/ciudad: Colombia/Pasto.
     * 
     * 1. ¿Que es una API?
     * Api es un proviene del acronimo Application programming interface, esta funciona como un mediador entre el usuario y la base de datos, enviando o trayendo informacion de la base de datos que es requerida por el usuario,
     * desde mi experiencia, existen diferentes tipos de API sin embargo las mas usadas en desarrollo web son las de tipo REST y SOAP, hay que aclarar que estas se diferencian mucho entre si,
     * generalmente para usar una api se debe trabajar con end points o URLS, y consumirla a traves de protocolos o metodos HTTP, en el caso de las API REST los metodos generalmente usados son GET, POST, PUT y DELETE,
     * en mi caso y como ejemplo, se puede consumir una API REST desarrollada con Spring Boot, Java y MySQL haiendo uso de la funcion nativa de JavaScript denominada Fetch, no obstante existen otras alternativas como Axios, JQuery o la mas antigua XMLHttpRequest
     * generalmente la informacion enviada o recuperada de una API Rest se maneja en formato JSON a diferencia de las de tipo SOAP en las cuales se trabajan geberalmente con formado XML. 
     */
?>


<h3>Punto 2</h3>
<p>Revisar codigo</p>
<?php
    /** 
     * 2. ¿Que es DOCTYPE HTML? 
     * El DOCTYPE es la etiqueta inicial que se declara al crear un documento HTML, este tiene la funcion de especificar el tipo de version de HTML, actualmente para HTML5 la esta etiqueta se declara de manera simple,
     * <!DOCTYPE html>, anteriormente para otras versiones de HTML se debian definir otras propiedades a fin de determinar que version de HTML se queria usar un DTD que significa Document type definition,
     * por entonces, como se explico anteriormente en HTML5 la definicion de esta etiqueta no requiere de un DTO.
     * */
?>

<h3>Punto 3</h3>
<?php 
    /**
     * 3. A partir del siguiente listado necesitamos crear una tabla que contenga la información de los empleados de los cuales su índice sea un numero impar. (opcional): Nombre y Apellido deben ir en la misma celda.
     */
    $empleados=[["Nombre"=>"Marcelo", "Apellido"=>"Velez", "Edad"=>25, "Area"=>"Administración", "Correo"=>"marceloVelez@hotmail.com",],
                ["Nombre"=>"Alberto", "Apellido"=>"Unbertini", "Edad"=>36, "Area"=>"RRHH", "Correo"=>"albert.unbert@hotmail.com",],
                ["Nombre"=>"Isidora", "Apellido"=>"Gutierrez", "Edad"=>33, "Area"=>"Desarrollador", "Correo"=>"isi_gutie@gmail.cl",],
                ["Nombre"=>"Sebastian", "Apellido"=>"Jimenez", "Edad"=>21, "Area"=>"No Asignada", "Correo"=>"s.jimenez@gmail.cl",],
                ["Nombre"=>"Manuel", "Apellido"=>"Osorio", "Edad"=>19, "Area"=>"Desarrollador", "Correo"=>"manu007@outlook.com",],
                ["Nombre"=>"Alonso", "Apellido"=>"Villa", "Edad"=>47, "Area"=>"Product Manager", "Correo"=>"alvilla@hotmail.com",]];
?>
<table style='border-style: solid; border-width: 2px;'>
    <tr>
        <th style='border-style: solid; border-width: 2px;'>Nombre y Apellido</th>
        <th style='border-style: solid; border-width: 2px;'>Edad</th>
        <th style='border-style: solid; border-width: 2px;'>Area</th>
        <th style='border-style: solid; border-width: 2px;'>Correo</th>
    </tr>
<?php
    for($i=0;$i<count($empleados);$i++){?>
        <tr style='border-style: solid; border-width: 2px;'>
            <th style='border-style: solid; border-width: 2px;'>
                <?php foreach($empleados[$i] as $property => $val){
                        switch($property){
                            case "Nombre" :echo $val." ";
                                break;
                            case "Apellido":echo $val;
                                break;
                        }
                    }    
                ?>                
            </th>
            <?php foreach($empleados[$i] as $property => $val){
                    switch($property){
                        case "Edad":?><th style='border-style: solid; border-width: 2px;'><?php echo $val?></th><?php
                            break;
                        case "Area":?><th style='border-style: solid; border-width: 2px;'><?php echo $val?></th><?php
                            break;
                        case "Correo":?><th style='border-style: solid; border-width: 2px;'><?php echo $val?></th><?php
                            break;
                    }
                }
            ?>
        </tr>
    <?php
    }
?>
</table>

<h3>Punto 4</h3>
<?php
    /**
     * 4. Dado el siguiente array de objetos obtener los datos de la persona con la mayor edad encontrada.
     */ 
    $bigestAge=0;
    $person=[];
    $personas=array("Juan"=>8, "Pérez"=>15, "Sebastian"=>5, "Hans"=>9, "Gabriel"=>7, "Rocío"=>5);
    $base=0;
    foreach($personas as $property => $age){
        if($age>$bigestAge){
            $bigestAge=$age;
            $person=[$property,$bigestAge];
        }
    }
    echo "<strong>La persona con mayor edad es: </strong>".$person[0]." con ".$person[1]." años";
?>

<h3>Punto 5</h3>
<?php 
    /**
     * 5. Crea una función llamada “cantidad_caracteres” que retorne el número de caracteres de un texto.
     */

    function cantidad_caracteres($algunTexto){
        return strlen($algunTexto);
    }

    $texto = "Hola esta es una prueba a fin de contar los caracteres de un texto, incluyendo los espacios en blanco";
    $cantidadTotal = cantidad_caracteres($texto);
    echo "<strong>La cantidad de caracteres en este texto incluyendo espacios en blanco es: </strong>".$cantidadTotal; 
?>
    