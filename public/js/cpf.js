function formatCPF(input) {
    var value = input.value.replace(/\D/g, ""); // Remove caracteres não numéricos

    if (value.length > 3) {
        value = value.substring(0, 3) + "." + value.substring(3);
    }
    if (value.length > 7) {
        value = value.substring(0, 7) + "." + value.substring(7);
    }
    if (value.length > 11) {
        value = value.substring(0, 11) + "-" + value.substring(11);
    }
    if (value.length > 11) {
        value = value.substring(0, 14);
    }

    input.value = value;
}

function unformatCPF(input) {
    return input
        .replace(/\D/g, "")
        .substr(0, 11)
        .replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");
}
