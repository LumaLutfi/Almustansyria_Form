<?php   
  session_start();  
  if (!$_SESSION['f_name']){  
   header('location:login.php');  
  }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Simple PHP Login and Register System</title>            
      </head>   
 <body>  
      <ul align='right'>  
   Welcome:   
   <font color="blue">  
    <?php echo $_SESSION['f_name']; ?>     
   </font>   
       <a href="logout.php">Log out</a>    
      </ul>  
      <br><br>  
      <form>  
    <table width='500' border='3' align='center'>  
      <tr>  
        <th bgcolor='dodgerBlue' colspan='2'>Profile Information</th>  
      </tr>  
      <tr>  
        <td align='right'>First Name:</td>  
        <td><?php echo $_SESSION['f_name']; ?></td>  
      </tr>  
      <tr>  
        <td align='right'>Mother Name:</td>  
        <td><?php echo $_SESSION['motherName']; ?></td>  
      </tr>  
      <tr>  
        <td align='right'>Birthday :</td>  
        <td><?php echo $_SESSION['birthday']; ?></td>  
      </tr>  
      <tr>  
        <td align='right'>Gender: </td>  
        <td><?php echo $_SESSION['gender']; ?></td>  
      </tr>  
      <tr>  
        <td align='right'>Province: </td>  
        <td><?php echo $_SESSION['province']; ?></td>  
      </tr>  
      <tr>  
        <td align='right'>Way: </td>  
        <td><?php echo $_SESSION['way']; ?></td>  
      </tr> 
      <tr>  
        <td align='right'>Alley: </td>  
        <td><?php echo $_SESSION['alley']; ?></td>  
      </tr>  
      <tr>  
        <td align='right'>House: </td>  
        <td><?php echo $_SESSION['house']; ?></td>  
      </tr> 
      <tr>  
        <td align='right'>Stutas: </td>  
        <td><?php echo $_SESSION['stutas']; ?></td>  
      </tr>    
     </table>   
      </form>  
 </body>  
 </html>