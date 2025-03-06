<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Language</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('Translate.ico') }}">

</head>
<body style="background-color: #c0cfff; padding-left: 20px;">

    <x-message-notification msg="You have selected a language. ✓" class="success"/>
    <x-message-notification msg="Error selecting language. Please try again. X" class="error"/>
    <x-message-notification msg="! Are you sure you want to change the language? " class="warning"/>

    <!-- Tutorial #12 Subview -->
    <div><h3 style="font-family:'Fira Code', sans-serif; font-weight: bold;">Tutorial #12 Subview & Tutorial #13 Components</h1></div>
    <div><h3 style="font-family:Arial;">Choose language.</h1></div>

    @include('page.sample',["nihongo"=>"Konichiwa!"],["hanguk"=>"Annyeonghaseyo!"])

</body>
</html>

<style>

.success {
    background-color: lightgreen;
    color: green;
    padding: 10px 30px;
    border-radius: 5px;
    position: fixed;
    top: 325px;
    left: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    opacity: 0;
    animation: fadeIn 1s forwards;
    cursor: pointer;
    font-family: 'Apercu', sans-serif;
}

.error {
    background-color: lightcoral;
    color: darkred;
    padding: 10px 30px;
    border-radius: 5px;
    position: fixed;
    top: 380px;
    left: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    opacity: 0;
    animation: fadeIn 1s forwards;
    cursor: pointer;
    font-family: 'Apercu', sans-serif;
}

.warning {
    background-color: lightgoldenrodyellow;
    color: darkgoldenrod;
    padding: 10px 30px;
    border-radius: 5px;
    position: fixed;
    top: 435px;
    left: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    opacity: 0;
    animation: fadeIn 1s forwards;
    cursor: pointer;
    font-family: 'Apercu', sans-serif;
}

/* Animation for fade-in effect */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(0); }
    to { opacity: 1; transform: translateX(20px); }
}

</style>