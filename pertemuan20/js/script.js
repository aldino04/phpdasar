$(document).ready(function () {
  // hilangkan tombol cari
  $("#tombol-cari").hide();
  $("#loader").hide();

  //event ketika id keyword di jalankan
  $("#keyword").on("keyup", function () {
    $("#loader").show();
    // $("#wadah").load("ajax/mahasiswa.php?keyword=" + $("#keyword").val());

    // $.get()
    $.get("ajax/mahasiswa.php?keyword=" + $("#keyword").val(), function (data) {
      $("#wadah").html(data);
      $("#loader").hide();
    });
  });
});
