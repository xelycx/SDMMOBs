<?php
// Include config file
require_once "entity/class.BugReport.php";

session_start();

//echo $_SESSION['user_role'];

// Define variables and initialize with empty values
$title = $description = $status = $openDate = $closeDate = $severityLvl = $reporter = $triager = $developer = $reviewer ="";
$title_err = $description_err = $status_err = $openDate_err = $closeDate_err = $severityLvl_err = $reporter_err = $triager_err = $developer_err = $reviewer_err = "";
$tmp_bugReport = new BugReport();

// Processing form data when form is submitted
if(isset($_POST["bug_id"]) && !empty($_POST["bug_id"])){
    // Get hidden input value
    $bug_id = $_POST["bug_id"];
    
    // // Validate name
    // $input_name = trim($_POST["name"]);
    // if(empty($input_name)){
    //     $name_err = "Please enter a name.";
    // } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
    //     $name_err = "Please enter a valid name.";
    // } else{
    //     $name = $input_name;
    // }

    // Validate title
    $input_title = trim($_POST["title"]);
    if(empty($input_title)){ $title_err = "Please enter an title."; }
    else{ $title = $input_title; }

    // Validate description
    $input_description = trim($_POST["description"]);
    if(empty($input_description)){ $description_err = "Please enter an description."; }
    else{ $description = $input_description; }

    // Validate status
    $input_status = trim($_POST["status"]);
    if(empty($input_status)){ $status_err = "Please enter an status."; }
    else{ $status = $input_status; }

    // Validate openDate
    $input_openDate = trim($_POST["openDate"]);
    if(empty($input_openDate)){ $openDate_err = "Please enter an Open Date."; }
    else{ $openDate = $input_openDate; }

    // Validate closeDate
    $input_closeDate = trim($_POST["closeDate"]);
    if(empty($input_closeDate)){ $closeDate_err = "Please enter an Close Date."; }
    else{ $closeDate = $input_closeDate; }

    // // Validate severityLvl
    // $input_severityLvl = trim($_POST["severityLvl"]);
    // if(empty($input_severityLvl)){ $severityLvl_err = "Please enter an Severity Level."; }
    // else{ $severityLvl = $input_severityLvl; }

    // Validate severityLvl
    $input_severityLvl = trim($_POST["severityLvl"]);
    if(empty($input_severityLvl)) { $severityLvl_err = "Please enter the Severity Level ."; }
    elseif(!ctype_digit($input_severityLvl)) { $severityLvl_err = "Please enter a positive integer value."; }
    else { $severityLvl = $input_severityLvl; }

    // Validate reporter
    $input_reporter = trim($_POST["reporter"]);
    if(empty($input_reporter)){ $reporter_err = "Please enter an reporter."; }
    else{ $reporter = $input_reporter; }

    // Validate triager
    $input_triager = trim($_POST["triager"]);
    if(empty($input_triager)){ $triager_err = "Please enter an triager."; }
    else{ $triager = $input_triager; }

    // Validate developer
    $input_developer = trim($_POST["developer"]);
    if(empty($input_developer)){ $developer_err = "Please enter an developer."; }
    else{ $developer = $input_developer; }

    // Validate reviewer
    $input_reviewer = trim($_POST["reviewer"]);
    if(empty($input_reviewer)){ $reviewer_err = "Please enter an reviewer."; }
    else{ $reviewer = $input_reviewer; }

    $tmp_bugReport->set_id($bug_id);
    $tmp_bugReport->UpdateBugReport($bug_id, $input_title, $input_description, $input_status,
                                     $input_openDate, $input_closeDate, $input_severityLvl,
                                      $input_reporter, $input_triager, $input_developer, $input_reviewer);

}
else
{
    // Check existence of id parameter before processing further
    if(isset($_GET["bug_id"]) && !empty(trim($_GET["bug_id"]))){
        // Get URL parameter
        //retrieve existing values
        $bug_id =  trim($_GET["bug_id"]);
        $result = $tmp_bugReport->ViewBugReport($bug_id);
        $title = $result->bug_title;
        $description = $result->bug_description;
        $status = $result->bug_status;
        $openDate = $result->bug_open_date;
        $closeDate = $result->bug_close_date;
        $severityLvl = $result->bug_severity_lvl;
        $reporter = $result->bug_reporter;
        $triager = $result->bug_triager;
        $developer = $result->bug_developer;
        $reviewer = $result->bug_reviewer;

        // // Prepare a select statement
        // $sql = "SELECT * FROM BugReports WHERE bug_id = ?";
        // if($stmt = $mysqli->prepare($sql)){
        //     // Bind variables to the prepared statement as parameters
        //     $stmt->bind_param("i", $param_id);
            
        //     // Set parameters
        //     $param_id = $bug_id;
            
        //     // Attempt to execute the prepared statement
        //     if($stmt->execute()){
        //         $result = $stmt->get_result();
                
        //         if($result->num_rows == 1){
        //             /* Fetch result row as an associative array. Since the result set
        //             contains only one row, we don't need to use while loop */
        //             $row = $result->fetch_array(MYSQLI_ASSOC);
                    
        //             // Retrieve individual field value
        //             $title = $row["bug_title"];
        //             $description = $row["bug_description"];
        //             $status = $row["bug_status"];
        //         } else{
        //             // URL doesn't contain valid id. Redirect to error page
        //             header("location: error.php");
        //             exit();
        //         }
                
        //     } else{
        //         echo "Oops! Something went wrong. Please try again later.";
        //     }
        // }
        
        // // Close statement
        // $stmt->close();
        

    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Bug Report</title>
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
                        <h2>Update Bug Report</h2>
                    </div>
                    <p>Please edit the input values and submit to update the report.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($title_err)) ? 'has-error' : ''; ?>">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="<?php echo $title; ?>">
                            <span class="help-block"><?php echo $title_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($description_err)) ? 'has-error' : ''; ?>">
                            <label>Description</label>
                            <textarea name="description" class="form-control"><?php echo $description; ?></textarea>
                            <span class="help-block"><?php echo $description_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($status_err)) ? 'has-error' : ''; ?>">
                            <label>Status</label>
                            <input type="text" name="status" class="form-control" value="<?php echo $status; ?>">
                            <span class="help-block"><?php echo $status_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($openDate_err)) ? 'has-error' : ''; ?>">
                            <label>Open Date</label>
                            <input type="text" name="openDate" class="form-control" value="<?php echo $openDate; ?>">
                            <span class="help-block"><?php echo $openDate_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($closeDate_err)) ? 'has-error' : ''; ?>">
                            <label>Close Date</label>
                            <input type="text" name="closeDate" class="form-control" value="<?php echo $closeDate; ?>">
                            <span class="help-block"><?php echo $closeDate_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($severityLvl_err)) ? 'has-error' : ''; ?>">
                            <label>Severity level</label>
                            <input type="text" name="severityLvl" class="form-control" value="<?php echo $severityLvl; ?>">
                            <span class="help-block"><?php echo $severityLvl_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($reporter_err)) ? 'has-error' : ''; ?>">
                            <label>Reporter</label>
                            <input type="text" name="reporter" class="form-control" value="<?php echo $reporter; ?>">
                            <span class="help-block"><?php echo $reporter_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($triager_err)) ? 'has-error' : ''; ?>">
                            <label>Triager</label>
                            <input type="text" name="triager" class="form-control" value="<?php echo $triager; ?>">
                            <span class="help-block"><?php echo $triager_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($developer_err)) ? 'has-error' : ''; ?>">
                            <label>Developer</label>
                            <input type="text" name="developer" class="form-control" value="<?php echo $developer; ?>">
                            <span class="help-block"><?php echo $developer_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($reviewer_err)) ? 'has-error' : ''; ?>">
                            <label>Reviewer</label>
                            <input type="text" name="reviewer" class="form-control" value="<?php echo $reviewer; ?>">
                            <span class="help-block"><?php echo $reviewer_err;?></span>
                        </div>


                        <input type="hidden" name="bug_id" value="<?php echo $bug_id; ?>"/>
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