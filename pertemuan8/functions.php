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
       
    // query insert data
    $query = "INSERT INTO mahasiswa(nim, name, jurusan) VALUES ('$nim', '$nama', '$jurusan')";
    mysqli_query($conn, $query);
       
    return mysqli_affected_rows($conn);

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
       
    // query insert data
    $query = "UPDATE mahasiswa SET nim = '$nim', name = '$nama', jurusan = '$jurusan' WHERE id = $id";
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