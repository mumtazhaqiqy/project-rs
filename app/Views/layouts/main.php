<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mithril/2.0.4/mithril.min.js" integrity="sha256-8cl9GQUonfQFzoyXWdf5ZsGnUJ/FC8PE6E7E9U6JE30=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.15/lodash.min.js" integrity="sha256-VeNaFBVDhoX3H+gJ37DpT/nTuZTdjYro9yBruHjVmoQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css" integrity="sha512-ADrqa2PY1TZtb/MoLZIZu/Z/LlPaWQeDMBV73EMwjGam43/JJ5fqW38Rq8LJOVGCDfrJeOMS3Q/wRUVzW5DkjQ==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" crossorigin="anonymous" />
    <title>Document</title>
</head>

<body>
<div class="has-background-light">
    <?= view_cell('App\Libraries\Layouts::getNavbar', ['menu-item' => $menus])?>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/cash/8.1.1/cash.min.js"></script>
<script>
$(document).ready(function(){
    $(".navbar-burger").on('click', event => {
        $(".navbar-burger").toggleClass('is-active');
        $(".navbar-menu").toggleClass('is-active');
    })
})
</script>
</body>

</html>