// Sample data for products
const products = [
    { 
      id: 1,
      name: 'T-Shirt',
      price: 20.99,
      image: 'tshirt.jpg',
      rating: 4.5
    },
    { 
      id: 2,
      name: 'Jeans',
      price: 34.99,
      image: 'jeans.jpg',
      rating: 4
    },
    { 
      id: 3,
      name: 'Dress',
      price: 49.99,
      image: 'dress.jpg',
      rating: 5
    }
  ];
  
  // Function to create product cards
  function createProductCard(product) {
    const productCard = document.createElement('div');
    productCard.classList.add('product-card');
  
    const productImage = document.createElement('img');
    productImage.classList.add('images/um.jpg');
    productImage.src = product.image;
    productImage.alt = product.name;
  
    const productTitle = document.createElement('h2');
    productTitle.classList.add('product-title');
    productTitle.textContent = product.name;
  
    const productPrice = document.createElement('div');
    productPrice.classList.add('product-price');
    productPrice.textContent = '$' + product.price;
  
    const productRating = document.createElement('div');
    productRating.classList.add('product-rating');
    productRating.textContent = 'Rating: ' + product.rating + ' stars';
  
    productCard.appendChild(productImage);
    productCard.appendChild(productTitle);
    productCard.appendChild(productPrice);
    productCard.appendChild(productRating);
  
    return productCard;
  }
  
  // Function to display products
  function displayProducts() {
    const productsSection = document.getElementById('products');
  
    products.forEach(product => {
      const productCard = createProductCard(product);
      productsSection.appendChild(productCard);
    });
  }
  
  // Call the function to display products when the page loads
  window.onload = displayProducts;
  