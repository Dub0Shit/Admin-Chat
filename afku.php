<? 
$tmp=file('afk.txt'); 
$newtmp=array_reverse($tmp); 

foreach ($newtmp as $value) 
{ 
echo $value; 
} 
?> 