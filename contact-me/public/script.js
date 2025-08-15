function validateForm() {
    let inputs = document.querySelectorAll("input[type=text], input[type=email]");
    for (let input of inputs) {
        if (input.value.trim() === "") {
            alert("All fields are required!");
            return false;
        }
    }
    return true;
}

function confirmDelete() {
    return confirm("Are you sure you want to delete this contact?");
}
