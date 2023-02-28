<?php
function giaiThua($n) {
  if($n == 1) return $n;
  return $n * giaiThua($n - 1);
}
echo giaiThua(5);