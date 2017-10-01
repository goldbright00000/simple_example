<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery Tabullet Plugin Example</title>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="Tabullet.js"></script>
    <script src="myjs.js"></script>
    <link rel="stylesheet" type="text/css" href="mycss.css">
</head>
<body> 
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12" id="banner">
                <table class="table table-hover" id="table">
                    <thead>
                    <tr data-tabullet-map="id">
                        <th width="50" data-tabullet-map="_index" data-tabullet-readonly="true">
                            No
                        </th>
                        <th data-tabullet-map="name">Name</th>
                        <th data-tabullet-map="password">Password</th>
                        <th data-tabullet-map="bith">Bithday</th>
                        <th data-tabullet-map="adress">Adress</th>
                        <th data-tabullet-map="sex">Sex</th>
                        <th width="50" data-tabullet-type="edit"></th>
                        <th width="50" data-tabullet-type="delete"></th>
                    </tr>
                    </thead>
                </table>                
            </div>
            <div class="row">
                <div class="col-sm-8"></div>
                <div class="col-sm-2">
                    <button class="btn btn-info" id="pre">PREVIOUS</button>
                </div>
                <div class="col-sm-2">
                    <button class="btn btn-info" id="next">NEXT</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>