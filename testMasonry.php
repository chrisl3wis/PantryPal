<?php
echo "hello";
?>
<html>
<head>
    <script src="masonry.pkgd.min.js"></script>
    <style>
        * { box-sizing: border-box; }

        body { font-family: sans-serif; }

        /* ---- grid ---- */

        .grid {
            background: #EEE;
            max-width: 1200px;
        }

        /* clearfix */
        .grid:after {
            content: '';
            display: block;
            clear: both;
        }

        /* ---- grid-item ---- */

        .grid-item {
            width: 160px;
            height: 120px;
            float: left;
            background: #D26;
            border: 2px solid #333;
            border-color: hsla(0, 0%, 0%, 0.5);
            border-radius: 5px;
        }



        .grid-item--height2 { height: 200px; }
        .grid-item--height3 { height: 260px; }
        .grid-item--height4 { height: 360px; }


    </style>
</head>
<body>
<h1>Masonry - columnWidth</h1>

<div class="grid">
    <div class="grid-item"></div>
    <div class="grid-item grid-item--width2 grid-item--height2"></div>
    <div class="grid-item grid-item--height3"></div>
    <div class="grid-item grid-item--height2"></div>
    <div class="grid-item grid-item--width3"></div>
    <div class="grid-item"></div>
    <div class="grid-item"></div>
    <div class="grid-item grid-item--height2"></div>
    <div class="grid-item grid-item--width2 grid-item--height3"></div>
    <div class="grid-item"></div>
    <div class="grid-item grid-item--height2"></div>
    <div class="grid-item"></div>
    <div class="grid-item grid-item--width2 grid-item--height2"></div>
    <div class="grid-item grid-item--width2"></div>
    <div class="grid-item"></div>
    <div class="grid-item grid-item--height2"></div>
    <div class="grid-item"></div>
    <div class="grid-item"></div>
    <div class="grid-item grid-item--height3"></div>
    <div class="grid-item grid-item--height2"></div>
    <div class="grid-item"></div>
    <div class="grid-item"></div>
    <div class="grid-item grid-item--height2"></div>
</div>




<script>
    var elem = document.querySelector('.grid');
    var msnry = new Masonry( elem, {

        itemSelector: '.grid-item',
        columnWidth: 160
    });

</script>
</body>
</html>
