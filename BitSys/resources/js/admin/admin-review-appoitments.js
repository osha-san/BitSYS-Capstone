document.querySelectorAll('.navbar ul li').forEach(item => {
  item.addEventListener('click', function() {
      document.querySelectorAll('.navbar ul li').forEach(el => el.classList.remove('active'));        
      this.classList.add('active');
  });
});


document.addEventListener("DOMContentLoaded", function () {
  const appointments = [
    {
      id: 1,
      clientName: "Kirsha Garcia",
      appointmentType: "Consultation",
      practiceArea: "Labor Law",
      date: "08/28/2024",
      time: "P.M.",
      assignTo: "",
      status: "Pending",
      notes:
        "Client is concerned about recent changes in company policy. Wants to discuss potential wrongful termination case. Bring employment contract to meeting.",
    },
    {
      id: 2,
      clientName: "Michelle Jackson",
      appointmentType: "Retainer",
      practiceArea: "Corporate",
      date: "09/01/2024",
      time: "P.M.",
      assignTo: "",
      status: "Pending",
      notes:
        "New startup seeking legal advice on incorporation and IP protection. Prepare overview of business structure options and trademark process.",
    },
    {
      id: 3,
      clientName: "Rochelle Roxas",
      appointmentType: "Consultation",
      practiceArea: "Uncertain",
      date: "09/01/2024",
      time: "A.M.",
      assignTo: "",
      status: "Pending",
      notes:
        "Initial consultation to determine legal needs. Client mentioned issues with landlord and possible small claims court case. Review tenant rights before meeting.",
    },
    {
      id: 3,
      clientName: "Rochelle Roxas",
      appointmentType: "Consultation",
      practiceArea: "Uncertain",
      date: "09/01/2024",
      time: "A.M.",
      assignTo: "",
      status: "Pending",
      notes:
        "Initial consultation to determine legal needs. Client mentioned issues with landlord and possible small claims court case. Review tenant rights before meeting.",
    },

    {
      id: 3,
      clientName: "Rochelle Roxas",
      appointmentType: "Consultation",
      practiceArea: "Uncertain",
      date: "09/01/2024",
      time: "A.M.",
      assignTo: "",
      status: "Pending",
      notes:
        "Initial consultation to determine legal needs. Client mentioned issues with landlord and possible small claims court case. Review tenant rights before meeting.",
    },

    {
      id: 3,
      clientName: "Rochelle Roxas",
      appointmentType: "Consultation",
      practiceArea: "Uncertain",
      date: "09/01/2024",
      time: "A.M.",
      assignTo: "",
      status: "Pending",
      notes:
        "Initial consultation to determine legal needs. Client mentioned issues with landlord and possible small claims court case. Review tenant rights before meeting.",
    },

    {
      id: 3,
      clientName: "Rochelle Roxas",
      appointmentType: "Consultation",
      practiceArea: "Uncertain",
      date: "09/01/2024",
      time: "A.M.",
      assignTo: "",
      status: "Pending",
      notes:
        "Initial consultation to determine legal needs. Client mentioned issues with landlord and possible small claims court case. Review tenant rights before meeting.",
    },

    {
      id: 3,
      clientName: "Rochelle Roxas",
      appointmentType: "Consultation",
      practiceArea: "Uncertain",
      date: "09/01/2024",
      time: "A.M.",
      assignTo: "",
      status: "Pending",
      notes:
        "Initial consultation to determine legal needs. Client mentioned issues with landlord and possible small claims court case. Review tenant rights before meeting.",
    },
    {
      id: 3,
      clientName: "Rochelle Roxas",
      appointmentType: "Consultation",
      practiceArea: "Uncertain",
      date: "09/01/2024",
      time: "A.M.",
      assignTo: "",
      status: "Pending",
      notes:
        "Initial consultation to determine legal needs. Client mentioned issues with landlord and possible small claims court case. Review tenant rights before meeting.",
    },
    {
      id: 3,
      clientName: "Rochelle Roxas",
      appointmentType: "Consultation",
      practiceArea: "Uncertain",
      date: "09/01/2024",
      time: "A.M.",
      assignTo: "",
      status: "Pending",
      notes:
        "Initial consultation to determine legal needs. Client mentioned issues with landlord and possible small claims court case. Review tenant rights before meeting.",
    },
    {
      id: 3,
      clientName: "Rochelle Roxas",
      appointmentType: "Consultation",
      practiceArea: "Uncertain",
      date: "09/01/2024",
      time: "A.M.",
      assignTo: "",
      status: "Pending",
      notes:
        "Initial consultation to determine legal needs. Client mentioned issues with landlord and possible small claims court case. Review tenant rights before meeting.",
    },
    {
      id: 3,
      clientName: "Rochelle Roxas",
      appointmentType: "Consultation",
      practiceArea: "Uncertain",
      date: "09/01/2024",
      time: "A.M.",
      assignTo: "",
      status: "Pending",
      notes:
        "Initial consultation to determine legal needs. Client mentioned issues with landlord and possible small claims court case. Review tenant rights before meeting.",
    },
    {
      id: 3,
      clientName: "Rochelle Roxas",
      appointmentType: "Consultation",
      practiceArea: "Uncertain",
      date: "09/01/2024",
      time: "A.M.",
      assignTo: "",
      status: "Pending",
      notes:
        "Initial consultation to determine legal needs. Client mentioned issues with landlord and possible small claims court case. Review tenant rights before meeting.",
    },
  ];

  const attorneys = [
    "Atty. Sample1",
    "Atty. Sample2",
    "Atty. Sample3",
    "Atty. Sample4",
  ];
  const defaultMode = "@DMT Law Office";

  let currentAppointmentId = null;

  function renderAppointments() {
    const tableBody = document.getElementById("appointmentsTableBody");
    tableBody.innerHTML = "";

    appointments.forEach((appointment) => {
      const row = document.createElement("tr");
      row.innerHTML = `
                <td>${appointment.clientName}</td>
                <td>${appointment.appointmentType}</td>
                <td>${appointment.practiceArea}</td>
                <td>${appointment.date}</td>
                <td>${appointment.time}</td>
                <td class="assign-to"> 
              <span class="attorney">${appointment.assignTo || "Atty Sample 1"}</span>
              <select class="attorney-select" style="display: none;">
                  ${attorneys.map((attorney) => `<option value="${attorney}">${attorney}</option>`).join("")}
              </select>
          </td>
                <td>
                    ${
                      appointment.status === "Pending"
                        ? `
                        <button class="accept-btn" data-id="${appointment.id}">Accept</button>
                        <button class="reject-btn" data-id="${appointment.id}">Reject</button>
                    `
                        : `<span class="status-${appointment.status.toLowerCase()}">${
                            appointment.status
                          }</span>`
                    }
                </td>
                <td>
                    <div class="more-options" data-id="${appointment.id}">
                        ...
                        <div class="more-options-content">
                            <div class="mode">Mode: ${defaultMode}</div>
                            <div class="note">Notes: ${appointment.notes}</div>
                        </div>
                    </div>
                </td>
            `;
      tableBody.appendChild(row);
    });

    // Add event listeners
    document.querySelectorAll(".assign-dropdown-content a").forEach((item) => {
      item.addEventListener("click", function (e) {
        e.preventDefault();
        assignAttorney(this.dataset.id, this.dataset.attorney);
      });
    });

    document.querySelectorAll(".accept-btn").forEach((item) => {
      item.addEventListener("click", function () {
        acceptAppointment(this.dataset.id);
      });
    });

    document.querySelectorAll(".reject-btn").forEach((item) => {
      item.addEventListener("click", function () {
        showRejectModal(this.dataset.id);
      });
    });

    document.querySelectorAll(".more-options").forEach((item) => {
      item.addEventListener("click", function (e) {
        e.stopPropagation();
        const content = this.querySelector(".more-options-content");
        content.style.display =
          content.style.display === "block" ? "none" : "block";
      });
    });

    // Close more-options when clicking outside
    document.addEventListener("click", function (e) {
      if (!e.target.closest(".more-options")) {
        document.querySelectorAll(".more-options-content").forEach((item) => {
          item.style.display = "none";
        });
      }
    });

    document.querySelectorAll(".assign-dropdown").forEach((item) => {
      item.addEventListener("click", function (e) {
        e.stopPropagation();
        this.querySelector(".assign-dropdown-content").classList.toggle("show");
      });
    });

    // Close assign-dropdown when clicking outside
    document.addEventListener("click", function () {
      document.querySelectorAll(".assign-dropdown-content").forEach((item) => {
        item.classList.remove("show");
      });
    });
  }

  function assignAttorney(appointmentId, attorney) {
    const appointment = appointments.find(
      (a) => a.id === parseInt(appointmentId)
    );
    if (appointment) {
      appointment.assignTo = attorney;
      renderAppointments();
    }
  }

  function acceptAppointment(appointmentId) {
    const appointment = appointments.find(
      (a) => a.id === parseInt(appointmentId)
    );
    if (appointment && appointment.assignTo) {
      appointment.status = "Accepted";
      renderAppointments();
    } else {
      showWarning();
    }
  }

  function showWarning() {
    const warningBox = document.getElementById("warningBox");
    warningBox.style.display = "block";
    setTimeout(() => {
      warningBox.style.display = "none";
    }, 3000);
  }

  function showRejectModal(appointmentId) {
    currentAppointmentId = parseInt(appointmentId);
    document.getElementById("confirmModal").style.display = "block";
  }

  function rejectAppointment() {
    if (currentAppointmentId) {
      const appointment = appointments.find(
        (a) => a.id === currentAppointmentId
      );
      if (appointment) {
        appointment.status = "Rejected";
        renderAppointments();
      }
    }
    document.getElementById("confirmModal").style.display = "none";
  }

  document
    .getElementById("confirmReject")
    .addEventListener("click", rejectAppointment);

  document.getElementById("cancelReject").addEventListener("click", () => {
    document.getElementById("confirmModal").style.display = "none";
  });

  renderAppointments();
});

document.querySelectorAll(".sidebar-links a").forEach((link) => {
  link.addEventListener("click", function () {
    document
      .querySelectorAll(".sidebar-links a")
      .forEach((item) => item.classList.remove("active"));
    this.classList.add("active");
  });
});

// Edit, Save, and Cancel functionality
const editButton = document.getElementById("edit");
const saveButton = document.getElementById("save");
const cancelButton = document.getElementById("cancel");

editButton.addEventListener("click", function () {
  toggleEditMode(true);
});

saveButton.addEventListener("click", function () {
  // Update attorney assignment and hide dropdowns
  document.querySelectorAll(".assign-to").forEach((cell) => {
      const attorneyText = cell.querySelector(".attorney");
      const attorneySelect = cell.querySelector(".attorney-select");

      // Update the text with the selected value
      attorneyText.textContent = attorneySelect.value;
      attorneyText.style.display = "inline";
      attorneySelect.style.display = "none";
  });
  toggleEditMode(false);
});

cancelButton.addEventListener("click", function () {
  toggleEditMode(false);
});

function toggleEditMode(editMode) {
  editButton.style.display = editMode ? "none" : "inline-block";
  saveButton.style.display = editMode ? "inline-block" : "none";
  cancelButton.style.display = editMode ? "inline-block" : "none";

  // Show or hide dropdowns for each attorney cell
  document.querySelectorAll(".assign-to").forEach((cell) => {
      const attorneyText = cell.querySelector(".attorney");
      const attorneySelect = cell.querySelector(".attorney-select");

      if (editMode) {
          attorneyText.style.display = "none";
          attorneySelect.style.display = "inline";
          // Set the dropdown to the current assigned value
          attorneySelect.value = attorneyText.textContent === "Assign to" ? "" : attorneyText.textContent;
      } else {
          attorneyText.style.display = "inline";
          attorneySelect.style.display = "none";
      }
  });
}