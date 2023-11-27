const input = document.querySelector("#phone");

window.intlTelInput(input, {
  localizedCountries: {
    fr: "Frankreich",
    de: "Deutschland",
    es: "Spanien",
    it: "Italien",
    ch: "Schweiz",
    nl: "Niederlande",
    at: "Österreich",
    dk: "Dänemark",
  },
  onlyCountries: ["fr", "de", "es", "it", "ch", "nl", "at", "dk"],
  utilsScript: "/intl-tel-input/js/utils.js?1695806485509" // just for formatting/placeholders etc
});
