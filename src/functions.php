<?php

namespace Ttool;

function _uniqid(){
   return md5(uniqid(microtime(true),true));
}
