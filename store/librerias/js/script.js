
const addToCart = document.querySelectorAll('[data-btn-action="add-btn-cart"]');
const closeModal = document.querySelector('.jsModalClose');
const modalList = document.querySelector('.modal__list');
const modalPriceList = document.querySelector('.modal__list-price');
const modalTotal = document.querySelector('.modal__total-cart');
let totalPrice = 0;

addToCart.forEach(btn => {
    btn.addEventListener('click', (event) => {
        const nameModal = event.target.getAttribute('data-modal');
        const modal = document.querySelector(nameModal);

        const productName = event.target.parentNode.querySelector('.product-grid__name').textContent;
        const productPrice = event.target.parentNode.querySelector('.product-grid__price').textContent;
        const productColor = event.target.parentNode.querySelector('#color').value;
        const productSize = event.target.parentNode.querySelector('#size').value;

        const productItem = document.createElement('div');
        productItem.classList.add('modal__item');

        const productThumb = document.createElement('div');
        productThumb.classList.add('modal__thumb');

        const productImage = document.createElement('img');
        productImage.src = event.target.parentNode.parentNode.querySelector('.product-grid__imagen img').src;
        productImage.alt = productName;

        const productText = document.createElement('div');
        productText.classList.add('modal__text-product');

        const productNameElement = document.createElement('p');
        productNameElement.textContent = productName;

        const productPriceElement = document.createElement('p');
        productPriceElement.innerHTML = `<strong>${productPrice}</strong>`;

        const productOptionsElement = document.createElement('p');
        productOptionsElement.textContent = `Color: ${productColor}, Talla: ${productSize}`;

        productThumb.appendChild(productImage);
        productText.appendChild(productNameElement);
        productText.appendChild(productPriceElement);
        productText.appendChild(productOptionsElement);
        productItem.appendChild(productThumb);
        productItem.appendChild(productText);

        const removeBtn = document.createElement('button');
        removeBtn.classList.add('modal__remove-btn', 'fa-solid', 'fa-times');
        removeBtn.setAttribute('aria-label', 'Remove');

        removeBtn.addEventListener('click', () => {
            modalList.removeChild(productItem);
            totalPrice -= parseFloat(productPrice.replace('S/', '').replace('', ''));
            modalTotal.textContent = `Total: S/${totalPrice.toFixed(2)}`;
        });
        productItem.appendChild(removeBtn);

        modalList.appendChild(productItem);

        const priceValue = parseFloat(productPrice.replace('S/', '').replace('', ''));
        totalPrice += priceValue;
        modalTotal.textContent = `Total: $${totalPrice.toFixed(2)}`;

        modal.classList.add('active');
    });
});

function compras() {
    var precioTotal = document.getElementById("preciototal").textContent;
    window.location.href = "compra.html?preciototal=" + encodeURIComponent(precioTotal);
}

closeModal.addEventListener('click', (event) => {
    event.target.parentNode.parentNode.classList.remove('active');
});

window.onclick = (event) => {
    const modal = document.querySelector('.modal.active');
    if (event.target == modal) {
        modal.classList.remove('active');
    }
};

const toggleOptionsBtns = document.querySelectorAll('.product-grid__btn[data-btn-action="toggle-options"]');
const optionsContainers = document.querySelectorAll('.product-grid__options');

toggleOptionsBtns.forEach((toggleBtn, index) => {
    toggleBtn.addEventListener('click', (e) => {
        e.preventDefault();
        optionsContainers[index].classList.toggle('show');
    });
});