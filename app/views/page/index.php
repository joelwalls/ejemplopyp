<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pico y placa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container h-100">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card mt-4">
                    <div class="card-header">
                        Pico y placa
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($error)) {
                            echo '<div class="alert alert-danger">' . $error . '</div>';
                        }

                        if (isset($prediccion)) {
                            echo '<div class="alert alert-info">' . $prediccion . '</div>';
                        }
                        ?>
                        <form action="" method="post">
                            <div class="form-group row">
                                <label for="placa" class="col-md-3 col-form-label">Placa</label>

                                <div class="col-md-9">
                                    <input type="text" name="placa" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fecha" class="col-md-3 col-form-label">Fecha</label>

                                <div class="col-md-9">
                                    <input type="text" name="fecha" class="form-control">
                                    <small id="passwordHelpBlock" class="form-text text-muted">
                                        Formato aaaa-mm-dd
                                    </small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hora" class="col-md-3 col-form-label">Hora</label>

                                <div class="col-md-9">
                                    <input type="text" name="hora" class="form-control">
                                    <small id="passwordHelpBlock" class="form-text text-muted">
                                        Formato hh:mm
                                    </small>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Comprobar</button>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>