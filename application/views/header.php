<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Task</title>

    <!-- Bootstrap -->
    <link href="<?php echo site_url('includes/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo site_url('includes/css/font-awesome.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo site_url('includes/css/build.css');?>"/>
     <link href="<?php echo site_url('includes/css/select2.min.css');?>" rel="stylesheet" />
    <link href="<?php echo site_url();?>includes/css/style.css" rel="stylesheet">
   
    
    <!-- CalendarStyle -->

    
    <!-- Notifications -->
    <link href="<?php echo site_url('includes/css/notify-metro.css');?>" rel="stylesheet" />
    
    <link href="<?php echo base_url('includes/css/bootstrap-datepicker.css');?>" rel="stylesheet" /> 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body onLoad="notify('white');">
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button> 
      
      <a class="navbar-brand" href="#"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Organization<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('company.php');?>">Companies</a></li>
            <li><a href="#">Branches</a></li>
            <li><a href="#">Departments</a></li>
            <li><a href="<?php echo site_url('employee/employeeSearch');?>">Employees</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Policy</a></li>
            <li><a href="#">Announcements</a></li>
            <li><a href="#">News</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Employees<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('permission.php');?>">Permissions</a></li>
            <li><a href="<?php echo site_url('memo.php');?>">Memos</a></li>
            <li><a href="<?php echo site_url('mission.php');?>">Missions</a></li>
            <li><a href="<?php echo site_url('transfere.php');?>">Transfers</a></li>
            <li><a href="<?php echo site_url('overtime.php');?>">Overtime</a></li>
            <li><a href="<?php echo site_url('evaluation.php');?>">Evaluations</a></li>
            <li><a href="<?php echo site_url('complain.php');?>">Complaints</a></li>
            <li><a href="<?php echo site_url('warning.php');?>">Warnings</a></li>
            <li><a href="<?php echo site_url('promotion.php');?>">Promotions</a></li>
            <li><a href="<?php echo site_url('survey.php');?>">Survey</a></li>
            <li><a href="<?php echo site_url('resignation.php');?>">Resignations</a></li>
            
          </ul>
        </li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Work Details<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('attendance.php');?>">Attendance</a></li>
            <li><a href="<?php echo site_url('vacation_list.php');?>">Vacations</a></li>
            <li><a href="<?php echo site_url('holiday.php');?>">Holidays</a></li>
            <li><a href="<?php echo site_url('hours.php');?>">Employee Hours</a></li>
            <li><a href="<?php echo site_url('worksheet.php');?>">Worksheet</a></li>
          </ul>
        </li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Payrolls<span class="caret"></span></a>
          <ul class="dropdown-menu">
          
            <li><a href="<?php echo site_url('salary.php');?>">Salaries</a></li>
            <li><a href="<?php echo site_url('overtime.php');?>">Overtimes</a></li>
            <li><a href="<?php echo site_url('deduction.php');?>">Deductions</a></li>
            <li><a href="<?php echo site_url('bonus.php');?>">Bonuses</a></li>

          </ul>
        </li>
        
        <li><a href="<?php echo site_url('training.php');?>">Training</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Recruitment<span class="caret"></span></a>
          <ul class="dropdown-menu">
          
            <li><a href="#">Job Posts</a></li>
            <li><a href="#">Job Candidates</a></li>
            <li><a href="#">Job Interviews</a></li>
            <li><a href="#">Job Tests</a></li>

          </ul>
        </li>
      
      </ul>
      
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


    <div id="wrapper">
        <div class="overlay"></div>
    
