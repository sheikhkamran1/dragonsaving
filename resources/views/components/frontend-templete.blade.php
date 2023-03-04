<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bachat Sanstha</title>
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="/slick/slick.css" />
    <!--Add the new slick-theme.css if you want the default styling  -->
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <!-- font Awesome css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Navbar CSS */
        .navbar a {
            color: white
        }

        /* About us Css Home-Page */
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 80%;
        }

        /* Slick css */
        .fade:not(.show) {
            opacity: 1;
        }

        .fade div {
            width: 100%;
            max-height: calc(100vh - 96px);
        }

        .fade img {
            object-fit: cover;
            width: 100%;
        }

        .slick-prev:before,
        .slick-next:before {
            color: #282840 !important;
        }

        /* Slick css Ends*/
    </style>
</head>

<body>
    <!-- Header -->

    <x-navbar />
    <!-- Main -->
    {{ $slot }}
    <!-- Footer -->
    <style>
        .footer{
           background-color:
        #16161a;
        }
        .footer a,h2,h6{
            color: white;
            font-size: 18px;
            font-weight: 400
            /* style=" font-size: 25px; border-bottom:3px solid #a04403; width: fit-content;" */
        }
        </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <!-- Slick js -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="/slick/slick.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.fade').slick({
                setting - name: setting - value
            });
        });
    </script>
</body>

</html>
