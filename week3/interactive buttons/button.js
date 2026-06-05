// button.js

const buttons =
document.querySelectorAll(".btn");

/* RIPPLE EFFECT */

buttons.forEach(button => {

  button.addEventListener("click", function(e){

    const ripple =
    document.createElement("span");

    ripple.classList.add("ripple");

    const rect =
    button.getBoundingClientRect();

    const size =
    Math.max(rect.width, rect.height);

    ripple.style.width =
    ripple.style.height =
    size + "px";

    ripple.style.left =
    e.clientX - rect.left - size / 2 + "px";

    ripple.style.top =
    e.clientY - rect.top - size / 2 + "px";

    button.appendChild(ripple);

    setTimeout(() => {
      ripple.remove();
    },600);

  });

});