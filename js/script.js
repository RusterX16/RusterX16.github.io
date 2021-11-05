function onHover(field) {
    field.style.boxShadow = "0 0 10px 5px rgba(51, 51, 51, 0.8)";
    field.style.transitionDuration = ".5s";
}

function onBlur(field) {
    field.style.boxShadow = "0 0 0 0 rgba(51, 51, 51, 0)";
    field.style.transitionDuration = ".5";
}