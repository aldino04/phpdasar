// ambil elemen yang telah dibuatkan id di index.php
var keyword = document.getElementById("keyword");
var tombolCari = document.getElementById("tombol-cari");
var wadah = document.getElementById("wadah");

// tambahkan event ketika input keyword ditulis
keyword.addEventListener("keyup", function () {
  // buat objek ajax
  var ajax = new XMLHttpRequest();

  // cek kesiapan ajax
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4 && ajax.status == 200) {
      wadah.innerHTML = ajax.responseText;
    }
  };

  // eksekusi ajax
  ajax.open("GET", "ajax/mahasiswa.php?keyword=" + keyword.value, true);
  ajax.send();
});
