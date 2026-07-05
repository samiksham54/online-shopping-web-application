function validateRegister() {
    let u = document.forms["regForm"]["username"].value;
    let p = document.forms["regForm"]["password"].value;

    if (u == "" || p == "") {
        alert("All fields required!");
        return false;
    }
}

function validateSell() {
    let name = document.forms["sellForm"]["name"].value;
    let price = document.forms["sellForm"]["price"].value;

    if (name == "" || price == "") {
        alert("Enter product details!");
        return false;
    }
}

function validateBuy() {
    let product = document.forms["buyForm"]["product"].value;
    let address = document.forms["buyForm"]["address"].value;
    let pincode = document.forms["buyForm"]["pincode"].value;

    if (product == "" || address == "" || pincode == "") {
        alert("Fill all fields!");
        return false;
    }

    if (pincode.length != 6) {
        alert("Enter valid 6-digit pincode");
        return false;
    }
}