<?php
function calculateGrade($cgpa){
 if($cgpa>=9) return ["Excellent","success"];
 elseif($cgpa>=8) return ["Very Good","primary"];
 elseif($cgpa>=7) return ["Good","warning"];
 return ["Keep Improving","danger"];
}
function greeting(){
 $h=date('H');
 if($h<12) return "Good Morning";
 if($h<17) return "Good Afternoon";
 return "Good Evening";
}
?>