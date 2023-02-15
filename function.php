<?php 
/* modifica per github */

function addizione (m1,m2) {
	return m1 + m2;
  }

 function sottrazione (m1,m2) {
	return m1 - m2;
  }

 function moltiplicazione (m1,m2) {
	return m1 * m2;
  }

 function divisone (m1,m2) {
	if (m2 !== 0) {
	   return m1 / m2;
	}else {
	   return "Error";
	}
  }
?>