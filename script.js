document
  .getElementById("login-form")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form submission

    var reportType = document.getElementById("report-type").value;

    if (reportType === "organisation") {
      // Redirect to the organizational report page
      window.location.href = "organizational_report.html";
    } else if (reportType === "employee") {
      // Redirect to the employee report page
      window.location.href = "employee_report.html";
    }
  });
