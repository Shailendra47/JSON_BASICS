<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>JSON</title>
</head>
<body>
    <!--Self_taught, source: w3schools.com, Thapa technical-->
    <!--To check valid JSON code-->
    <!-- <div class="container">
        <div class="row">
        <div class="col-lg-5"></div>
        <div class="col-lg-7 m-5 p-5 border border-secondary rounded bg-warning">
            <h1 class="text-center display-4">To validate JSON code</h1>
            <hr class="w-100">
            <a href="https://jsonlint.com/" class="btn btn-outline-light d-block">JSON_Lint</a><br>
        </div>        
    </div> -->
    <script>
        var json_object = {
            "firstName" : "Shailendra",
            "lastName" : "singh",
            "age" : 23,
            "comapany" : "smartData"
        }
        // document.write(json_object.firstName);
        //To modify data
        json_object.lastName = "deo";
        //To add a new key value
        json_object.middleName = "singh";
        //To delete data
        delete json_object.lastName;

        for(var showItems in json_object){
            //To Fetch data value
            document.write(showItems + ": ");
            //To Fetch data
            document.write(json_object[showItems] + "<br>");
        }
        document.write("<br>");
        //Array
        var json_obj = {
            array : ["Shailendra", "singh", "deo"]
       }
       document.write(json_obj.array);
       //Array object
       var array_object = {
            Fifa : [
                {
                    countryName : "Brazil",
                    bestPlayer : "Neymar"
                },
                {
                    countryName : "Portugal",
                    bestPlayer : "Ronaldo"
                },
                {
                    countryName : "Argentina",
                    bestPlayer : "Messi"
                }
            ]             
       }
       document.write("<br>");
       //document.write(array_object.Fifa[1].bestPlayer);
       for(var showCountry in array_object.Fifa){
            for(var showPlayer in array_object.Fifa[showCountry]){
                document.write(array_object.Fifa[showCountry][showPlayer] + "<br>");
            }
       }
       document.write("<br>");
       //Send data using JSON
       var send_data = {name : "Shailendra", surname : "singh"}
       var change_data = JSON.stringify(send_data);
       window.location = "send.php?values=" + change_data;
    </script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>  
</body>
</html>