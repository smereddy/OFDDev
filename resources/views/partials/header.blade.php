<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        OFD-Wellness
    </title>

    <link rel="icon" type="image/png" href="{{ url('img') }}/favicons/favicon-32x32.png" sizes="32x32">


    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0"
          name="viewport"/>
    <meta http-equiv="Content-type"
          content="text/html; charset=utf-8">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all"
          rel="stylesheet"
          type="text/css"/>
    

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css"/>
    
    <link rel="stylesheet" href="{{ url('css') }}/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{ url('css') }}/bootstrap-table.min.css"/>
    <link rel="stylesheet" href="{{ url('css') }}/dashboard.css"/>

</head>
<style>
    .fileUpload {
        position: relative;
        overflow: hidden;

    }
    .fileUpload .upload {
        position: absolute;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
    }
</style>
<body class="page-header-fixed">