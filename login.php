$reportType = $_POST['reportType'];

if ($reportType == 'Organisation') {
  // Redirect to the organizational report page
  header('Location: organizational_report.html');
  exit(); // Make sure to include the exit() function after the header() to stop further execution
} else if ($reportType == 'Employee') {
  // Redirect to the employee report page
  header('Location: employee_report.html');
  exit(); // Make sure to include the exit() function after the header() to stop further execution
} else {
  // Invalid report type
  echo "Invalid report type.";
}
