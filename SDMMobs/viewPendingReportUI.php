<style>
.container
{
  position: relative;
  text-align: center;
}

.vertical-center {
  margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  text-align: center;
}

.button
{
  background-color: #555555;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 12px;
}

.buttonBack:hover
{
  background-color: #b1b1b1;
  color: black;
}
</style>

<?php
	include_once("controller/viewPendingReportController.php");

	$rptCtrl = new viewPendingReportController();
	$rptCtrl->getPending();

?>
<br>
<div class="container">
    <button class="button buttonBack" value="Back" onclick="history.back(-1)">Back</button>
</div>
<br>