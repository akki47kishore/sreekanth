<html>
   <head>
      <title>Student Management | Add</title>
   </head>

   <body>
      <form action = "/create" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <table>
            <tr>
               <td>Email</td>
               <td><input type='text' name='email' /></td>
            </tr>

             <tr>
               <td>Password</td>
               <td><input type='text' name='password' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Login"/>
               </td>
            </tr>
            <tr>
               <td>
                  <button type="reset"> Reset</button>
                </td>
            </tr>
         </table>
      </form>
      
   </body>
</html>