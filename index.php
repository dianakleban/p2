<?php require('formLogic.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Contact Us</title>
  <meta name="description" content="Contact Us"/>
  <meta name="keywords" content="HTML,CSS,Language,Learn,Diana,Kleban,Teacher" />
  <meta name="author" content="Diana Kleban">
  <meta name="HandHeldFriendly" content="true">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/contactUs.css" type="text/css" />
</head>
<body>
  <div id="wrapper">
    <header>
      <h1 id="imgHere">
        Language School</h1>
        <hr id="tophr" />
      </header>
      <aside>
        <img src="images/phone.jpg" id="imgId" title="Contact Us" alt="Contact Us" />
      </aside>
      <article>
        <section id="myform">

          <form id='myForm' method='POST' action='index.php'>
            <fieldset>
              <legend>Contact Us</legend>
              <p>
                <label for="name" class="category">Your Name:</label>
                <input name="name" type="text" size="32" id="name" value='<?=sanitize($contactNm)?>' autofocus/> <span class="reqMsg" id="nameSpn"> (Required)</span>
              </p>

              <p>
                <label for="email" class="category"> Your Email:</label>
                <input name="email" type="email" id="email" size="32" value='<?=sanitize($contactEmail)?>'/><span class="reqMsg" id="emailSpn"> (Required)</span>
              </p>
              <p>
                <label for="langId" class="category">Language to Learn:</label>
                <select name="lang" id="langId">
                  <option value='choose'>Select</option>
                  <option value='Russian' <?php if ($lang == 'Russian') echo 'SELECTED'?>>Russian</option>
                  <option value='English' <?php if ($lang == 'English') echo 'SELECTED'?>>English</option>
                  <option value='French' <?php if ($lang == 'French') echo 'SELECTED'?>>French</option>
                  <option value='Italian' <?php if ($lang == 'Italian') echo 'SELECTED'?>>Italian</option>
                </select><span class="reqMsg" id="langSpn"> (Required)</span>
              </p>
              <p>
                <label for="comments" class="category">Comments: </label><br />
                <textarea name="comments" cols="60" rows="6" id="comments" placeholder="Any additional instructions"><?=sanitize($comments)?></textarea>
              </p>

              <input type="submit" value="Submit" />

              <?php if ($_POST) : ?>
                <div class="alert">
                  <p>Welcome to our Language School!</p>
                  <p><?=$results?></p>
                </div>
              <?php endif; ?>

            </fieldset>
          </form>
        </section>
      </article>
      <footer>
        <p>
          <strong>Diana Kleban</strong> West Hartford, CT
          <br />
          <a href="mailto:dik548@g.harvard.com">dik548@g.harvard.com</a>
          <br />
          Copyright @2017. All Rights Reserved.
        </p>
      </footer>
    </div>
  </body>
  </html>
