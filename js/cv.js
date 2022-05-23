$(document).ready(function() {
    animateProfilPicture();
    tab("#data > div");
    fillGauges();
    pulse("#language > div")
    setLinks(".software > p > a");
    setLinks(".element-data > p > a");
    linkedin();
});

function animateProfilPicture() {
    $("#menu > img").hover(function() {
        $(this)
            .css("border-radius", "32px 16px")
            .css("transition-duration", ".5s");
    }).mouseleave(function() {
        $(this)
            .css("border-radius", "4px 4px")
            .css("transition-duration", ".5s");
    });
}

function tab(field) {
    $(field).hover(function() {
        $($(this).children("p"))
            .css("margin", "auto 0 auto 32px")
            .css("transition-duration", ".5s");
    }).mouseleave(function() {
        $($(this).children("p"))
            .css("margin", "auto 16px")
            .css("transition-duration", ".5s");
    });
}

function setLinks(field) {
    let labels = $(field);

    for(let i = 0; i < labels.length; i++) {
        let lb = $(labels.eq(i));

        $(lb).hover(function() {
            lb.css("color", "blue")
                .css("text-decoration", "underline")
                .css("cursor", "pointer")
        }).mouseleave(function() {
            lb.css("color", "black")
                .css("text-decoration", "none")
                .css("cursor", "default");
        });
    }
}

function fillGauges() {
    for(let i = 0; i < 10; i++) {
        $(".gauge-" + i).delay(500).queue(function() {
            $(this)
                .css("width", i + ("0%"))
                .css("transition-duration", "3s");
        });
    }
}

function pulse(field) {
    $(field + ":not(last-child)").hover(function() {
        let gauge = $(this).children().children("div:last-child");

        gauge
            .css("background-color", "blue")
            .css("transition-duration", ".5s");
    }).mouseleave(function() {
        let gauge = $(this).children().children("div:last-child");

        gauge
            .css("background-color", "black")
            .css("transition-duration", ".5s");
    });
}

function linkedin() {
    $("#header > div > a > img").hover(function() {
        $(this)
            .css("height", "72px")
            .css("width", "auto")
            .css("margin-right", "-4px")
            .css("margin-top", "4px")
            .css("transition-duration", ".25s");
    }).mouseleave(function() {
        $(this)
            .css("height", "64px")
            .css("width", "auto")
            .css("margin-right", "0")
            .css("margin-top", "0")
            .css("transition-duration", ".25s");
    });
}