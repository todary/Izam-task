function handleMethodChange() {
    var method = document.getElementById("method").value;
    var emailInput = document.getElementById("email");
    var phoneInput = document.getElementById("phone");

    if (method === "email") {
        emailInput.style.display = "block";
        phoneInput.style.display = "none";
        phoneInput.value = ""; // Clear phone value if switched to email
    } else if (method === "phone") {
        emailInput.style.display = "none";
        phoneInput.style.display = "block";
        emailInput.value = ""; // Clear email value if switched to phone
    } else {
        emailInput.style.display = "block";
        phoneInput.style.display = "block";
    }
}

window.onload = handleMethodChange;

