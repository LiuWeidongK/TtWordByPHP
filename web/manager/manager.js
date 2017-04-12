/**
 * Created by Misaya on 2017/4/5.
 */
var unit = "unit1";

$(document).ready(function () {
    $('#inputE').focus();

   $("#inputE").keyup(function () {
       $('#word').text($(this).val());
   });

   $("[name='list']").click(function () {
       unit = $(this).text();
       $('#listText').text($(this).text());
   });

   $('#submit').click(function () {
       postAjax();
   });
});

function postAjax() {
    $.ajax({
        type: "POST",
        data: {
            unit:unit,
            word:$('#inputE').val().trim()
        },
        url: "../../server/insertWord.php",
        success: function(data) {
            if(data=="true"){
                $('#inputE').val("");
            }else if(data=="false"){
                alert('Error');
            }
        }
    });
}