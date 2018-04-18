<?php
$msg = "password";
$encrypt;

$len = strlen($msg);
//echo substr($msg, 0, 1);
//echo "   :   ";

//alphbet encoding
$a = "01100001";
$A = "01000001";
$b = "01100010";
$B = "01000010";
$c = "01100011";
$C = "01000011";
$d = "01100100";
$D = "01000100";
$e = "01100101";
$E = "01000101";
$f = "01100110";
$F = "01000110";
$g = "01100111";
$G = "01000111";
$h = "01101000";
$H = "01001000";
$i = "01101001";
$I = "01001001";
$j = "01101010";
$J = "01001010";
$k = "01101011";
$K = "01001011";
$l = "01101100";
$L = "01001100";
$m = "01101101";
$M = "01001101";
$n = "01101110";
$N = "01001110";
$o = "01101111";
$O = "01001111";
$p = "01110000";
$P = "01010000";
$q = "01110001";
$Q = "01010001";
$r = "01110010";
$R = "01010010";
$s = "01110011";
$S = "01010011";
$t = "01110100";
$T = "01010100";
$u = "01110101";
$U = "01010101";
$v = "01110110";
$V = "01010110";
$w = "01110111";
$W = "01010111";
$x = "01111000";
$X = "01011000";
$y = "01111001";
$Y = "01011001";
$z = "01111010";
$Z = "01011010";
//************

//$test;
//$test = $p . $a . $s . $s . $w . $o . $r . $d;
//echo $test;
//echo "<br>";

//Encode encryption string to binary
for ($int = 0; $int <= $len; $int++)
{
    if (substr($msg, $int, 1) == "A")
    {
      $encrypt = $encrypt . $A; 
    }
    if (substr($msg, $int, 1) == "a")
    {
      $encrypt = $encrypt . $a; 
    }
    if (substr($msg, $int, 1) == "B")
    {
      $encrypt = $encrypt . $B; 
    }
    if (substr($msg, $int, 1) == "b")
    {
      $encrypt = $encrypt . $b; 
    }
    if (substr($msg, $int, 1) == "C")
    {
      $encrypt = $encrypt . $C; 
    }
    if (substr($msg, $int, 1) == "c")
    {
      $encrypt = $encrypt . $c; 
    }
    if (substr($msg, $int, 1) == "D")
    {
      $encrypt = $encrypt . $D; 
    }
    if (substr($msg, $int, 1) == "d")
    {
      $encrypt = $encrypt . $d; 
    }
    if (substr($msg, $int, 1) == "E")
    {
      $encrypt = $encrypt . $E; 
    }
    if (substr($msg, $int, 1) == "e")
    {
      $encrypt = $encrypt . $e; 
    }
    if (substr($msg, $int, 1) == "F")
    {
      $encrypt = $encrypt . $F; 
    }
    if (substr($msg, $int, 1) == "f")
    {
      $encrypt = $encrypt . $f; 
    }
    if (substr($msg, $int, 1) == "G")
    {
      $encrypt = $encrypt . $G; 
    }
    if (substr($msg, $int, 1) == "g")
    {
      $encrypt = $encrypt . $g; 
    }
    if (substr($msg, $int, 1) == "H")
    {
      $encrypt = $encrypt . $H; 
    }
    if (substr($msg, $int, 1) == "h")
    {
      $encrypt = $encrypt . $h; 
    }
    if (substr($msg, $int, 1) == "I")
    {
      $encrypt = $encrypt . $I; 
    }
  if (substr($msg, $int, 1) == "i")
    {
      $encrypt = $encrypt . $i; 
    }
  if (substr($msg, $int, 1) == "J")
    {
      $encrypt = $encrypt . $J; 
    }
  if (substr($msg, $int, 1) == "j")
    {
      $encrypt = $encrypt . $j; 
    }
  if (substr($msg, $int, 1) == "K")
    {
      $encrypt = $encrypt . $K; 
    }
  if (substr($msg, $int, 1) == "k")
    {
      $encrypt = $encrypt . $k; 
    }
  if (substr($msg, $int, 1) == "L")
    {
      $encrypt = $encrypt . $L; 
    }
  if (substr($msg, $int, 1) == "l")
    {
      $encrypt = $encrypt . $l; 
    }
  if (substr($msg, $int, 1) == "M")
    {
      $encrypt = $encrypt . $M; 
    }
  if (substr($msg, $int, 1) == "m")
    {
      $encrypt = $encrypt . $m; 
    }
  if (substr($msg, $int, 1) == "N")
    {
      $encrypt = $encrypt . $N; 
    }
  if (substr($msg, $int, 1) == "n")
    {
      $encrypt = $encrypt . $n; 
    }
  if (substr($msg, $int, 1) == "O")
    {
      $encrypt = $encrypt . $O; 
    }
  if (substr($msg, $int, 1) == "o")
    {
      $encrypt = $encrypt . $o; 
    }
  if (substr($msg, $int, 1) == "P")
    {
      $encrypt = $encrypt . $P; 
    }
  if (substr($msg, $int, 1) == "p")
    {
      $encrypt = $encrypt . $p; 
    }
  if (substr($msg, $int, 1) == "Q")
    {
      $encrypt = $encrypt . $Q; 
    }
  if (substr($msg, $int, 1) == "q")
    {
      $encrypt = $encrypt . $q; 
    }
  if (substr($msg, $int, 1) == "R")
    {
      $encrypt = $encrypt . $R; 
    }
  if (substr($msg, $int, 1) == "r")
    {
      $encrypt = $encrypt . $r; 
    }
  if (substr($msg, $int, 1) == "S")
    {
      $encrypt = $encrypt . $S; 
    }
  if (substr($msg, $int, 1) == "s")
    {
      $encrypt = $encrypt . $s; 
    }
  if (substr($msg, $int, 1) == "T")
    {
      $encrypt = $encrypt . $T; 
    }
  if (substr($msg, $int, 1) == "t")
    {
      $encrypt = $encrypt . $t; 
    }
  if (substr($msg, $int, 1) == "U")
    {
      $encrypt = $encrypt . $U; 
    }
  if (substr($msg, $int, 1) == "u")
    {
      $encrypt = $encrypt . $u; 
    }
  if (substr($msg, $int, 1) == "V")
    {
      $encrypt = $encrypt . $V; 
    }
  if (substr($msg, $int, 1) == "v")
    {
      $encrypt = $encrypt . $v; 
    }
  if (substr($msg, $int, 1) == "W")
    {
      $encrypt = $encrypt . $W; 
    }
  if (substr($msg, $int, 1) == "w")
    {
      $encrypt = $encrypt . $w; 
    }
  if (substr($msg, $int, 1) == "X")
    {
      $encrypt = $encrypt . $X; 
    }
  if (substr($msg, $int, 1) == "x")
    {
      $encrypt = $encrypt . $x; 
    }
  if (substr($msg, $int, 1) == "Y")
    {
      $encrypt = $encrypt . $Y; 
    }
  if (substr($msg, $int, 1) == "y")
    {
      $encrypt = $encrypt . $y; 
    }
  if (substr($msg, $int, 1) == "Z")
    {
      $encrypt = $encrypt . $Z; 
    }
  if (substr($msg, $int, 1) == "z")
    {
      $encrypt = $encrypt . $z; 
    }  
       
} //end for loop
//echo $encrypt;

//string now encoded in binary
$encrypt = $encrypt . "1"; //append 1 bit
$numk = 488 - strlen($encrypt);
for ($int = 0; $int <= $numk; $int++)
{
  $encrypt = $encrypt . "0";
}
//echo $encrypt;

?>
