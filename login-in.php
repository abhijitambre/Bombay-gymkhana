<?php
// Session Creation
session_start();
$_SESSION["Usersession"] = "New User";

$jsonfields = file_get_contents('php://input');

// data request from the login form
$requestdata = json_decode($jsonfields, true);

// requested data of clientid1 field stored in variable For eg : R,MM,T
$Clientid1 = $requestdata['clientid1'];

// requested data of clientid2 field stored in variable For eg : 613,405 1,1166,2511
$Clientid2 = $requestdata['clientid2'];

// requested data of clientid3 field stored in variable For eg : 613,405 1,1166,2511
$Clientid3 = $requestdata['clientid3'];

// requested data of pass field stored in variable For eg :123456
$Pass = $requestdata['pass'];

$photo = $requestdata['photo'];

// uniqid pass as data to check for login
$uniqid = $requestdata['uniqid'];


$expirationTimeid = time() + (60 * 60 * 24 * 30 * 6);
// Clientid1 data stored in cookie named Clientid1
setcookie('Clientid1', $Clientid1, $expirationTimeid);

// Clientid2 data stored in cookie named Clientid2
setcookie('Clientid2', $Clientid2, $expirationTimeid);

// Clientid3 data stored in cookie named Clientid3
setcookie('Clientid3', $Clientid3, $expirationTimeid);

// pass data stored in cookie named pass
setcookie('Pass', $Pass, $expirationTimeid);

setcookie('uniqid', $uniqid, $expirationTimeid);
//count of Clientid1 data is been checked for eg if value is R then count should be 1 and if its MM then it should be 2 
$count1 = preg_match_all('/[0-9a-zA-Z]/', $Clientid1);
//count of Clientid2 data is been checked for eg if value is 0 then count should be 1 and if its 631 then it should be 3
$count = preg_match_all('/\S|\s/', $Clientid2);
if ($count1 === 1) {
  if ($count === 1) {
    $fullid = $Clientid1 . "-" . $Clientid2 . "     " . $Clientid3;
    $expirationTime3 = time() + (60 * 60 * 24 * 30 * 6);
    setcookie('fullid', $fullid, $expirationTime3);
    if ($Clientid2 !== "" || $Clientid2 !== null) {
      if ($uniqid == "logpass") {
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberDetails/FunGetMemberDetails?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
          ),
        ));
        $response = curl_exec($curl);
        $expirationTime2 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('response', $response, $expirationTime2);
        curl_close($curl);
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsDetailsForMemberCode/FunGetDetailsOfMemberCode?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2; ARRAffinitySameSite=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2'
          ),
        ));
        $memberdet = curl_exec($curl);
        $expirationTime1 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('memberdet', $memberdet, $expirationTime1);
        curl_close($curl);





        // $json_resutl = json_decode($response, true);
        // $CreatedOpportunityId = $json_resutl['Result'][0]['MemberCode'];
        // setcookie('jhjkjhjkjh', $CreatedOpportunityId);




        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsValidateMemberPassword/FunValidateMemberPassword?MemberCode=' . urlencode($fullid) . '&Password=' . $Pass . '&ClubId=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f; ARRAffinitySameSite=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f'
          ),
        ));

        $passuser = curl_exec($curl);

        curl_close($curl);
        setcookie('responsenew', $passuser);


        $json_resutl = json_decode($passuser, true);
        $CreatedOpportunityId = $json_resutl['StatusDescription'];
        if ($CreatedOpportunityId == "Success") {

          $memcode = $json_resutl['Result'][0]['MemberCode'];
          $expirationTime = time() + (60 * 60 * 24 * 30 * 6);
          setcookie('validmemcode', $memcode, $expirationTime);




          // echo $response;
        }
      }

      echo  json_encode([
        'code' => 200,
        'lead' => $idcode,
        'lead1' => $response,
        'token' => $token,
        'passifo' => $passresponse,
        'userpass' => $passuser,
        'updatentry' => $jsonEncodedReturnArray,
        'returnArray' => $returnArray
      ]);
    } else {
      echo  json_encode(['code' => 400]);
    }

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberOutstanding/FunGetMemberOutstanding?Clubid=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA&MemberCode=' . urlencode($fullid) . '',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
      ),
    ));

    $balance = curl_exec($curl);

    curl_close($curl);
    setcookie('balance', $balance);
  } else if ($count === 2) {
    $fullid1 = $Clientid1 . "-" . $Clientid2 . "    " . $Clientid3;
    $expirationTime3 = time() + (60 * 60 * 24 * 30 * 6);
    setcookie('fullid', $fullid, $expirationTime3);
    if ($Clientid2 !== "" || $Clientid2 !== null) {


      if ($uniqid == "logpass") {

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberDetails/FunGetMemberDetails?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid1) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
          ),
        ));

        $response = curl_exec($curl);
        $expirationTime2 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('response', $response, $expirationTime2);
        curl_close($curl);
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsDetailsForMemberCode/FunGetDetailsOfMemberCode?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid1) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2; ARRAffinitySameSite=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2'
          ),
        ));

        $memberdet = curl_exec($curl);
        $expirationTime1 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('memberdet', $memberdet, $expirationTime1);
        curl_close($curl);


        // $json_resutl = json_decode($response, true);
        // $CreatedOpportunityId = $json_resutl['Result'][0]['MemberCode'];
        // setcookie('jhjkjhjkjh', $CreatedOpportunityId);




        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsValidateMemberPassword/FunValidateMemberPassword?MemberCode=' . urlencode($fullid1) . '&Password=' . $Pass . '&ClubId=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f; ARRAffinitySameSite=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f'
          ),
        ));

        $passuser = curl_exec($curl);

        curl_close($curl);
        setcookie('responsenew', $passuser);


        $json_resutl = json_decode($passuser, true);
        $CreatedOpportunityId = $json_resutl['StatusDescription'];
        if ($CreatedOpportunityId == "Success") {

          $memcode = $json_resutl['Result'][0]['MemberCode'];
          $expirationTime = time() + (60 * 60 * 24 * 30 * 6);
          setcookie('validmemcode', $memcode, $expirationTime);




          // echo $response;
        }
      }

      echo  json_encode([
        'code' => 200,
        'lead' => $idcode,
        'lead1' => $response,
        'token' => $token,
        'passifo' => $passresponse,
        'userpass' => $passuser,
        'updatentry' => $jsonEncodedReturnArray,
        'returnArray' => $returnArray
      ]);
    } else {

      echo  json_encode(['code' => 400]);
    }
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberOutstanding/FunGetMemberOutstanding?Clubid=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA&MemberCode=' . urlencode($fullid) . '',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
      ),
    ));

    $balance = curl_exec($curl);

    curl_close($curl);
    setcookie('balance', $balance);
  } else if ($count === 3) {
    $fullid2 = $Clientid1 . "-" . $Clientid2 . "   " . $Clientid3;
    $expirationTime3 = time() + (60 * 60 * 24 * 30 * 6);
    setcookie('fullid', $fullid, $expirationTime3);
    if ($Clientid2 !== "" || $Clientid2 !== null) {


      if ($uniqid == "logpass") {

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberDetails/FunGetMemberDetails?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid2) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
          ),
        ));

        $response = curl_exec($curl);
        $expirationTime2 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('response', $response, $expirationTime2);
        curl_close($curl);
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsDetailsForMemberCode/FunGetDetailsOfMemberCode?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid2) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2; ARRAffinitySameSite=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2'
          ),
        ));

        $memberdet = curl_exec($curl);
        $expirationTime1 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('memberdet', $memberdet, $expirationTime1);
        curl_close($curl);


        // $json_resutl = json_decode($response, true);
        // $CreatedOpportunityId = $json_resutl['Result'][0]['MemberCode'];
        // setcookie('jhjkjhjkjh', $CreatedOpportunityId);




        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsValidateMemberPassword/FunValidateMemberPassword?MemberCode=' . urlencode($fullid2) . '&Password=' . $Pass . '&ClubId=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f; ARRAffinitySameSite=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f'
          ),
        ));

        $passuser = curl_exec($curl);

        curl_close($curl);
        setcookie('responsenew', $passuser);


        $json_resutl = json_decode($passuser, true);
        $CreatedOpportunityId = $json_resutl['StatusDescription'];
        if ($CreatedOpportunityId == "Success") {

          $memcode = $json_resutl['Result'][0]['MemberCode'];
          $expirationTime = time() + (60 * 60 * 24 * 30 * 6);
          setcookie('validmemcode', $memcode, $expirationTime);




          // echo $response;
        }
      }

      echo  json_encode([
        'code' => 200,
        'lead' => $idcode,
        'lead1' => $response,
        'token' => $token,
        'passifo' => $passresponse,
        'userpass' => $passuser,
        'updatentry' => $jsonEncodedReturnArray,
        'returnArray' => $returnArray
      ]);
    } else {

      echo  json_encode(['code' => 400]);
    }
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberOutstanding/FunGetMemberOutstanding?Clubid=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA&MemberCode=' . urlencode($fullid) . '',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
      ),
    ));

    $balance = curl_exec($curl);

    curl_close($curl);
    setcookie('balance', $balance);
  } else if ($count === 4) {
    $fullid2 = $Clientid1 . "-" . $Clientid2 . "  " . $Clientid3;
    $expirationTime3 = time() + (60 * 60 * 24 * 30 * 6);
    setcookie('fullid', $fullid, $expirationTime3);
    if ($Clientid2 !== "" || $Clientid2 !== null) {


      if ($uniqid == "logpass") {

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberDetails/FunGetMemberDetails?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid2) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
          ),
        ));

        $response = curl_exec($curl);
        $expirationTime2 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('response', $response, $expirationTime2);
        curl_close($curl);
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsDetailsForMemberCode/FunGetDetailsOfMemberCode?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid2) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2; ARRAffinitySameSite=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2'
          ),
        ));

        $memberdet = curl_exec($curl);
        $expirationTime1 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('memberdet', $memberdet, $expirationTime1);
        curl_close($curl);


        // $json_resutl = json_decode($response, true);
        // $CreatedOpportunityId = $json_resutl['Result'][0]['MemberCode'];
        // setcookie('jhjkjhjkjh', $CreatedOpportunityId);




        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsValidateMemberPassword/FunValidateMemberPassword?MemberCode=' . urlencode($fullid2) . '&Password=' . $Pass . '&ClubId=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f; ARRAffinitySameSite=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f'
          ),
        ));

        $passuser = curl_exec($curl);

        curl_close($curl);
        setcookie('responsenew', $passuser);


        $json_resutl = json_decode($passuser, true);
        $CreatedOpportunityId = $json_resutl['StatusDescription'];
        if ($CreatedOpportunityId == "Success") {

          $memcode = $json_resutl['Result'][0]['MemberCode'];
          $expirationTime = time() + (60 * 60 * 24 * 30 * 6);
          setcookie('validmemcode', $memcode, $expirationTime);




          // echo $response;
        }
      }


      echo  json_encode([
        'code' => 200,
        'lead' => $idcode,
        'lead1' => $response,
        'token' => $token,
        'passifo' => $passresponse,
        'userpass' => $passuser,
        'updatentry' => $jsonEncodedReturnArray,
        'returnArray' => $returnArray
      ]);
    } else {

      echo  json_encode(['code' => 400]);
    }
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberOutstanding/FunGetMemberOutstanding?Clubid=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA&MemberCode=' . urlencode($fullid) . '',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
      ),
    ));

    $balance = curl_exec($curl);

    curl_close($curl);
    setcookie('balance', $balance);
  } else if ($count === 5) {
    $fullid2 = $Clientid1 . "-" . $Clientid2 . " " . $Clientid3;
    $expirationTime3 = time() + (60 * 60 * 24 * 30 * 6);
    setcookie('fullid', $fullid, $expirationTime3);
    if ($Clientid2 !== "" || $Clientid2 !== null) {


      if ($uniqid == "logpass") {

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberDetails/FunGetMemberDetails?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid2) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
          ),
        ));

        $response = curl_exec($curl);
        $expirationTime2 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('response', $response, $expirationTime2);
        curl_close($curl);
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsDetailsForMemberCode/FunGetDetailsOfMemberCode?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid2) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2; ARRAffinitySameSite=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2'
          ),
        ));

        $memberdet = curl_exec($curl);
        $expirationTime1 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('memberdet', $memberdet, $expirationTime1);
        curl_close($curl);


        // $json_resutl = json_decode($response, true);
        // $CreatedOpportunityId = $json_resutl['Result'][0]['MemberCode'];
        // setcookie('jhjkjhjkjh', $CreatedOpportunityId);




        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsValidateMemberPassword/FunValidateMemberPassword?MemberCode=' . urlencode($fullid2) . '&Password=' . $Pass . '&ClubId=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f; ARRAffinitySameSite=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f'
          ),
        ));

        $passuser = curl_exec($curl);

        curl_close($curl);
        setcookie('responsenew', $passuser);


        $json_resutl = json_decode($passuser, true);
        $CreatedOpportunityId = $json_resutl['StatusDescription'];
        if ($CreatedOpportunityId == "Success") {

          $memcode = $json_resutl['Result'][0]['MemberCode'];
          $expirationTime = time() + (60 * 60 * 24 * 30 * 6);
          setcookie('validmemcode', $memcode, $expirationTime);




          // echo $response;
        }
      }



      echo  json_encode([
        'code' => 200,
        'lead' => $idcode,
        'lead1' => $response,
        'token' => $token,
        'passifo' => $passresponse,
        'userpass' => $passuser,
        'updatentry' => $jsonEncodedReturnArray,
        'returnArray' => $returnArray
      ]);
    } else {

      echo  json_encode(['code' => 400]);
    }
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberOutstanding/FunGetMemberOutstanding?Clubid=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA&MemberCode=' . urlencode($fullid) . '',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
      ),
    ));

    $balance = curl_exec($curl);

    curl_close($curl);
    setcookie('balance', $balance);
  } else {
    $fullid2 = $Clientid1 . "-" . $Clientid2 . "" . $Clientid3;
    $expirationTime3 = time() + (60 * 60 * 24 * 30 * 6);
    setcookie('fullid', $fullid, $expirationTime3);
    if ($Clientid2 !== "" || $Clientid2 !== null) {


      if ($uniqid == "logpass") {

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberDetails/FunGetMemberDetails?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid2) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
          ),
        ));

        $response = curl_exec($curl);
        $expirationTime2 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('response', $response, $expirationTime2);
        curl_close($curl);
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsDetailsForMemberCode/FunGetDetailsOfMemberCode?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid2) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2; ARRAffinitySameSite=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2'
          ),
        ));

        $memberdet = curl_exec($curl);
        $expirationTime1 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('memberdet', $memberdet, $expirationTime1);
        curl_close($curl);


        // $json_resutl = json_decode($response, true);
        // $CreatedOpportunityId = $json_resutl['Result'][0]['MemberCode'];
        // setcookie('jhjkjhjkjh', $CreatedOpportunityId);




        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsValidateMemberPassword/FunValidateMemberPassword?MemberCode=' . urlencode($fullid2) . '&Password=' . $Pass . '&ClubId=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f; ARRAffinitySameSite=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f'
          ),
        ));

        $passuser = curl_exec($curl);

        curl_close($curl);
        setcookie('responsenew', $passuser);


        $json_resutl = json_decode($passuser, true);
        $CreatedOpportunityId = $json_resutl['StatusDescription'];
        if ($CreatedOpportunityId == "Success") {

          $memcode = $json_resutl['Result'][0]['MemberCode'];
          $expirationTime = time() + (60 * 60 * 24 * 30 * 6);
          setcookie('validmemcode', $memcode, $expirationTime);




          // echo $response;
        }
      }


      echo  json_encode([
        'code' => 200,
        'lead' => $idcode,
        'lead1' => $response,
        'token' => $token,
        'passifo' => $passresponse,
        'userpass' => $passuser,
        'updatentry' => $jsonEncodedReturnArray,
        'returnArray' => $returnArray
      ]);
    } else {

      echo  json_encode(['code' => 400]);
    }
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberOutstanding/FunGetMemberOutstanding?Clubid=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA&MemberCode=' . urlencode($fullid) . '',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
      ),
    ));

    $balance = curl_exec($curl);

    curl_close($curl);
    setcookie('balance', $balance);
  }
} else if ($count1 === 2) {
  if ($count === 1) {
    $fullid = $Clientid1 . "-" . $Clientid2 . "    " . $Clientid3;
    $expirationTime3 = time() + (60 * 60 * 24 * 30 * 6);
    setcookie('fullid', $fullid, $expirationTime3);
    if ($Clientid2 !== "" || $Clientid2 !== null) {
      if ($uniqid == "logpass") {
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberDetails/FunGetMemberDetails?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
          ),
        ));
        $response = curl_exec($curl);
        $expirationTime2 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('response', $response, $expirationTime2);
        curl_close($curl);
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsDetailsForMemberCode/FunGetDetailsOfMemberCode?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2; ARRAffinitySameSite=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2'
          ),
        ));
        $memberdet = curl_exec($curl);
        $expirationTime1 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('memberdet', $memberdet, $expirationTime1);
        curl_close($curl);


        // $json_resutl = json_decode($response, true);
        // $CreatedOpportunityId = $json_resutl['Result'][0]['MemberCode'];
        // setcookie('jhjkjhjkjh', $CreatedOpportunityId);




        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsValidateMemberPassword/FunValidateMemberPassword?MemberCode=' . urlencode($fullid) . '&Password=' . $Pass . '&ClubId=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f; ARRAffinitySameSite=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f'
          ),
        ));

        $passuser = curl_exec($curl);

        curl_close($curl);
        setcookie('responsenew', $passuser);


        $json_resutl = json_decode($passuser, true);
        $CreatedOpportunityId = $json_resutl['StatusDescription'];
        if ($CreatedOpportunityId == "Success") {

          $memcode = $json_resutl['Result'][0]['MemberCode'];
          $expirationTime = time() + (60 * 60 * 24 * 30 * 6);
          setcookie('validmemcode', $memcode, $expirationTime);




          // echo $response;
        }
      }

      echo  json_encode([
        'code' => 200,
        'lead' => $idcode,
        'lead1' => $response,
        'token' => $token,
        'passifo' => $passresponse,
        'userpass' => $passuser,
        'updatentry' => $jsonEncodedReturnArray,
        'returnArray' => $returnArray
      ]);
    } else {

      echo  json_encode(['code' => 400]);
    }
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberOutstanding/FunGetMemberOutstanding?Clubid=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA&MemberCode=' . urlencode($fullid) . '',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
      ),
    ));

    $balance = curl_exec($curl);

    curl_close($curl);
    setcookie('balance', $balance);
  } else if ($count === 2) {
    $fullid1 = $Clientid1 . "-" . $Clientid2 . "   " . $Clientid3;
    $expirationTime3 = time() + (60 * 60 * 24 * 30 * 6);
    setcookie('fullid', $fullid, $expirationTime3);
    if ($Clientid2 !== "" || $Clientid2 !== null) {


      if ($uniqid == "logpass") {

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberDetails/FunGetMemberDetails?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid1) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
          ),
        ));

        $response = curl_exec($curl);
        $expirationTime2 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('response', $response, $expirationTime2);
        curl_close($curl);
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsDetailsForMemberCode/FunGetDetailsOfMemberCode?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid1) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2; ARRAffinitySameSite=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2'
          ),
        ));

        $memberdet = curl_exec($curl);
        $expirationTime1 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('memberdet', $memberdet, $expirationTime1);
        curl_close($curl);


        // $json_resutl = json_decode($response, true);
        // $CreatedOpportunityId = $json_resutl['Result'][0]['MemberCode'];
        // setcookie('jhjkjhjkjh', $CreatedOpportunityId);




        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsValidateMemberPassword/FunValidateMemberPassword?MemberCode=' . urlencode($fullid1) . '&Password=' . $Pass . '&ClubId=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f; ARRAffinitySameSite=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f'
          ),
        ));

        $passuser = curl_exec($curl);

        curl_close($curl);
        setcookie('responsenew', $passuser);


        $json_resutl = json_decode($passuser, true);
        $CreatedOpportunityId = $json_resutl['StatusDescription'];
        if ($CreatedOpportunityId == "Success") {

          $memcode = $json_resutl['Result'][0]['MemberCode'];
          $expirationTime = time() + (60 * 60 * 24 * 30 * 6);
          setcookie('validmemcode', $memcode, $expirationTime);




          // echo $response;
        }
      }

      echo  json_encode([
        'code' => 200,
        'lead' => $idcode,
        'lead1' => $response,
        'token' => $token,
        'passifo' => $passresponse,
        'userpass' => $passuser,
        'updatentry' => $jsonEncodedReturnArray,
        'returnArray' => $returnArray
      ]);
    } else {

      echo  json_encode(['code' => 400]);
    }
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberOutstanding/FunGetMemberOutstanding?Clubid=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA&MemberCode=' . urlencode($fullid) . '',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
      ),
    ));

    $balance = curl_exec($curl);

    curl_close($curl);
    setcookie('balance', $balance);
  } else if ($count === 3) {
    $fullid2 = $Clientid1 . "-" . $Clientid2 . "  " . $Clientid3;
    $expirationTime3 = time() + (60 * 60 * 24 * 30 * 6);
    setcookie('fullid', $fullid, $expirationTime3);
    if ($Clientid2 !== "" || $Clientid2 !== null) {


      if ($uniqid == "logpass") {

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberDetails/FunGetMemberDetails?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid2) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
          ),
        ));

        $response = curl_exec($curl);
        $expirationTime2 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('response', $response, $expirationTime2);
        curl_close($curl);
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsDetailsForMemberCode/FunGetDetailsOfMemberCode?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid2) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2; ARRAffinitySameSite=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2'
          ),
        ));

        $memberdet = curl_exec($curl);
        $expirationTime1 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('memberdet', $memberdet, $expirationTime1);
        curl_close($curl);


        // $json_resutl = json_decode($response, true);
        // $CreatedOpportunityId = $json_resutl['Result'][0]['MemberCode'];
        // setcookie('jhjkjhjkjh', $CreatedOpportunityId);




        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsValidateMemberPassword/FunValidateMemberPassword?MemberCode=' . urlencode($fullid2) . '&Password=' . $Pass . '&ClubId=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f; ARRAffinitySameSite=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f'
          ),
        ));

        $passuser = curl_exec($curl);

        curl_close($curl);
        setcookie('responsenew', $passuser);


        $json_resutl = json_decode($passuser, true);
        $CreatedOpportunityId = $json_resutl['StatusDescription'];
        if ($CreatedOpportunityId == "Success") {

          $memcode = $json_resutl['Result'][0]['MemberCode'];
          $expirationTime = time() + (60 * 60 * 24 * 30 * 6);
          setcookie('validmemcode', $memcode, $expirationTime);




          // echo $response;
        }
      }

      echo  json_encode([
        'code' => 200,
        'lead' => $idcode,
        'lead1' => $response,
        'token' => $token,
        'passifo' => $passresponse,
        'userpass' => $passuser,
        'updatentry' => $jsonEncodedReturnArray,
        'returnArray' => $returnArray
      ]);
    } else {

      echo  json_encode(['code' => 400]);
    }
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberOutstanding/FunGetMemberOutstanding?Clubid=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA&MemberCode=' . urlencode($fullid) . '',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
      ),
    ));

    $balance = curl_exec($curl);

    curl_close($curl);
    setcookie('balance', $balance);
  } else if ($count === 4) {
    $fullid2 = $Clientid1 . "-" . $Clientid2 . " " . $Clientid3;
    $expirationTime3 = time() + (60 * 60 * 24 * 30 * 6);
    setcookie('fullid', $fullid, $expirationTime3);
    if ($Clientid2 !== "" || $Clientid2 !== null) {


      if ($uniqid == "logpass") {

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberDetails/FunGetMemberDetails?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid2) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
          ),
        ));

        $response = curl_exec($curl);
        $expirationTime2 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('response', $response, $expirationTime2);
        curl_close($curl);
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsDetailsForMemberCode/FunGetDetailsOfMemberCode?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid2) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2; ARRAffinitySameSite=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2'
          ),
        ));

        $memberdet = curl_exec($curl);
        $expirationTime1 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('memberdet', $memberdet, $expirationTime1);
        curl_close($curl);


        // $json_resutl = json_decode($response, true);
        // $CreatedOpportunityId = $json_resutl['Result'][0]['MemberCode'];
        // setcookie('jhjkjhjkjh', $CreatedOpportunityId);




        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsValidateMemberPassword/FunValidateMemberPassword?MemberCode=' . urlencode($fullid2) . '&Password=' . $Pass . '&ClubId=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f; ARRAffinitySameSite=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f'
          ),
        ));

        $passuser = curl_exec($curl);

        curl_close($curl);
        setcookie('responsenew', $passuser);


        $json_resutl = json_decode($passuser, true);
        $CreatedOpportunityId = $json_resutl['StatusDescription'];
        if ($CreatedOpportunityId == "Success") {

          $memcode = $json_resutl['Result'][0]['MemberCode'];
          $expirationTime = time() + (60 * 60 * 24 * 30 * 6);
          setcookie('validmemcode', $memcode, $expirationTime);




          // echo $response;
        }
      }



      echo  json_encode([
        'code' => 200,
        'lead' => $idcode,
        'lead1' => $response,
        'token' => $token,
        'passifo' => $passresponse,
        'userpass' => $passuser,
        'updatentry' => $jsonEncodedReturnArray,
        'returnArray' => $returnArray
      ]);
    } else {

      echo  json_encode(['code' => 400]);
    }
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberOutstanding/FunGetMemberOutstanding?Clubid=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA&MemberCode=' . urlencode($fullid) . '',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
      ),
    ));

    $balance = curl_exec($curl);

    curl_close($curl);
    setcookie('balance', $balance);
  } else if ($count === 5) {
    $fullid2 = $Clientid1 . "-" . $Clientid2 . "" . $Clientid3;
    $expirationTime3 = time() + (60 * 60 * 24 * 30 * 6);
    setcookie('fullid', $fullid, $expirationTime3);
    if ($Clientid2 !== "" || $Clientid2 !== null) {


      if ($uniqid == "logpass") {

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberDetails/FunGetMemberDetails?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid2) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
          ),
        ));

        $response = curl_exec($curl);
        $expirationTime2 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('response', $response, $expirationTime2);
        curl_close($curl);
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsDetailsForMemberCode/FunGetDetailsOfMemberCode?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid2) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2; ARRAffinitySameSite=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2'
          ),
        ));

        $memberdet = curl_exec($curl);
        $expirationTime1 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('memberdet', $memberdet, $expirationTime1);
        curl_close($curl);


        // $json_resutl = json_decode($response, true);
        // $CreatedOpportunityId = $json_resutl['Result'][0]['MemberCode'];
        // setcookie('jhjkjhjkjh', $CreatedOpportunityId);




        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsValidateMemberPassword/FunValidateMemberPassword?MemberCode=' . urlencode($fullid2) . '&Password=' . $Pass . '&ClubId=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f; ARRAffinitySameSite=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f'
          ),
        ));

        $passuser = curl_exec($curl);

        curl_close($curl);
        setcookie('responsenew', $passuser);


        $json_resutl = json_decode($passuser, true);
        $CreatedOpportunityId = $json_resutl['StatusDescription'];
        if ($CreatedOpportunityId == "Success") {

          $memcode = $json_resutl['Result'][0]['MemberCode'];
          $expirationTime = time() + (60 * 60 * 24 * 30 * 6);
          setcookie('validmemcode', $memcode, $expirationTime);




          // echo $response;
        }
      }

      echo  json_encode([
        'code' => 200,
        'lead' => $idcode,
        'lead1' => $response,
        'token' => $token,
        'passifo' => $passresponse,
        'userpass' => $passuser,
        'updatentry' => $jsonEncodedReturnArray,
        'returnArray' => $returnArray
      ]);
    } else {

      echo  json_encode(['code' => 400]);
    }
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberOutstanding/FunGetMemberOutstanding?Clubid=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA&MemberCode=' . urlencode($fullid) . '',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
      ),
    ));

    $balance = curl_exec($curl);

    curl_close($curl);
    setcookie('balance', $balance);
  }
} else if ($count1 === 3) {
  if ($count === 1) {
    $fullid = $Clientid1 . "-" . $Clientid2 . "   " . $Clientid3;
    $expirationTime3 = time() + (60 * 60 * 24 * 30 * 6);
    setcookie('fullid', $fullid, $expirationTime3);
    if ($Clientid2 !== "" || $Clientid2 !== null) {
      if ($uniqid == "logpass") {
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberDetails/FunGetMemberDetails?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
          ),
        ));
        $response = curl_exec($curl);
        $expirationTime2 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('response', $response, $expirationTime2);
        curl_close($curl);
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsDetailsForMemberCode/FunGetDetailsOfMemberCode?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2; ARRAffinitySameSite=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2'
          ),
        ));
        $memberdet = curl_exec($curl);
        $expirationTime1 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('memberdet', $memberdet, $expirationTime1);
        curl_close($curl);


        // $json_resutl = json_decode($response, true);
        // $CreatedOpportunityId = $json_resutl['Result'][0]['MemberCode'];
        // setcookie('jhjkjhjkjh', $CreatedOpportunityId);




        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsValidateMemberPassword/FunValidateMemberPassword?MemberCode=' . urlencode($fullid) . '&Password=' . $Pass . '&ClubId=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f; ARRAffinitySameSite=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f'
          ),
        ));

        $passuser = curl_exec($curl);

        curl_close($curl);
        setcookie('responsenew', $passuser);


        $json_resutl = json_decode($passuser, true);
        $CreatedOpportunityId = $json_resutl['StatusDescription'];
        if ($CreatedOpportunityId == "Success") {

          $memcode = $json_resutl['Result'][0]['MemberCode'];
          $expirationTime = time() + (60 * 60 * 24 * 30 * 6);
          setcookie('validmemcode', $memcode, $expirationTime);




          // echo $response;
        }
      }

      echo  json_encode([
        'code' => 200,
        'lead' => $idcode,
        'lead1' => $response,
        'token' => $token,
        'passifo' => $passresponse,
        'userpass' => $passuser,
        'updatentry' => $jsonEncodedReturnArray,
        'returnArray' => $returnArray
      ]);
    } else {

      echo  json_encode(['code' => 400]);
    }
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberOutstanding/FunGetMemberOutstanding?Clubid=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA&MemberCode=' . urlencode($fullid) . '',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
      ),
    ));

    $balance = curl_exec($curl);

    curl_close($curl);
    setcookie('balance', $balance);
  } else if ($count === 2) {
    $fullid1 = $Clientid1 . "-" . $Clientid2 . "  " . $Clientid3;
    $expirationTime3 = time() + (60 * 60 * 24 * 30 * 6);
    setcookie('fullid', $fullid, $expirationTime3);
    if ($Clientid2 !== "" || $Clientid2 !== null) {


      if ($uniqid == "logpass") {

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberDetails/FunGetMemberDetails?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid1) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
          ),
        ));

        $response = curl_exec($curl);
        $expirationTime2 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('response', $response, $expirationTime2);
        curl_close($curl);
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsDetailsForMemberCode/FunGetDetailsOfMemberCode?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid1) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2; ARRAffinitySameSite=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2'
          ),
        ));

        $memberdet = curl_exec($curl);
        $expirationTime1 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('memberdet', $memberdet, $expirationTime1);
        curl_close($curl);


        // $json_resutl = json_decode($response, true);
        // $CreatedOpportunityId = $json_resutl['Result'][0]['MemberCode'];
        // setcookie('jhjkjhjkjh', $CreatedOpportunityId);




        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsValidateMemberPassword/FunValidateMemberPassword?MemberCode=' . urlencode($fullid1) . '&Password=' . $Pass . '&ClubId=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f; ARRAffinitySameSite=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f'
          ),
        ));

        $passuser = curl_exec($curl);

        curl_close($curl);
        setcookie('responsenew', $passuser);


        $json_resutl = json_decode($passuser, true);
        $CreatedOpportunityId = $json_resutl['StatusDescription'];
        if ($CreatedOpportunityId == "Success") {

          $memcode = $json_resutl['Result'][0]['MemberCode'];
          $expirationTime = time() + (60 * 60 * 24 * 30 * 6);
          setcookie('validmemcode', $memcode, $expirationTime);




          // echo $response;
        }
      }

      echo  json_encode([
        'code' => 200,
        'lead' => $idcode,
        'lead1' => $response,
        'token' => $token,
        'passifo' => $passresponse,
        'userpass' => $passuser,
        'updatentry' => $jsonEncodedReturnArray,
        'returnArray' => $returnArray
      ]);
    } else {

      echo  json_encode(['code' => 400]);
    }
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberOutstanding/FunGetMemberOutstanding?Clubid=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA&MemberCode=' . urlencode($fullid) . '',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
      ),
    ));

    $balance = curl_exec($curl);

    curl_close($curl);
    setcookie('balance', $balance);
  } else if ($count === 3) {
    $fullid2 = $Clientid1 . "-" . $Clientid2 . " " . $Clientid3;
    $expirationTime3 = time() + (60 * 60 * 24 * 30 * 6);
    setcookie('fullid', $fullid, $expirationTime3);
    if ($Clientid2 !== "" || $Clientid2 !== null) {


      if ($uniqid == "logpass") {

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberDetails/FunGetMemberDetails?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid2) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
          ),
        ));

        $response = curl_exec($curl);
        $expirationTime2 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('response', $response, $expirationTime2);
        curl_close($curl);
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsDetailsForMemberCode/FunGetDetailsOfMemberCode?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid2) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2; ARRAffinitySameSite=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2'
          ),
        ));

        $memberdet = curl_exec($curl);
        $expirationTime1 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('memberdet', $memberdet, $expirationTime1);
        curl_close($curl);


        // $json_resutl = json_decode($response, true);
        // $CreatedOpportunityId = $json_resutl['Result'][0]['MemberCode'];
        // setcookie('jhjkjhjkjh', $CreatedOpportunityId);




        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsValidateMemberPassword/FunValidateMemberPassword?MemberCode=' . urlencode($fullid2) . '&Password=' . $Pass . '&ClubId=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f; ARRAffinitySameSite=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f'
          ),
        ));

        $passuser = curl_exec($curl);

        curl_close($curl);
        setcookie('responsenew', $passuser);


        $json_resutl = json_decode($passuser, true);
        $CreatedOpportunityId = $json_resutl['StatusDescription'];
        if ($CreatedOpportunityId == "Success") {

          $memcode = $json_resutl['Result'][0]['MemberCode'];
          $expirationTime = time() + (60 * 60 * 24 * 30 * 6);
          setcookie('validmemcode', $memcode, $expirationTime);




          // echo $response;
        }
      }

      echo  json_encode([
        'code' => 200,
        'lead' => $idcode,
        'lead1' => $response,
        'token' => $token,
        'passifo' => $passresponse,
        'userpass' => $passuser,
        'updatentry' => $jsonEncodedReturnArray,
        'returnArray' => $returnArray
      ]);
    } else {

      echo  json_encode(['code' => 400]);
    }
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberOutstanding/FunGetMemberOutstanding?Clubid=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA&MemberCode=' . urlencode($fullid) . '',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
      ),
    ));

    $balance = curl_exec($curl);

    curl_close($curl);
    setcookie('balance', $balance);
  } else if ($count === 4) {
    $fullid2 = $Clientid1 . "-" . $Clientid2 . "" . $Clientid3;
    $expirationTime3 = time() + (60 * 60 * 24 * 30 * 6);
    setcookie('fullid', $fullid, $expirationTime3);
    if ($Clientid2 !== "" || $Clientid2 !== null) {


      if ($uniqid == "logpass") {

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberDetails/FunGetMemberDetails?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid2) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
          ),
        ));

        $response = curl_exec($curl);
        $expirationTime2 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('response', $response, $expirationTime2);
        curl_close($curl);
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsDetailsForMemberCode/FunGetDetailsOfMemberCode?Clubid=13&ClientId=011.001&MemberCode=' . urlencode($fullid2) . '&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2; ARRAffinitySameSite=28a58897fe20c6a7941556b589ebbf116106accdac34039f1d8c320e15c233e2'
          ),
        ));

        $memberdet = curl_exec($curl);
        $expirationTime1 = time() + (60 * 60 * 24 * 30 * 6);
        setcookie('memberdet', $memberdet, $expirationTime1);
        curl_close($curl);


        // $json_resutl = json_decode($response, true);
        // $CreatedOpportunityId = $json_resutl['Result'][0]['MemberCode'];
        // setcookie('jhjkjhjkjh', $CreatedOpportunityId);




        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsValidateMemberPassword/FunValidateMemberPassword?MemberCode=' . urlencode($fullid2) . '&Password=' . $Pass . '&ClubId=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_HTTPHEADER => array(
            'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw==',
            'Cookie: ARRAffinity=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f; ARRAffinitySameSite=ccb63600a8a6b24ef0e14250129c0b823e31d623312224a23522e10515609e9f'
          ),
        ));

        $passuser = curl_exec($curl);

        curl_close($curl);
        setcookie('responsenew', $passuser);


        $json_resutl = json_decode($passuser, true);
        $CreatedOpportunityId = $json_resutl['StatusDescription'];
        if ($CreatedOpportunityId == "Success") {

          $memcode = $json_resutl['Result'][0]['MemberCode'];
          $expirationTime = time() + (60 * 60 * 24 * 30 * 6);
          setcookie('validmemcode', $memcode, $expirationTime);





          // echo $response;
        }
      }

      echo  json_encode([
        'code' => 200,
        'lead' => $idcode,
        'lead1' => $response,
        'token' => $token,
        'passifo' => $passresponse,
        'userpass' => $passuser,
        'updatentry' => $jsonEncodedReturnArray,
        'returnArray' => $returnArray
      ]);
    } else {

      echo  json_encode(['code' => 400]);
    }
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://fmprod.dishco.com/shawmanservices/api/CmsMemberOutstanding/FunGetMemberOutstanding?Clubid=13&SourceApp=CMSPTNR&PackageName=KNuZo8ezOGlukFAxkWftsKmZ70X%20fJ6SO5X3LuSbCarA&MemberCode=' . urlencode($fullid) . '',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'ShawManKey: xvIvkuxKczCf8sapHZv5ia9qzPEB9iPRvtLr4iJn4SzmMjfuWgVvSsXvyw=='
      ),
    ));

    $balance = curl_exec($curl);
    curl_close($curl);
    setcookie('balance', $balance);
  }
}
