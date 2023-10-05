<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Laporan</title>
    <style>
        body {
          margin: 0;
          font-family: "Lato", sans-serif;
          /* background-image: url("ppp.jpg"); */
          height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

        }
table{
    margin-top: 10%;
}
.topnav {
  overflow: hidden;
  background-color: rgb(0, 154, 149);
}

.topnav a:hover {
  color: rgb(0, 0, 0);
  background-color: aliceblue;
}
.topnav a {
  float: left;
  display: block;
  color: rgb(255, 255, 255);
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  border-bottom: 3px solid transparent;
}

.topnav a:hover {
  border-bottom: 3px solid rgb(255, 255, 255);
}

.topnav a.active {
  border-bottom: 3px solid rgb(255, 255, 255);
}
.topnav-right {
  float: right;
}
table{
    border: solid 1px;
}
.button {
  background-color: rgb(0, 154, 149);
  color: black;
  border: 2px solid #ffff;
}
    </style>
</head>
<body>
    
    <div class="topnav">
        <a href="#" class="active">Home</a>
        <a href="#">Tentang Laporan</a>
        <a href="#">Validasi</a>
        <a href="#">Tanggapan</a>
        <a href="#">Laporan</a>
        
      
        <div class="topnav-right">
    <a href="#" class="button">pengguna</a>
    <a href="#" class="button">Logout</a>
        </a>
        </div>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nik</th>
            <th scope="col">Tanggal Pengaduan</th>
            <th scope="col">Foto</th>
            <th scope="col">Isi Laporan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <tr>
            <th scope="row">1</th>
            <td>32424895</td>
            <td>20/08/2020</td>
            <td>s</td>
            <td></td>
          </tr>
        </tbody>
      </table>
</body>
</html>