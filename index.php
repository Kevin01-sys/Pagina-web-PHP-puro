<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <title>DataTables example</title>
</head>
<body>
<h1>Behold... the power of DataTables!</h1>
<table id="theTable" class="display" style="width: 100%">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>price</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>price</th>
        </tr>
    </tfoot>
</table>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="application/javascript">
    $(document).ready( function () {
        $('#theTable').DataTable({
            ajax: 'get_data.php',
        });
    } );
</script>