<?php
include 'controller/admin-validation.php';

$queryDataCustomer = mysqli_query($connection, "SELECT* FROM customer  WHERE deleted_at=0 ORDER BY id DESC");
?>

<div class="wrapper">
    <div class="card mt-3">
        <div class="card-body">
            <h3 class="card-title">Data Customer</h3>
            <div align="right" class="button-action">
                <a href="?pg=add-data-customer" class="btn btn-primary">Add</a>
            </div>
            <table class="table table-bordered table-striped table-hover table-responsive mt-3 mb-3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    while ($rowDataCustomer = mysqli_fetch_assoc($queryDataCustomer)) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= isset($rowDataCustomer['customer_name']) ? $rowDataCustomer['customer_name'] : '-' ?></td>
                            <td><?= isset($rowDataCustomer['phone']) ? $rowDataCustomer['phone'] : '-' ?></td>
                            <td><?= isset($rowDataCustomer['address']) ? $rowDataCustomer['address'] : '-' ?></td>
                            <td>
                                <a href="?pg=add-data-customer&edit=<?php echo $rowDataCustomer['id'] ?>">
                                    <button class="btn btn-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z" />
                                        </svg>
                                    </button>
                                </a>
                                |
                                <a onclick="return confirm ('Apakah anda yakin akan menghapus data ini?')"
                                    href="?pg=add-data-customer&delete=<?php echo $rowDataCustomer['id'] ?>">
                                    <button class="btn btn-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                            <path
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                        </svg>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; // End While 
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>