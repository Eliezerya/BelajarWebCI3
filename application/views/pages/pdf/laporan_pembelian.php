<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
</head>
<body>
<table class="table table-bordered" id="table" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Product</th>
            <th>Tanggal Order</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $i = 1;
        foreach($checkout as $c) : ?>
            <tr>
            <td><?= $i++ ;?></td>
            <td><?= $c['ProductName'] ;?></td>
            <td><?= $c['CreatedAt'] ;?></td>
            <td>
                <?php 
                    if ($c['Status'] == 0) {
                        echo '<button class="btn btn-warning btn-md text-white">Unpaid</button>';
                    } else {
                        echo '<button class="btn btn-success btn-md text-white">Paid</button>';
                    }
                ?>
            </td>
            <td>
                <?php
                    if ($c['Status'] == 0) {
                        echo 'Unverified';
                    } else {
                        echo 'Verified';
                    }
                ?>
            </td>
            </tr>
    <?php endforeach ;?>
    </tbody> 
</table>
</body>
</html>