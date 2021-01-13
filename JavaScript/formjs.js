 function isitabel(){
       var a=document.getElementById("judul").value;
       var b=document.getElementById("desk").value;
       var c=document.getElementById("alamat").value;
       var d=document.getElementById("kategor").value;
       var e=document.getElementById("sub").value;       
                                               
       var tabel = document.getElementById("tabel");
       var baris = tabel.insertRow(1);
       var kol1 = baris.insertCell(0);
       var kol2 = baris.insertCell(1);
       var kol3 = baris.insertCell(2);
       var kol4 = baris.insertCell(3);
       var kol5 = baris.insertCell(4);
               
       kol1.innerHTML = a;
       kol2.innerHTML = b;
       kol3.innerHTML = c;
       kol4.innerHTML = d;
       kol5.innerHTML = e;

       if ( a != "" && b!="" && c !="" && e !=""&& d !="") {
                  alert('Data berhasil disimpan ');
                  return true;
            
            }else{
                  alert('Anda harus mengisi semua data dengan lengkap !');
                   return false;
            }
      }
