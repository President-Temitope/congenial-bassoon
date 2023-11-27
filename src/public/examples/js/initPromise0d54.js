const input = document.querySelector("#phone");
const statusElement = document.querySelector("#status");

const iti = window.intlTelInput(input, {
  utilsScript: "/intl-tel-input/js/utils.js?1695806485509",
});
iti.promise.then(() => {
  statusElement.innerHTML = "Initialised!";
});
