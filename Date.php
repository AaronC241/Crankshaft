<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <title>Document</title>
</head>
<body>

<!--Date-->
<form method="POST" action="DateEnter.php">
        <div class="form-check">
                <label for="date" class="col-sm-1 col-form-label">From</label>
                <div class="col-sm-10">
                    <div class="input-group date" id="datepicker">
                        <input type="text" class="form-control" name="start_date">
                        <span class="input-group-append">
                            <span class="input-group-text bg-white">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="form-check">
                <label for="date" class="col-sm-1 col-form-label">To</label>
                <div class="col-sm-10">
                    <div class="input-group date" id="datepicker1">
                        <input type="text" class="form-control" name="end_date">
                        <span class="input-group-append">
                            <span class="input-group-text bg-white">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
            <button type="submit"class="h-10 px-5 text-white bg-green-500 rounded-lg focus:shadow-outline hover:bg-white" name="purchase">Purchase</button>
          </form>

          <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>

<script type="text/javascript">
        $(function() {
            $('#datepicker1').datepicker();
        });
    </script>
    
</body>
</html>