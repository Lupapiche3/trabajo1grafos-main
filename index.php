
<!DOCTYPE html>
<html lang="es">
<link rel="icon" type="icon/png" href="https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Petersen1_tiny.svg/400px-Petersen1_tiny.svg.png">
<link rel="stylesheet" type="text/css" href="GRAFOS.css">
<title>Grafos</title>

<body>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/vis.min.css">
    <title>Trabajo 1</title>

</head>


  
            <div class="col-4">

            <div style="text-align: center;">

                <form action ="./grafo.php"method ="post" >
                    <fieldset>
                        <legend>Crear Grafo</legend>

                        <label class="form-label">Ingrese cantidad de nodos</label>
                        <input type="number" name ="cantnodo" class="form-control" min="1" max="10" /></input>
                        <label class="form-label">Elija el tipo de grafo</label>
                        <select class="form-select" name="tipografo">
                            <option>simple</option>
                            <option>dirigido</option>
                            <option>etiquetado</option>
                        </select>
                        <!-- <label class="form-label">Ingrese el nombre del Grafo</label>
                        <input type="text" class="form-control" placeholder="Ej: A, B...."></input>-->
                    </fieldset>
                    <button type="submit" class="btn btn-outline-success mt-3 mb-3">Crear Grafo</button>
                </form>
              
                </ul>
            </div>
        </div>
    </div>

    <script src="./js/vis.min.js"></script>
</body>

</html>