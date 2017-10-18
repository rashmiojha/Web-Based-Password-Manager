<?php 
session_start();
  if(!isset($_SESSION['login'])):
  header("Location: HomePage.php");
  else:
?>

<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/Webpage.css">
	<link rel="stylesheet" type="text/css" href="css/css/font-awesome.css"/>
	<link rel="stylesheet" type="text/css" href="css/css/font-awesome.min.css">
  <script src='js/jquery.js'></script>
</head>

<body>

 <?php
  include_once("header.php");
 ?>

  <div style='margin-top:160px;border-bottom:solid 4px #72c02c;'></div>

  <div class="container">
   
    <div class='row'>
      <div class='col-md-4'>
        <ul class="menu nav">
         <li class="mymenu">
        <span data-id='retrieve_div'><i class='fa fa-cloud-download'></i> Retrieve Password</span>
        </li>
        <li class="mymenu" ><span data-id='add_div'><i class='fa fa-plus'></i> Add Password</span></li>
        <li class="mymenu" ><span data-id='update_div'><i class="fa fa-pencil"></i> Update Password</i></span></li>
        <li class="mymenu" ><span data-id='delete_div'><i class="fa fa-times"></i> Delete Password</span></li>
        <li class="mymenu" ><span data-id='login_div'><i class="fa fa-sign-in"></i> Login from SafeHouse</span></li>
        <li class="mymenu" style='padding-bottom:58px;' ><span id ='master_acc' data-id='master_del_div'><i class="fa fa-times"></i> Delete Master Account</span></li>
        </ul>
      </div>

      <div class='col-md-8'>
        <div id='retrieve_div' class='format edit_blocks active'>
          <h1>Retrieve</h1>
          <table>
            <tr>
              <td>Select account</td>
              <td colspan='13'>
                <select>
                  <option value='0'>--Select--</option>
                  <option value='google'>Google</option>
                  <option value='facebook'>Facebook</option>
                </select>
              </td>
            </tr>
            <tr>
              <td colspan='13'><hr/></td>
            </tr>
            <tr>
              <td>Master Password: </td>
              <td><input class='form-control' id='rpassword' type='password'/></td>
            </tr>
            <tr>
              <td><button class='btn btn-success' id='retrieve'>Retrieve</button></td>
            </tr>
          </table>
        </div>
        <!-- Retrieve -->

        <div id='add_div' class='format edit_blocks'>
          <h1>Add: </h1>
          <form id='form_add'>
            <table>
              <tr>
                <td>Select account</td>
                <td colspan='13'>
                  <select>
                    <option value='0'>--Select--</option>
                    <option value='google'>Google</option>
                    <option value='facebook'>Facebook</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td colspan='13'><hr/></td>
              </tr>
              <tr>
                <td>Email id: </td>
                <td><input class='form-control' id='email' name='email'/></td>
              </tr>
              <tr>
                <td>Password: </td>
                <td><input class='form-control' id='password' name='apassword' type='password'></td>
              </tr>
              <tr>
                <td>Master Password: </td>
                <td><input class='form-control' id='mpassword' name='mpassword' type='password'></td>
              </tr>
              <tr>
                <td><button class='btn btn-success' id='add_acc'>Add Account</button></td>
              </tr>
            </table>
          </form>
        </div>
        <!--Add-->

        <div id='update_div' class='format edit_blocks'>
          <h1 >Update: </h1>
          <table>
            <tr>
              <td>Select account</td>
              <td >
                <select>
                  <option value='0'>--Select--</option>
                  <option value="google">Google</option>
                  <option value="facebook">Facebook</option>
                </select>
              </td>
            </tr>
            <tr>
              <td colspan='13'><hr/></td>
            </tr>
            <tr>
              <td>New Password: </td>
              <td><input class='form-control' id='new' type='password'></td>
            </tr>
            <tr>
              <td>Confirm Password: </td>
              <td><input class='form-control' id='confirm' type='password'></td>
            </tr>
            <tr>
              <td>Master Password: </td>
              <td><input class='form-control' id='kpassword' type='password'></td>
            </tr>
            <tr>
              <td><button class='btn btn-success' id='update_acc'>Update Account</button></td>
            </tr>
          </table>
        </div>
        <!--Update -->
     
        <div id='delete_div' class='format edit_blocks'>
          <h1 >Delete</h1>
          <table>
            <tr>
              <td>Select account</td>
              <td colspan='13'>
                <select>
                  <option value='0'>--Select--</option>
                  <option value="google">Google</option>
                  <option value="facebook">Facebook</option>
                </select>
              </td>
            </tr>
            <tr>
              <td colspan='13'><hr/></td>
            </tr>
            <tr>
              <td>Master Password</td>
              <td><input class='form-control' id='dpassword' type='password'/></td>
            </tr>
            <tr>
              <td><button class='btn btn-success' id='delete_acc'>Delete Account</button></td>
            </tr>
          </table>
        </div>
        <!--Delete -->

        <div id='login_div' class='format edit_blocks'>
          <h1 >Login</h1>
          <table>
            <tr>
              <td>Master Password: </td>
              <td><input class='form-control' id='masterpass' type='password'></td>
            </tr>
            <tr>  
              <td><br/><br/></td>
            </tr> 
            <tr>
              <td>
                <label>Select an account:</label>
              </td>
            </tr>                 
            <tr>
              <td><img src='images/google+.jpg' class='otl' id='google' style='width:125px;height:125px;'/></td>
              <td><img src='images/facebook.jpg' class='otl' id='facebook' style='width:125px;height:125px;'/></td>
            </tr>
          </table>
        </div>
        <!-- Login -->

        <div id='master_del_div' class='format edit_blocks'>
          <table>
            <tr>
              <td id='message'></td>
            </tr>
          </table>
        </div>
        <!-- Login -->

      </div><!--Main column-->
    </div><!--Main row-->
  </div><!--Main container-->
  
  <!-- Pop up -->
  <div class='container'>
    <div class='row'>
      <div class='col-md-12'>
        <div id ='overlay'>
          <div id = '1' class='pop-upbox'>
            <i class = 'fa fa-times pull-right one'></i>            
          </div>                
        </div>
      </div>
    </div>
  </div>

  <div style='border-bottom:solid 4px #72c02c;'></div>

	</body>

	</html>

	<script src='js/jquery-1.10.2.min.js'></script>
  <script src='js/jquery.validate.min.js'></script>
	<script src='js/bootstrap.js'></script>
  <script src='js/finfout.js'></script>
  <script src="js/rollups/aes.js"></script>
  <script src="js/rollups/ripemd160.js"></script>
  <script src='js/array_rand.js'></script>
  <script src='js/str_shuffle.js'></script>
  <script src='js/pwd_gen.js'></script>
  <script src="js/sha3.js"></script>
  <script src="js/crypt.js"></script>

<script type="text/javascript">

// $( ".menu>li" ).click(
//   function() {
//       var name = "#"+ $(this).attr("data-id");
//       console.log(name);
//       $('html, body').animate({
//         scrollTop: $(name).offset().top
//     }, 1000);
//   // $(".click").hide();
//   });

$(".menu span").click(function()
{
  var active_div = "#"+$(".format.active").attr('id');
  var tobeactive_div = "#"+$(this).attr('data-id');
  // alert(active_div);
  $(active_div).removeClass('active');
  $(active_div).css("display","none");
  // active_div.slideToggle(1000);
  $(tobeactive_div).css("display","block");
  // active_div.slideToggle(1000);
  $(tobeactive_div).addClass('active');
  // $(".open").show();
  
  // alert(toggle)
});


$("#add_acc").click(function()
{
  $("#form_add").validate({
    rules: {
      email:{
        required:true,
        email:true
      } ,
      mpassword: {
        required: true
      },
      apassword: {
        required: true
         }                                        
    },
    messages: {
          email: "Please enter a valid email",
          apassword: "Please provide account password (-_-)",
          mpassword: "Please provide master password (-_-)"
         
    },
    submitHandler: function(form) {

      var category = $("#add_div select").find("option:selected").val();
   
      if(category==0)
      {
        alert("Please select a category");  
      }
      else
      {
        var user_email = $("#email").val();
        if(user_email.indexOf("gmail")!= -1)
        {
          $.getJSON("http://localhost/SafeHouse/loginchecker.php",{add:true},function(data,status)   
          {
            var str = dcrypt($("#mpassword").val(), data.aid);
                    
            if(str == data.cid)
            {
              var user_email = $("#email").val();
              
              var p = ecrypt($("#mpassword").val(),$("#password").val());//force conversion           
              
              $.getJSON("http://localhost/SafeHouse/loginchecker.php",{new_acc:true, pass:p, email:user_email, category:category},function(data,status)   
              {
                if(data.status=="success")
                {
                  alert("Done :)");
                   $("#form_add").find("input[name=email], input[type=password]").val("");
                 }
                else{
                 alert("You cannot add more than 1 account");
                  $("#form_add").find("input[name=email], input[type=password]").val("");
               }
              });
            }
            else{
                  alert("Wrong Password :(");
                     $("#form_add").find("input[type=password]").val("");
            }
          });
        }
        else{
          alert("Please enter a gmail id");
          $("#form_add").find("input[name=email], input[type=password]").val("");

        }
      }
    }
  });
});

//=======================================================================//

$("#retrieve").click(function()
{
  var category = $("#retrieve_div select").find("option:selected").val();
  
  if(category==0)
  {
    alert("Please select a category");
  }
  else
  {
    if($("#rpassword").val()!="")
    {
      $.getJSON("http://localhost/SafeHouse/loginchecker.php",{add:true},function(data,status)   
      {
        
        var str=dcrypt($("#rpassword").val(),data.aid);//force conversion
                                    
        if(str == data.cid)
        {
          
          $.getJSON("http://localhost/SafeHouse/loginchecker.php",{retrieve:true, category:category},function(data,status)   
          {
            if(data.status=="success")
            {
              
              var str1=dcrypt($("#rpassword").val(),data.ep);//force conversion
              var app = "<table id='ret' class='pull-left'><tr><td><div id='l_error' style='color:red;'></div></td></tr><tr><td>Email Id</td><td>"+data.username+"</td></tr><tr><td>Password</td><td>"+str1+"</td></tr></table>";
              
              $("#1").append(app);
              $("#1").show();
              $("#overlay").show();
              $("#retrieve_div").find("input[type=password]").val("");
            }
            else 
            {
              $("#retrieve_div").find("input[type=password]").val("");
              alert(data.msg);
            }
          });
        }
        else
        {
          alert("Wrong Master Password :(");
          $("#retrieve_div").find("input[type=password]").val("");
        }
      });
    }
    else{
      alert("Please enter your password first (-_-)")
    }
  }
});

//===========================================================================//

$("#update_acc").click(function()
{
  
  var category = $("#update_div select").find("option:selected").val();
  
  if(category==0)
  {
    alert("Please select a category");
  }
  else
  {
    if(($("#kpassword").val()!="")&&($("#new").val()!="")&&($("#confirm").val()!=""))
    {
      if($("#new").val()==$("#confirm").val())
      {
    $.getJSON("http://localhost/SafeHouse/loginchecker.php",{add:true},function(data,status)   
    {
      var str = dcrypt($("#kpassword").val(),data.aid);
      if(str == data.cid)
      {
        // var newpass = $("#new").val();
        var p = ecrypt($("#kpassword").val(),$("#new").val());//force conversion                  }
        $.getJSON("http://localhost/SafeHouse/loginchecker.php",{update_acc:true, pass:p, category:category},function(data,status)   
        {
          if(data.status=="success"){
            alert("Done :)");
            $("#update_div").find("input[name=email], input[type=password]").val("");
          }

          else {
            alert("Update was unsuccessful. Please try after sometime :(");
            $("#update_div").find("input[name=email], input[type=password]").val("");
          }
        });
      }
      else{
        alert("Wrong Password :(");
          $("#update_div").find("input[id=kpassword]").val("");
      }
    });
}
else
{
  alert("Passwords do not match (>_<)");
  $("#update_div").find("input[type=password]").val("");
}
  }
  else
  {
    alert("Please fill in all the fields (-_-)");
  }
  }
});

//===============================================================================//

$("#delete_acc").click(function()
{
  // alert("HI");
  var category = $("#delete_div select").find("option:selected").val();
  
  if(category==0)
  {
    alert("Please select a category");
  }
  else
  {
    if($("#dpassword").val()!="")
    {
      $.getJSON("http://localhost/SafeHouse/loginchecker.php",{add:true},function(data,status)   
      {
        
        var str = dcrypt($("#dpassword").val(), data.aid);
        if(str == data.cid)
          {
            $.getJSON("http://localhost/SafeHouse/loginchecker.php",{delete_acc:true, category:category},function(data,status)   
            {
              if(data.status=="success")
              {
                var app = "<table class='pull-left'><tr><td>Your account has been deleted successfully :)</td></tr></table>";
                alert(app);
                $("#1").append(app);
                $("#1").show();
                $("#overlay").show();
                $("#delete_div").find("input[type=password]").val("");
              }
              else alert(data.msg);
            });
          }
          alert("Wrong password :(");
          $("#delete_div").find("input[type=password]").val("");
      });
    }
    else
    {
      alert("Please enter your master password (-_-)");    
      $("#delete_div").find("input[type=password]").val("");
    }
  }
});

//=================================================================================//

//================================================================================//    

$(".one").click(function()
{
  $("#overlay").hide();
  $("#1").hide();
  $("#2").hide();
  $("#1 table").remove();
});//pop-up



//=============================================================================//
    
//=============================================================================//
    
$(".otl").click(function()
{
  if($("#masterpass").val()!="")
  {
    var acc=$(this).attr("id");
    $.getJSON("http://localhost/SafeHouse/loginchecker.php",{add:true},function(data,status)   
    {
      var str = dcrypt($("#masterpass").val(),data.aid);
      if(str == data.cid)
      {
      
        $.getJSON("http://localhost/SafeHouse/loginchecker.php",{retrieve:true, category:acc},function(data,status)   
        {
          if(data.status=="success")
          {
      
            var str1 = dcrypt($("#masterpass").val(),data.ep);//force conversion
            if(acc == 'google')
            {
              var w=window.open("https://accounts.google.com/ServiceLogin?","_blank", "width=1000, height=400, top=250, left=300" );
              w.onload = function()
              {

                w.document.getElementById('Email').value=data.username;
                w.document.getElementById('Passwd').value=str1;
            // gmail.document.getElementById('signIn').click();     
              }
                      
            }
            else{
              var w=window.open("https://www.facebook.com/","_blank","width=1000, height=400, top=250, left=300");
              w.onload = function()
              {
                // w.focus();
                // var str = "<script> document.getElementById('email').value = " + data.username +"; document.getElementById('pass').value = "+str1;
                // w.document.write(str);
                w.document.getElementById("email").value = data.username;

                w.document.getElementById("pass").value = str1;

            // gmail.document.getElementById('signIn').click();     
              }
            }
            var app = "<table id='ret' class='pull-left'><tr><td><div id='l_error' style='color:red;'></div></td></tr><tr><td>Email Id</td><td>"+data.username+"</td></tr><tr><td>Password</td><td>"+str1+"</td></tr></table>";
              
              $("#1").append(app);
              $("#1").show();
              $("#overlay").show();      
          }
        });
      }
      else{
        $("#login_div").find("input[type=password]").val("");
        alert("Wrong Password :(");
      }
    });
  }
  else
  {
    alert("Please enter master password first (-_-)");
  }
});

$("#master_acc").click(function()
{
  var response = confirm("Are you sure you want to delete your account?");
  if(response)
  {
    $.getJSON("loginchecker.php",{delete_master:true},function(data,status)
    {
      if(data.status == 'success')
      {
        $("#message").html("Your account has been deleted. You will redirected to Homepage in 5 seconds...");
        sleep(5000);
        window.location.href = "Homepage.php";
      }
      else{
        $("#message").html("Sorry there was some problem. Please try again later");
      }
    });
  }
  else{
    alert("We are happy you changed your mind :)");
  }
});

</script>


<?php
  endif;
?>