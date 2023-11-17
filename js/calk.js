function calculate() {
    let num1 = parseInt(document.getElementById("num1").value);
    let num2 = parseInt(document.getElementById("num2").value);
    let operation = document.getElementById("operation").value;
    let result;

    if (operation === "+") {
        result = num1 + num2;
    } else if (operation === "-") {
        result = num1 - num2;
    } else if (operation === "*") {
        result = num1 * num2;
    } else if (operation === "/") {
        result = num1 / num2;
    } else {
        result = "Неверная операция";
    }

    document.getElementById("result").innerHTML = "Результат: " + result;
} 