function onload() {
    $('#authpass').keypress(() => {
        if ($('#authpass').val() != "") {
            var submitbtn = $('#submitbtn');
            submitbtn.attr("type", "submit");
            submitbtn.removeClass("btn-danger");
            submitbtn.addClass("btn-primary");
            submitbtn.removeClass("disabled");
        } else {
            submitbtn.attr("type", "button");
            submitbtn.addClass("btn-danger");
            submitbtn.removeClass("btn-primary");
            submitbtn.addClass("disabled");
        }
    });
}
