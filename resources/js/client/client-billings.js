const billingItems = [
    {
      id: "000013",
      type: "Consultation",
      attorney: "Atty. Angel Abalos",
      date: "August 10, 2024",
      amount: 6000,
      status: "pending",
    },
    {
      id: "000014",
      type: "Complaint Filing",
      attorney: "Atty. Angel Abalos",
      date: "August 09, 2024",
      amount: 10000,
      status: "pending",
    },
    {
      id: "000015",
      type: "Contract Signing",
      attorney: "Atty. Angel Abalos",
      date: "August 07, 2024",
      amount: 10000,
      status: "paid",
    },
    {
      id: "000016",
      type: "Consultation",
      attorney: "Atty. Angel Abalos",
      date: "August 07, 2024",
      amount: 10000,
      status: "paid",
    },
    {
      id: "000017",
      type: "Consultation",
      attorney: "Atty. Angel Abalos",
      date: "August 07, 2024",
      amount: 10000,
      status: "error",
    },
    {
      id: "000017",
      type: "Consultation",
      attorney: "Atty. Angel Abalos",
      date: "August 07, 2024",
      amount: 10000,
      status: "error",
    },
    {
      id: "000017",
      type: "Consultation",
      attorney: "Atty. Angel Abalos",
      date: "August 07, 2024",
      amount: 10000,
      status: "error",
    },
    {
      id: "000017",
      type: "Consultation",
      attorney: "Atty. Angel Abalos",
      date: "August 07, 2024",
      amount: 10000,
      status: "error",
    },
    {
      id: "000017",
      type: "Consultation",
      attorney: "Atty. Angel Abalos",
      date: "August 07, 2024",
      amount: 10000,
      status: "error",
    },
  ];
  
  function renderBillingItems(items) {
    const container = document.getElementById("billing-items");
    container.innerHTML = ""; // Clear existing content
  
    items.forEach((item) => {
      const itemElement = document.createElement("div");
      itemElement.className = "billing-item";
  
      itemElement.innerHTML = `
        <div class="billing-item-header">
            <div class="type">${item.type}</div>
            <div class="status ${item.status.toLowerCase()}">${item.status}</div>
        </div>
        <div class="billing-item-details">
            <div class="name">${item.attorney}</div>
            <div class="date">${item.date}</div>
        </div>
        <div class="billing-item-footer">
            <div class="invoice-no">Invoice No. ${item.id}</div>
            <div class="amount">₱${item.amount.toLocaleString()}</div>
        </div>
      `;
  
      itemElement.addEventListener("click", () => {
        document
          .querySelectorAll(".billing-item")
          .forEach((el) => el.classList.remove("selected"));
        itemElement.classList.add("selected");
        renderInvoicePreview(item);
      });
  
      container.appendChild(itemElement);
    });
  }
  
  function renderInvoicePreview(invoice) {
    const previewContainer = document.getElementById("invoice-preview");
  
    // Check for the status to determine if preview should be shown
    if (invoice.status === "paid" || invoice.status === "error") {
      previewContainer.innerHTML = ""; // Blank preview for paid and error cases
      return;
    }
  
    previewContainer.innerHTML = `
        <div class="invoice-header">
            <div class="invoice-header-left">
                <h3>INVOICE NO. ${invoice.id}</h3></br>
                <p><strong>Bill to</strong></p>
                <p>${invoice.attorney} <span style="float: right;">${
      invoice.date
    }</span></p>
                <p>Amount: ₱${invoice.amount.toLocaleString()}</p>
            </div>
        </div>
        <table class="invoice-table">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Qty.</th>
                    <th>Unit Cost</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>${invoice.type}</td>
                    <td>1</td>
                    <td>₱${invoice.amount.toLocaleString()}</td>
                    <td>₱${invoice.amount.toLocaleString()}</td>
                </tr>
            </tbody>
        </table>
        <p class="totalAmount"><strong>Total amount due: ₱${invoice.amount.toLocaleString()}</strong></p></br>
        <form id="payment-form">
            <div class="form-group">
                <label for="paymentMode">Mode of Payment:</label>
                <select id="paymentMode" required>
                    <option value="">Select payment mode</option>
                    <option value="counter">Over the counter</option>
                    <option value="bank">Bank Transfer</option>
                    <option value="gcash">Gcash</option>
                    <option value="paypal">Paypal</option>
                </select>
            </div>
            <div class="form-group">
                <label for="amountPaid">Amount Paid:</label>
                <input type="number" id="amountPaid" required>
            </div> </br>
            <div class="form-group">
                <label for="proofOfPayment">Proof of Payment:</label>
                <div class="file-upload">
                    <input type="file" id="proofOfPayment" required style="display: none;" onchange="updateFileName()">
                    <label for="proofOfPayment" class="upload-button">
                        <i class='bx bx-paperclip'></i> Attach File
                    </label>
                    <span id="file-name">No file chosen</span>
                </div>
            </div>
            <div class="form-group">
                <label for="transactionNo">Transaction No.:</label>
                <input type="text" id="transactionNo" required>
            </div>
            <div class="button-group">
                <button type="button" class="btn-secondary">Back</button>
                <button type="submit" class="btn-primary">Submit</button>
            </div>
        </form>
    `;
  
    document
      .getElementById("payment-form")
      .addEventListener("submit", handleSubmit);
  }
  
  // Function to update the file name display
  function updateFileName() {
    const fileInput = document.getElementById("proofOfPayment");
    const fileNameDisplay = document.getElementById("file-name");
  
    if (fileInput.files.length > 0) {
      fileNameDisplay.textContent = fileInput.files[0].name;
    } else {
      fileNameDisplay.textContent = "No file chosen";
    }
  }
  
  function handleSubmit(e) {
    e.preventDefault();
    // Handle form submission logic here
    console.log("Form submitted");
  }
  
  document.addEventListener("DOMContentLoaded", () => {
    renderBillingItems(billingItems);
  
    const tabs = document.querySelectorAll(".tab");
    tabs.forEach((tab) => {
      tab.addEventListener("click", () => {
        tabs.forEach((t) => t.classList.remove("active"));
        tab.classList.add("active");
        const status = tab.dataset.tab;
        if (status === "all") {
          renderBillingItems(billingItems);
        } else {
          const filteredItems = billingItems.filter((item) => {
            if (status === "to-pay") return item.status === "pending";
            if (status === "done") return item.status === "paid";
            if (status === "rejected") return item.status === "error";
            return item.status === status;
          });
          renderBillingItems(filteredItems);
        }
      });
    });
  });
  
  document.querySelectorAll(".sidebar-links a").forEach((link) => {
    link.addEventListener("click", function () {
      document
        .querySelectorAll(".sidebar-links a")
        .forEach((item) => item.classList.remove("active"));
      this.classList.add("active");
    });
  });
  