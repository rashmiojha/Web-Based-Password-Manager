<?php 
session_start();
  if(!isset($_SESSION['login'])):
  header("Location: HomePage.php");
  else:
?>

<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/css/font-awesome.min.css">
  <style>

    .edit_blocks{
      border-top:solid 4px #72c02c;
      margin-top:158px;
        
    }

    .edit_blocks table
    {
      margin-top: 30px;
    }


    .edit_blocks table td{
      padding: 10px 5px 10px 0;
      font-family: 'Oregon LDO';
      color:#222;
      /*text-transform: capitalize;*/
    }

    /*article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section,summary
    {
      display:block
    }
*/
    fieldset,form
    {
      padding:0;
      border:0
    }
    
    *
    {
      line-height:1;
      outline:0
    }

    @font-face{
      font-family:'HelveticaBold';
      font-weight:normal;
      font-style:normal
    }

    @font-face{
      font-family:'HelveticaLight';
      font-weight:normal;
      font-style:normal
    }

    @font-face{
      font-family:'HelveticaRegular';
      font-weight:normal;
      font-style:normal
    }

    @font-face{
      font-family:'HelveticaNeue';
      font-weight:normal;
      font-style:normal
    }
    
    @font-face{
      font-family:'HelveticaNeue';
      font-weight:bold;
      font-style:normal
    }

    @font-face{
      font-family:'dearJoe';
      font-weight:normal;
      font-style:normal
    }

    @font-face{
      font-family:'JournalRegular';
      font-weight:normal;
      font-style:normal
    }

    body{
      font-family: 'Oregon LDO';
      /*font-family:"HelveticaRegular", Helvetica, Arial, Verdana, sans-serif;color:#323232;*/
      -webkit-font-smoothing:antialiased;
    }

    .container
    {
      width:80%;
      margin:0 auto
    }

    #main-header
    {
      background:white;
      padding:20px 0;
    }

    
    #main-header.header-slim
    {
      border-bottom:0;
      -webkit-box-shadow:0 2px 4px rgba(0,0,0,0.12);
      -moz-box-shadow:0 2px 4px rgba(0,0,0,0.12);
      box-shadow:0 2px 4px rgba(0,0,0,0.12)
    }
    #main-header.header-fixed
    {
      position:fixed;
      width:100%;
      top:0;
      left:0;
      z-index:10;
    }

    .main-menu
    {
      font-size:16px;
      letter-spacing:3px;
      word-spacing: 4px;
      line-height:1;
      list-style:none;
      margin:0;
    }

    .main-menu li
    {
      /*font-family:"Open Sans", "HelveticaRegular", Helvetica, Arial, sans-serif;*/
      border-left:3px solid #72c02c;
      float:left;
      padding: 0 12px 0 12px;
      line-height:1;
      font-weight:bold;
    }

    .main-menu a
    {
      color:#323232;
      text-decoration:none;
      text-transform:uppercase;
    }
    
    .main-menu a:hover
    {
      color:#72c02c;
      text-decoration:underline;
    }
    
    .main-menu li.active
    {
      color:#72c02c;
    }

    i{
      color:#72c02c;
      padding: 4px 4px 4px 4px;
    }

    .line{
       border-top:dotted 2px #72c02c;
    }


</style>
</head>

<body>
   <?php
  include_once("header.php");
 ?>
  <div class='container'>
    <div class='edit_blocks'>
      <form id='fq'>
        <center>
          <table>
            <tr>
              <td>Select Category</td>
              <td>
                <select>
                  <option value='0'>--Select--</option>
                  <option value='1'> Feedback </option>
                  <option value='2'> Query </option>
                </select>
            </tr>
            <tr>
              <td>First Name*:</td>
              <td><input class='form-control' name='nm' id='fname'/></td>
            </tr>
            <tr>
              <td>Last Name*:</td>
              <td><input class='form-control' name='lnm' id='lname'/></td>
            </tr>
            <tr>
              <td>10 Digit Phone Number:</td>
              <td><input class='form-control' name='phone' id='phone' data-toggle='tooltip' data-placement='bottom' title='Provide a 10 digit Mobile Number'/></td>
            </tr>
            <tr>
              <td>Account Email:</td>
              <td><input class='form-control' name='email' id='a_email' data-toggle='tooltip' data-placement='bottom' title='Email used to login to your account'/></td>
            </tr>
            <tr>
              <td>Contact Email*:</td>
              <td><input class='form-control' name='cemail' id='c_email' data-toggle='tooltip' data-placement='bottom' title='Email we should use to contact you'/></td>
            </tr>
            <tr>
              <td>Description*:</td>
               <td><textarea class='form-control' name='des' id='desc' rows='5' cols='70'></textarea></td>
            </tr>
            <tr>
              <td><button class='btn btn-success'>Submit</button></td>
            </tr>
          </table>
        </center>
      </form>
    </div>
  </div>
</body>
</html>

<script src='js/jquery.js'></script>
<script src='js/jquery.validate.min.js'></script>

<script type="text/javascript">
$(document).ready(function(){
    $("#fq").validate({
      rules: {
           email:{
              required:true,
              email:true
           } ,
           cemail:{
              required:true,
              email:true
           } ,
           phone: {
              required:true,
              number: true,
              minlength: 10, 
              maxlength: 10 
           },
           nm:{
              required:true,
           },  
           lnm:{
              required:true,
           },
           des:{
              required:true,
           }                     
      },
      messages: {
           email: "Please enter a valid email",

           cemail: "Please enter a valid email",
          
           phone: "Please provide a valid phone number",
           
           nm: "This is a required field",

           lnm: "This is a required field",

           des: "This is a required field"
      },
      submitHandler: function(form) {

          var category = $("select").find("option:selected").val();
          alert(category);
          if(category==0)
          {
            alert("Please select a category");
          }
          else{
            var fname = $("#fname").val();
          var lname = $("#lname").val();
          var a_email = $("#a_email").val();
          var c_email = $("#c_email").val();
          var phone = $("#phone").val();
          var desc = $("#desc").val();
                   
             $.getJSON("http://localhost/SafeHouse/loginchecker.php",{contact:true, category:category, fname:fname, lname:lname, a_email:a_email, c_email:c_email,phone:phone,desc:desc},function(data,status)   
              {
                  console.log("hello");
                  if(data.status=='failed')
                  {
                      alert("There was some problem processing your request. Please try again later :(")
                  }
                  else if(data.status=='success')
                  {   
                      if(category==1)
                        alert("Thank you for time :)");                           
                      else
                        alert("We will contact you soon :)");
                       ('form').find("input[type=text], textarea").val("");
                  }
              });

           }
        }//end of submit handler
    });//validate
});

</script>

<?php
  endif;
?>