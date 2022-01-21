<!DOCTYPE html>
<html lang ="eng">

<head>
<title>Tabung Amanah Zakat IUKL</title>
<link rel = "stylesheet" href="#">
</head>

<style>
    *{
    margin: 0;
    padding: 0;
}

.main{
    width: 100%;
    height: 30px;
     background-color: #34ACAD;
     text-align: center;
     font-family: "Times New Roman", Times, serif;
     font-weight: bold;
     font-size: 15px;
     color: white;
     word-spacing: 2px;
}

.navbar{
    width: 100%;
    height: 70px;
     background-color: #ECEFF1;
     background: url("/img/trapiod.png") ;
     background-repeat: no-repeat;
     background-position: right;
     background-size: 1090px 70px;
     float: right;
}

.navbar ul{
  float: right;

}

.navbar ul li{
  float: right;
  list-style: none;
  position: relative;
}

.navbar ul li a{
  display: block;
  font-family: 'Times New Roman', Times, serif;
  color: #ECEFF1;
  font-size: 16px;
  padding: 24px 45px; /* atas bawah--kiri kanan */
  text-decoration: none;
}

.navbar ul li ul{
  display: none;
  position: absolute;
  padding: 5px; /* size kotak tu dgn clickable */
  background-color: #34ACAD;
  border-radius: 0px;
}

.navbar ul li:hover ul{
  display: block;
}

.navbar ul li ul li{
  width: 180px;
  border-radius: 4px;
}

.navbar ul li ul li a{
  padding: 10px 15px;  /* atas bawah--kiri kanan */
}

.navbar ul li ul li a:hover{
 background-color:#b0bec5 ;
}
</style>

<body>
    <div class = "main">
        <div class = "contact">
        <a href="https://www.facebook.com/TabungZakatIUKL/"><img src="/img/facebook.png" alt="fb" width="25" height="25" style="vertical-align:middle">
        <a href="https://www.instagram.com/unitzakat.iukl/?h"><img src="/img/ig.png" alt="ig" width="25" height="25" style="vertical-align:middle"></a> Facebook & Instagram: Zakat.iukl
        <img src="/img/phone.png"alt="phone" width="25" height="25" style="vertical-align:middle"></a> Talian zakat IUKL: +6011-156660685
        <a href="mailto:zakat@iukl.edu.my"><img src="/img/email.png" alt="email" width="25" height="25" style="vertical-align:middle"></a> Email: Zakat@iukl.edu.my
        </div>
    </div>
     
    <div class = "navbar"> 
        <img src="/img/logoiukl.png" alt="iukllog" width="112" height="47" style="vertical-align:middle">
        <img src="/img/logotazi.png" alt="TAZI" width="88" height="78" style="vertical-align:middle">
        <img src="/img/zakat-slg.png" alt="zakat-slg" width="138" height="45" style="vertical-align:middle">
        <img src="/img/penolongamil.png" alt="tamil" width="65" height="65" style="vertical-align:middle">
      <ul>
           
      <li> <a href="{{ route('user.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> Log Keluar</a>
        <form action="{{ route('user.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>

        </li>

        <li> <a href="#">Status Permohonan</a></li>

        <li> <a href="{{ route('user.borangA') }}">Borang Permohonan</a><form action="" method="post"></form></li>

          <li> <a href="#">Info Pentadbiran</a>
            <ul>
              <li><a href = "#">Carta Organisasi</a> </li>
              <li><a href = "#">Objektif, Visi dan Misi</a> </li>
              <li><a href = "#">Sejarah Pentadbiran</a> </li>
            </ul>
          </li></li>
          <li> <a href="{{ route('user.home') }}"> Home</a></li>
        </ul>
    </div>

    <div class = "boranga">

      <div class = "container">
        <div class = "form-group col-12 p-0">
          <div>
            @if (Session::has('success'))
            <div class = "alert alert-success">
              {{Session::get('success')}}
            </div>
            @endif
          </div>

      <form action = "{{route('user.store')}}" method = "POST">
        @csrf
        <div class = "form-group">
          <div class = "col-sm-12">
      <h2>Bahagian A: Maklumat Permohonan</h2>
          </div>
        </div>

      <br>

      <div class = "row">
        <label> Nama:</label>
        <input type="text" id="nama" class="form-control" name="nama"><br><br>

        <label> No Kad Pengenalan:</label>
        <input type="text" id="ic" class="form-control" name="ic"><br><br>
        
        <label> Alamat:</label>
        <textarea id="alamat"class="form-control"  name="alamat" rows="4" cols="50"> </textarea> <br><br>

        <label> Poskod:</label>
        <input type="text" id="poskod" class="form-control" name="poskod"><br><br>

        <label> No. H/P:</label>
        <input type="text" id="no_hp" class="form-control" name="no_hp"><br><br>

        <label> Negeri Asal:</label>
        <input type="radio" id="selangor" class="form-control" name="negeri" value = "selangor">
        <label> Selangor</label>
        <input type="radio" id="lain2" name="negeri" >
        <label> Lain-lain Negeri</label>
        <input type="text" id="lain2" class="form-control" name="negerit"><br><br>

        <label>Jantina:</label>
        <input type="radio" id="l" class="form-control" name="jantina" value="l">
        <label for="l">Lelaki</label>

        <input type="radio" id="p" class="form-control" name="jantina" value="p">
        <label for="p">Perempuan</label><br><br>

        <label for="status">Taraf Perkahwinan:</label>
        <input type="radio" id="bujang" class="form-control" name="taraf_p" value="bujang">
        <label for="bujang">Bujang</label>

        <input type="radio" id="kahwin" class="form-control" name="taraf_p" value="kahwin">
        <label for="kahwin">Kahwin</label>

        <input type="radio" id="janda" class="form-control" name="taraf_p" value="janda">
        <label for="janda">Janda</label>

        <input type="radio" id="duda" class="form-control" name="taraf_p" value="duda">
        <label for="duda">Duda</label>
      </div>

        <div class = "form-group col-md-6" align = "left">
        <button style = "width: 80px;"> Simpan </button>
        <button style = "width: 80px;"> <a href="{{ route('user.borangB') }}"> Seterusnya </button>
        </div>

      </form> 
      </div>
      </div>


</body>
</html>