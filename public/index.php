<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billetautomat</title>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/slate/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-idNH3UIOiZbCf8jxqu4iExnH34y5UovfW/Mg8T5WfNvoJolDvknoNqR69V2OexgF" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/f854bd1b3c.js" crossorigin="anonymous"></script>
 
</head>

<body>

    <main>
        <div class="container-fluid">
            <div class="row">
                <?php
            //Views will appear here
            require_once('../app/init.php');
            $app = new App;
            ?>
            </div>
        </div>

    </main>
</body>

</html>