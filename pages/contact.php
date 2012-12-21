<?php
  $root = $_SERVER['DOCUMENT_ROOT'];
  include($root . '/templates/head.php');
?>

<body>
  <div id="bodyContainer">
    <?php include ($root . '/templates/header.php'); ?>

    <div id="bodybox">
      <div id="content">
        <h1>Contact Us</h1>
        <p>If you are a patient who would like information on how to be a part of our research, there are several ways to contact us. </p>
        <table>
          <tr>
            <td>Phone:</td><td>(440) 826-0742</td>
          </tr>
          <tr>
          <td>Fax:</td><td>(440) 891-1576</td>
          </tr>
          <tr>
          <td>Email:</td><td><a href='mailto:info@paramountmedicalresearch.com'>info@paramountmedicalresearch.com</a></td>
          </tr>
        </table>
        <!--
        <p>If you prefer, you can also contact us with the form below:</p>
            
        <form method="post" action="contactform.php">
          <table width="70%" border="0">
            <tr>
              <td width="43%">First Name: </td>
              <td width="57%"><input name="fname" type="text" /></td>
            </tr>
            <tr>
              <td>Last Name:</td>
              <td><input name="lname" type="text" /></td>
            </tr>
            <tr>
              <td>Email: </td>
              <td><input name="email" type="text" /></td>
            </tr>
            <tr>
              <td>Address 1:</td>
              <td><input name="address1" type="text" size=40 /></td>
            </tr>
            <tr>
              <td>Address 2:</td>
              <td><input name="address2" type="text" size=40 /></td>
            </tr>
            <tr>
              <td>City:</td>
              <td><input name="city" type="text" /></td>
            </tr>
            <tr>
              <td>State:</td>
              <td><input name="state" type="text" size=7 /></td>
            </tr>
            <tr>
              <td>Zip:</td>
              <td><input name="zip" type="text" size=15 /></td>
            </tr>
            <tr>
              <td>Day Phone:</td>
              <td><input name="dphone" type="text" size=20 /></td>
            </tr>
            <tr>
              <td>Evening Phone</td>
              <td><input name="ephone" type="text" size=20 /></td>
            </tr>
            <tr>
              <td>Best Time to Call:</td>
              <td><input name="ttcall" type="text" /></td>
            </tr>
            <tr>
              <td>Gender</td>
              <td>
                <select name="gender">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>Date of Birth:</td>
              <td><input name="dob" type="text" /></td>
            </tr>
            <tr>
              <td>Study of Interest:</td>
              <td>
                <select name="study">
                  <option value="Gout w/ Cardiovascular Disease">
                        Gout <strong>with</strong> Cardiovascular Disease
                  </option>
                  <option value="Early onset of Rheumatoid Arthritis">
                    Early Onset of Rheumatoid Arthritis
                  </option>
                  <option value="Rheumatoid Arthritis">
                    Rheumatoid Arthritis
                  </option>
                  <option value="Diabetes Mellitus with Cardiovascular Disease">
                    Diabetes Mellitus <strong>with</strong> Cardiovascular Disease
                  </option>
                  <option value="Psoriatic Arthritis">
                    Psoriatic Arthritis
                  </option>
                  <option value="Ankylosing Spondylitis">
                    Ankylosing Spondylitis
                  </option>
                  <option value="Lupus">
                    Lupus
                  </option>
                </select>
              </td>
            </tr>
            <tr>
              <td>Preferred Method of Contact:</td>
              <td>
                <select name="contact">
                  <option value="Email">Email</option>
                  <option value="Phone">Phone</option>
                </select>
              </td>
            </tr>
          </table>

          <br />
          <p>How did you hear about us?</p>
          <input name="hear" type="text" size=80px />
          <br />
          <p>Comments? </p>
          <textarea name="message" rows="15" cols="40"></textarea>
          <br />
          <input type="submit" /> <input type="reset"  />
        </form> 
        -->
      </div>
      <?php include($root . '/templates/footer.php'); ?>
    </div>
  </body>
</html>
