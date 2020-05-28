<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 02</title>
    <script src="./js/jquery-3.5.1.min.js"></script>

    <link rel="stylesheet" type="text/css" href="./DataTables/datatables.min.css" />
    <script type="text/javascript" src="./DataTables/datatables.min.js"></script>

    <script type="text/javascript">
        $(document).ready( function () {
        $('#miTabla').DataTable();
        } );
    </script>

</head>
<body>
<table id="miTabla" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Columna 1</th>
            <th>Columna 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>
</body>
</html>