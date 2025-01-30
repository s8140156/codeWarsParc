<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<!-- #76 <javascript> Is it even -->
 <!-- In this Kata we are passing a number (n) into a function.
Your code will determine if the number passed is even (or not).
The function needs to return either a true or false.
Numbers may be positive or negative, integers or floats.
Floats with decimal part non equal to zero are considered UNeven for this kata. -->

    <script>
        // function testEven(n) {
        //     //Your awesome code here!
        //     if (!Number.isInteger(n)) {
        //         return false;
        //     }
        //     return n % 2 === 0;
        // }

        // 網友寫法
        function testEven(n) {
            return n % 2 === 0 ? true : false;
        }

        // console.log(testEven(4));
        // console.log(testEven(3));
        // console.log(testEven(-2));
        console.log(testEven(-2.5));
    </script>
</body>

</html>