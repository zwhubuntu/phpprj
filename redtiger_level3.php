<?php

	function encrypt($str)
    {
        $cryptedstr = "";
        for ($i =0; $i < strlen($str); $i++)
        {
            $temp = ord(substr($str,$i,1)) ^ 192;

            while(strlen($temp)<3)
            {
                $temp = "0".$temp;
            }
            $cryptedstr .= $temp. "";
        }
        return base64_encode($cryptedstr);
    }

	function decrypt ($str)
    {
        if(preg_match('%^[a-zA-Z0-9/+]*={0,2}$%',$str))
        {
            $str = base64_decode($str);
            if ($str != "" && $str != null && $str != false)
            {
                $decStr = "";
                for ($i=0; $i < strlen($str); $i+=3)
                {
                    $array[$i/3] = substr($str,$i,3);
                }

                foreach($array as $s)
                {
                    $a = $s^192;
                    $decStr .= chr($a);
                }

                return $decStr;
            }
            return false;
        }
        return false;
    }
$str='MjMxMjI0MTgxMTc0MTY5MTc1MTc0MjI0MTc5MTY1MTcyMTY1MTYzMTgwMjI0MjQxMjM2MTgxMTc5MTY1MTc4MTc0MTYxMTczMTY1MjM2MjQzMjM2MjQ0MjM2MjQ1MjM2MTc2MTYxMTc5MTc5MTgzMTc1MTc4MTY0MjM2MjQ3MjI0MTY2MTc4MTc1MTczMjI0MTcyMTY1MTgyMTY1MTcyMjQzMTU5MTgxMTc5MTY1MTc4MTc5MjI0MTgzMTY4MTY1MTc4MTY1MjI0MTgxMTc5MTY1MTc4MTc0MTYxMTczMTY1MjUzMjMxMTI5MTY0MTczMTY5MTc0MjI0';
echo decrypt ($str);
?>
