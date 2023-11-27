const inputHome = document.querySelector("#home");
const inputMobile = document.querySelector("#mobile");
const inputVacation = document.querySelector("#vacation");

window.intlTelInput(inputHome, {
  initialCountry: 'gb',
  placeholderNumberType: 'FIXED_LINE',
  utilsScript: "/intl-tel-input/js/utils.js?1695806485509" // just for formatting/placeholders etc
});
window.intlTelInput(inputMobile, {
  initialCountry: 'gb',
  placeholderNumberType: 'MOBILE',
  utilsScript: "/intl-tel-input/js/utils.js?1695806485509"
});
window.intlTelInput(inputVacation, {
  onlyCountries: ['es', 'fr', 'it'],
  utilsScript: "/intl-tel-input/js/utils.js?1695806485509"
});
