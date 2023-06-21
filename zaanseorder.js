function calculateTotal() {
    var total = 0;
    var tableRows = document.getElementsByTagName('tbody');

    for (var i = 0; i < tableRows.length; i++) {
        var quantityInput = tableRows[i].getElementsByTagName('input')[0];
        var price = parseFloat(tableRows[i].getElementsByTagName('td')[1].innerHTML.replace('&euro;', '').replace(',', '.'));

        total += quantityInput.value * price;
    }

    document.getElementById('total').innerHTML = total.toFixed(2);
}
