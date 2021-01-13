
function Login(){
var done=0;
var username=document.login.username.value;
username=username.toLowerCase();
var password=document.login.password.value;
password=password.toLowerCase();
if (username=="pweb" && password=="uasku") { alert("Selamat Login Anda Berhasil "); 
  window.location = "../Admin/tambah.html" }
else 
if (done==0) { alert(" Login Anda Gagal!"); }
}

