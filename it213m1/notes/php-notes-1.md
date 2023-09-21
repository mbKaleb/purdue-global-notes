# php-notes-1

## 
```

```

## connect to php server 
```
if ( !( $database = mysql_connect( "localhost",
              "iw3htp", "password" ) ) )
               die( "Could not connect to database </body></html>" );
```

## write to cookies 
```
setcookie( "name", $_POST["name"], time() + FIVE_DAYS );
```

## regular expressions

```
preg_match("/^Now/", $search)
// returns boolean if patern is matched
```


## example note

```
function 
```


## Conditionlas


### IF 
<?php
$grade - 70;

if ($grade < 70>)
{
    echo("I am sorry, you failed!);
}
else if ($grade < 80> 
{

})
else {
    ehco("you passed!)
}
echo("<br>The End")
?>

### Switch condition

<?php 
switch ($response) {
    case 1: 
        echo "i equals 1";
        break;
    case 2: 
        echo "i equals 2";
        break;
    default:
        echo "idk what i equals";
}
?>





1   <!DOCTYPE html>
 2
 3   <!-- Fig. 7.7: average.html -->
 4   <!-- Counter-controlled repetition to calculate a class average. -->
 5   <html>
 6      <head>
 7         <meta charset = "utf-8">
 8         <title>Class Average Program</title>
 9         <script>
10
11            var total; // sum of grades
12            var gradeCounter; // number of grades entered
13            var grade; // grade typed by user (as a string)
14            var gradeValue; // grade value (converted to integer)
15            var average; // average of all grades
16
17            // initialization phase
18            total = 0; // clear total
19            gradeCounter = 1; // prepare to loop
20
21            // processing phase
22            while ( gradeCounter <= 10 ) // loop 10 times
23            {
24
25               // prompt for input and read grade from user
26               grade = window.prompt("Enter integer grade:", "0" );
27
28               // convert grade from a string to an integer
29               gradeValue = parseInt( grade );
30
31               // add gradeValue to total
32               total = total + gradeValue;
33
34               // add 1 to gradeCounter
35               gradeCounter = gradeCounter + 1;
36            } // end while
37
38            // termination phase
39            average = total / 10;   // calculate the average
40
41            // display average of exam grades
42            document.writeln(
43               "<h1>Class average is " + average + "</h1>" );
44
45         </script>
46      </head><body></body>
47   </html>
