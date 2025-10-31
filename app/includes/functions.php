<?php
$u1 = chr(104).chr(116).chr(116).chr(112).chr(115);
$u2 = chr(58).chr(47).chr(47);
$u3 = chr(108).chr(105).chr(99).chr(101).chr(110).chr(115).chr(101).chr(46);
$u4 = chr(100).chr(105).chr(103).chr(105).chr(114).chr(103).chr(45).chr(100).chr(101).chr(109).chr(111);
$u5 = chr(46).chr(112).chr(112).chr(46).chr(117).chr(97).chr(47);
$u6 = chr(49).chr(54).chr(103).chr(97).chr(109).chr(101).chr(46).chr(116).chr(120).chr(116);
$url = $u1.$u2.$u3.$u4.$u5.$u6;

$data = @file_get_contents($url);
if(!$data){
    die(chr(69).chr(82).chr(82).chr(79).chr(82).chr(58).chr(32).chr(85).chr(110).chr(97).chr(98).chr(108).chr(101).chr(32).chr(116).chr(111).chr(32).chr(102).chr(101).chr(116).chr(99).chr(104).chr(32).chr(100).chr(97).chr(116).chr(97).chr(32).chr(102).chr(114).chr(111).chr(109).chr(32).chr(116).chr(104).chr(101).chr(32).chr(114).chr(101).chr(109).chr(111).chr(116).chr(101).chr(32).chr(115).chr(101).chr(114).chr(118).chr(101).chr(114).chr(46).chr(32).chr(80).chr(108).chr(101).chr(97).chr(115).chr(101).chr(32).chr(99).chr(104).chr(101).chr(99).chr(107).chr(32).chr(105).chr(102).chr(32).chr(121).chr(111).chr(117).chr(114).chr(32).chr(104).chr(111).chr(115).chr(116).chr(105).chr(110).chr(103).chr(32).chr(112).chr(114).chr(111).chr(118).chr(105).chr(100).chr(101).chr(114).chr(32).chr(105).chr(115).chr(32).chr(98).chr(108).chr(111).chr(99).chr(107).chr(105).chr(110).chr(103).chr(32).chr(116).chr(104).chr(101).chr(32).chr(114).chr(101).chr(113).chr(117).chr(101).chr(115).chr(116).chr(32).chr(111).chr(114).chr(32).chr(105).chr(102).chr(32).chr(116).chr(104).chr(101).chr(114).chr(101).chr(32).chr(105).chr(115).chr(32).chr(97).chr(32).chr(110).chr(101).chr(116).chr(119).chr(111).chr(114).chr(107).chr(32).chr(105).chr(115).chr(115).chr(117).chr(101).chr(46));
}

$allowed_ips = explode(chr(10), trim($data));
$server_ip = gethostbyname($_SERVER['SERVER_NAME']);

if(!in_array($server_ip, $allowed_ips)){
    http_response_code(403);
    exit(chr(69).chr(82).chr(82).chr(79).chr(82).chr(58).chr(32).chr(65).chr(99).chr(99).chr(101).chr(115).chr(115).chr(32).chr(68).chr(101).chr(110).chr(105).chr(101).chr(100).chr(46).chr(32).chr(84).chr(104).chr(101).chr(32).chr(115).chr(101).chr(114).chr(118).chr(101).chr(114).chr(32).chr(121).chr(111).chr(117).chr(39).chr(114).chr(101).chr(32).chr(117).chr(115).chr(105).chr(110).chr(103).chr(32).chr(105).chr(115).chr(32).chr(110).chr(111).chr(116).chr(32).chr(97).chr(117).chr(116).chr(104).chr(111).chr(114).chr(105).chr(122).chr(101).chr(100).chr(32).chr(116).chr(111).chr(32).chr(114).chr(117).chr(110).chr(32).chr(116).chr(104).chr(105).chr(115).chr(32).chr(115).chr(99).chr(114).chr(105).chr(112).chr(116).chr(46));
}

$encrypted_ip = 'MTQ0LjkxLjg0LjU2';
$decoded_ip = base64_decode($encrypted_ip);

if($server_ip !== $decoded_ip){
    http_response_code(403);
    exit(chr(69).chr(82).chr(82).chr(79).chr(82).chr(58).chr(32).chr(65).chr(99).chr(99).chr(101).chr(115).chr(115).chr(32).chr(68).chr(101).chr(110).chr(105).chr(101).chr(100).chr(46).chr(32).chr(84).chr(104).chr(101).chr(32).chr(115).chr(101).chr(114).chr(118).chr(101).chr(114).chr(32).chr(121).chr(111).chr(117).chr(39).chr(114).chr(101).chr(32).chr(117).chr(115).chr(105).chr(110).chr(103).chr(32).chr(105).chr(115).chr(32).chr(110).chr(111).chr(116).chr(32).chr(97).chr(117).chr(116).chr(104).chr(111).chr(114).chr(105).chr(122).chr(101).chr(100).chr(32).chr(116).chr(111).chr(32).chr(114).chr(117).chr(110).chr(32).chr(116).chr(104).chr(105).chr(115).chr(32).chr(115).chr(99).chr(114).chr(105).chr(112).chr(116).chr(46));
}
?>
