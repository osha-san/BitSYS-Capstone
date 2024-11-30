document.querySelectorAll('.navbar ul li').forEach(item => {
    item.addEventListener('click', function() {
        document.querySelectorAll('.navbar ul li').forEach(el => el.classList.remove('active'));        
        this.classList.add('active');
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const tabs = document.querySelectorAll(".tab");
    const sections = document.querySelectorAll(".section");
  
    tabs.forEach((tab) => {
      tab.addEventListener("click", function () {
        const sectionId = this.dataset.section;
        if (sectionId) {
          tabs.forEach((t) => t.classList.remove("active"));
          sections.forEach((section) => {
            section.classList.remove("active");
            section.style.display = "none";
          });
  
          this.classList.add("active");
          const activeSection = document.getElementById(sectionId);
          activeSection.classList.add("active");
          activeSection.style.display = "grid";
        }
      });
    });
  
    const modal = document.getElementById("appointmentModal");
    const span = document.getElementsByClassName("close")[0];
  
    span.onclick = function () {
      modal.style.display = "none";
    };
  
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    };
  
    const notifications = document.querySelectorAll(".notification");
    notifications.forEach((notification) => {
      notification.addEventListener("click", function () {
        modal.style.display = "block";
      });
    });
  
    const editProfileBtn = document.getElementById("editProfileBtn");
const profileImageInput = document.getElementById("uploadProfilePic");

editProfileBtn.addEventListener("click", function () {
  const infoSections = document.querySelectorAll(".info-section");
  
  infoSections.forEach((section) => {
    const infoItems = section.querySelectorAll(".info-item");
    infoItems.forEach((item) => {
      const label = item.querySelector("label").textContent;
      const value = item.querySelector("div").textContent;

      // Include address fields as editable
      if (
        ["First Name", "Last Name", "Email address", "Phone", "Country", "City", "Province/Region", "Postal Code"].includes(label)
      ) {
        item.querySelector("div").innerHTML = `<input type="${
          label === "Email address" ? "email" : "text"
        }" value="${value}">`;
      }
    });
  });

  this.textContent = "Save";
  this.onclick = saveProfile;

  profileImageInput.style.display = "block";
  profileImageInput.onchange = function (event) {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        document.querySelector("#profileImage img").src = e.target.result;
      };
      reader.readAsDataURL(file);
    }
  };
});

function saveProfile() {
  const infoSections = document.querySelectorAll(".info-section");
  
  infoSections.forEach((section) => {
    const infoItems = section.querySelectorAll(".info-item");
    infoItems.forEach((item) => {
      const label = item.querySelector("label").textContent;
      if (
        ["First Name", "Last Name", "Email address", "Phone", "Country", "City", "Province/Region", "Postal Code"].includes(label)
      ) {
        const input = item.querySelector("input");
        item.querySelector("div").innerHTML = input.value;
      }
    });
  });

  // Update profile name
  document.querySelector(".profile-name").textContent = `${
    document.querySelector(".info-item:nth-child(1) div").textContent
  } ${document.querySelector(".info-item:nth-child(2) div").textContent}`;

  this.textContent = "Edit"; // Revert button text back to "Edit"
  this.onclick = null; // Remove the saveProfile function
  profileImageInput.style.display = "none"; // Hide the profile picture upload input
}


  // Update profile name
  document.querySelector(".profile-name").textContent = `${
    document.querySelector(".info-item:nth-child(1) div").textContent
  } ${document.querySelector(".info-item:nth-child(2) div").textContent}`;

  this.textContent = "Edit";
  this.onclick = null;

  profileImageInput.style.display = "none";
  
    const deleteAccountBtn = document.getElementById("deleteAccount");
    const deleteAccountModal = document.getElementById("deleteAccountModal");
    const deleteAccountClose = deleteAccountModal.querySelector(".close");
    const confirmDeleteAccountBtn = document.getElementById(
      "confirmDeleteAccount"
    );
  
    deleteAccountBtn.addEventListener("click", function () {
      deleteAccountModal.style.display = "block";
    });
  
    deleteAccountClose.onclick = function () {
      deleteAccountModal.style.display = "none";
    };
  
    confirmDeleteAccountBtn.addEventListener("click", function () {
      const password = document.getElementById("deleteAccountPassword").value;
      if (password) {
        alert("Account deleted successfully");
        deleteAccountModal.style.display = "none";
      } else {
        alert("Please enter your password to confirm account deletion");
      }
    });
  
    window.onclick = function (event) {
      if (event.target == deleteAccountModal) {
        deleteAccountModal.style.display = "none";
      }
    };
  });
  
  document.querySelectorAll(".sidebar-links a").forEach((link) => {
    link.addEventListener("click", function () {
      document
        .querySelectorAll(".sidebar-links a")
        .forEach((item) => item.classList.remove("active"));
  
      this.classList.add("active");
    });
  });
  