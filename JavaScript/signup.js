
function Signup(){

var email=document.sign.email.value;
var nama=document.sign.nama.value;
var user=document.sign.user.value;
var alamat=document.sign.alamat.value;
var pass=document.sign.pass.value;
var verif=document.sign.verif.value;
if (email=="" && nama =="" && user =="" && alamat =="" && pass =="" && verif =="") 
{ alert(" Isikan Semua Data Dengan Lengkap"); }
else 
{ confirm("Selamat Sign Up  Anda Berhasil !! Lanjutkan LOGIN ??"); 
  window.location = "../Login/Login.html" }

}

