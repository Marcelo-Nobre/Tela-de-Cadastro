// function formatPhoneNumber(input) {
//     var value = input.value.replace(/\D/g, ""); // Remove caracteres não numéricos

//     if (value.length > 0) {
//         value = "(" + value.substring(0, 2) + ") " + value.substring(2);
//     }
//     if (value.length > 3) {
//         value = value.substring(0, 9) + "-" + value.substring(9);
//     }
//     if (value.length > 14) {
//         value = value.substring(0, 14);
//     }

//     input.value = value;
// }

// function unformatPhoneNumber(input) {
//     return input
//         .replace(/\D/g, "")
//         .substr(0, 11)
//         .replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "($1) $2$3$4");
// }

function formatPhoneNumber(input) {
    var value = input.value.replace(/\D/g, ""); // Remove caracteres não numéricos

    if (value.length > 2) {
        value = "(" + value.substring(0, 2) + ") " + value.substring(2);
    }
    if (value.length > 10) {
        value = value.substring(0, 10) + "-" + value.substring(10);
    }
    if (value.length > 15) {
        value = value.substring(0, 15);
    }

    input.value = value;
}

function unformatPhoneNumber(input) {
    return input.replace(/\D/g, "");
}

// Função para formatar quando o campo perde o foco
function unformatPhoneNumber(input) {
    return input
        .replace(/\D/g, "") // Remove todos os caracteres não numéricos
        .substr(0, 11) // Mantém apenas os primeiros 11 caracteres após a remoção dos caracteres não numéricos
        .replace(/(\d{2})(\d{5})(\d{4})/, "($1) $2-$3"); // Formata no padrão desejado
}
