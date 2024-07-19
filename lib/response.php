<?php
  function respond($res, $func, $file)
  {
      if ($res==NULL||$res[0] == "00000") {
          encodeMessage("Successful", true);
          isset($func)?$func($file):"";
      } else {
          encodeMessage($res[2], false);
      }
  }

  function encodeMessage($message, $error)
  {
      echo json_encode(["error" => $error, "msg" => $message]);
  }

  function encodeMessageWithType($message, $error, $type)
  {
      echo json_encode(["error" => $error, "msg" => $message,"level"=>$type]);
  }
