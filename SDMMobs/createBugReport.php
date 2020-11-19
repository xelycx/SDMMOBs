<?php
// Include config file
include_once("entity/class.BugReport.php");
include_once("entity/class.BugReporter.php");
 
// Define variables and initialize with empty values
$tmp_bugReport = new BugReport();

$name = $address = $salary = "";
$name_err = $address_err = $salary_err = "";

$title = $description = $severityLvl = $reporter = "";
$title_err = $description_err = $severityLvl_err = $reporter_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    //validate data
    // Validate title
    $input_title = trim($_POST["title"]);
    if(empty($input_title)){ $title_err = "Please enter an title."; }
    else{ $title = $input_title; }

    // Validate description
    $input_description = trim($_POST["description"]);
    if(empty($input_description)){ $description_err = "Please enter an description."; }
    else{ $description = $input_description; }

    // Validate severityLvl
    $input_severityLvl = trim($_POST["severityLvl"]);
    if(empty($input_severityLvl)) { $severityLvl_err = "Please enter the Severity Level ."; }
    elseif(!ctype_digit($input_severityLvl)) { $severityLvl_err = "Please enter a positive integer value."; }
    else { $severityLvl = $input_severityLvl; }

    // Validate reporter
    $input_reporter = trim($_POST["reporter"]);
    if(empty($input_reporter)){ $reporter_err = "Please enter an reporter."; }
    else{ $reporter = $input_reporter; }
    
    // // Check input errors before inserting in database
    // if(empty($name_err) && empty($address_err) && empty($salary_err)){
    //     // Prepare an insert statement
    //     $sql = "INSERT INTO employees (name, address, salary) VALUES (?, ?, ?)";
 
    //     if($stmt = $mysqli->prepare($sql)){
    //         // Bind variables to the prepared statement as parameters
    //         $stmt->bind_param("sss", $param_name, $param_address, $param_salary);
            
    //         // Set parameters
    //         $param_name = $name;
    //         $param_address = $address;
    //         $param_salary = $salary;
            
    //         // Attempt to execute the prepared statement
    //         if($stmt->execute()){
    //             // Records created successfully. Redirect to landing page
    //             header("location: index.php");
    //             exit();
    //         } else{
    //             echo "Something went wrong. Please try again later.";
    //         }
    //     }
         
    //     // Close statement
    //     $stmt->close();
    // }
    
    // // Close connection
    // $mysqli->close();


    // ($bug_id, $input_title, $input_description, $input_status,
    //                                      $input_openDate, $input_closeDate, $input_severityLvl,
    //                                       $input_reporter, $input_triager, $input_developer, $input_reviewer);

    //insert to db
    $tmp_bugReport->CreateBugReport($input_reporter, $input_title, $input_description, $input_severityLvl);

    $reporter = $input_reporter;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Bug Report</h2>
                    </div>
                    <p>Please fill this form and submit to add bug report to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($title_err)) ? 'has-error' : ''; ?>">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="">
                            <span class="help-block"><?php echo $title_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($description_err)) ? 'has-error' : ''; ?>">
                            <label>Description</label>
                            <textarea name="description" class="form-control"></textarea>
                            <span class="help-block"><?php echo $description_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($severityLvl_err)) ? 'has-error' : ''; ?>">
                            <label>Severity level</label>
                            <input type="text" name="severityLvl" class="form-control" value="">
                            <span class="help-block"><?php echo $severityLvl_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($reporter_err)) ? 'has-error' : ''; ?>">
                            <label>Reporter</label>
                            <input type="text" name="reporter" class="form-control" value="<?php echo $reporter; ?>">
                            <span class="help-block"><?php echo $reporter_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="brhome.php" class="btn btn-default">Cancel</a>
                        <!--index.php  -->
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>