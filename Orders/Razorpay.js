document.addEventListener("DOMContentLoaded", () => {
  const urlParams = new URLSearchParams(window.location.search);
  const productName = urlParams.get('product');
  const productPrice = parseInt(urlParams.get('price')) * 100;

  const nameEl = document.getElementById("productName");
  const priceEl = document.getElementById("productPrice");
  const payBtn = document.getElementById("payBtn");

  console.log(nameEl, priceEl, payBtn); // test if null or not

  nameEl.innerText = productName;
  priceEl.innerText = "Price: ₹" + (productPrice / 100);

  payBtn.onclick = async function () {
    const response = await fetch("./CreateOrder.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ amount: productPrice })
    });

    const order = await response.json();

    const options = {
      key: "YOUR_RAZORPAY_KEY_ID",
      amount: productPrice,
      currency: "INR",
      name: "Growall Coaching",
      description: productName,
      order_id: order.id,
      handler: function (response) {
        alert("Payment successful! Payment ID: " + response.razorpay_payment_id);
      },
      theme: { color: "#3399cc" }
    };

    const rzp = new Razorpay(options);
    rzp.open();
  };
});
