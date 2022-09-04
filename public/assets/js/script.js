/*Created by Naufal Ulinnuha*/

mobiscroll.setOptions({
  locale: mobiscroll.localeEn,
  theme: 'ios',
  themeVariant: 'light'
});

$(function () {
  $('#tanggal').mobiscroll().datepicker({
    controls: ['calendar'],
    display: 'inline',
    showOuterDays: false,
    dateFormat: 'DDDD, D MMMM YYYY'
  });
  setHeight();
});

const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

// REMOVE TRIAL ^_^
let no = 0;
var x = setInterval(function() {
  $(".mbsc-calendar-cell").children().children().each(function() {
    if($(this).html()=="TRIAL"){
      $(this).remove();
    }   
  });
  //if(no<1){setHeight(); no++;}
}, 500);


function setDay() {
  var tgl = $("#tanggal").val().replace(", "," ").split(" ");
  $("#dday").html(tgl[0])
  $("#ddate").html(tgl[2]+", "+tgl[1]+" "+tgl[3])
}

function setHeight() {
  var bw = $("body").width();
  if(bw>992){
    //var mh = $(".mbsc-datepicker").height();
    //$(".ct").height(mh+40);
    var ct = $(".ct").height();
    var cw = $(".cw").height();
    if(ct>cw){ $(".cw").height(ct);}
    else if(cw>ct){ $(".ct").height(cw);}
  }
}

function addAlamat(){
  var al = $("#alamat").val();
  if(al!=""){
    var id = $.now();
    var p = '<p id="a'+id+'" class="col-lg-10 text-start btn btn-primary br-2 p-3" onclick="setAlamat(a'+id+')">'+al+'</p>';
    $("#list-alamat").append(p);
    $("#alamat").val("");
    Toast.fire({icon: 'success',title: 'Alamat berhasil ditambahkan'})
  }else{Swal.fire('Alamat kosong', 'Isi alamat terlebih dahulu', 'error')}
}

function setAlamat(id){
  $("#alamat").val($(id).text());
  $(id).remove();
  Toast.fire({icon: 'success',title: 'Alamat berhasil digunakan'})
}

function confirm(){
  $("#dnl").text($("input[name=nama]").val());
  $("#dnp").text($("input[name=no]").val());
  $("#dal").text($("#alamat").val());
  $("#dtg").text($("#tanggal").val());
  $("#dtm").text($("input[name=tema]").val());
  var lh = $("input[name=lahan]").val()
  if(lh>2){lh ="Lebih dari 2";}
  $("#dlh").text(lh+" Lahan Taman");
  $("#des").text($("input[name=ukuran]").val());
}

function submit(){
  Swal.fire('Terkirim', 'Tunggu tim kami menghubungi anda', 'success')
}