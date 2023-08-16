function formatPhoneNumber(input) {
    var value = input.value.replace(/\D/g, ""); // Remove caracteres não numéricos

    if (value.length <= 2) {
        value = "(" + value;
    } else if (value.length <= 7) {
        value = "(" + value.substring(0, 2) + ") " + value.substring(2);
    } else if (value.length <= 11) {
        value =
            "(" +
            value.substring(0, 2) +
            ") " +
            value.substring(2, 7) +
            "-" +
            value.substring(7);
    } else {
        value =
            "(" +
            value.substring(0, 2) +
            ") " +
            value.substring(2, 7) +
            "-" +
            value.substring(7, 11);
    }

    input.setCustomValidity(""); // Limpa a mensagem de validação personalizada
    input.value = value;
}

function unformatPhoneNumber(input) {
    return input
        .replace(/\D/g, "")
        .substr(0, 15)
        .replace(/(\d{2})(\d{5})(\d{4})/, "($1) $2-$3");
}
