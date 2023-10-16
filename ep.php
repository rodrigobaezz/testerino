<?php
  if(isset($_POST['action'])){
      if ($_POST['action'] == "listAssemblies") { listAssemblies(); }
      if ($_POST['action'] == "function1") { func1(); }
  }

  $assemblies;

  function listAssemblies () {
    
    $postFields['settings'] = array (
      "jsonUser" => "GENUINE",
      "jsonPassword" => "H1BF5M7QD",
    );

    $postFields['data'] = array (
      "mfgCode" => "WHI",
      "parentID" => "285733",
      "action" => "listAssemblies"
    );


    $postFields = json_encode($postFields);
    $api_url = "https://encompass.com/restfulservice/explodedView/listAssemblies"

    $assemblies = curl_request($api_url, $postFields);

    // return $assemblies;
  }

  function func1(){
    //Do something here
    echo 'test';
  }
?>
