$.ajax({
    url: "http://127.0.0.1/Electr-project/FlexStart/FlexStart/api/",
    dataType: "json",
    success: function(data) {
        console.log(data);
        var html = "";
        for (var i = 11; i < 17; i++) {
            html += "<li class='" + data[i].active + "'><a class='nav-link scrollto ' href=" + data[i].hlink + ">" +data[i].ankar + "</a>" +data[i].dropdown + "</li>";
        }
        $("#nav").html(html);
    }
});