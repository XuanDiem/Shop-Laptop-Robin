function increaseQty(idProduct) {
    let quantity = 0;
    let value = document.getElementById(idProduct + 'quantity').value;
    if (parseInt(value) >= 1 && parseInt(value) < 100) {
        quantity = parseInt(value) + 1;
        return document.getElementById(idProduct + 'quantity').value = quantity;
        }
}

function decreaseQty(idProduct) {
    let quantity = 0;
    let value = document.getElementById(idProduct + 'quantity').value;
    if (parseInt(value) > 1 && parseInt(value) <= 100) {
        quantity = parseInt(value) - 1;
        return document.getElementById(idProduct + 'quantity').value = quantity;
    }
}


