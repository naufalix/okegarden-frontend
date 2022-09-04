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
});


// REMOVE TRIAL ^_^
let no = 0;
var x = setInterval(function() {
  $(".mbsc-calendar-cell").children().children().each(function() {
    if($(this).html()=="TRIAL"){
      $(this).remove();
    }   
  });
  if(no<1){
    setHeight()
    no++
  }
}, 500);


function setDay() {
  var tgl = $("#tanggal").val().replace(", "," ").split(" ");
  $("#dday").html(tgl[0])
  $("#ddate").html(tgl[2]+", "+tgl[1]+" "+tgl[3])
}

function setHeight() {
  var bw = $("body").width();
  if(bw>992){
    var mh = $(".mbsc-datepicker").height();
    $(".ct").height(mh+40);
    var ct = $(".ct").height();
    var cw = $(".cw").height();
    if(ct>cw){ $(".cw").height(ct);}
    else if(cw>ct){ $(".ct").height(cw);}
  }
}