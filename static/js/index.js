function w3_close() {
    document.getElementById("myDiv").style.marginLeft = "20%";

    document.getElementById("sideBar").style.display = "none";
}

function show() {
    document.getElementById("myDiv").style.marginLeft = "0%";
    document.getElementById("sideBar").style.width = "20%";

    document.getElementById("sideBar").style.display = "block";
}



document.addEventListener('DOMContentLoaded', (event) => {

    // Add click event listeners to all "Book" buttons
    document.querySelectorAll('.book-btn').forEach(button => {
        let count = 0;

        button.addEventListener('click', function() {
            // Get the card ID from the button's data attribute

            const cardId = this.getAttribute('data-card-id');
            const card = document.getElementById(cardId);

            // Get the details from the card
            const productName = card.querySelector('.card-header').innerText;
            const categoryName = card.querySelector('.card-title').innerText;
            const price = card.querySelector('.card-footer').innerText;

            // display data at menu table
            const target = document.getElementById('target');
            if (target) {
                count++;
                document.getElementById('cardId').value = cardId;

                target.querySelector('#pizzaName').value = productName;
                target.querySelector('#categoryName').value = categoryName;

                target.querySelector('#amount').value = price;
                target.querySelector('#qty').value = count;


            }
        });
    });


    const button = document.getElementById('cancel');

    button.addEventListener('reset', function() {

        document.getElementById('pizzaName').value = "";
        document.getElementById('categoryName').value = "";

        document.getElementById('amount').value = "";
        document.getElementById('qty').value = "";
    });

});