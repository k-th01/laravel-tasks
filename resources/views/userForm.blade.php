<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/userDesign.css') }}">

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="{{asset('AddUser.ico')}}">

    <title>Login Page</title>
    
</head>
<body>

  <!-- Logo -->
  <header> 
    <svg viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg" class="code"><path d="M416 31.94C416 21.75 408.1 0 384.1 0c-13.98 0-26.87 9.072-30.89 23.18l-128 448c-.8404 2.935-1.241 5.892-1.241 8.801C223.1 490.3 232 512 256 512c13.92 0 26.73-9.157 30.75-23.22l128-448C415.6 37.81 416 34.85 416 31.94zM176 143.1c0-18.28-14.95-32-32-32c-8.188 0-16.38 3.125-22.62 9.376l-112 112C3.125 239.6 0 247.8 0 255.1S3.125 272.4 9.375 278.6l112 112C127.6 396.9 135.8 399.1 144 399.1c17.05 0 32-13.73 32-32c0-8.188-3.125-16.38-9.375-22.63L77.25 255.1l89.38-89.38C172.9 160.3 176 152.2 176 143.1zM640 255.1c0-8.188-3.125-16.38-9.375-22.63l-112-112C512.4 115.1 504.2 111.1 496 111.1c-17.05 0-32 13.73-32 32c0 8.188 3.125 16.38 9.375 22.63l89.38 89.38l-89.38 89.38C467.1 351.6 464 359.8 464 367.1c0 18.28 14.95 32 32 32c8.188 0 16.38-3.125 22.62-9.376l112-112C636.9 272.4 640 264.2 640 255.1z"/></svg>
  </header>

  <!-- Social Media Icons -->
  <div class="icons">
    <a href="https://www.facebook.com/kthhh.30">
    <!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 56.693 56.693" height="56.693px" id="Layer_1" version="1.1" viewBox="0 0 56.693 56.693" width="56.693px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="fb"><path d="M40.43,21.739h-7.645v-5.014c0-1.883,1.248-2.322,2.127-2.322c0.877,0,5.395,0,5.395,0V6.125l-7.43-0.029  c-8.248,0-10.125,6.174-10.125,10.125v5.518h-4.77v8.53h4.77c0,10.947,0,24.137,0,24.137h10.033c0,0,0-13.32,0-24.137h6.77  L40.43,21.739z"/></svg>
    </a>
    
    <!-- Generator: Adobe Illustrator 21.0.2, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
    <a href="https://www.instagram.com/kthhh.30/">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 56.7 56.7" enable-background="new 0 0 56.7 56.7" xml:space="preserve" class="ig">
    <g>
      <path d="M28.2,16.7c-7,0-12.8,5.7-12.8,12.8s5.7,12.8,12.8,12.8S41,36.5,41,29.5S35.2,16.7,28.2,16.7z M28.2,37.7
        c-4.5,0-8.2-3.7-8.2-8.2s3.7-8.2,8.2-8.2s8.2,3.7,8.2,8.2S32.7,37.7,28.2,37.7z"/>
      <circle cx="41.5" cy="16.4" r="2.9"/>
      <path d="M49,8.9c-2.6-2.7-6.3-4.1-10.5-4.1H17.9c-8.7,0-14.5,5.8-14.5,14.5v20.5c0,4.3,1.4,8,4.2,10.7c2.7,2.6,6.3,3.9,10.4,3.9
        h20.4c4.3,0,7.9-1.4,10.5-3.9c2.7-2.6,4.1-6.3,4.1-10.6V19.3C53,15.1,51.6,11.5,49,8.9z M48.6,39.9c0,3.1-1.1,5.6-2.9,7.3
        s-4.3,2.6-7.3,2.6H18c-3,0-5.5-0.9-7.3-2.6C8.9,45.4,8,42.9,8,39.8V19.3c0-3,0.9-5.5,2.7-7.3c1.7-1.7,4.3-2.6,7.3-2.6h20.6
        c3,0,5.5,0.9,7.3,2.7c1.7,1.8,2.7,4.3,2.7,7.2V39.9L48.6,39.9z"/>
    </g>
    </svg>
    </a>
    
    <a href="https://www.linkedin.com/in/keth-palanog-b9900126b/">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);"><path d="M20 3H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM8.339 18.337H5.667v-8.59h2.672v8.59zM7.003 8.574a1.548 1.548 0 1 1 0-3.096 1.548 1.548 0 0 1 0 3.096zm11.335 9.763h-2.669V14.16c0-.996-.018-2.277-1.388-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248h-2.667v-8.59h2.56v1.174h.037c.355-.675 1.227-1.387 2.524-1.387 2.704 0 3.203 1.778 3.203 4.092v4.71z" class="link"></path></svg>
    </a>
    </div>

    <!-- Tutorial number -->
    <div class="rotated-text">Tutorial 14-18</div>

    <!-- Tutorial #16 Validation -->
     <div class="errors">
        @if($errors->any())
        @foreach($errors->all() as $error)
        <br>
        <div class="text-error">{{$error}}</div>
          @endforeach
          @endif
      </div>


  <div class="main">
    <!-- Main Container Center -->

    <div class="container" id="container-form">
      <!-- The {{ url('home/form/addUser') }} is from Tutorial #20 on Name Routes -->
      <form action="{{ url('home/form/addUser') }}" method="post"> 
        @csrf
        
        <!-- Form Header Text -->
        <div class="form-header">
          <header> Add a New User</header>
          <span>Fill out the form.</span>
        </div>

        <!-- Name Input Text Field -->
        <div class="nametf" id="txtfield">

          <!-- Name TextField -->
          <input type="text" class="input" placeholder="Username" name="username" >

          <!-- User Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #fff;"><path d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z">
            </path>
          </svg>

          <!-- <span style="color: #FF495C; margin-top:-20px;">@error('username'){{$message}}@enderror</span> -->

        </div>

        <!-- Email Input Text Field -->
        <div class="emailtf" id="txtfield">

          <!-- Email Addr TextField -->
          <input type="text" class="input" placeholder="Email Address" name="email" >

          <!-- Mail Icon -->
          <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="mail">
            <path d="M1.99788 1.8901L7.08758 5.84347L7.08928 5.84492C7.65442 6.2712 7.93717 6.48447 8.24685 6.56686C8.52057 6.63968 8.80831 6.63968 9.08203 6.56686C9.38386 6.48656 9.66067 6.28163 10.1977 5.87663C10.227 5.85458 10.2551 5.83291 10.2838 5.81024C10.6706 5.50524 13.6279 3.17486 15.3312 1.8901M1.16455 10.2903V3.77598C1.16455 2.81589 1.16455 2.33549 1.34621 1.96878C1.506 1.64622 1.76078 1.38416 2.07438 1.2198C2.4309 1.03296 2.89796 1.03296 3.83138 1.03296H13.498C14.4315 1.03296 14.8975 1.03296 15.254 1.2198C15.5677 1.38416 15.8233 1.64622 15.9831 1.96878C16.1646 2.33513 16.1646 2.81495 16.1646 3.77317V10.2932C16.1646 11.2514 16.1646 11.7305 15.9831 12.0969C15.8233 12.4194 15.5677 12.6819 15.254 12.8463C14.8979 13.033 14.4321 13.033 13.5005 13.033H3.82864C2.89705 13.033 2.43055 13.033 2.07438 12.8463C1.76078 12.6819 1.506 12.4194 1.34621 12.0969C1.16455 11.7302 1.16455 11.2504 1.16455 10.2903Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg> 

          <!-- Other method <span style="color: #FF495C; margin-top: -10px;">@error('email'){{$message}}@enderror</span> -->

        </div>

        <!-- City Input Text Field -->
        <div class="citytf" id="txtfield">

          <!-- City Name TextField -->
          <input type="text" class="input" placeholder="City" name="city" >

          <!-- City Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #fff;"><path d="M19 2H9c-1.103 0-2 .897-2 2v6H5c-1.103 0-2 .897-2 2v9a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4c0-1.103-.897-2-2-2zM5 12h6v8H5v-8zm14 8h-6v-8c0-1.103-.897-2-2-2H9V4h10v16z"></path><path d="M11 6h2v2h-2zm4 0h2v2h-2zm0 4.031h2V12h-2zM15 14h2v2h-2zm-8 .001h2v2H7z">
            </path>
          </svg>


          
        </div>

        <!-- Styled Age Selector -->
      <div class="select-container">
        <select name="age" id="age" class="styled-select" >
          <option value="" selected disabled>Select your Age</option>
            <?php for ($i = 18; $i <= 100; $i++) : ?>
              <option value="<?= $i; ?>"><?= $i; ?> years old</option>
            <?php endfor; ?>
          </select>
      </div>

      
      <!-- Gender Selector -->
      <div class="genders">

          <label>
            <input type="radio" name="gender" value="Male" > Male
          </label>
  
          <label>
            <input type="radio" name="gender" value="Female" > Female
          </label>
          <label>
            <input type="radio" name="gender" value="other" > Other
          </label>

      </div>
        

        <!-- Skills checkboxes-->
          <div class="checkbox-container">
            <span>Skills:  
            <input type="checkbox" name="skills[]" value="Java" id="java" class="ui-checkbox" >
            <label for="java">Java</label>

            <input type="checkbox" name="skills[]" value="Python" id="py" class="ui-checkbox">
            <label for="py">Python</label>

            <input type="checkbox" name="skills[]" value="PHP" id="php" class="ui-checkbox">
            <label for="php">PHP</label>
            </span>

          </div>

        <!-- Submit Button -->
        <button type="submit" class="submit-btn">Add New User</button>
      </form>

    </div>
  </div>
  
  <script src="{{ asset('js/userFunction.js') }}"></script>

</body>
</html>