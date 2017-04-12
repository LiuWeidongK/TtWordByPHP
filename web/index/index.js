/**
 * Created by Misaya on 2017/4/4.
 */
var ii = 0;
var arr = [];
var unit = "unit1";

$(document).ready(function () {

    getWords();

    $("[name='list']").click(function () {
        unit = $(this).text();
        $('#listText').text($(this).text());
        ii = 0;
        arr = [];
        getWords();
    });

    $('#pre').click(function () {
        ii--;
        if(ii<0){
            alert("First Word");
            ii++;
        }else {
            getBasic(arr[ii]);
            $('#explains').text(" ");
            $('.follow').show();
            $('.phonetic').show();
            $('.explains').show();
            $('#sound').get(0).play();
        }
    });

    $('#show').click(function () {
       $('.follow').show();
       $('.phonetic').show();
       $('.explains').show();
       $('#sound').get(0).play();
    });

    $('#hide').click(function () {
        $('.follow').hide();
        $('.phonetic').hide();
        $('.explains').hide();
    });

    $('#next').click(function () {
        ii++;
        if(ii >= arr.length){
            alert("Last Word");
            ii--;
        }else {
            getBasic(arr[ii]);
            $('#explains').text(" ");
            $('.follow').hide();
            $('.phonetic').hide();
            $('.explains').hide();
            $('#sound').get(0).play();
        }
    });

    $('#voice').click(function () {
        $('#sound').get(0).play();
    });


});

function getBasic(word) {
    $("#sound").attr("src","http://dict.youdao.com/dictvoice?audio=" + word);
    $.ajax({
        type: "POST",
        data: {
            word:word
        },
        url: "../../server/getBasic.php",
        success: function(data) {
            var jsonObj = eval( "(" + data + ")" );
            $('.first').text(word.substr(0,1));
            $('.follow').text(word.substr(1));
            $('#phonetic').text('[' + jsonObj.phonetic + ']');
            $.each(jsonObj.explains,function (index,obj) {
                $('#explains').append(obj + "<br/>");
            });
            setCount();
        }
    });
}

function getWords() {
    $.ajax({
        type: "POST",
        data: {
            unit:unit
        },
        url: "../../server/getWords.php",
        success: function(data) {
            var jsonObj = eval( "(" + data + ")" );
            $.each(jsonObj,function (index,obj) {
                arr.push(obj);
            });
            if(arr.length === 0){
                alert("暂未录入任何词汇...");
                window.location.reload();
            }else {
                getBasic(arr[ii]);
            }
        }
    });
}

function setCount() {
    $('#firstCount').text(ii+1);
    $('#totalCount').text(arr.length);
}