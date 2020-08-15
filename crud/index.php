<?php
// Create database connection using config file
include_once("koneksi.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM book ORDER BY book_id DESC");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">DUMB LIBRARY</div>

            <div class="col-sm-4">
                <a href='tambah-buku.php'><button type="button" class="btn btn-primary btn-sm">Add Book</button></a>
                <a href='tambah-writer.php'><button type="button" class="btn btn-primary btn-sm">Add Writer</button></a>
                <a href='tambah-kategori.php'><button type="button" class="btn btn-primary btn-sm">Add Category</button></a>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <img src="buku1.png" class="img-fluid" alt="Responsive image">
                <h5>book1</h>
                    <div class="row no-gutters">
                        <div class="col-sm-3 col-sm-2">2019</div>
                        <div class="col-sm-6 col-sm-2">nama penulis</div>
                    </div>
                    <br>
                    <button type="button" class="btn btn-primary btn-sm">View Detail</button>
            </div>
            <div class="col-sm">
                <img src="buku1.png" class="img-fluid" alt="Responsive image">
                <h5>book1</h>
                    <div class="row no-gutters">
                        <div class="col-sm-3 col-sm-2">2019</div>
                        <div class="col-sm-6 col-sm-2">nama penulis</div>
                    </div>
                    <br>
                    <button type="button" class="btn btn-primary btn-sm">View Detail</button>
            </div>
            <div class="col-sm">
                <img src="buku1.png" class="img-fluid" alt="Responsive image">
                <h5>book1</h>
                    <div class="row no-gutters">
                        <div class="col-sm-3 col-sm-2">2019</div>
                        <div class="col-sm-6 col-sm-2">nama penulis</div>
                    </div>
                    <br>
                    <button type="button" class="btn btn-primary btn-sm">View Detail</button>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <img src="buku1.png" class="img-fluid" alt="Responsive image">
                <h5>book1</h>
                    <div class="row no-gutters">
                        <div class="col-sm-3 col-sm-2">2019</div>
                        <div class="col-sm-6 col-sm-2">nama penulis</div>
                    </div>
                    <br>
                    <button type="button" class="btn btn-primary btn-sm">View Detail</button>
            </div>
            <div class="col-sm">
                <img src="buku1.png" class="img-fluid" alt="Responsive image">
                <h5>book1</h>
                    <div class="row no-gutters">
                        <div class="col-sm-3 col-sm-2">2019</div>
                        <div class="col-sm-6 col-sm-2">nama penulis</div>
                    </div>
                    <br>
                    <button type="button" class="btn btn-primary btn-sm">View Detail</button>
            </div>
            <div class="col-sm">
                <img src="buku1.png" class="img-fluid" alt="Responsive image">
                <h5>book1</h>
                    <div class="row no-gutters">
                        <div class="col-sm-3 col-sm-2">2019</div>
                        <div class="col-sm-6 col-sm-2">nama penulis</div>
                    </div>
                    <br>
                    <button type="button" class="btn btn-primary btn-sm">View Detail</button>
            </div>
        </div>
    </div>
</body>

</html>