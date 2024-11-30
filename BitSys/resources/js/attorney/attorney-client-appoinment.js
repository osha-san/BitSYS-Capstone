document.querySelectorAll('.navbar ul li').forEach(item => {
    item.addEventListener('click', function() {
        document.querySelectorAll('.navbar ul li').forEach(el => el.classList.remove('active'));        
        this.classList.add('active');
    });
});

document.querySelectorAll('.navbar ul li').forEach(item => {
  item.addEventListener('click', function() {
      document.querySelectorAll('.navbar ul li').forEach(el => el.classList.remove('active'));        
      this.classList.add('active');
  });
});

//function

const calendarGrid = document.getElementById("calendarGrid");
const currentMonthElement = document.getElementById("currentMonth");
const prevMonthButton = document.getElementById("prevMonth");
const nextMonthButton = document.getElementById("nextMonth");
const appointmentForm = document.getElementById("appointmentForm");
const appointmentPreview = document.getElementById("appointmentPreview");

const currentDateDisplay = document.getElementById("current-date");
const today = new Date().toLocaleDateString("en-US", {
year: "numeric",
month: "long",
day: "numeric",
});
currentDateDisplay.textContent = today;

let currentDate = new Date();
let selectedDate = null;
let previousSelectedDayElement = null;

const todayDate = new Date("2024-10-25");
todayDate.setHours(0, 0, 0, 0);

function toggleFormInputs(disable) {
const formElements = appointmentForm.elements;
for (let i = 0; i < formElements.length; i++) {
  formElements[i].disabled = disable;
}
}

// Function to generate unavailable dates based on current date and month
function generateUnavailableDates(year, month) {
const unavailable = [];
const daysInMonth = new Date(year, month + 1, 0).getDate();

// Calculate the first available day (3 weekdays after today's date)
let weekdaysCount = 0; // Count of weekdays
let firstAvailableDay = new Date(todayDate);

// Loop to find the first available weekday
while (weekdaysCount < 3) {
  firstAvailableDay.setDate(firstAvailableDay.getDate() + 1); // Move to the next day
  const dayOfWeek = firstAvailableDay.getDay();

  // Count only weekdays (Mon-Fri)
  if (dayOfWeek !== 0 && dayOfWeek !== 6) {
    weekdaysCount++;
  }
}

for (let day = 1; day <= daysInMonth; day++) {
  const currentDay = new Date(year, month, day);

  // Skip weekends (Saturday or Sunday)
  const dayOfWeek = currentDay.getDay();
  if (dayOfWeek === 0 || dayOfWeek === 6) {
    continue; // Weekends are not available
  }

  // If the current day is before the first available day, mark it as unavailable
  if (currentDay < firstAvailableDay) {
    unavailable.push(day);
  }
}

return unavailable;
}

function renderCalendar() {
const year = currentDate.getFullYear();
const month = currentDate.getMonth();
const firstDay = new Date(year, month, 1).getDay();
const daysInMonth = new Date(year, month + 1, 0).getDate();

currentMonthElement.textContent = `${currentDate.toLocaleString("default", {
  month: "long",
})} ${year}`;

calendarGrid.innerHTML = "";

const dayNames = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
dayNames.forEach((day) => {
  const dayElement = document.createElement("div");
  dayElement.textContent = day;
  dayElement.style.fontWeight = "bold";
  calendarGrid.appendChild(dayElement);
});

// Generate unavailable dates for the current month
const unavailableDates = generateUnavailableDates(year, month);

for (let i = 0; i < firstDay; i++) {
  calendarGrid.appendChild(document.createElement("div")); // Empty divs for alignment
}

for (let day = 1; day <= daysInMonth; day++) {
  const dayElement = document.createElement("div");
  dayElement.textContent = day;
  dayElement.classList.add("calendar-day");

  const currentDay = new Date(year, month, day);

  // Skip weekends (closed, but not marked as unavailable)
  const dayOfWeek = currentDay.getDay();
  if (dayOfWeek === 0 || dayOfWeek === 6) {
    dayElement.classList.add("weekend");
    dayElement.style.cursor = "not-allowed";
    calendarGrid.appendChild(dayElement);
    continue;
  }

  // Disable past dates and dates before the first available day
  if (currentDay < todayDate) {
    dayElement.classList.add("past"); // Mark as past
    dayElement.style.cursor = "not-allowed"; // Change cursor style
  } else if (
    unavailableDates.includes(day) &&
    currentDay.getTime() !== todayDate.getTime()
  ) {
    dayElement.classList.add("unavailable"); // Mark as unavailable
    dayElement.style.cursor = "not-allowed"; // Change cursor style
  } else {
    // Highlight today's date
    if (currentDay.getTime() === todayDate.getTime()) {
      dayElement.classList.add("today");
      dayElement.style.backgroundColor = "#4caf50"; // Green background for today
      dayElement.style.color = "white";
      dayElement.style.cursor = "not-allowed"; // Make today unselectable
    } else {
      // Make valid appointment days clickable
      dayElement.addEventListener("click", () => {
        selectDate(currentDay, dayElement);
      });
    }
  }

  calendarGrid.appendChild(dayElement);
}

// Disable the previous month button if we're in the current month or earlier
if (
  currentDate.getFullYear() === todayDate.getFullYear() &&
  currentDate.getMonth() <= todayDate.getMonth()
) {
  prevMonthButton.disabled = true;
} else {
  prevMonthButton.disabled = false;
}
}

// Update the background based on selected date
function updateBackground() {
const calendarContainer = document.querySelector(".calendar-container");
const appointmentFormContainer = document.querySelector(".appointment-form");

if (selectedDate) {
  calendarContainer.classList.add("selecting");
  appointmentFormContainer.classList.add("selected");
} else {
  calendarContainer.classList.remove("selecting");
  appointmentFormContainer.classList.remove("selected");
}
}

// Update selected date
function selectDate(date, dayElement) {
if (previousSelectedDayElement) {
  previousSelectedDayElement.style.backgroundColor = "";
  previousSelectedDayElement.style.color = "";
}

selectedDate = date;
dayElement.style.backgroundColor = "blue";
dayElement.style.color = "white";
previousSelectedDayElement = dayElement;

updateBackground();
toggleFormInputs(false); // Enable form inputs
updateAppointmentPreview();
}

// Update appointment preview
function updateAppointmentPreview() {
const requiredFields = [
  "time",
  "appointmentType",
  "mode",
  "practiceArea",
  "lawyer",
  "notes",
];

const formData = new FormData(appointmentForm);
let allFieldsComplete = true;

requiredFields.forEach((field) => {
  if (!formData.get(field)) {
    allFieldsComplete = false;
  }
});

if (selectedDate && allFieldsComplete) {
  const previewText = `Date: ${selectedDate.toDateString()}\nTime: ${
    formData.get("time") || "Not selected"
  }\nAppointment Type: ${
    formData.get("appointmentType") || "Not selected"
  }\nMode: ${formData.get("mode") || "Not selected"}\nPractice Area: ${
    formData.get("practiceArea") || "Not selected"
  }\nLawyer: ${formData.get("lawyer") || "Not selected"}\nNotes: ${
    formData.get("notes") || "No notes"
  }`;
  appointmentPreview.textContent = previewText;
} else if (selectedDate && !allFieldsComplete) {
  appointmentPreview.textContent = "Please complete all fields.";
} else {
  appointmentPreview.textContent = "Please select a date on the calendar.";
}
}

// Event listeners for buttons
prevMonthButton.addEventListener("click", () => {
currentDate.setMonth(currentDate.getMonth() - 1);
renderCalendar();
});

nextMonthButton.addEventListener("click", () => {
currentDate.setMonth(currentDate.getMonth() + 1);
renderCalendar();
});

// Event listener for form change
appointmentForm.addEventListener("change", () => {
updateAppointmentPreview();
updateBackground();
});

// Event listener for form submission
appointmentForm.addEventListener("submit", (e) => {
e.preventDefault();
if (selectedDate) {
  alert("Appointment request submitted!");
} else {
  alert("Please select a date before submitting.");
}
});

// Make sure to call updateBackground() when the page loads
document.addEventListener("DOMContentLoaded", () => {
renderCalendar();
updateBackground(); // Initial background setup
toggleFormInputs(true); // Disable form inputs initially
});

renderCalendar();

document.querySelectorAll(".sidebar-links a").forEach((link) => {
link.addEventListener("click", function () {
  // Remove active class from all links
  document
    .querySelectorAll(".sidebar-links a")
    .forEach((item) => item.classList.remove("active"));

  // Add active class to the clicked link
  this.classList.add("active");
});
});
