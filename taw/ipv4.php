<?php
function ipv4_address($address)
{
  if(filter_var($address, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) != false)
  {
    return true;
  } else {
    return false;
  }
}
?>
