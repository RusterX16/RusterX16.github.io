$(document).ready(function() {

    function handle() {
        return true;
    }
    window.onresize = handle;

    $(".menu div").hover(function() {
        $(this)
            // .css("backgroundColor", "rgba(80, 129, 217, 1)")
            // .css("transition-duration", ".3s");
    }).mouseleave(function() {
        $(this)
            // .css("background-color", "transparent")
            // .css("transition-duration", ".3s");
    });

    $("#burger").parent().click(function() {
        const li = $(this).attr("class");

        if(li.includes("open")) {
            $("#menu-vertical")
                .css("right", "-160px")
                .css("visibility", "hidden")
                .css("transition-duration", ".5s")
            $(this)
                .addClass("closed")
                .removeClass("open");
        } else if(li.includes("closed")) {
            $("#menu-vertical")
                .css("right", "0px")
                .css("visibility", "visible")
                .css("transition-duration", ".5s");
            $(this)
                .addClass("open")
                .removeClass("closed");
        } else {
            throw Error("Class missing in burger element");
        }
    });
});

$(window).onresize = function() {
    const burger = $("#burger").parent();
    console.log("aa");

    if(window.innerWidth < 1200) {
        burger.css("display", "flex");
    } else {
        burger.css("display", "none");
    }

    if(window.innerWidth < 1000) {
        $(".menu").css("display", "none");
    } else {
        $(".menu").css("display", "flex");
    }
};