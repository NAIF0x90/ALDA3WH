<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>المكتب الدعوة بعفيف </title>       
    <meta name="description" content="المكتب التعاوني للدعوة و الارشاد وتوعية الجاليات بمحافظة عفيف"/>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ url('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ url('css/bootstrap-rtl.min.css') }}" rel="stylesheet">
        <link href="{{ url('css/style.css') }}" rel="stylesheet">
        <link href="{{ url('css/home.css') }}" rel="stylesheet">
        <link href="{{ url('css/cairo-font.css') }}" rel="stylesheet">
        <script src="js/moment-hijri.js"></script>
        
        
        </head>
      
      <body>
      
     
      <nav class="navbar navbar-new">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
      

    </div>
    
      <div class="textnavbar">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7 ">
        
           <?php
   $nameday=date("l"); 
  
   switch ($nameday) 
   {
   case "Saturday":  
   $nameday="السبت"; 
   break; 
   case "Sunday":  
   $nameday="الأحد"; 
   break;  
   case "Monday":  
   $nameday="الاثنين"; 
   break; 
   case "Tuesday":  
   $nameday="الثلاثاء"; 
   break; 
   case "Wednesday": 
   $nameday="الأربعاء"; 
   break; 
   case "Thursday":  
   $nameday="الخميس"; 
   break; 
   case "Friday":  
   $nameday="الجمعة"; 
   break;
   }
   
 
   $namedaym=date("F"); 
   
   switch ($namedaym) 
   {
   case "January":  
   $namedaym="يناير"; 
   break; 
   case "February":  
   $namedaym="فبراير"; 
   break;  
   case "March":  
   $namedaym="مارس"; 
   break; 
   case "April":  
   $namedaym="ابريل"; 
   break; 
   case "May": 
   $namedaym="مايو"; 
   break; 
   case "June":  
   $namedaym="يونيو"; 
   break; 
   case "July":  
   $namedaym="يوليو"; 
   break;
   case "August":  
   $namedaym="اغسطس"; 
   break;
   case "September":  
   $namedaym="سبتمبر"; 
   break;
   case "October":  
   $namedaym="اكتوبر"; 
   break;
   case "November":  
   $namedaym="نوفمبر"; 
   break;
   case "December":  
   $namedaym="ديسمبر"; 
   break;
   }
 
 
   echo '  <i class="fa fa-calendar" aria-hidden="true" ></i>&nbsp;&nbsp;' . $nameday . " " . date("j $namedaym Y")  ; 
   
   ?>
  </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5" align="left">
  
        <?php
    # $json_string = file_get_contents("http://api.wunderground.com/api/c464a54a641b4521/geolookup/conditions/lang:AR/q/sa/riyadh.json");
    # $parsed_json = json_decode($json_string);
    #$location = $parsed_json->{'location'}->{'city'};
    #$temp_c = $parsed_json->{'current_observation'}->{'temp_c'};
    #echo "Current temperature in ${location} is: ${temp_c}\n";
    
    
    $key = "3ad9bd34f0c84d83a11161329172612";
      $city = 'afif';
      $forcast_days='1';
      $url = "http://api.apixu.com/v1/forecast.json?lang=AR&key=$key&q=$city&days=" ;
      
      $ch = curl_init();  
      curl_setopt($ch,CURLOPT_URL,$url);
      curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
      
      $json_output=curl_exec($ch);
      $weather = json_decode($json_output);
      
      
      $days = $weather->forecast->forecastday;
      
      foreach ($days as $day){
            
          echo "  عفيف ";
          echo   "ْ" . $weather->current->temp_c;
          
          echo  "<img style='width:30px;' src=' {$day->day->condition->icon}'/></td></tr>";
              
          
      }
      ?>
      </div>      
      </div>
      </nav>






      <div class="container">
        <div class="row">
        <div class="top_bar">
      
      
        <br>
            <center>
            <div class="col-md-3 col-sm-4 col-xs-12   ">
                  <img src="{{ ('images/logo.png') }}" width="303px;" >
                 </div>
            
                 <div class="col-md-6 col-sm-3 col-xs-12 ">
                
                 </div>


            <div class="col-md-3 col-sm-5 col-xs-12 ">

            <iframe id="iframe1" style="background: rgb(255, 255, 255); border: none; width: 100%; overflow: hidden; height: 159px;" src="https://timesprayer.today/widget_frame.php?frame=1&amp;id=4&amp;sound=false&amp;changecity=false&amp;theme=w3-green" __idm_frm__="200"></iframe></div>
                </center>
                  <br> 
    </div>
      </div>
      
      
      
      <nav class="navbar navbar- navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            
               <li class="active" > <a href="Home"><span class="glyphicon glyphicon-home"></span>&nbspالرئيسية<span class="sr-only">(current)</span></a></li>
       <li ><a href="About"><i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp عن المكتب و اعمالة</a></li>
          <li><a href="Library"><i class="fa fa-bookmark" aria-hidden="true"></i>&nbsp المكتبة</a></li>
              
            </ul>
        </div>
      
      </nav>
