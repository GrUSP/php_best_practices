<?php

    $clean = array();
    if (ctype_alnum($_POST['first_name']))
    {
      $clean['first_name'] = $_POST['first_name'];
    }
    if (ctype_alnum($_POST['last_name']))
    {
      $clean['last_name'] = $_POST['last_name'];
    }
    $countries = array('IT', 'FR', 'DE'/*, ... */);
    if (in_array($_POST['country'], $countries))
    {
      $clean['country'] = $_POST['country'];
    }
