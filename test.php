<html>
    <head>
<!-- Include Required Prerequisites -->
<script src="vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
    </head>
    <body>
        <input type="text" name="daterange" value="01/01/2015 - 01/31/2015" class="form-control"/>

        <script type="text/javascript">
            $(function () {
                $('input[name="daterange"]').daterangepicker();
            });
        </script>
        
           
    </body>
</html>
