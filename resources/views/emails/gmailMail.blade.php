<!DOCTYPE html>
<html>
<head>
    <title>ItsolutionStuff.com</title>
</head>
<body>

<div style="background-color:@if($mailData['type'] == 1) #00a1ff; @else #ff003b; @endif">
    <br>
    <div style="background-color: white; border: 1px black solid; padding: 2rem; margin: auto; margin-top: 2rem; margin-bottom: 2rem; max-width: 300px; border-radius: 1rem;">
        <h1>{{ $mailData['title'] }}</h1>
        <br>
        <p>{{ $mailData['body'] }}</p>
    </div>
    <br>
</div>

</body>
</html>