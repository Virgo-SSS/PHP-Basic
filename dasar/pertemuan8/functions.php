<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "test");

// ambil data mahasiswa
// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// Read
function query($request) {
    global $conn;
    $result = mysqli_query($conn, $request);
    $rows = [];
    while ($hasil = mysqli_fetch_assoc($result)) {
        $rows[] = $hasil;
    }
    return $rows;
}

// insert data
function tambah($request) {
    global $conn;
   
    // ambil data dari tiap elemen dalam form
    $nim =$request["nim"];
    $nama =$request["name"];
    $jurusan =$request["jurusan"];

    //  upload gambar
    $image = upload();
    if(!$image){
        return false;
    }
       
    // query insert data
    $query = "INSERT INTO mahasiswa(nim, name, jurusan, image) VALUES ('$nim', '$nama', '$jurusan', '$image')";
    mysqli_query($conn, $query);
       
    return mysqli_affected_rows($conn);

}


function upload()
{
    $namaFile = $_FILES['image']['name'];
    $error = $_FILES['image']['error'];
    $tmpName = $_FILES['image']['tmp_name'];

    // image required
    if($error === 4) {
        echo "Tidak ada gambar yang di upload";
        return false;
    }

    // image should be image
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo  " <script>alert('Yang anda upload bukan gambar')</script>";
        return false;
    }

    // generate nama baru buat image atau di laravel hash
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    // jika sudah lolos pengecekan 
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}

// delete data
function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

// update data
function ubah($request) {
    global $conn;
   
    // ambil data dari tiap elemen dalam form
    $id =$request["id"];
    $nim =$request["nim"];
    $nama =$request["name"];
    $jurusan =$request["jurusan"];
    $imageold = $request["oldimage"];

    if($_FILES['image']['error'] === 4) {
        $image = $imageold;

    } else {
        $image = upload();
    }

    // query insert data
    $query = "UPDATE mahasiswa SET nim = '$nim', name = '$nama', jurusan = '$jurusan', image = '$image' WHERE id = $id";
    mysqli_query($conn, $query);
       
    return mysqli_affected_rows($conn);
}


// search data
function cari($keyword) {
    $query = "SELECT * FROM mahasiswa
                WHERE
                nim LIKE '%$keyword%' OR
                name LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'
                ";
    return query($query);
}
?>