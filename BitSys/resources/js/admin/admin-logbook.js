let currentTab = "outgoing";
const outgoingDocuments = [
  { name: "sample1.docx", date: "08/14/2024" },
  { name: "sample2.docx", date: "08/13/2024" },
  { name: "sample3.docx", date: "08/13/2024" },
  { name: "sample4.docx", date: "08/13/2024" },
  { name: "sample5.docx", date: "08/13/2024" },
  { name: "sample6.docx", date: "08/13/2024" },
  { name: "sample7.docx", date: "08/13/2024" },
  { name: "sample8.docx", date: "08/13/2024" },
  { name: "sample9.docx", date: "08/13/2024" },
  { name: "sample10.docx", date: "08/13/2024" },
  { name: "sample11.docx", date: "08/13/2024" },
  { name: "sample11.docx", date: "08/13/2024" },
  { name: "sample11.docx", date: "08/13/2024" },
  { name: "sample11.docx", date: "08/13/2024" },
  { name: "sample11.docx", date: "08/13/2024" },
  { name: "sample11.docx", date: "08/13/2024" },
];
const incomingDocuments = [
  { name: "incoming1.pdf", date: "08/13/2024" },
  { name: "incoming2.pdf", date: "08/13/2024" },
  { name: "incoming3.pdf", date: "08/13/2024" },
  { name: "incoming4.pdf", date: "08/13/2024" },
  { name: "incoming5.pdf", date: "08/13/2024" },
  { name: "incoming6.pdf", date: "08/13/2024" },
  { name: "incoming7.pdf", date: "08/13/2024" },
  { name: "incoming8.pdf", date: "08/13/2024" },
  { name: "incoming9.pdf", date: "08/13/2024" },
  { name: "incoming10.pdf", date: "08/13/2024" },
  { name: "sample11.docx", date: "08/13/2024" },
  { name: "sample11.docx", date: "08/13/2024" },
  { name: "sample11.docx", date: "08/13/2024" },
  { name: "sample11.docx", date: "08/13/2024" },
  { name: "sample11.docx", date: "08/13/2024" },
];

function renderGreeting() {
  const greetingElement = document.getElementById("greeting");
  greetingElement.textContent = "Good day, Sample";
}

function renderDocumentArea() {
  const documentArea = document.getElementById("documentArea");
  documentArea.innerHTML = `
        <div class="document-container">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <div id="tabsContainer" class="tabs"></div>
                <button class="add-button" onclick="openModal()"><i class='bx bx-plus'></i> ADD</button>
            </div>
            <table id="documentTable">
                <thead>
                    <tr>
                        <th>Document Name</th>
                        <th id="dateHeader"></th>
                    </tr>
                </thead>
                <tbody id="documentList"></tbody>
            </table>
        </div>
    `;
  renderTabs();
  renderDocuments();
}

function renderTabs() {
  const tabsContainer = document.getElementById("tabsContainer");
  tabsContainer.innerHTML = `
        <div class="tab ${
          currentTab === "outgoing" ? "active" : ""
        }" onclick="switchTab('outgoing')">OUTGOING</div>
        <div class="tab ${
          currentTab === "incoming" ? "active" : ""
        }" onclick="switchTab('incoming')">INCOMING</div>
    `;
}

function renderDocuments() {
  const documents =
    currentTab === "outgoing" ? outgoingDocuments : incomingDocuments;
  const tableBody = document.getElementById("documentList");
  tableBody.innerHTML = documents
    .map(
      (doc) => `
        <tr>
            <td>${doc.name}</td>
            <td>${doc.date}</td>
        </tr>
    `
    )
    .join("");

  const dateHeaderText =
    currentTab === "outgoing"
      ? "Date Issued\nMM/DD/YYYY"
      : "Date Received\nMM/DD/YYYY";

  const dateHeader = document.getElementById("dateHeader");
  dateHeader.innerHTML = dateHeaderText.replace("\n", "<br>");
}

function switchTab(tab) {
  currentTab = tab;
  renderTabs();
  renderDocuments();
  updateModalLabels();
}

function openModal() {
  const modal = document.getElementById("addModal");
  modal.style.display = "block";
  renderModal();
}

function closeModal() {
  document.getElementById("addModal").style.display = "none";
}

function renderModal() {
  const modal = document.getElementById("addModal");
  modal.innerHTML = `
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <form id="addDocumentForm">
        <div class="form-group">
          <label for="documentUpload">Document Name:</label>
          <div class="form-group-input">
            <span id="fileNameDisplay">No file chosen</span>
            <label for="documentUpload" class="file-upload-label">
              Attach File <i class='bx bx-paperclip'></i>
            </label>
            <input type="file" id="documentUpload" class="file-input" required>
          </div>
        </div>
        <div class="form-group">
          <label for="documentDate">Date Received:</label>
          <div class="form-group-input">
            <input type="text" id="documentDate" placeholder="MM / DD / YYYY" onfocus="(this.type='date')" required>
          </div>
        </div>
        <div class="form-group">
          <label for="recipientSender">${
            currentTab === "outgoing" ? "Recipient:" : "Sender:"
          }</label>
          <div class="form-group-input">
            <input type="text" id="recipientSender" required>
          </div>
        </div>
        <div class="form-group">
          <label for="address">Address:</label>
          <div class="form-group-input">
            <input type="text" id="address" required>
          </div>
        </div>
        <div class="form-buttons">
          <button type="button" class="cancel-button" onclick="closeModal()">Cancel</button>
          <button type="submit" class="confirm-button">Confirm</button>
        </div>
      </form>
    </div>
  `;

  // Handle file name display
  const fileInput = document.getElementById("documentUpload");
  const fileNameDisplay = document.getElementById("fileNameDisplay");

  fileInput.addEventListener("change", function () {
    if (fileInput.files.length > 0) {
      fileNameDisplay.textContent = fileInput.files[0].name;
    } else {
      fileNameDisplay.textContent = "No file chosen";
    }
  });

  document
    .getElementById("addDocumentForm")
    .addEventListener("submit", handleFormSubmit);
}

function handleFormSubmit(e) {
  e.preventDefault();
  const newDoc = {
    name: document.getElementById("documentName").value,
    date: document.getElementById("documentDate").value,
  };
  if (currentTab === "outgoing") {
    outgoingDocuments.unshift(newDoc);
  } else {
    incomingDocuments.unshift(newDoc);
  }
  renderDocuments();
  closeModal();
  this.reset();
}

// Initial render
renderGreeting();
renderDocumentArea();

// Update greeting every minute
setInterval(renderGreeting, 60000);

document.querySelectorAll(".sidebar-links a").forEach((link) => {
  link.addEventListener("click", function () {
    document
      .querySelectorAll(".sidebar-links a")
      .forEach((item) => item.classList.remove("active"));
    this.classList.add("active");
  });
});


function ongoingIngoingTab(tab) {
  // Hide both tabs first
  document.getElementById('outgoing').style.display = 'none';
  document.getElementById('incoming').style.display = 'none';
  
  // Show the selected tab
  document.getElementById(tab).style.display = 'block';
  
  // Update button styles for active tab
  document.getElementById('ongoingTab').classList.toggle('btnActive', tab === 'outgoing');
  document.getElementById('ingoingTab').classList.toggle('btnActive', tab === 'incoming');
}
