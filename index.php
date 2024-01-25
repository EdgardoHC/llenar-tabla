<!doctype html>
<html lang="es-SV">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="cargar una tabla con bootstrap table">
        <meta name="author" content="Edgard and codeatr contributors">
        <meta property="og:url" content="https://codeatr.dev">
        <title>Cargar datos una tabla</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.2/dist/bootstrap-table.min.css" rel="stylesheet">
    </head>
    <body>
        <main>
            <section class="py-5 text-center container">
                <div class="container">
                    <div class="row py-lg-5">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-10">
                            <h1>Cargar datos a una tabla con Bootstrap Table, Jquery, PHP y MySQL</h1>
                            <table id="table" class="table table-striped"
                                   data-toggle="table"
                                   data-search="true"
                                   data-pagination="true"
                                   >
                                <thead>     
                                    <tr>
                                        <th data-field="Code" data-sortable="true">Código</th>
                                        <th data-field="Name" data-sortable="true">Nombre</th>
                                        <th data-field="Continent" data-sortable="true">Continente</th>
                                        <th data-field="Region" data-sortable="true">Región</th>
                                        <th data-field="SurfaceArea" data-sortable="true">Superficie</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="py-5 text-center text-body-secondary bg-body-tertiary">
            <p>Hecho en <a href="https://codeatr.dev/">codeatr</a> por Edgard.</p>
            <p class="mb-0">
                <a href="#">Subir</a>
            </p>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.2/dist/bootstrap-table.min.js"></script>
        <script src="js/index.js" type="text/javascript"></script>
    </body>
</html>