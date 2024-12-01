document.querySelectorAll('.navbar ul li').forEach(item => {
    item.addEventListener('click', function() {
        document.querySelectorAll('.navbar ul li').forEach(el => el.classList.remove('active'));        
        this.classList.add('active');
    });
});

const invoiceItems = [
    { description: "Contract Signing", qty: 3, unitCost: 20000, amount: 60000 },
    { description: "Consultation", qty: 4, unitCost: 5000, amount: 1000 },
    { description: "Complaint Filing", qty: 6, unitCost: 6000, amount: 5000 },
    { description: "Consultation", qty: 1, unitCost: 9000, amount: 3000 },
    { description: "Complaint Filing", qty: 4, unitCost: 20000, amount: 80000 },
  ];
  
  function populateInvoiceItems() {
    const tbody = document.getElementById("invoice-items");
    invoiceItems.forEach((item) => {
      const row = document.createElement("tr");
      row.innerHTML = `
              <td>${item.description}</td>
              <td>${item.qty}</td>
              <td>${item.unitCost.toLocaleString()}</td>
              <td>${item.amount.toLocaleString()}</td>
          `;
      tbody.appendChild(row);
    });
  }
  
  function requestCopy() {
    alert("A copy of the invoice has been requested.");
  }
  
  window.onload = populateInvoiceItems;
  
  document.querySelectorAll(".sidebar-links a").forEach((link) => {
    link.addEventListener("click", function () {
      document
        .querySelectorAll(".sidebar-links a")
        .forEach((item) => item.classList.remove("active"));
      this.classList.add("active");
    });
  });
  