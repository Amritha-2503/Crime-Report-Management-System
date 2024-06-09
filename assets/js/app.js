$(document).ready(function () {
  $("#convert").on("click", function () {
    var lang_two = $("#lang_two").val();
    var text = result.innerText;
    console.log(text);
    $.ajax({
      url: "process.php",
      type: "post",
      data: { lang_two: lang_two, text: text },
      success: function (status) {
        console.log(status);
        document.getElementById("dest").innerHTML = status;
      },
    });
  });
});
