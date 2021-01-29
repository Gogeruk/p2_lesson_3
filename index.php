
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <title>Color Mixer</title>
    </head>
    <body>
        <div class="m-3" style="border: solid red; border-width: 20px;">
            <h1 class="m-3">Color Mixer</h1>
            <div class="row m-6 container">
                <form id="form" action="index.php" class="form-inline">
                    <p id="dis_col1" class="col-12">Color One</p>
                    <label for="red1" class="sr-only"> Red: </label>
                    <input onkeyup="display()" style="width: 85px;" type="text" class="input-small" id="red1" name="red1" placeholder="0-255">
                    <label for="green1" class="sr-only"> Green: </label>
                    <input onkeyup="display()"  style="width: 85px;" type="text" class="input-small" id="green1" name="green1" placeholder="0-255">
                    <label for="blue1" class="sr-only"> Blue: </label>
                    <input onkeyup="display()"  style="width: 85px;" type="text" class="input-small" id="blue1" name="blue1" placeholder="0-255">
                    <p id="dis_col2" class="col-12">Color Two</p>
                    <label for="red2" class="sr-only"> Red: </label>
                    <input onkeyup="display()"  style="width: 85px;" type="text" class="input-small" id="red2" name="red2" placeholder="0-255">
                    <label for="green2" class="sr-only"> Green: </label>
                    <input onkeyup="display()"  style="width: 85px;" type="text" class="input-small" id="green2" name="green2" placeholder="0-255">
                    <label for="blue2" class="sr-only"> Blue: </label>
                    <input onkeyup="display()"  style="width: 85px;" type="text" class="input-small" id="blue2" name="blue2" placeholder="0-255">
                    <div class="m-12">
                        <button onclick="into_array()" type="button" name="button" class="btn btn-danger m-3">MIX THEM</button>
                    </div>
                </form>
                <div class="container m-3">
                    <button onclick="ran_col()" type="button"  name="button_ran" class="btn btn-danger mb-3">RANDOM COLOR</button>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="diplay_as_goes.js"></script>
        <script type="text/javascript" src="data_transfer_show.js"></script>
        <script type="text/javascript" src="random_col.js"></script>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>
