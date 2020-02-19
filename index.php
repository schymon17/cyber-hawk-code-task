<?php
    // Max number of the items - user can change that
    $max = 100;
    $x = 1;

    function checkNumber($number) {
        $output = $number;
        $type = 'badge-primary';
        $tooltip = '';
        if ($number % 3 == 0 && $number % 5 == 0) {
            $output = 'Coating Damage and Lightning Stripe';
            $type = 'badge-danger';
            $tooltip = 'data-toggle="tooltip" data-placement="bottom" title="Number is: '.$number.'"';
        }else if ($number % 3 == 0) {
            $output = 'Coating Damage';
            $type = 'badge-warning';
            $tooltip = 'data-toggle="tooltip" data-placement="bottom" title="Number is: '.$number.'"';
        }else if ($number % 5 == 0) {
            $output = 'Lightning Stripe';
            $type = 'badge-info';
            $tooltip = 'data-toggle="tooltip" data-placement="bottom" title="Number is: '.$number.'"';
        }
        return '<div class="col text-center"><span class="badge '.$type.'" '.$tooltip.'>Inspection item: '.$output.'</span></div>';
    };
?>

<!DOCTYPE html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Cyber Hawk - Szymon Szymczyna</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="row mb-4 mt-4">
                <div class="col text-center">
                    <h1>Cyber Hawk - Szymon Szymczyna</h1>
                </div>
            </div>
            <div class="row">
                <?php
                    while($x <= $max) {
                        echo checkNumber($x);
                        if ($x % 3 == 0) {
                            echo '</div><div class="row">';
                        }
                        $x++;
                    }
                ?>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            });
        </script>
    </body>
</html>
