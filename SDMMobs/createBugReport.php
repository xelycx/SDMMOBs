<?php
// Include config file
include_once("controller/CreateBugReportController.php");

session_start();

// Define variables and initialize with empty values

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

    //insert to db
	$br_crtl = new CreateBugReportController();
	$br_crtl->createBugReport($input_title, $input_description, $input_severityLvl);

	if ($check)
	{
        $createBr_success = "Bug Report has been successfully created!";
    }
    else if($br->getUsername() == "")
        $createBr_success = "Failed to create Bug Report";

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
                            <label for="severityLvl">Severity Level</label>
							<br>
							<select id="severityLvl" name="severityLvl">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
                            <span class="help-block"><?php echo $severityLvl_err;?></span>
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