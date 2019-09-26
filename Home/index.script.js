function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();



$(document).ready(function () {
  
  $(".info").click( function() {
    $("#more--info").toggleClass("active");
  });
  // $(".info--user .info").siblings().removeClass('active');
  $(".notifications--newest").click( function() {
    $(".detail--notification").toggleClass("active");
  });

  // =================== RELATIONSHIPS
  $(".view--more").click( function() {
    console.log($(this).parent().toggleClass("active"));
    $(this).parent().toggleClass("active");
  } );
  $(".show--actions").click( function() {
    $(".actions--rela").toggleClass('active');
  });
  $("#datepicker").datepicker({ 
    autoclose: true, 
    todayHighlight: true
  }).datepicker('update', new Date());

});
