const inputItem = document.querySelectorAll('.input-item');
const inputTotal = document.getElementById('total');

const convertDollar = value => {
    return `$${value}`;
}

const updateTotal = () => {
    let total = 0;

    inputItem.forEach(el => {
        price = parseInt(el.dataset.price);
        total += (price * parseInt(el.value));
    });

    inputTotal.value = convertDollar(total);
}

inputItem.forEach(el => {
    el.addEventListener('change', () => {
        updateTotal();
    });
});

