<?php
    include "connection.php";
    session_start();

    $isValid = false;
    if(empty($_SESSION['username'])){
        $isValid = false;
    }else if($_SESSION['role'] == "User"){
        $isValid = false;
    }else{
        $isValid = true;
    }

    if($_GET){
        $isbn = $_GET["isbn"];
        $query1 = "SELECT * FROM `book` WHERE isbn = $isbn";
        $res1 = mysqli_query($conn, $query1);
        if($res1->num_rows > 0){
            while($row1 = $res1->fetch_array()){
                $image = $row1["image"];
                $title = $row1["title"];
            }
        }
        $query2 = "SELECT * FROM `detail` WHERE isbn = $isbn";
        $res2 = mysqli_query($conn, $query2);
        if($res2->num_rows > 0){
            while($row2 = $res2->fetch_array()){
                $dimension = $row2["dimension"];
                $weight = $row2["weight"];
            }
        }
    }else{
        $isValid = false;
    }
    
    if($_POST){
        if(!empty($_FILES['image']['name']) && $_POST['author']!='' && $_POST['category']!='' && $_POST['tag']!='' && $_POST['bookDesc']!='' && $_POST['authDesc']!='' && $_POST['rating']!='' && $_POST['promo']!='' && $_POST['price']!='' && $_POST['page']!='' && $_POST['publisher']!='' && $_POST['country']!=''){
            $isValid = true;
            if($_FILES['image']['size'] > 10000000){
                $isValid = false;
                echo '<script>alert("File yang diupload tidak boleh lebih dari 10MB")</script>';
            }

            $fileType = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
            if($fileType != 'jpg' && $fileType != 'jpeg' && $fileType != 'png'){
                $isValid = false;
                echo '<script>alert("File yang diupload bukan gambar")</script>';
            }

            if($isValid){
                $path = $_FILES['image']['name'];
                $author = $_POST['author'];
                $category = $_POST['category'];
                $tag = $_POST['tag'];
                $bookDesc = $_POST['bookDesc'];
                $authDesc = $_POST['authDesc'];
                $rating = $_POST['rating'];
                $promo = '';
                if($_POST && isset($_POST['promo'])){
                    $i = count($_POST['promo']);
                    foreach($_POST['promo'] as $p){
                        if($i==1){
                            $promo .= $p;
                        }else{
                            $promo .= $p.",";
                        }
                        $i--;
                    }
                }
                $price = $_POST['price'];
                $page = $_POST['page'];
                $publisher = $_POST['publisher'];
                $country = $_POST['country'];
                if(move_uploaded_file($_FILES['image']['tmp_name'], $path)){
                    if(is_file($image)){
                        unlink($image);
                    }
                    $que1 = "UPDATE book SET author = '".$author."', category = '".$category."', tag = '".$tag."', bookDesc = '".$bookDesc."', authDesc = '".$authDesc."', rating = '".$rating."', promo = '".$promo."', price = '".$price."', image = '".$path."' WHERE isbn = '".$isbn."'";
                    $que2 = "UPDATE detail SET page='".$page."', publisher='".$publisher."', country='".$country."' WHERE isbn='".$isbn."'";
                    $result1 = mysqli_query($conn, $que1);
                    $result2 = mysqli_query($conn, $que2);
                    echo '<script>alert("Data berhasil diubah!")</script>';
                    header("Location: admin.php");
                }
            }
        }else{
            echo '<script>alert("Seluruh field harus diisi")</script>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>JD'Books</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="update.css">
    <link href="css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
    <?php
    if($isValid){?>
    <!-- header -->
    <div class="header">
        <img src="logoku.png" alt="">
        <a href="admin.php" class="logo">JD'BOOKS</a>
        <div class="header-right">
            <a href="insert.php">Tambah Data</a>
            <a href="logout.php">Keluar</a>
        </div>
    </div>

    <div class="container mx-auto pt-5">
        <form method="post" enctype="multipart/form-data" class="d-flex flex-column pt-5">
            <label for="isbn" class="form-label"> ISBN : </label>
            <input type="text" class="form-control" name="isbn" value=<?="'$isbn'"?> readonly>
        
            <label for="title" class="form-label"> Title : </label>
            <input type="text" class="form-control" name="title" value=<?="'$title'"?> readonly>

            <label for="tampil" class="form-label"> Image (OLD) : </label>
            <img src=<?="'$image'"?> class="tampil" alt="">

            <label for="image" class="form-label"> Upload Image : </label>
            <input type="file" class="form-control" name="image" required>

            <label for="author" class="form-label"> Author : </label>
            <input type="text" class="form-control" name="author" required>

            <label for="category" class="form-label"> Category : </label>
            <div class="d-inline-block">
                <?php    
                    $query = "SELECT * FROM `category`";
                    $res = mysqli_query($conn, $query);
                    if($res->num_rows > 0){
                        while($row = $res->fetch_array()){
                        echo
                            '
                            <input type="radio" name="category" value="'.$row["category"].'" required>
                            <label for="'.$row["category"].'">'.$row["category"].'</label><br>
                            ';
                        }
                    }
                ?>
            </div>

            <label for="tag" class="form-label"> Tag : </label>
            <input type="text" class="form-control" name="tag" required>

            <label for="bookDesc" class="form-label"> Book Description : </label><br>
            <textarea class="form-control mx-auto" name="bookDesc" rows="3" cols="95" required></textarea>

            <label for="authDesc" class="form-label"> Author Description : </label><br>
            <textarea class="form-control mx-auto" name="authDesc" rows="3" cols="95" required></textarea>

            <label for="rating" class="form-label"> Rating : </label>
            <input type="float" class="form-control" name="rating" min=1 max=5 required>

            <label for="promo" class="form-label"> Promo : </label>
            <div class="d-inline-block">
                <input type="checkbox" class="form-check-input" name="promo[]" value="Baru">
                <label class="form-check-label" for="promo"> Baru</label><br>
                <input type="checkbox" class="form-check-input" name="promo[]" value="Populer">
                <label class="form-check-label" for="promo2"> Populer</label><br>
                <input type="checkbox" class="form-check-input" name="promo[]" value="Laris">
                <label class="form-check-label" for="promo3"> Laris</label><br>
            </div>

            <label for="price" class="form-label"> Price : </label>
            <input type="number" class="form-control" name="price" min=1 required>

            <label for="page" class="form-label"> Page : </label>
            <input type="number" class="form-control" name="page" min=1 required>

            <label for="dimension" class="form-label"> Dimension : </label>
            <input type="text" class="form-control" name="dimension" value=<?="'$dimension'"?> readonly>

            <label for="weight" class="form-label"> Weight (gram) : </label>
            <input type="number" class="form-control" name="weight" value=<?="'$weight'"?> readonly>

            <label for="publisher" class="form-label"> Publisher : </label>
            <input type="text" class="form-control" name="publisher" required>

            <label for="country" class="form-label"> Country : </label>
            <input type="text" class="form-control" name="country" required>

            <div class="row pb-3">
                <button type="submit" name="upload" class="btn btn-success col-xs-12 col-md-3 mt-3 offset-md-9">Post</button>
            </div>
        </form>
    </div>

    <!-- kolom footer  -->
    <div class="footer">
        <br>
        <br>
        <div class="rowfooter">
            <div class="columnfooter">
                <h2>Layanan Pelanggan</h2>
                <a href="#">Cara Belanja</a>
                <a href="#">Pembayaran</a>
                <a href="#">Deposit</a>
            </div>
            <div class="columnfooter">
                <h2>Kebijakan JD'Books</h2>
                <a href="#">Pengiriman</a>
                <a href="#">Pengembalian Barang</a>
                <a href="#">Pengembalian Uang</a>
            </div>
            <div class="columnfooter">
                <h2>Tentang JD'Books</h2>
                <a href="#">Syarat & Ketentuan</a>
                <a href="#">Kebijakan & Privasi</a>
                <a href="#">Hubungi Kami</a>
                <a href="#">Bantuan</a>
            </div>
            <div class="columnfooter">
                <h2>Sosial Media</h2>
                <a href="#">
                    <img class="sosmed" src="facebook-circular-logo.svg" alt="">
                    <img class="sosmed" src="pinterest.svg" alt="">
                    <img class="sosmed" src="twitter.svg" alt="">
                    <img class="sosmed" src="instagram.svg" alt="">
                </a>
                <h2>Jasa Pengiriman</h2>
                <a href="#">
                    <img class="sosmed" src="Logo-TIKI.png" alt="">
                    <img class="sosmed" src="New_Logo_JNE.png" alt="">
                    <img class="sosmed" src="Logo Anteraja-New-01.png" alt="">
                    <img class="sosmed" src="Logo_J&T_Merah_Square.jpg" alt="">
                </a>
            </div>
            <div class="columnfooter">
                <h2>JD'Books Apps</h2>
                <a href="#">
                    <img src="app-store.png" alt="">
                    <img src="play-store.png" alt="">
                </a>
            </div>
        </div>
        <h4>Copyright © 2016 - 2021 JD'Books — All Rights Reserved</h4>
    </div>
    <?php
    }else{
        header("Location: login.php");
    }
    ?>
</body>
</html>