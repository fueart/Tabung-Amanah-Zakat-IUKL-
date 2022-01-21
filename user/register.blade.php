<!DOCTYPE html>
<html lang ="eng">

<head>
<title>Tabung Amanah Zakat IUKL</title>
<link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
<style>

    body{
    margin: 0;
    padding: 0;
    font-family: 'Times New Roman', Times, serif;
    background: url("/img/cover.png") ;
    background-repeat: no-repeat;
    background-size: 1536px 752px; /*lebar x panjang */
}

.center{
    position: absolute;
    top: 50%;
    left: 55%;
    transform: translate(8%, -50%);
    width: 460px;
    height: 520px;
    background: white;
    border-radius: 10px;
    box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
  }

.center h1{
padding: 0 0 20px 0;
text-align: center;
font-size: 40px;
color: grey;
border-bottom: 1px solid silver ;
}

.center form{
padding: 0 40px;
box-sizing: border-box;
border-radius: 10px;
margin-bottom: 25px;
}

form .txt_field{
position: relative;
border-bottom: 2px solid #adadad;
margin: 30px 0;
}

.txt_field input{
    width: 100%;
    padding: 0 5px;
    height: 40px;
    font-size: 15px;
    border: none;
    background: none;
    outline: none;
}

.txt_field label{
    position: absolute;
    top: 50%;
    left: 5px;
    color: slategrey;
    transform: translateY(-50%);
    font-size: 15px;
    pointer-events: none;
    transition: .5s;
}

.txt_field span::before{
    content: '';
    position: absolute;
    top: 40px;
    left:0;
    width: 0%;
    height: 2px;
    background: slategrey;
    transition: .5s;

}

.txt_field input:focus ~ label, .txt_field input:valid ~ label {
    top: -5px;
    color:#34ACAD;
}

.txt_field input:focus ~ span::before, .txt_field input:valid ~ span::before {
width: 100%;
}

.pass{
    margin: -5px 0 20px 5px;
    color: slategrey;
    cursor: pointer;
    text-align: center;
}

.pass:hover{
    text-decoration: underline;
}

input[type="submit"]{
width: 100%;
height: 50px;
margin-bottom: 15px;
border: 1px solid;
border-radius: 20px;
font-weight: 700;
background: #34ACAD;
color: white;
cursor: pointer;
outline: none;
}

input[type="submit"]:hover{
border-color: #34ACAD;
transition: .5s;
}

a{
  color: slategrey;
  text-decoration: none;
}
</style>

</head>
<body>
<div class = "center">
  <h1>Selamat Datang</h1>
    <form method="post" action="{{ route('user.create') }}"  autocomplete="off">
    @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
    @endif
    @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
    @endif
    @csrf
    <div class = "txt_field">
        <input type = "text" name="name" value = "{{ old('name') }}" required >
        <span> </span>
        <label>Nama Pengguna</label>
       
      </div>

      <div class = "txt_field">
        <input type = "text" name="email" value = "{{ old('email') }}" required>
        <span> </span>
        <label>ID Pengguna</label>
      </div>

      <div class = "txt_field">
        <input type = "password" name="password" value = "{{ old('password') }}" required>
        <span> </span>
        <label>Kata Laluan</label>
      </div>

      <div class = "txt_field">
        <input type = "password" name="cpassword" value = "{{ old('cpassword') }}" required>
        <span> </span>
        <label>Pengesahan Kata Laluan</label>
      </div>

      <div class = "pass">
        <input type = "submit" value="Daftar Masuk"> 
        <a href="{{route('user.login')}}">Sudah mempunyai akaun sedia ada </a>
      </div>

      </div>
    </form>
</div>
</body>
</html>